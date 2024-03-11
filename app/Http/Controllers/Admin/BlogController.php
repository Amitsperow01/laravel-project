<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog=Blog::all();
        return view('admin.blog.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        // dd($data);
        // Blog::create($data);
        $blogs = Blog::create($data);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $blogs->addMediaFromRequest('image')->toMediaCollection('image');
        }
        return redirect()->route('blog.index')->withSuccess("Data added successfully/...");
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=Blog::find($id);
        return view('admin.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$request->all();
        $data = $request->except('_token','_method');
        // Blog::where('id',$id)->update($data);
        $blogData = Blog::findOrFail($id);
        $blogData->update($data);
        if ($request->hasFile('image')) {
            $blogData->clearMediaCollection('image');
            $blogData->addMedia($request->file('image'))->toMediaCollection('image');
        }
        return redirect()->route('blog.index')->withSuccess('Data Updated..');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = Blog::findOrFail($id);
        $blogs->delete();
        $blogs->getFirstMediaUrl($id);
        // Blog::where('id', $id)->delete();
        return redirect()->route('blog.index')->withSuccess('Data Deleted...');
    }
    
}
