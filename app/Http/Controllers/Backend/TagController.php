<?php

namespace App\Http\Controllers\Backend;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::orderBy('order_by')->get();
        return view('Backend.modules.tag.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.modules.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Tag $tag)
    {

        $this->validate($request,[
         'name'=>['required','min:3','max:255'],
         'tag'=>['required','min:3','max:255','unique:tags'],
         'order_by'=>['required','numeric'],
         'status'=>['required','numeric']
        ]);

        $tag::create([
            'name'=>$request->name,
            'tag'=>$request->tag,
            'order_by'=>$request->order_by,
            'status'=>$request->status
        ]);

        session()->flash('cls', 'success');
        session()->flash('msg', 'Tag Added');
        return redirect()->route('tag.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        return view('Backend.modules.tag.show',compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('Backend.modules.tag.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {

        $this->validate($request,[
         'name'=>['required','min:3','max:255'],
         'tag'=>['required','min:3','max:255','unique:tags,tag,'.$tag->id],
         'order_by'=>['required','numeric'],
         'status'=>['required','numeric']
        ]);

        $tag->update([
            'name'=>$request->name,
            'tag'=>$request->tag,
            'order_by'=>$request->order_by,
            'status'=>$request->status
        ]);

        session()->flash('cls', 'success');
        session()->flash('msg', 'Tag Updated');

        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
      $tag->delete();

      session()->flash('cls', 'error');
      session()->flash('msg', 'Category Deleted');

      return redirect()->route('tag.index');
    }
}
