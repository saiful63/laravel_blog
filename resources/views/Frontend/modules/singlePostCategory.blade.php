@extends('Frontend.layouts.master')

@section('title','Home')

@section('main-content')
  <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
               @if(Route::currentRouteName()!='singlePostTag')
                @foreach ($sub_category_item as $items)
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{ asset('image/post/original/'.$items->photo) }}" alt="">
                    </div>

                    <div class="down-content">
                        @if (Route::currentRouteName()=='singlePostCategory')
                            <span>{{ $items->category1->name }}</span>
                        @elseif(Route::currentRouteName()=='singlePostSubCategory')
                            <span>{{ $items->sub_category1->name }}</span>
                        @endif

                      <a href="post-details.html"><h4>{{ $items->title }}</h4></a>
                      <ul class="post-info">
                        <li><a href="#">

                            {{ $items->users->name }}

                        </a></li>
                        <li><a href="#">{{ date('M d, Y',strtotime($items->created_at)) }}</a></li>
                        <li><a href="#">48 Comments</a></li>
                      </ul>
                      <div class="unescaped_post">{!! $items->description !!}</div>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>

                                @foreach ($items->tags as $tag)
                                <li><a href="#">{{ $tag->name }}</a>,</li>
                                @endforeach

                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#">Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 </div>
                @endforeach

                    @else
                    @php
                        $p=0;
                        $r=0;
                    @endphp
                    @foreach ($sub_category_item as $items)
                       @foreach ($items->posts as $post)
                        <div class="col-lg-12">
                        <div class="blog-post">
                            <div class="blog-thumb">
                            <img src="{{ asset('image/post/original/'.$post->photo) }}" alt="">
                            </div>

                            <div class="down-content">
                                <span>{{ $items->name }}</span>

                            <a href="post-details.html"><h4>{{ $post->title }}</h4></a>
                            <ul class="post-info">
                                <li><a href="#">

                                    {{ Route::currentRouteName()=='singlePostTag'?'Admin':$items->users->name }}

                                </a></li>
                                <li><a href="#">{{ date('M d, Y',strtotime($items->created_at)) }}</a></li>
                                <li><a href="#">48 Comments</a></li>
                            </ul>
                            <div class="unescaped_post">{!! $post->description !!}</div>

                            <div class="post-options">
                                <div class="row">
                                <div class="col-6">
                                    <ul class="post-tags">
                                    <li><i class="fa fa-tags"></i></li>

                                    @if(Route::currentRouteName()=='singlePostTag')

                                    @php

                                    for ($j = $p; $j < count($looped_tag);$j++) {

                                    $r++;
                                    $my = $looped_tag[$j];
                                    for ($i = 0; $i < count($my); $i++) {
                                       echo '<li><a href="#">'.$my[$i]->name.'</a>,</li>';

                                    }
                                    $p++;
                                    if($r==1){
                                        $r=0;
                                      break;
                                    }


                                    }

                                    @endphp

                                    @else
                                        @foreach ($items->tags as $tag)
                                        <li><a href="#">{{ $tag->name }}</a>,</li>
                                        @endforeach
                                    @endif
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="post-share">
                                    <li><i class="fa fa-share-alt"></i></li>
                                    <li><a href="#">Facebook</a>,</li>
                                    <li><a href="#">Twitter</a></li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        @endforeach
                        @endforeach

                @endif

                <div class="col-lg-12">
                    @if(Route::currentRouteName()=='singlePostCategory' || Route::currentRouteName()=='singlePostSubCategory')

                        {{ $sub_category_item->links() }}
                        
                    @endif

                </div>
              </div>
            </div>
          </div>
          @include('Frontend.includes.sidebar')
        </div>
      </div>
    </section>
@endsection
