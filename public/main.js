document.addEventListener("DOMContentLoaded", function () {
    const preloader = document.querySelector(".preloader");
    const lines = document.querySelector(".lines");
    
    setTimeout(() => {
        lines.classList.add("reveal");
        setTimeout(() => {
            document.querySelector(".preloader-text").style.opacity = 1;

            setTimeout(() => {
                lines.classList.add("hide");
                document.querySelector(".preloader-text").style.opacity = 0;

                setTimeout(() => {
                    preloader.classList.add("fade-out");
                    setTimeout(() => {
                        preloader.style.display = "none";
                        
                        // Show the buttons after preloader is hidden
                     

                    }, 1000); // Delay to match fade-out duration
                }, 500); // Time before starting fade-out effect
            }, 1500); // Time before hiding lines and text
        }, 500);
    }, 500);
});

document.addEventListener("DOMContentLoaded", () => {
    setTimeout(() => {
        document.querySelector(".hero h1").classList.add("animate-hero");
    }, 4000);
    setTimeout(() => {
        document.querySelector(".hero p").classList.add("animate-p");
    }, 4000);
    setTimeout(() => {
        const carButtons = document.querySelector(".car-buttons");
        carButtons.style.display = "flex";  // Make sure it's visible
        carButtons.classList.add("show");  // Trigger the fade-in effect
    }, 5000);
});


document.addEventListener("DOMContentLoaded", function () {
    let images = document.querySelectorAll(".fade-img");
    let currentIndex = 0;

    function fadeImages() {
        images[currentIndex].classList.remove("active");
        currentIndex = (currentIndex + 1) % images.length;
        images[currentIndex].classList.add("active");
    }

    setInterval(fadeImages, 4000); 
});
