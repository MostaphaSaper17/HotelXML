<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class BackendBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'blog' => 'required',
            'image' => 'required|image|max:2048',
        ]);

        $blog = new Blog();
        $blog->title = $validatedData['title'];
        $blog->blog = $validatedData['blog'];
        $image=$request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('blog',$imagename);
        $blog->image = $imagename;

        $blog->save();

        toastr()->success('blog Added Successfully','Success');
        return redirect()->route('admin.blogs.index');
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
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'blog' => 'required',
            'image' => 'image|max:2048',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->title = $validatedData['title'];
        $blog->blog = $validatedData['blog'];
        if($request->image){
            $image_path = 'blog/'.$blog->image;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            $image=$request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('blog',$imagename);
            $blog->image = $imagename;
        }
        $blog->save();

        toastr()->success('Blog Updated Successfully','Success');
        return redirect()->route('admin.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $image_path = 'blog/'.$blog->image;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $blog->delete();
        toastr()->success('Blog Deleted Successfully','Success');
        return redirect()->route('admin.blogs.index');
    }
}
