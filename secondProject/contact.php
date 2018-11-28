<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link rel="shortcut icon" type="image/png" href="images/icon.PNG">
  <meta charset="utf-8">
  <!-- this is for the mobile version of our website -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="contactStyle.css">
  <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
  body, html {
      height: 100%;
      color: #777;
      line-height: 1.8;
  }
</style>
</head>

<body>

  <header>
    <a href="index.html" class="header-brand"> DaveSmith</a>
    <nav>
      <ul>
        <li><a href="aboutMe.html">About Me</a></li>
        <li><a href="portfolio.html">Portfolio</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <a href="cases.html" class="header-cases"> Pictures </a>
      <!-- <img src="pictures/TMB.jpg" alt="TMB picture"> -->
    </nav>
  </header>
  <main>
    <section class="index-banner">
      <div class="container">
        <form id="contact" action="contactPHP.php" method="POST" role="form">
          <h3>Contact Form</h3>
          <h4>Contact David for custom quote and/or questions</h4>
          <fieldset>
            <!-- <label for="name">Name &#42;</label> -->
            <input for="name" name="name" id="name" placeholder="Your name" type="text" tabindex="1" required="required">
          </fieldset>
          <fieldset>
            <!-- <label for="email">Email &#42;</label> -->
            <input for='email' name="email" id="email" placeholder="Your Email Address" type="text" tabindex="2" required="required">
          </fieldset>
          <!-- <fieldset>
            <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required="required">
          </fieldset> -->
          <!-- <fieldset>
            <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
          </fieldset> -->
          <fieldset>
            <!-- <label for="message">Message &#42;</label> -->
            <textarea for="message" name="message" type="text" id="message" placeholder="Type your message here...." tabindex="5" required="required"></textarea>
          </fieldset>
          <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
          </fieldset>
        </form>
      </div>
    </section>
    </div>
  </main>
</body>

</html>
