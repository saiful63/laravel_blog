<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PhotoUploadController;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('category1','sub_category1','users','tags')->latest()->paginate('8');

        return view('Backend.modules.post.index',compact('posts'));
    }

    public function create(){
        $categories = Category::where('status',1)->pluck('name','id');
        $tags_data = Tag::where('status',1)->select('id','name')->get();
        return view('Backend.modules.post.create',compact('categories','tags_data'));
    }

    public function store(PostCreateRequest $request){

       $post_data = $request->except(['photo','tag','slug']);
       $post_data['slug'] = Str::slug($request->input('slug'));
       $post_data['user_id'] = Auth::user()->id;
       $post_data['is_approved'] = 1;

       if($request->hasFile('photo')){
           $file = $request->file('photo');
           $name = Str::slug($request->input('slug'));
           $height = 400;
           $width = 1000;
           $thumb_height = 150;
           $thumb_width = 300;
           $path = 'image/post/original/';
           $thumb_path = 'image/post/thumb/';

           $post_data['photo']=PhotoUploadController::photoUpload($file,$name,$height,$width,$path);
       }

       $post= Post::create($post_data);
       $post->tags()->attach($request->tag);

       session()->flash('cls', 'success');
       session()->flash('msg', 'Post Created');

       return redirect()->route('post.index');
    }

    public function show(Post $post){
       $post->load(['tags','category1','sub_category1','users']);
       return view('Backend.modules.post.show',compact('post'));
    }


    public function tagDataForEdit($jsonParameter,Post $post){
        //return $post;
       $data = urldecode($jsonParameter);
       $jsonArray = json_decode($data);

       $categories = Category::where('status',1)->pluck('name','id');
       $tags_data = Tag::where('status',1)->select('id','name')->get();

       return view('Backend.modules.post.edit',compact('jsonArray','post','categories','tags_data'));

    }


    public function update(Post $post,PostUpdateRequest $request){

       $post_data = $request->except(['photo','tag','slug']);
       $post_data['slug'] = Str::slug($request->input('slug'));
       $post_data['user_id'] = Auth::user()->id;
       $post_data['is_approved'] = 1;

       if($request->hasFile('photo')){
           $file = $request->file('photo');
           $name = Str::slug($request->input('slug'));
           $height = 400;
           $width = 1000;
           $thumb_height = 150;
           $thumb_width = 300;
           $path = 'image/post/original/';
           $thumb_path = 'image/post/thumb/';
           PhotoUploadController::unlinkPhoto($name,$path);
           $post_data['photo']=PhotoUploadController::photoUpload($file,$name,$height,$width,$path);
       }

       $post->update($post_data);
       $post->tags()->sync($request->tag);

       session()->flash('cls', 'success');
       session()->flash('msg', 'Post Updated');

       return redirect()->route('post.index');
    }

    public function destroy(Post $post){
      $post->delete();

      session()->flash('cls', 'error');
      session()->flash('msg', 'Post Deleted');

      return redirect()->route('post.index');
    }
}
