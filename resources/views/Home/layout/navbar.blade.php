<nav class="nav-style" id="navbar">
  <div class="nav-links">
    <a href="/about">About Us</a>
    <a href="/contact">Contact Us</a>
  </div>

  <div class="brand-name">
    <a href="{{ url('/') }}">DriveX</a>
  </div>

  <div class="nav-icons">
    @auth
      <div class="dropdown">
        <i class="bi bi-person" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="dropdown-item">Logout</button>
          </form>
        </div>
      </div>
    @else
      <a href="{{ route('login') }}" class="login-link">Login</a>
    @endauth
    <i class="bi bi-globe"></i>
  </div>
</nav>
<script>
  window.onscroll = function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 0) {
      navbar.classList.add('scrolled'); 
    } else {
      navbar.classList.remove('scrolled');
    }
  };
  
    </script>