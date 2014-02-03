<?php
if(isset($_POST['submit'])) {

$to = "theberkeleygroup@gmail.com";
$subject = "Message sent through website";
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$org_field = $_POST['org'];
$message = $_POST['message'];
 
$body = "From: $name_field\n E-Mail: $email_field\n Organization: $orgfield_field\n Message:\n $message";

mail($to, $subject, $body);

} else {

echo "Error: no data sent!";

}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <!-- Website created by Wonjun Jeong, Jodi So, Nikhil Narayen, and Vincent Tian-->
    <!-- Blueprint <3-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Berkeley Group</title>
    <link rel="stylesheet" href="css/fabrica-font.css" />
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/top-bar.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/about.css" />
    <script src="js/modernizr.js"></script>
  </head>

  <body>
    <!-- Top Bar-->
    <div class="header">
      <div class="fixed">
        <nav class="top-bar" data-topbar>
          <ul class="title-area">
            <li class="name">
              <a href="home.html"><img src="img/logo-blue.png"/></a>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
          </ul>

          <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
              <li class="nav-about has-dropdown"><a href="home.html">about</a></li>
              <li class="nav-clients has-dropdown"><a href="clients.html">clients</a></li>
              <li class="nav-consultants has-dropdown"><a href="consultants.html">consultants</a></li>
              <li class="nav-partners has-dropdown"><a href="partners.html">partners</a></li>
              <li><a href="partners.html#donate_today">donate</a></li>
              <li> <a href="contact.html">contact us</a></li>
            </ul>
          </section>
        </nav>
        <div class="has-dropdown sub-bar">
          <div class="nav-about sub-about">
            <ul class="inline-list">
              <li class="sub"><a href="#about_us" class="smooth_scroll">about us</a></li>
              <li class="sub sub-last"><a href="#executive_committee" class="smooth_scroll">executive committee</a></li>
            </ul>
          </div>
          <div class="nav-clients sub-clients">
            <ul class="inline-list">
              <li class="sub"><a href="clients.html#our_services" class="smooth_scroll">our services</a></li>
              <li class="sub"><a href="clients.html#faq" class="smooth_scroll">FAQ</a></li>
              <li class="sub"><a href="clients.html#social_impact" class="smooth_scroll">social impact</a></li>
              <li class="sub"><a href="clients.html#application_process" class="smooth_scroll">application process</a></li>
              <li class="sub sub-last"><a href="clients.html#client_application" class="smooth_scroll">client application</a></li>
            </ul>
          </div>
          <div class="nav-consultants sub-consultants">
            <ul class="inline-list">
              <li class="sub"><a href="consultants.html#who_we_are" class="smooth_scroll">who we are</a></li>
              <li class="sub"><a href="consultants.html#why_TBG" class="smooth_scroll">why TBG?</a></li>
              <li class="sub"><a href="consultants.html#recruitment_timeline" class="smooth_scroll">recruitment timeline</a></li>
              <li class="sub sub-last"><a href="consultants.html#consultant_application" class="smooth_scroll">consultant application</a></li>
            </ul>
          </div>
          <div class="nav-partners sub-partners">
            <ul class="inline-list">
              <li class="sub"><a href="partners.html#why_partner" class="smooth_scroll">why partner?</a></li>
              <li class="sub"><a href="partners.html#sponsors" class="smooth_scroll">sponsors</a></li>
              <li class="sub"><a href="partners.html#individual_donors" class="smooth_scroll">individual donors</a></li>
              <li class="sub sub-last"><a href="partners.html#donate_today" class="smooth_scroll">donate today</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="basic-panel-mailer">
      <div class="app-landing row">
        <div class="large-12 columns">
          <a name="our_services" class="anchor-link"></a> 
          <h2>thank you for your inquiry</h2>
          <div class="application-text">
            We will get back to you shortly!
          </div>
        </div>
      </div>
    </div>

    <!-- Beginning of Footer-->
    <div class="footer">
      <div class="row">
        <div class="medium-3 columns">
          <div class="footer-title">
            CONTACT US
          </div>
          <div class="row">
            <div class="small-1 columns">
              <ul class="footer-list">
                <li class="footer-item"> 
                  <img src="img/mail.png"/></li>
                <li class="footer-item"> 
                  <img src="img/facebook.png"/></li>
                <li class="footer-item"> 
                  <img src="img/twitter.png"/></li>
                <li class="footer-item"> 
                  <img src="img/linkedin.png"/></li>
              </ul>
            </div>
            <div class="small-10 columns">
              <ul class="footer-list2">
                <li class="footer-item"> 
                  <a href="mailto:info@theberkeleygroup.org">info@theberkeleygroup.org</a></li>
                <li class="footer-item"> 
                  <a href="http://facebook.com/theberkeleygroup">Facebook</a></li>
                <li class="footer-item"> 
                  <a href="http://twitter.com/theberkeleygrp">Twitter</a></li>
                <li class="footer-item"> 
                  <a href="http://linkedin.com/company/the-berkeley-group">LinkedIn</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="medium-3 medium-offset-1 columns">
          <div class="footer-title2">
            WORK WITH US
          </div>
          <ul class="footer-list">
            <li class="footer-item"><a href="clients.html">Clients</a></li>
            <li class="footer-item"><a href="consultants.html"> Consultants</a></li>
            <li class="footer-item"><a href="partners.html"> Partners</a></li>
          </ul>
        </div>
        <div class="medium-2 large-offset-3 columns">
          <div class="footer-logo center">
            <img src="img/footer-logo.png"/>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/foundation.min.js"></script>

    <script>
    $(document).foundation();
    </script>
    <script src="js/app.js"></script>
  </body>
</html>
