<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    public function index(){
        $sub_categories = SubCategory::with('category')->orderBy('order_by')->get();
        return view('Backend.modules.sub-category.index',compact('sub_categories'));
    }

    public function create(){
        $category_id = null;
        $categories = Category::pluck('name','id');
        return view('Backend.modules.sub-category.create',compact('categories','category_id'));
    }


    public function store(Request $request,SubCategory $sub_category){

        $request->slug= Str::slug($request->input('slug'));

        $this->validate($request,[
         'name'=>['required','min:3','max:255'],
         'slug'=>['required','min:3','max:255','unique:sub_categories'],
         'sub_category'=>['required'],
         'order_by'=>['required','numeric'],
         'status'=>['required','numeric']
        ]);

        $sub_category::create([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'category_id'=>$request->sub_category,
            'order_by'=>$request->order_by,
            'status'=>$request->status
        ]);

        session()->flash('cls', 'success');
        session()->flash('msg', 'Sub Category Added');

        return redirect()->route('sub-category.index');


    }

    public function show(SubCategory $sub_category){
       $sub_category->load('category');
       return view('Backend.modules.sub-category.show',compact('sub_category'));
    }

    public function edit(SubCategory $sub_category){
        $category_id = $sub_category['category_id'];
        $categories = Category::pluck('name','id');
       return view('Backend.modules.sub-category.edit',compact('sub_category','categories','category_id'));
    }

    public function update(Request $request,SubCategory $sub_category){

        $request->slug= Str::slug($request->input('slug'));

        $this->validate($request,[
         'name'=>['required','min:3','max:255'],
         'slug'=>['required','min:3','max:255','unique:sub_categories,slug,'.$sub_category->id],
         'sub_category'=>['required'],
         'order_by'=>['required','numeric'],
         'status'=>['required','numeric']
        ]);

        $sub_category->update([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'category_id'=>$request->sub_category,
            'order_by'=>$request->order_by,
            'status'=>$request->status
        ]);

        session()->flash('cls', 'success');
        session()->flash('msg', 'Sub Category Updated');

        return redirect()->route('sub-category.index');


    }

    public function destroy(SubCategory $sub_category){
      $sub_category->delete();

      session()->flash('cls', 'error');
      session()->flash('msg', 'Sub Category Deleted');

      return redirect()->route('sub-category.index');
    }

    public function categoryBySubCategory(Request $request){
 
       $sub_categories = SubCategory::select('id','name')->where('category_id',$request->value)->get();
       return response()->json($sub_categories);
    }
}
