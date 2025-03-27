<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>

	<title>DriveX | Contact</title>
	<title>@yield('title', 'Ride Reserve')</title>
    @include('home.layout.top')


</head>
<body>
	@include('Home.layout.navbar')
    <div class="parallax-contactus">
        <div class="hero-container-about">
            <h1 class="hero-heading-about">Contact Us</h1>
            <h2 class="hero-heading-h2">Get in Touch – We're Here to Help!

            </h2>
            <p class="hero-description-about">Have questions about renting or listing a car? Need support with your reservation? Our team is ready to assist you. Reach out anytime, and we’ll get back to you as soon as possible!</p>
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
    <div class="container py-5 mt-20">
        <div class="row text-center">
          <!-- Address Card -->
          <div class="col-md-4">
            <div class="contact-card">
              <i class="fa-solid fa-house"></i>
              <h2>Our Address</h2>
              <p>123 Street, Aqaba, Jordan</p>
            </div>
          </div>
      
          <!-- Call Us Card -->
          <div class="col-md-4">
            <div class="contact-card">
              <i class="fa-solid fa-phone"></i>
              <h2>Call Us</h2>
              <p>+962 77 777777</p>
            </div>
          </div>
      
          <div class="col-md-4">
            <div class="contact-card">
              <i class="fa-solid fa-envelope"></i>
              <h2>Email Us</h2>
              <p>info@example.com</p>
            </div>
          </div>
        </div>
      </div>
      
  
      <div class="contact-container mt-52 mb-20">
        <div class="contact-box">
            <h2>Contact Us</h2>
            <form>
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="Enter your name" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="message">Message</label>
                    <textarea id="message" placeholder="Write your message" required></textarea>
                </div>
                <button class="send-btn" type="submit">Send Message</button>
            </form>
        </div>

        <div class="map-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317716.6064991531!2d-0.4312484371701805!3d51.52860700640175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sjo!4v1743068658674!5m2!1sen!2sjo" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
@include('Home.layout.footer')
</body>
</html>