<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\user\post;
use App\Http\Controllers\Controller;
use App\Model\user\category;
use App\Model\user\tag;

class PostController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::all();
        return view('admin.post.show', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // views($post)->record();
        $tags = tag::all();
        $categories = category::all();

        return view('admin.post.post', compact('tags', 'categories'));
        // return view('admin.post.post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // $request->image->getClientOriginalName();
            $imageName = $request->image->store('public/image');
        }
        // if ($request->hasFile('image')) {
        //     // $request->image->getClientOriginalName();

        //     //Get Filename with extension
        //     $filenameWithExt = $request->file('image')->getClientOriginalImage();
        //     //Get FileName
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     //Get Ext
        //     $extension = $request->file('image')->getClientOriginalExtension();
        //     //File Name to store
        //     $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        //     //Upload Image
        //     $imageName = $request->image->store('public/image', $fileNameToStore);
        // }


        $post = new post;
        $post->image = $imageName;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);

        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        // views($post)->record();

        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::with('tags', 'categories')->where('id', $id)->first();
        $tags = tag::all();
        $categories = category::all();
        return view('admin.post.edit', compact('tags', 'categories', 'post'));
        // return view('admin.post.edit', compact('post'));
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
        // return $request->all();
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1999'
        ]);

        if ($request->hasFile('image')) {
            // $request->image->getClientOriginalName();
            $imageName = $request->image->store('public/image');
        }

        // if ($request->hasFile('image')) {
        //     // $request->image->getClientOriginalName();

        //     //Get Filename with extension
        //     $filenameWithExt = $request->file('image')->getClientOriginalName();
        //     //Get FileName
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     //Get Ext
        //     $extension = $request->file('image')->getClientOriginalExtension();
        //     //File Name to store
        //     $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        //     //Upload Image
        //     $imageName = $request->image->store('public/image', $fileNameToStore);
        // } else { }

        $post = post::find($id);
        $post->image = $imageName;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        $post->save();

        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id', $id)->delete();
        return redirect()->back();

        // return $id;
    }
}
