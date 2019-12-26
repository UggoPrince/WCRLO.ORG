<!-- Header section  -->
<header class="header-section">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">WCRLO</a>

      <button class="navbar-toggler toggle-button p-0" id="toggle-button">
        <span class=""><i class="icon-menu h2"></i></span>
      </button>
      

      <div class="site-navigation"  id="site-navigation">
        <div class="nav-close text-center" id="nav-close"><span>&times;</span></div>
        <ul class="navbar-nav nav ml-auto">
          <li class="nav-item @yield('active_home')">
            <a href="/" class="nav-link">Home</a>
          </li>
          <li class="nav-item @yield('active_about')">
            <a href="/about" class="nav-link">About</a>
          </li>
          <li class="nav-item @yield('active_support')">
            <a href="/support" class="nav-link w-auto d-inline-flex">Support</a>
            <i class="fa fa-caret-down font-size-20 c-pointer mr-1 h-100"></i>
          </li>
          <li class="nav-item"><a href="/child-rights" class="nav-link">Child Rights</a></li>
          <li class="nav-item"><a href="/women-rights" class="nav-link">Women Rights</a></li>
          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>