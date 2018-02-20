<!DOCTYPE html>
<html>
<title>vcet</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="main.css" type="text/css"/>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px;background-image: url(ut.jpg)">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;background-image: url(ut.jpg)" id="mySidebar"><br>
  <div class="w3-container">
    
      
    
    <img src="vcet.png"  style="width:100%; " class="w3-round"><br><br>
    <h2><b>Department of CSE</b></h2>
    
  </div>
  <div class="w3-bar-block">
      <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-deep-purple"><i class="fab fa-earlybirds fa-fw w3-margin-right"style="font-size:40px;" ></i><b>Subjects</b></a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-pink"><i class="fas fa-chart-line fa-fw w3-margin-right"style="font-size:40px;"></i><b>Status</b></a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-green"><i class="fas fa-address-book fa-fw w3-margin-right"style="font-size:40px;"></i><b>Contact</b></a>
  </div>
 
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Department of CSE</b></h1>
    
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <a href="pqt.php"><img src="pqt.png" alt="picture" style="width:100%;height: 135px" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        <p><b>MA6453 Probability and Queueing Theory</b></p>
        <p><br></p>
        <p><br></p>
       
        
        <p>Handled by Mrs. Lakshmi.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
     <a href="os.php"> <img src="os.png" alt="picture" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        <p><b>CS6401 Operating Systems</b></p>
        <p><br></p>
        <p>Handled by Mrs. revathy</p>
      </div>
    </div>
    <div class="w3-third w3-container">
        <a href="cn.php"><img src="cn.png" alt="picture" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        <p><b>CS6551 Computer Networks</b></p>
        <p><br></p>
        <p>Handled by Mr.Vinoth Chakkaravarthy</p>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
     <a href="se.php"> <img src="se.png" alt="picture" style="width:100%" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        <p><b>CS6403 Software Engineering</b></p>
        <p>Handled by Ms Vithyaa</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
    <a href="mp.php">  <img src="mp.png" alt="picture" style="width:100% ; height: 100px" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        <p><b>EC6504 Microprocessor and Microcontroller</b></p>
        <p><br></p>
        <p><br></p>
        
        <p>Handled by Mrs. Sarala</p>
      </div>
    </div>
    <div class="w3-third w3-container">
        <a href="daa.php"><img src="daa.png" alt="picture" style="width:100%; height: 135px" class="w3-hover-opacity"></a>
      <div class="w3-container w3-white">
        <p><b>CS6402 Design and Analysis of Algorithms</b></p>
<p><br></p>

        <p>Handled by Mrs. Deepa Lakshmi</p>
      </div>
    </div>
  </div>

 
 

  <!-- Images of Me -->
 

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
   
    <header id="about">
      <h4><b>Department Status</b></h4>
    </header>
    <!-- Progress bars / Skills -->
    <p><b>Academic</b></p>
    <div class="w3-grey">
      <div class="w3-container w3-blue w3-padding w3-center" style="width:95%">95%</div>
    </div>
    <p><b>Placements</b></p>
    <div class="w3-grey">
      <div class="w3-container w3-red w3-padding w3-center" style="width:85%">85%</div>
    </div>
    <p><b>Overall</b></p>
    <div class="w3-grey">
      <div class="w3-container w3-purple w3-padding w3-center" style="width:80%">80%</div>
    </div>
    
    <hr>
    
    
  </div>
  
  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey" style="opacity:0.8">
    <h4 id="contact"><b>Contact Us</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>vcet@gmail.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Madurai ,TN</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>+91-452-2465289</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="mail.php"  method="post" name="form">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="message" required>
      </div>
        <button type="submit" name="submit" value="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
    
  </div>

   
  <div class="w3-black w3-center w3-padding-24" id="footer">©2015 Velammal College of Engineering and Technology. Design by VCET-CSE</div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
