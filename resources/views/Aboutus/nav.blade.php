<nav class="nav-style" id="navbar">
    <div class="nav-links">
      <a href="">About Us</a>
      <a href="/contact">Contact Us</a>
    </div>
    <div class="brand-name">
      <a href="">DriveX</a>
    </div>
    <div class="nav-icons">
      <i class="bi bi-person"></i>
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