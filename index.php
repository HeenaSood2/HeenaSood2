<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://fonts.googleapis.com/css?family=Vollkorn:400,400i,600,700,900&display=swap"
    rel="stylesheet"
  />
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
/>

    <link rel="stylesheet" href="style.css">
    <title>Himachal Tourism</title>
</head>
<body>
  <div class="container">
      <div class="hamburger-menu">
          <div class="line line-1"></div>
          <div class="line line-2"></div>
          <div class="line line-3"></div>
      </div>
      <header class="header">
          <div class="img-wrapper">
      <img src="images/header-bg.jpg" alt="background">
          </div>
          <div class="banner">
          <h1> Himachal Tourism </h1>
          <p>Welcome to the state of happiness</p>
          <button onclick="window.location.href='discover.php';">Discover Now</button>
          
        </div>
<img src="images/air-balloon.png" class="header-image" alt="">

      </header>
      <section class="sidebar">
          <ul class="menu">
            <li class="menu-item">
                <a href="#" class="menu-link " data-content="Home">Home</a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link" data-content="Visit Places" >Visit Places</a> 
            </li>
            <li class="menu-item">
                <a href="#aboutus" class="menu-link" data-content="About Us">About Us</a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link" data-content="Contact">Contact</a>
            </li>
            <li class="menu-item">
                <a href="frontPage.php" class="menu-link" data-content="Logout">Logout</a>
            </li>
          </ul>
          <div class="social-media">
<a href="#"><i class="fab fa-facebook-f"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
          </div>
      </section>


<!---------------About Us Page-------------------->
<a name="aboutus">
      <section class="about">
    <h1 class="section-heading">About Us</h1>
    <div class="underline"></div>
          </div>
          
      <div class="column">
<div class="info">
     <p>We are a main online travel organization in America giving a ‘best as far as class can tell with the objective to be ‘ America ‘s Travel Planner’. Through our site, www.’Company Name’.com, our versatile applications and our other related stages, recreation and business voyagers can investigate, explore, analyze costs and book an extensive variety of administrations taking into account their movement needs.

Since our origin in 2006, in excess of 7 million clients have utilized at least one of our exhaustive travel-related administrations, which incorporate local and global air ticketing, lodging appointments, homestays, occasion bundles, transport ticketing, rail ticketing, exercises and subordinate administrations.
</p>
<br>

<p class="secondp">With more than 83,000 inns contracted crosswise over America, we are America ‘s biggest stage for residential lodgings.

A solid and “believed” travel brand of America , our qualities incorporate a vast and faithful client base, a multi-channel stage for relaxation and business explorers, a powerful portable eco-framework for a range of voyagers and providers, a solid innovation stage intended to convey an abnormal state of adaptability and advancement and a prepared senior supervisory crew including industry officials with profound roots in the movement business in America and abroad.</p>
</div>

<img class="myImage" src="images/mypic1.png" alt="MyImage">
</section>
</a>
<!---------------About Us Page-------------------->




      <!-- Contact -->
      <section class="contact">
        <h1 class="contact-heading">Contact Us</h1>
        <form class="contact-form center">
          <div class="input-group">
            <label class=" name2">Full Name *</label>
            <input
              type="text"
              class="contact-input"
              placeholder="Enter Your Name"
              autocomplete="off"
            />
          </div>
          <div class="input-groups">
            <div class="input-group">
              <label class="name "> Email *</label>
              <input
                type="email"
                class="contact-input"
                placeholder="Enter Your Email"
                autocomplete="off"
              />
            </div>
            <div class="input-group">
              <label class="name "> Phone</label>
              <input
              class="input"  
              type="text"
                class="contact-input"
                placeholder="Enter Phone Number"
                autocomplete="off" 
              />
            </div>
          </div>
          <div class="input-group">
            <label>Message</label>
            <textarea
              class="form-textarea"
              placeholder="Your Message Here..."
              autocomplete="off"
            ></textarea>
          </div>
          <input type="submit" value="Submit" class="form-btn" />
        </form>
      </section>
      <!-- End of Contact -->


















  </div>
    <script src="tourism.js"></script>
    
</body>
</html>