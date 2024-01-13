<?php

namespace App\Http\Controllers\Backend;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class BackendOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = Offer::all();
        return view('admin.offers.index',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.offers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'offer' => 'required',
            'image' => 'required|image|max:2048',
        ]);

        $offer = new Offer();
        $offer->offer = $validatedData['offer'];
        $image=$request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('offers',$imagename);
        $offer->image = $imagename;

        $offer->save();

        toastr()->success('Offer Added Successfully','Success');
        return redirect()->route('admin.offers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $offer = Offer::findOrFail($id);
        return view('admin.offers.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'offer' => 'required',
            'image' => 'image|max:2048',
        ]);

        $offer = Offer::findOrFail($id);
        $offer->offer = $validatedData['offer'];
        if($request->image){
            $image_path = 'offers/'.$offer->image;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            $image=$request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('offers',$imagename);
            $offer->image = $imagename;
        }
        $offer->save();

        toastr()->success('Offer Updated Successfully','Success');
        return redirect()->route('admin.offers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $offer = Offer::findOrFail($id);
        $image_path = 'offers/'.$offer->image;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $offer->delete();
        toastr()->success('Offer Deleted Successfully','Success');
        return redirect()->route('admin.offers.index');
    }
}
