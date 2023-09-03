<div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    {{-- <form id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form> --}}
                    {!! Form::open(['method'=>'get','route'=>'postSearch','class'=>'post_search']) !!}
                       {!! Form::text('search',null,['placeholder'=>'Search post...','class'=>'form-control m-3']) !!}
                       {!! Form::button('<i class="fa fa-search"></i>',['class'=>'btn btn-primary','type'=>'submit']) !!}
                    {!! Form::close() !!}
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                      <ul>
                        @foreach ($recent_posts as $recent_post)
                        <li><a href="{{ route('singlePost',$recent_post->id) }}">
                          <h5>{{ $recent_post->title }}</h5>
                          <span>{{ date('M d, Y',strtotime($recent_post->created_at)) }}</span>

                        </a></li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul class="category">
                        @foreach ($category_data as $item)
                            <li><a href="{{ route('singlePostCategory',$item->id) }}">- {{ $item->name }}</a></li>
                            <ul class="sub_category">
                                @foreach ($item->sub_category as $sub_category)
                                <li><a href="{{ route('singlePostSubCategory',$sub_category->id) }}">- {{ $sub_category->name }}</a></li>
                                @endforeach
                            </ul>

                        @endforeach


                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Tag Clouds</h2>
                    </div>
                    <div class="content">
                      <ul>
                        @foreach ($tags as $tag)
                            <li><a href="{{ route('singlePostTag',$tag->id) }}">{{ $tag->name }}</a></li>
                        @endforeach


                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
