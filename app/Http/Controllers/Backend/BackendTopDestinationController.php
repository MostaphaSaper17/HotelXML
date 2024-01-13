<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\TopDestination;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class BackendTopDestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = TopDestination::all();
        return view('admin.top-destination.index',compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.top-destination.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'continent' => 'required',
            'city' => 'required|max:190',
            'name' => 'required|max:190',
            'image' => 'required|image|max:2048', // Assuming you want to store image files
        ]);

        $destination = new TopDestination();
        $destination->continent = $validatedData['continent'];
        $destination->city = $validatedData['city'];
        $destination->name = $validatedData['name'];
        $image=$request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('top-destination',$imagename);
        $destination->image = $imagename;

        $destination->save();

        toastr()->success('Destination Added Successfully','Success');
        return redirect()->route('admin.top-destination.index');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $destination = TopDestination::findOrFail($id);
        return view('admin.top-destination.show',compact('destination'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $destination = TopDestination::findOrFail($id);
        return view('admin.top-destination.edit',compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'continent' => 'required',
            'city' => 'required|max:190',
            'name' => 'required|max:190',
            'image' => 'image|max:2048', // Assuming you want to store image files
        ]);

        $destination = TopDestination::findOrFail($id);
        $destination->continent = $validatedData['continent'];
        $destination->city = $validatedData['city'];
        $destination->name = $validatedData['name'];
        if($request->image){
            $image_path = 'top-destination/'.$destination->image;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            $image=$request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('top-destination',$imagename);
            $destination->image = $imagename;
        }
        $destination->save();

        toastr()->success('Destination Updated Successfully','Success');
        return redirect()->route('admin.top-destination.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $destination = TopDestination::findOrFail($id);
        $image_path = 'top-destination/'.$destination->image;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $destination->delete();
        toastr()->success('Destination Deleted Successfully','Success');
        return redirect()->route('admin.top-destination.index');
    }
}
