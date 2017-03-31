<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>NU2U Thrift Mart | About</title>
    <link rel="icon" href="pics/favicon.gif">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normal.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <a href="index.html"><img src="pics/Logo.gif"></a>
        </div>
          <nav>
          <ul>
            <li><a href="new_arrivals.html">New Arrivals</a></li>
            <li><a href="furniture.html">Furniture</a></li>
            <li><a href="electronics.html">Electronics</a></li>
            <li><a href="decoration.html">Decoration</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="selling.html">Selling?</a></li>
          </ul>
        </nav>
          </div>
    </header>
    <section id="showcase_6">
      <div class="container">
        <h1>Thank You!</h1>
        <p>We'll send you the next newsletter.</p>
          <?php 
if(isset($_POST['submit'])){
    $to = "nu2uthriftmart@gmail.com";
    $email = $_POST['email'];
    $subject = "Form submission";
    $message = $email . " wrote the following:" . "\n\n" . $_POST['message'];
   
   
    mail($to,$subject,$message);
   
    }
?>
      </div>
    </section>
    <footer>
      <section class="boxes">
        <div class="container">
        <div class="box">
          <h3>NU2U Thrift Mart</h3>
          <p><a href="tel:17317362952">(731)736-2952</a></p>
          <p><a href="https://goo.gl/maps/1o7o31SX5Fo">1635 N Royal St, Jackson, TN 38301</a></p>
        </div>
        <div class="box">
          <h3>Connect With Us!</h3>
          <a href="https://www.facebook.com/Nu2U-Thrift-Mart-1721809848050719/"><img src="pics/facebook.gif"></a>
        </div>
        <div class="box">
          <h3>Hours</h3>
          <p>Sunday 9am-6pm</p>
          <p>Monday 9am-6pm</p>
          <p>Tuesday 9am-6pm</p>
          <p>Wednesday 9am-6pm</p>
          <p>Thursday 9am-6pm</p>
          <p>Friday 9am-6pm</p>
          <p>Saturday 9am-6pm</p>
        </div>
          </div>
      </section>
      <p>NU2U Thrift Mart, Copyright &copy; 2017</p>
    </footer>
  </body>
</html>