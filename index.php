<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Photography Portfolio</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unpkg.com/@popperjs/core@2.10.2/dist/umd/popper.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/tippy.js@6.3.4/dist/tippy.css" />
  <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
    <nav class="navbar">
        <a class="navbar-brand" href="/">
            <div class="logo-image">
              <img src="logo1.jpg" class="img-fluid">
            </div>
        </a>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About Me</a></li>
        <li><a href="#best_clicks">Best Clicks</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact Me</a></li>
      </ul>
    </nav>
    </header>

    <section id="home">
        <div class="main">
          <h1 class="headings" >I AM <br> RAVINDU JAYASINGHE</h1>
          <a href="https://www.fiverr.com/joschamayer/do-portrait-and-headshot-photography-in-london?context_referrer=subcategory_listing&source=vertical-buckets&ref_ctx_id=987af7a94142e9d589e00a2addca58ee&pckg_id=1&pos=1&context_type=rating&funnel=987af7a94142e9d589e00a2addca58ee&fiverr_choice=true&imp_id=e14b06dd-8cb4-45f3-8ed2-9ec8771938f2" target="_blank">
              <button class="btn">
                Hire me
              </button>
          </a>
          <a href="signup.php" target="_blank">
              <button class="btn">
                Signup
              </button>
          </a>            
        </div>
        <div class="sidebar-container">
          <div class="sidebar-trigger">
            <i class="fa-solid fa-angles-right"></i>
          </div>
          <aside class="sidebar">
            <h3>Related Links</h3>
            <ul>
              <li><a href="https://www.behindtheshutter.com/" target="_blank">Blog</a></li>
              <li><a href="https://www.richaparekh.com/client-testimonials" target="_blank">Testimonials</a></li>
              <li><a href="https://www.robgreer.com/about/faq" target="_blank">FAQs</a></li>
              <li><a href="https://shotkit.com/free-photographers-resources/" target="_blank">Resources</a></li>
            </ul>
          </aside>
        </div>
        
    </section>

    <section id="about">
      <h1 class="headings">ABOUT ME</h1>
      <div id="pic">
        <img src="aimg.jpg" alt="image">
        <div id="intro">
          <h2>RAVINDU JAYASINGHE</h2>
          <P>Welcome to my captivating world of photography. I'm Ravindu Jayasinghe, a passionate and versatile photographer with a keen eye for detail and a unique artistic vision. With an impeccable ability to capture the essence of a moment, I strive to transform ordinary scenes into extraordinary works of art that evoke emotions and invite viewers to step into the frame. Whether it's the serene beauty of landscapes, the depth and personality of portraits, or the raw authenticity of street photography, my portfolio showcases the rich tapestry of life. Through careful composition and post-processing techniques, I enhance the visual impact of each image while preserving its authenticity. With a constant thirst for inspiration, I embrace new challenges and push the boundaries of creativity, delivering captivating visuals that leave a lasting impression. Join me on this visual journey and experience the extraordinary through my lens, where every click tells a unique and compelling story.</P>
          <p>My passion for photography goes beyond the technical aspects; it's a medium through which I connect with people and the world around me. I believe that every photograph has a story to tell, and I strive to capture the essence of those stories in each frame. From the vibrant colors of nature to the subtle expressions of human emotion, I am constantly seeking the beauty that exists in the simplest of moments. My portfolio is a reflection of my dedication and unwavering commitment to my craft, as I continue to explore new perspectives and push my creative boundaries. I invite you to join me on this visual journey, where every image is an invitation to see the world through a different lens and discover the extraordinary in the ordinary.</p>
          <div id="dynamic-content">
            <button id="more-info-btn" onclick="toggleContent(true)">Read More</button>
            <div id="content" style="display: none;">
              <p><br>In addition to my passion and artistic vision,I'm proud to have achieved several notable milestones throughout my photography career. My work has been recognized and awarded in prestigious international competitions, earning me accolades and further fueling my drive for excellence. I have also had the privilege of having my photographs featured in renowned publications, galleries, and exhibitions, allowing me to share my unique perspective with a broader audience.With a deep understanding of the technical aspects of photography, I am well-versed in various camera systems, lenses, and lighting techniques. This knowledge, combined with my post-processing skills, allows me to bring out the best in each image while maintaining its authentic essence.Whether its enhancing the vivid colors of a landscape, highlighting the intricate details of a portrait, or conveying the raw energy of a street scene, I approach each project with meticulous attention to detail and a commitment to delivering exceptional results.As an avid traveler, I draw inspiration from diverse cultures, breathtaking landscapes, and the captivating stories that unfold around the world. Through my lens, I strive to capture the essence of these experiences and share them with others, transcending language barriers and connecting people on a deeper level. My photographs aim to evoke emotions, spark conversations, and invite viewers to embark on their own visual journeys.I'm continuously seeking new challenges and opportunities to expand my artistic horizons. Whether collaborating with clients on commercial projects, working on personal photo essays, or mentoring aspiring photographers, I am always excited to embrace fresh perspectives and contribute to the vibrant photography community.Thank you for taking the time to learn more about my journey as a photographer. I invite you to explore my portfolio and join me in experiencing the extraordinary stories that unfold through my lens.</p>
            </div>
            <button id="less-info-btn" onclick="toggleContent(false)" style="display: none;">Read Less</button>
          </div>
        </div>
      </div>
    </section>

    <section id="best_clicks">
      <h1 class="headings">Best Clicks</h1>
      <div class="gallery" id="imageSlider">
        <img src="p6.jpg" alt="p6">
        <img src="p1.png" alt="p1">
        <img src="p3.jpg" alt="p3">
        <img src="p2.jpg" alt="p2">
        <img src="p5.jpg" alt="p5">
        <img src="p4.jpg" alt="p4">
        <img src="p7.jpg" alt="p7">
        <img src="p8.jpg" alt="p8">
        <img src="p9.jpg" alt="p9">
      </div>
      <div class="slider-controls">
        <button id="prevButton"><</button>
        <button id="nextButton">></button>
      </div>
    </section>

    <section id="services">
      <h1 class="headings">SERVICES</h1>
      <div class="row">
        <div class="box">
          <img src="s1.png" alt="s1">
         <h1 class="headings">Photography Sessions</h1>
          <p>Capture your special moments with personalized photography sessions that reflect your unique style and personality.From family portraits to individual shoots,let Ravindu Jayasinghe create timeless images that you will cherish.</p>
        </div>
        <div class="box">
          <img src="s2.png" alt="s2">
          <h1 class="headings">Artistic Impressions</h1>
           <p>Elevate your space with captivating fine art prints and decor options. Choose from stunning landscapes, expressive portraits, or thought-provoking street photography, meticulously produced using high-quality materials. Add sophistication and inspiration to your environment.</p>
         </div>
        <div class="box">
          <img src="s3.png" alt="s3">
          <h1 class="headings">Event Photography</h1>
           <p>Make your occasions unforgettable with professional event photography services. From weddings to parties, Ravindu captures the essence and excitement of your event, preserving the joy and emotions for years to come</p>
        </div>
      </div>
    </section>

    <section id="contact">
      <h1 class="headings">CONTACT</h1>
      <form action="functions.php" class="form" method="POST">
        <input type="text" name="name" class="input" placeholder="Enter Your Name" id="contact-name" onkeyup="validateName()" >
        <span id="name-error"></span>
        <input type="email" name="email" class="input" placeholder="Enter Your Email" id="contact-email" onkeyup="validateEmail()" >
        <span id="email-error"></span>
        <textarea name="msg" cols="30" rows="10" placeholder="Enter Your Message" id="contact-message" onkeyup="validateMessage()"></textarea>
        <span id="message-error"></span>
        <input type="submit" value="SEND" id="send" onclick="return validateForm(event)">
        <span id="submit-error"></span>
    </form>
        <div class="popup" id="popup">
          <img src="tick.png">
          <h2>Thank You!</h2>
          <p>Your message has been successfully sent. Thanks!</p>
          <button type="button" onclick="closePopup()">OK</button>
        </div>
    </section>
    

    <footer>
      <div class="social-media">
        <a href="https://www.facebook.com" target="_blank" data-tippy-content="Facebook"><img src="sm1.jpg" alt="Facebook"></a>
        <a href="https://www.instagram.com" target="_blank" data-tippy-content="Instagram"><img src="sm2.png" alt="Instagram"></a>
        <a href="https://www.twitter.com" target="_blank" data-tippy-content="Twitter"><img src="sm3.png" alt="Twitter"></a>
      </div>      
      <div class="contact-info">
        <p>Contact Information:</p>
        <p>Email: ravindu_studio@gmail.com</p>
        <p>Phone: +94 23-456-7890</p>
      </div>
    </footer> 
    <script src="https://unpkg.com/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@6.3.4/dist/tippy-bundle.umd.js"></script>
    <script src="script.js"></script>  
    <?php include ("functions.php"); ?>
</body>
</html>
