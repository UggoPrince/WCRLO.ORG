<!-- Header section  -->
<header class="header-section">
  <nav class="navbar navbar-expand-lg text-center">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">WCRLO</a>

      <button class="navbar-toggler toggle-button p-0" id="toggle-button">
        <span class=""><i class="icon-menu h2"></i></span>
      </button>
      

      <div class="site-navigation"  id="site-navigation">
        <div class="nav-close" id="nav-close"><span>&times;</span></div>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item @yield('active_home')"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item @yield('active_about')"><a href="/about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="/causes" class="nav-link">Causes</a></li>
          <li class="nav-item"><a href="/partner" class="nav-link">Donate</a></li>
          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>