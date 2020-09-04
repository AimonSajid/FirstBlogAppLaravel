<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Storage;

class BlogsController extends Controller
{
    //

    public function index(){

    	$blogs = Blog::all();

    	return view('blogs.index',['blogs'=> $blogs]);
    }

    public function show($id){

    	$blog = Blog::find($id);

    	return view('blogs.show',['blog'=> $blog]);
    }
    public function edit($id){

    	$blog = Blog::find($id);

    	return view('blogs.edit',['blog'=> $blog]);
    }
    public function update(Request $request,$id){

    	$blog = Blog::find($id);
    	$blog->title = $request->title;
    	$blog->content = $request->content;

    	$blog->update();

    	return redirect()->route('blog_path',['id'=> $blog->id]);
    }
    public function delete($id){

    	$blog = Blog::find($id);

    	$blog->delete();

    	return redirect()->route('blogs_path');
    }
    public function create(){

    	return view('blogs.create');
    }

    

    public function store(Request $request){

        function is_image($path)
    {

        $extension = pathinfo($path, PATHINFO_EXTENSION);
    //$a = $path['extension'];
    $image_type = $extension;
    
    if(in_array($image_type , array('gif' , 'jpeg' ,'jpg' , 'bmp', 'png')))
    {
        return true;
    }
    return false;
    }

    	$blog = new Blog;
    	$blog->title = $request->title;
        if($request->content == ''){
             return view('blogs.create',['msg' => "Please add some content to your blog"]);
        }
    	$blog->content = $request->content;

    	$path = Storage::putFile('public', $request->file('images'));

    	$url = Storage::url($path); 
        if(!is_image($url)){
            return view('blogs.create',['msg' => 'Invalid file type!']);
        }
    	$blog->image = $url;

    	$blog->save();

		return redirect()->route('blogs_path');
    }
}
