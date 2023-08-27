<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::orderBy('order_by')->get();
        return view('Backend.modules.category.index',compact('categories'));
    }

    public function create(){
        return view('Backend.modules.category.create');
    }

    public function store(Request $request,Category $category){
        $data = $request->all();
        $request->slug= Str::slug($request->input('slug'));

        $this->validate($request,[
         'name'=>['required','min:3','max:255'],
         'slug'=>['required','min:3','max:255','unique:categories'],
         'order_by'=>['required','numeric'],
         'status'=>['required','numeric']
        ]);

        $category::create([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'order_by'=>$request->order_by,
            'status'=>$request->status
        ]);

        session()->flash('cls', 'success');
        session()->flash('msg', 'Category Added');

        return redirect()->route('category.index');


    }

    public function show(Category $category){
       return view('Backend.modules.category.show',compact('category'));
    }

    public function edit(Category $category){
       return view('Backend.modules.category.edit',compact('category'));
    }

     public function update(Request $request,Category $category){
        $data = $request->all();
        $request->slug= Str::slug($request->input('slug'));

        $this->validate($request,[
         'name'=>['required','min:3','max:255'],
         'slug'=>['required','min:3','max:255','unique:categories,slug,'.$category->id],
         'order_by'=>['required','numeric'],
         'status'=>['required','numeric']
        ]);

        $category->update([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'order_by'=>$request->order_by,
            'status'=>$request->status
        ]);

        session()->flash('cls', 'success');
        session()->flash('msg', 'Category Updated');

        return redirect()->route('category.index');


    }

    public function destroy(Category $category){
      $category->delete();

      session()->flash('cls', 'error');
      session()->flash('msg', 'Category Deleted');

      return redirect()->route('category.index');
    }


}
