@extends('Frontend.layouts.master')

@section('title','Post Detail')
@section('banner')
  <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Post Details</h4>
                <h2>Single blog post</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection

@section('main-content')

<section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{ asset('image/post/original/'.$single_post_id->photo) }}" alt="">
                    </div>
                    <div class="down-content">
                      <span>{{ $single_post_id->category1->name }}</span>
                      <a href="post-details.html"><h4>{{ $single_post_id->title }}</h4></a>
                      <ul class="post-info">
                        <li><a href="#">{{ $single_post_id->users->name }}</a></li>
                        <li><a href="#">{{ date('M d, Y',strtotime($single_post_id->created_at)) }}</a></li>
                        <li><a href="#">10 Comments</a></li>
                      </ul>
                      <p>{{ strip_tags($single_post_id->description) }}</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              @foreach ($single_post_id->tags as $items)
                                    <li><a href="#">{{ $items->name }}</a>,</li>
                              @endforeach


                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @if(Auth::check())
                    <div class="col-lg-12">
                  <div class="sidebar-item comments">
                    <div class="sidebar-heading">
                      <h2>Comments</h2>
                    </div>
                    <div class="comment_replay">

                        @foreach ($comments as $comment)
                            <div class="comment_replay_inside">
                                <div class="comment">
                                    <h4 class="cmt_h4">{{ $comment->name }}<span class="cmt_span">||</span><span class="cmt_span">{{ $comment->created_at->format('M d, Y') }}</span></h4>
                                    <p>{{ $comment->comment_text }}</p>
                                    <div class="replay_comment">
                                        <form action="{{ route('replayComment') }}" method="post" class="comment_form">
                                            @csrf
                                            <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                                            <input type="hidden" name="post_id" value="{{ $comment->post_id }}">
                                            <input type="text" name="replay_text" class="from-control replay">
                                            <button type="submit" class="comment_btn">replay</button>
                                        </form>
                                    </div>
                                </div>



                                <div class="replay">

                                    @foreach ($replies as $replay)
                                        @if($replay->comment_id == $comment->id)
                                        <h4 class="cmt_h4">{{ $replay->user->name }} <span class="cmt_span">||</span><span class="cmt_span">{{ $replay->created_at->format('M d, Y') }}</span></h4>
                                        <p>{{ $replay->replay_text }}</p>
                                        @endif
                                    @endforeach

                                </div>
                            </div>

                        @endforeach





                    </div>
                  </div>
                </div>


                <div class="col-lg-12">
                  <div class="sidebar-item submit-comment">
                    <div class="sidebar-heading">
                      <h2>Your comment</h2>
                    </div>
                    <div class="content">
                      <form id="comment" action="{{ route('postComment') }}" method="post">
                        @csrf
                        <div class="row">
                          <div class="col-lg-12">
                            <input type="hidden" name="post_id" value="{{ $single_post_id->id }}">
                            <fieldset>
                              <textarea name="comment_text" rows="1" id="message" placeholder="Type your comment"></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button">Comment</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                @else
                <div class="card">
                    <div class="card-body">
                        <span>Please login to comment : <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Login</a></span>
                    </div>
                </div>

                @endif

              </div>
            </div>
          </div>


            @include('Frontend.includes.sidebar')

        </div>
      </div>
    </section>

@endsection
