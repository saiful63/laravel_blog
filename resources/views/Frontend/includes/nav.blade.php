
      <nav class="navbar navbar-expand-lg bg-secondary p-3">
        <div class="container">
          <a class="navbar-brand" href="{{ route('homePage') }}"><h2>Saiful Thought</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('homePage') }}">Home
                  <span class="sr-only">(current)</span>
                </a>
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

