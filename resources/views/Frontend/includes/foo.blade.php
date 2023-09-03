<div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
         @foreach ($posts as $post)
          
          <div class="item">
            <img src="{{ asset('Frontend/assets/image/post/original/'.$post->photo) }}" alt="">
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


    <div class="owl-item active" style="width: 419.333px; margin-right: 10px;">
        <div class="item">
            <img src="http://127.0.0.1:8000/Frontend/assets/images/banner-item-03.jpg" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Lifestyle</span>
                </div>
                <a href="post-details.html"><h4>Best HTML Templates on TemplateMo</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 16, 2020</a></li>
                  <li><a href="#">36 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
