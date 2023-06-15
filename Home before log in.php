<!DOCTYPE html>
<html>
    <head>
        <title>Online Cab and Taxi Reservation System Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/6acd2a5707.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles/home before log in.css">
    </head>
    <body>
        <header>
            <div class="container-1">
                <div class="nav-1">
                    <div class="icon">
                        <H3 id="cName">DropMe Taxi Service</H3>
                    </div>

                    <nav class="head_log-sign">
                        <ul id="log-Sign">
                            <li id="S1"><a href="#" target="_blank">Sign Up</a></li>
                            <li id="S1"><a href="sign in.html" target="_blank">Sign In</a></li>
                        </ul>
                    </nav>
                </div> 
            </div>
        
            <nav class="container-2">
                <ul class = "menubar">
                    <li><a href="Home after log in.html" target="_blank">Home</a></li>
                    <li><a href="#" target="_blank">About Us</a></li>
                    <li><a href="#" target="_blank">Order a Taxi</a></li>
                    <li><a href="#" target="_blank">User Admin</a></li>
                    <li><a href="#" target="_blank">User Profile</a></li>
                </ul>
            </nav> 
        </header>

        <div class="container-3">
            <div class="content">
                <div class="col-left">
                    <h1 class="col1">Travel <span></span></h1><br>
                    <h1 class="col1">Faster , Safer with Us<span></span></h1> 
                </div>
            </div>

            <div class="covid">
                <marquee behavior = "alternate" direction ="left" scrollamount = "7">
                    <a href="https://www.hpb.health.gov.lk/"  target="_blank"><p id="restrictions-line">Covid- 19 Restrictions</p></a>
                </marquee>
            </div>

            <section>
                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <img src="Images\taxi 3.jpg" style="width:100%; height:75%">
                    </div>

                    <div class="mySlides fade">
                        <img src="Images\taxi 8.jpg"style="width:100%; height:75%" >
                    </div>

                    <div class="mySlides fade">
                        <img src="Images\taxi 9.jpg"style="width:100%; height:75%" >
                    </div>

                    <!-- <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a> -->

                </div>
                    <br>

                    <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                    </div>
            </section>
                
                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                </div>

                <script type="text/javascript">
                    let slideIndex = 0;
                    showSlides();
                    let index = 1;
                    Slides(index);
  
                    function showSlides() {
                        let i;
                        let slides = document.getElementsByClassName("mySlides");
                        let dots = document.getElementsByClassName("dot");
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) {slideIndex = 1}
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex-1].style.display = "block";
                        dots[slideIndex-1].className += " active";
                        setTimeout(showSlides, 6000); // Change image every 2 seconds
                    }
                    </script>     
            </div>
        </div>


        <footer>
            <div class="container-4">
                <div class="footer">
                    <ul class="footer-menu">
                        <li><a href="#" target="_blank">T & C</a></li>
                        <li><a href="#" target="_blank">Contact Us</a></li>
                        <li><a href="#" target="_blank">FAQ</a></li>
                    </ul>
                    <div class="social-menu">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/" target="_blank"></a><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://twitter.com/" target="_blank"></a><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/" target="_blank"></a><i class="fa-brands fa-linkedin"></i></a>
                    </div>   
                </div>
            </div>

            <div class="container-5">
                <div class="cpyright">
                    <p>Copyright &copy DropMe Taxi Company (PVT) Ltd.All Right reserved.</p>
                </div>
            </div>
        </footer>

    </body>
</html>
