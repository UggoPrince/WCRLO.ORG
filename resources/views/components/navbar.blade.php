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
          <li class="nav-item align-content @yield('active_support')">
            <a href="/support" class="nav-link align-top w-auto d-inline-flex">Support</a>
          </li>
          <li class="nav-item @yield('active_child_rights')">
            <a href="/child-rights" class="nav-link">Child Rights</a>
          </li>
          <li class="nav-item @yield('active_women_rights')">
            <a href="/women-rights" class="nav-link">Women Rights</a>
          </li>
          <li class="nav-item @yield('active_contact')">
            <a href="/contact" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>