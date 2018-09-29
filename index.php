<?php
$page_title = 'Fortify';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fortify</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,400italic,300italic,300|Raleway:300,400,600' rel='stylesheet' type='text/css'>
</head>

<body>
  <div class="content">
    <div class="container wow fadeInUp delay-03s">
      <div class="row">
        <div class="logo text-center">
          <h2>Fortify</h2>
          <h2>Comming Soon!!!</h2>
        </div>

        <div id="countdown" data-wow-delay=".3s" data-date="November 15, 2018 06:00:00"></div>
        <h2 class="subs-title text-center">Subscribe now to get Recent updates!!!</h2>
        <div class="subcription-info text-center">
          <form class="subscribe_form" action="#" method="post">
            <input required="" value="" placeholder="Enter your email..." class="email" id="email" name="email" type="email">
            <input class="subscribe" name="email" value="Subscribe!" type="submit">
          </form>
          <p class="sub-p">We Promise to never span you.</p>
        </div>
      </div>
    </div>
    <section>
      <div class="container">
        <div class="row bort text-center">
          <div class="social">
            <ul>
              <li>
                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="https://www.instagram.com/"><i class="fa fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 text-center">
            <div class="about-title">
              <h2>About Us</h2>
              <p></br></p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-02s">
              <div class="img">
                <i class="fa fa-refresh"></i>
              </div>
              <h3 class="abt-hd">Our process</h3>
              <p>Fortify has a stego tool which embeds text into your image. It provides watermark of our own for normal users. User can also put their own watermarks provided that they become a premium user.</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
              <div class="img">
                <i class="fa fa-eye"></i>
              </div>
              <h3 class="abt-hd">Our Vision</h3>
              <p>We serve the users in terms of security, publicity and authenticity. That is to prevent their digital artworks from being stolen and plagiarized by other people.</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-06s">
              <div class="img">
                <i class="fa fa-cogs"></i>
              </div>
              <h3 class="abt-hd">Our Approach</h3>
              <p>We aim to target artists who are in line with making posters and photography that results in making digital images.</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-08s">
              <div class="img">
                <i class="fa fa-dot-circle-o"></i>
              </div>
              <h3 class="abt-hd">Our Objective</h3>
              <p>To lessen the cases of online art theft by providing artists an easier alternative to secure their artworks. </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="contact-info">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="contact-title">
              <i class="fa fa-envelope"></i>
              <h2>Get in touch</h2>
              <p><br></p>
            </div>
          </div>
          <div class="contact col-md-6 wow fadeIn delay-08s">
            <div class="col-md-10 col-md-offset-1">
              <div id="note"></div>
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>

                <div class="text-center"><button type="submit" class="contact-submit">Send Message</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container">
      <div class="row bort">
        <div class="copyright">
          © Copyright Fortify Privacy Policy. All rights reserved. 2018
        </div>
      </div>
    </div>
  </footer>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>