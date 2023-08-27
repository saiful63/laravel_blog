<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $category_data = Category::where('status',1)->with('sub_category')->latest()->get();
        $tags = Tag::select('id','name')->where('status',1)->get();
        View::share(['category_data'=>$category_data,'tags'=>$tags]);
    }
}
