<div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">

            @foreach ($posts as $post)
                    <div class="item">

                        <img src="{{ asset('image/post/original/'.$post->photo) }}" alt="">
                        <div class="item-content">
                        <div class="main-content">
                            <div class="meta-category">
                            <span>{{ $post->category1->name }}</span>
                            </div>
                            <a href="post-details.html"><h4>{{ $post->title }}</h4></a>
                            <ul class="post-info">
                            <li><a href="#">{{ $post->users->name }}</a></li>
                            <li><a href="#">{{ date('M d, Y',strtotime($post->created_at)) }}</a></li>
                            <li><a href="#">12 Comments</a></li>
                            </ul>
                        </div>
                        </div>

                    </div>
            @endforeach

        </div>
      </div>
    </div>
