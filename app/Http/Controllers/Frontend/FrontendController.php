<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Jobs\SendContactMail;
use App\Mail\ContactUs;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    protected $query;

    public function __construct()
    {
       $this->query = Post::with('tags','users','category1')->where('status',1)->where('is_approved',1);
    }


    public function index(){
        $posts = $this->query->latest()->get();
        $slider_posts = $this->query->inRandomOrder()->take('6')->get();
        return view('Frontend.modules.index',compact('posts','slider_posts'));
    }

    public function singlePost(Request $request,Post $single_post_id){
        return view('Frontend.modules.singlePost',compact('single_post_id'));
    }

    public function singlePostCategory($single_post_id){
        $sub_category_item = Post::with('tags','category1','users')->where('category',$single_post_id)->paginate('2');
        return view('Frontend.modules.singlePostCategory',compact('sub_category_item'));
    }

    public function singlePostSubCategory($single_post_id){
        $sub_category_item = Post::with('tags','sub_category1','users')->where('sub_category',$single_post_id)->paginate('2');
        return view('Frontend.modules.singlePostCategory',compact('sub_category_item'));
    }

    public function singlePostTag($single_post_id){
        $sub_category_item  = Tag::with('posts')->where('id',$single_post_id)->get();
        $tag_of_post_id = DB::table('post_tag')->where('tag_id',$single_post_id)->pluck('post_id');
        $looped_tag = [];
        foreach($sub_category_item as $items){
          foreach($items->posts as $item){
            $tag_of_post_id2 = DB::table('post_tag')->where('post_id',$item->id)->pluck('tag_id');
            $tag = DB::table('tags')->select('name')->whereIn('id',$tag_of_post_id2)->get();
            array_push($looped_tag,$tag);
          }
        }
         return view('Frontend.modules.singlePostCategory',compact('sub_category_item','looped_tag'));


    }

    public function viewAllPost(){
        $posts = $this->query
        ->paginate('2');
        return view('Frontend.modules.viewAllPost',compact('posts'));
    }

    public function postSearch(Request $request){
        $posts = $this->query
        ->where('title','like','%'.$request->search.'%')
        ->paginate('2');
        return view('Frontend.modules.viewAllPost',compact('posts'));
    }

    public function contactUs(){
        return view('Frontend.modules.contactUs');
    }

    public function addContactMsg(Request $request,Contact $contact){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'number'=>'required|numeric',
            'subject'=>'required',
            'message'=>'required'
        ]);

        $msg_store = $contact->create($request->all());
        SendContactMail::dispatch($msg_store->toArray());

        return redirect()->route('contactUs');


    }

    public function postComment(Request $request){
      dd($request->all());
    }
}
