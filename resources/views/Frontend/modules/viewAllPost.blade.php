@extends('Frontend.layouts.master')

@section('title','Home')

@section('main-content')
  <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">

                @foreach ($posts as $post)

                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{ asset('image/post/original/'.$post->photo) }}" alt="">
                    </div>
                    <div class="down-content">
                      <span>{{ $post->category1->name }}</span>
                      <a href=""><h4>{{ $post->title }}</h4></a>
                      <ul class="post-info">
                        <li><a href="#">{{ $post->users->name }}</a></li>
                        <li><a href="#">{{ date('M d, Y',strtotime($post->created_at)) }}</a></li>
                        <li><a href="#">48 Comments</a></li>
                      </ul>
                      <p>{{ strip_tags($post->description) }}</p>

                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              @foreach ($post->tags as $tag)
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

                <div class="col-lg-12">
                 {{ $posts->links() }}
                </div>
              </div>
            </div>
          </div>
          @include('Frontend.includes.sidebar')
        </div>
      </div>
    </section>
@endsection
