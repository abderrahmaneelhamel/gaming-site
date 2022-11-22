<?php
  session_start();
  if($_SESSION['user']==null){
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
   <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
   <link rel="stylesheet" href="css/bootstrap.css">
   <script defer src="/bootstrap-5.2.2-dist/js/bootstrap.js" defer></script>
</head>
<body>
<nav class="n">
    <div><a href="#"><img src="img/768px-Magicdelivery_gaming_logo.svg.png" alt=""></a></div>
    <div>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="Gallery.php">Gallery</a></li>
          <li><a href="About.php">About</a></li>
          <li><a href="Contact.php">Contact</a></li>
        </ul>
    </div>
    <div style="width: 30%; display: flex; justify-content: center; justify-content: space-around; align-items: center; ">
      <div class="username"><?php echo $_SESSION['user']?></div>
      <a href="disconnect.php" class="disconnect">disconnect</a>
    </div>
</nav>   
  <section class="container2">
   <div style="width: 400px ;">
    <h1 class="log2"  style="font-size: 80px; color:rgb(255, 255, 255);">Playtech</h1>
    <h3 style="font-size: 20px; color:rgb(255, 255, 255);padding-left: 30%;padding-bottom: 10%;" >No Game no Life</h3>      
    </div>
  </div>

   <div><img style="width: 100%; height: auto;" src="img/Dualsense-PS5-2-removebg-preview.png" alt=""></div>

  </section> 
  <section class="bleu">
  <div  class="contact-section">
    <video autoplay muted loop id="myVideo">
        <source src="https://media.direct.playstation.com/is/content/sierialto/dualsense-ps5-controller-black-red-trailer" type="video/mp4">
    </video>
      <div class="content">
       <h1>Contact Us</h1>
  <form class="contact-form" action="index.html" method="post">
    <input type="text" class="contact-form-text" placeholder="Your name">
    <input type="email" class="contact-form-text" placeholder="Your email">
    <input type="text" class="contact-form-text" placeholder="Your phone">
    <textarea class="contact-form-text" placeholder="Your message"></textarea>
    <input type="submit" class="contact-form-btn" value="Send">
  </form>
  </div>
      </div>
 </section>
  <footer class="footer">
    <div class="first">
      <a href="#"><img class="logo" src="img/768px-Magicdelivery_gaming_logo.svg.png" alt=""></a>
         <span>Follow us:</span> 
      <div class="social">
        <a href="#"><img style="width: 70%;padding: 2%; height: auto;" src="img/linkedin.png" alt="insta"></a>
        <a href=""><img style="width: 70%;padding: 2%; height: auto;" src="img/insta.png" alt="linkedin"></a>
        <a href=""><img style="width: 70%;padding: 2%;height: auto;" src="img/twitter.png" alt="twitter"></a>
      </div>   
      
    </div>
    <div class="second">
      <span>contact us :</span>
      <div class="contact">
      <p style="color:rgb(0, 109, 139) ;">Phone : 0649239990</p>
      <p style="color:rgb(0, 109, 139) ;">Email : playtech@gmail.com</p>
      </div>
    </div>
    <div class="therd">
      <span >Categories</span>
      <p style="color:rgb(0, 109, 139) ;"> war game</p>
      <p style="color:rgb(0, 109, 139) ;"> soocer game</p>
      <p style="color:rgb(0, 109, 139) ;"> racing game</p>
    </div>
    <div class="copyr">
      <span>©copyright 2023</span>
    </div>
  </footer>
  <script>
    var video = document.getElementById("myVideo");
    var btn = document.getElementById("myBtn");
    
    function myFunction() {
      if (video.paused) {
        video.play();
        btn.innerHTML = "Pause";
      } else {
        video.pause();
        btn.innerHTML = "Play";
      }
    }
    </script>
</body>

</html>