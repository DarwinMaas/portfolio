<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Poppins:wght@100;200;300;400&display=swap"
      rel="stylesheet"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Hey there! I'm Darwin</title>
    <!-- ScrollReveal javascript CDN -->
    <script src="https://unpkg.com/scrollreveal"></script>
  </head>
<body>
<!-- Nav -->
<nav>
      <a href="index.html"><div class="logo">Darwin</div></a>
      <ul class="nav-bar">
        <a href="about.html"><li class="nav-links">About</li></a>
        <a href="works.html"><li class="nav-links">Portfolio</li></a>
        <a href="#contact"><li class="nav-links">Contact</li></a>
      </ul>

      <div class="toggle"></div>
    </nav>
    <section id="contact-me">
      <form action="message.php" method="post">
      <div class="contact-me-container">
        <h1>Send Me A Message.</h1>
        <input type="text" name="fname" placeholder="First Name">
        <input type="email" name="email" placeholder="Email Address">
        <textarea type="text" name="message" placeholder="Your Message To Me"></textarea>
        <button type="submit">Send Message</button>
      </div>
      </form>
    </section>
    <footer id="contact">
      <h1>Let's Collaborate!</h1>
      <div class="footer-container">
        <div class="footer-text-1">
          <h3>
            Ready To Start A Project? <br />
            Let's Work Together
          </h3>
          <a href="mailto:maasdarwin@gmail.com"><p>maasdarwin@gmail.com</p></a>
        </div>
        <div class="footer-text-2">
          <h3>Social & Freelancing Platforms</h3>
          <a href="https://www.instagram.com/darwinnnn.m/" target="_blank"
            ><i class="bx bxl-instagram"></i
          ></a>
          <a href="https://www.facebook.com/DarwinMaas1201/" target="_blank"
            ><i class="bx bxl-facebook-square"></i
          ></a>
          <a
            href="https://www.linkedin.com/in/darwin-maas-6a00571b5/"
            target="_blank"
            ><i class="bx bxl-linkedin-square"></i
          ></a>
          <a
            href="https://www.fiverr.com/darwin_maas?up_rollout=true"
            target="_blank"
            ><p>fiverr</p></a
          >
          <a
            href="https://www.upwork.com/freelancers/~018ee160f8b7ac2a80"
            target="_blank"
            ><p>upwork</p></a
          >
        </div>
      </div>
      <p class="copyright">
        ?? Copyright 2021 Darwin Maas. All Rights Reserved.
      </p>
    </footer>
    <script src="javascript/scroll.js"></script>
    <script src="javascript/toggle.js"></script>
</body>
</html>