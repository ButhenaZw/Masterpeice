<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>

	<title>DriveX | About</title>
	<title>@yield('title', 'Ride Reserve')</title>
    @include('home.layout.top')

	<style>
        @font-face {
            font-family: 'MyCustomFont';
            src: url('path-to-your-font.ttf') format('truetype');
        }

    </style>
</head>
<body>
	@include('Home.layout.navbar')
    <div class="parallax-aboutus">
        <div class="hero-container-about">
            <h1 class="hero-heading-about">About Us</h1>
            <p class="hero-description-about">Drive your journey with ease—whether you're looking to rent the perfect car or share your ride with others. Our platform connects you to a world of seamless reservations and effortless rentals.</p>
        </div>
    </div>
    
    
    

	


						
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	</div>
	<br><br>
    <div class="container py-5">
        <div class="row text-center">
          <!-- Mission Section -->
          <div class="col-md-4">
            <div class="custom-card mission-card">
              <div class="custom-icon">
                <i class="bi bi-bullseye"></i>
              </div>
              <h3 class="custom-title">Our Mission</h3>
              <p class="custom-text">To provide a seamless and reliable car rental experience, connecting vehicle owners with renters through a secure and user-friendly platform</p>
            </div>
          </div>
      
          <!-- Vision Section -->
          <div class="col-md-4">
            <div class="custom-card vision-card">
              <div class="custom-icon">
                <i class="bi bi-eye"></i>
              </div>
              <h3 class="custom-title">Our Vision</h3>
              <p class="custom-text">To become the leading car rental and reservation platform, making mobility accessible and hassle-free for everyone, anytime and anywhere.</p>
            </div>
          </div>
      
          <!-- Value Section -->
          <div class="col-md-4">
            <div class="custom-card value-card">
              <div class="custom-icon">
                <i class="bi bi-gem"></i>
              </div>
              <h3 class="custom-title">Our Values</h3>
              <p class="custom-text">We believe in trust, convenience, and flexibility. Our platform ensures secure transactions,and a smooth experience for both renters and car owners.</p>
            </div>
          </div>
        </div>
      </div>
    
  
      
	

@include('Home.layout.footer')
</body>
</html>