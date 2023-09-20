<nav class="navbar navbar-expand-lg navbar-light nav-style">
  <div class="container-fluid nav_item_center">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('homePage') }}">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Registration</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('contactUs') }}">Contact Us</a>
        </li>

      </ul>

    </div>
  </div>
</nav>








