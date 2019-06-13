<header>
  <div class="container-fluid p-0">

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-shadow" id="custom-navbar">
      <a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" style="align-items:center;">
          <li class="nav-item mx-2">
            <a class="nav-link pointer" href="{{ home_url('/about-us/') }}">ABOUT US <span class="sr-only">(current)</span></a>
          </li>
          <!-- <li class="nav-item mx-2 dropdown">
            <a class="nav-link" id="services" href="#">SERVICES</a>
            <div class="dropdown-content">
              <a href="#">DESIGN & DEVELOPMENT</a><br>
              <a href="#">SEARCH ENGINE OPTIMIZATION</a><br>
              <a href="#">SOCIAL MEDIA MARKETING</a><br>
              <a href="#">CONTENT MARKETING</a><br>
              <a href="#">EMAIL MARKETING</a><br>
              <a href="#">PAID ADVERTISING</a>
            </div>
          </li> -->
          <li id="navhover" class="nav-item dropdown mx-2">
            <a class="nav-link" id="dropdownBtn" role="button" data-target="#collapseExample" data-toggle="collapse">SERVICES</a>
            <div id="dropdownSp" class="dropdown-content">
              <a href="{{ home_url('/design-and-development/') }}">DESIGN & DEVELOPMENT</a>
              <a href="{{ home_url('/search-engine-optimization/') }}">SEARCH ENGINE OPTIMIZATION</a>
              <a href="{{ home_url('/social-media-marketing/') }}">SOCIAL MEDIA MARKETING</a>
              <a href="{{ home_url('/content-marketing/') }}">CONTENT MARKETING</a>
              <a href="{{ home_url('/email-marketing/') }}">EMAIL MARKETING</a>
              <a href="{{ home_url('/paid-ads/') }}">PAID ADVERTISING</a>
            </div>
            <!-- <a class="nav-link dropdown-toggle" href="#" id="service-options">
              SERVICES
            </a>
            <div class="dropdown-menu" aria-labelledby="service-options">
              <a class="dropdown-item" href="#">DESIGN & DEVELOPMENT</a>
              <a class="dropdown-item" href="#">SEARCH ENGINE OPTIMIZATION</a>
              <a class="dropdown-item" href="#">SOCIAL MEDIA MARKETING</a>
              <a class="dropdown-item" href="#">CONTENT MARKETING</a>
              <a class="dropdown-item" href="#">EMAIL MARKETING</a>
              <a class="dropdown-item" href="#">PAID ADVERTISING</a>
            </div> -->
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link pointer" href="{{ home_url('/insights/') }}">INSIGHTS </a>
          </li>
          <li class="nav-item mx-2">
            <a class="c-nav-btn" href="#">
              <img src="@asset('images/icons/icons8-chat-50.png')" alt="chat-icon">
              LET'S CHAT
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>
