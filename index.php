<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet" />

    <!-- custom style CSS -->
    <link rel="stylesheet" href="dist/css/style.css" />

    <title>Landing Page  | by Kohen Setia</title>
  </head>
  <body>
    <header>
      <div class="navbar">
        <div class="container">
          <div class="box-navbar">
            <div class="logo">
              <h1>Holiday</h1>
            </div>
            <ul class="menu">
              <li><a href="#home">Home</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#beach">Beach</a></li>
              <li class="active"><a href="#daftar">Sign-Up</a></li>
            </ul>
            <i class="fa-solid fa-bars menu-bar"></i>
          </div>
        </div>
      </div>

      <div class="hero">
        <div class="container">
          <div class="box-hero">
            <div class="box">
              <h1>
                The Best Beach Choices

                 <br />
                <span>For a Vacation Together</span>
              </h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, autem?</p>
              <button>Explore more</button>
            </div>
            <div class="box">
              <img src="assets/img1.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Services -->
    <div class="services" id="services">
      <div class="container">
        <div class="box-services">
          <div class="box">
            <i class="fa-solid fa-coins"></i>
            <h4>a Reasonable price</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, labore.</p>
          </div>
          <div class="box">
            <i class="fa-solid fa-certificate"></i>
            <h4>Certified</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, labore.</p>
          </div>
          <div class="box">
            <i class="fa-solid fa-people-roof"></i>
            <h4>Safe and friendly</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, labore.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Services -->

    <!-- beach -->
    <div class="beach" id="beach">
      <div class="container">
        <div class="box-beach">
          <div class="box">
            <img src="assets/img2.jpg" alt="" />
            <h3>Beach Destination 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, modi.</p>
            <button>Detail</button>
          </div>
          <div class="box">
            <img src="assets/img3.jpg" alt="" />
            <h3>Beach Destination 2</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, modi.</p>
            <button>Detail</button>
          </div>
          <div class="box">
            <img src="assets/img4.jpg" alt="" />
            <h3>Beach Destination 3</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, modi.</p>
            <button>Detail</button>
          </div>
          <div class="box">
            <img src="assets/img5.jpg" alt="" />
            <h3>Beach Destination 4</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, modi.</p>
            <button>Detail</button>
          </div>
          <div class="box">
            <img src="assets/img6.jpg" alt="" />
            <h3>Beach Destination 5</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, modi.</p>
            <button>Detail</button>
          </div>
          <div class="box">
            <img src="assets/img7.jpg" alt="" />
            <h3>Beach Destination 6</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, modi.</p>
            <button>Detail</button>
          </div>
        </div>
      </div>
    </div>
    <!-- beach -->

    <!-- Daftar -->
    <div class="daftar" id="daftar">
      <div class="container">
        <div class="box-daftar">
          <h1>
            Wanting to go on a trip/vacation? <br />
            Register Now!
          </h1>
          <h3>Click here below!</h3>
          <button><i class="fa-brands fa-whatsapp"></i> Whatsapp</button>
          <button><i class="fa-regular fa-envelope"></i> Gmail</button>
          <button><i class="fa-regular fa-clipboard"></i> Google Form</button>
        </div>
      </div>
    </div>
    <!-- signup -->

    <!-- Footer -->

    <footer>
        <div class="container">
            <div class="box-footer">
                <div class="box">
                    <h3>Holiday</h3>
                </div>
                <div class="box">
                    <h3>Quick Links</h3>
                    
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Beach</a></li>
                        <li><a href="#">Sign-Up</a></li>
                    
                </div>
                <div class="box">
                    <h3>Services</h3>
                    
                        <li><a href="#">a Reasonable price</a></li>
                        <li><a href="#">Certified</a></li>
                        <li><a href="#">Safe and friendly</a></li>
                    
                </div>
                <div class="box">
                    <h3>Newsletter</h3>
                    <form>
                        <i class="far fa-envelope"></i>
                        <input type="email" placeholder="Enter your email" required>
                        <button><i class="fas fa-arrow-right"></i></button>
                    </form>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="garis"></div>
            <center><p>&copy; Copyright by <span>Kohen Setia</span> All Rights Reserved - Indonesia</p></center>
        </div>
    </footer>
    
    <!-- Footer -->

    <script src="dist/js/script.js"></script>
  </body>
</html>
