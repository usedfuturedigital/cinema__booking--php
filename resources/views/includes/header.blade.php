<div class="o-header--flash"></div>
<header class="o-header">
    <div class="o-container">
      <span class="o-nav-title"><img class="o-nav-logo" src="/images/logo.png"  alt="icinema logo"></span><span class="o-nav-title--text"><p>ICINEMA</p></span>

      <span class="o-header--authenticate">

        {{--CHECK IF USER IS LOGGED IN  --}}
          @if (Auth::check())
              @role('Manager')
              <p><li><a href="/admin">ADMIN</a></li></p>
              @endrole
              <p><li><a href="/logout">LOGOUT</a></li></p>
          @else
              <p><a href="/register">REGISTER</a></p>
              <p> <a href="/home">LOGIN</a></p>
          @endif

      </span>

      <span class="o-site-tagline">
        <form class="a-search-bar" role="search">
          <input type="search" placeholder="Enter Search" />
          <button type="submit">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/search-icon-black.png" alt="Search Icon">
          </button>
        </form>
      </span>
  </div>
</header>
<nav class="main-nav">
  <div class="container">
    <ul>
      <li class="mobile-button"><a href="#">Menu</a></li>
      <li><a href="/">HOME</a></li>
      <li><a href="/movie">MOVIES</a></li>
      <li><a href="/about">ABOUT</a></li>
      <li><a href="/locations">LOCATIONS</a></li>
      <li><a href="/showing">SHOWING NOW</a></li>
      <li><a href="/kids">KIDS </a></li>
      <li><a href="/contact">CONTACT</a></li>

    </ul>
  </div>
</nav>
