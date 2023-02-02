<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
  </head>
  <body>
  <header id="home">
    <div class="container_content">
      <div class="container">
      <nav>
          <div class="barnd">
            <h1>Interior Hub</h1>
          </div>

          <ul id="menu">
            <li><a href="int.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="testimonial.php">Testimonials</a></li>
            <li><a href="service.php">SERVICE</a></li>
            <li><a href="feedback.php">Feedback</a></li>
          </ul>
          <i id="icon" class="fa fa-bars"></i>
        </nav>
        <hr>
        <div class="contain">
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d922.5837940896323!2d91.7817112!3d22.3409696!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd93b6f5395fb%3A0x2b082593694f1fd7!2sHalishahar%20Housing%20Estate%20Field%2C%20Rd%20No.%201%2C%20Chittagong!5e0!3m2!1sen!2sbd!4v1664397775546!5m2!1sen!2sbd" 
            width="400" height="350" style="border:0;" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>Artilary Road , Halishahar , Chattogram</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>Fhamidanishi9@gmail.com.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>01877613751</p>
            </div>
          </div>

        </div>

        <div class="contact-form">


          <form action="userinformation.php" method="post">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="user" required />
              <label for="name"><i class="fas fa-user"></i> Username</label>
             
            </div>
            <div class="input-container">
              <input type="email" name="email" required />
              <label for="email"><i class="fas fa-envelope"></i> Email</label>
              
            </div>
            <div class="input-container">
              <input type="phone" name="phone" required />
              <label for="phone"><i class="fas fa-phone-square-alt"></i> Phone</label>
              
            </div>
            <div class="input-container-raw">
              <textarea name="message"></textarea>
              <label for="message" ><i class="fas fa-comment"></i> Message</label>
              
            </div>
            <button class="btn" type="submit">SEND</button>
            
          <div class="social-media">
            <p style="color:white;">Connect with us :</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/fahmida.nishi.71/about">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>

    <script src="app.js"></script>
    
  


  </header>





  
   
  </body>
</html>
