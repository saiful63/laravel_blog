<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();
        
        $category_data = Category::where('status',1)->with('sub_category')->latest()->get();
        $tags = Tag::select('id','name')->where('status',1)->get();
        $recent_posts = Post::select('id','title','created_at')->where('status',1)->where('is_approved',1)->latest()->get();
        View::share(['category_data'=>$category_data,'tags'=>$tags,'recent_posts'=>$recent_posts]);
    }
}
