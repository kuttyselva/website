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

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

 /* INTRO SECTION
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.intro {
  background: #993399;
  padding: 100px 0;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
  text-align: center;
}

h1 {
  font-size: 2.5rem;
}


/* TIMELINE
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.timeline ul {
 
  padding: 50px 0;
}

.timeline ul li {
  list-style-type: none;
  position: relative;
  width: 6px;
  margin: 0 auto;
  padding-top: 50px;
  background: #000000;
   
}

.timeline ul li::after {
  content: '';
  position: absolute;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%);
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: inherit;
}

.timeline ul li div {
  position: relative;
  bottom: 0;
  width: 400px;
  padding: 15px;
  background: #ffffff;
   border: 4px solid #000000;
}

.timeline ul li div::before {
  content: '';
  position: absolute;
  bottom: 7px;
  width: 0;
  height: 0;
  border-style: solid;
}

.timeline ul li:nth-child(odd) div {
  left: 45px;
}

.timeline ul li:nth-child(odd) div::before {
  left: -15px;
  border-width: 8px 16px 8px 0;
  border-color: transparent #000000 transparent transparent;
}

.timeline ul li:nth-child(even) div {
  left: -439px;
}

.timeline ul li:nth-child(even) div::before {
  right: -15px;
  border-width: 8px 0 8px 16px;
  border-color: transparent transparent transparent #000000;
}

time {
  display: block;
  font-size: 1.2rem;
  font-weight: bold;
  margin-bottom: 8px;
}


/* EFFECTS
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.timeline ul li::after {
  transition: background .5s ease-in-out;
}

.timeline ul li.in-view::after {
  background: #ffffff;
  border: 4px solid #000000;
}

.timeline ul li div {
  visibility: hidden;
  opacity: 0;
  transition: all .5s ease-in-out;
}

.timeline ul li:nth-child(odd) div {
  transform: translate3d(200px, 0, 0);
}

.timeline ul li:nth-child(even) div {
  transform: translate3d(-200px, 0, 0);
}

.timeline ul li.in-view div {
  transform: none;
  visibility: visible;
  opacity: 1;
}


/* GENERAL MEDIA QUERIES
–––––––––––––––––––––––––––––––––––––––––––––––––– */

@media screen and (max-width: 900px) {
  .timeline ul li div {
    width: 250px;
  }
  .timeline ul li:nth-child(even) div {
    left: -289px;
    /*250+45-6*/
  }
}

@media screen and (max-width: 600px) {
  .timeline ul li {
    margin-left: 20px;
  }
  .timeline ul li div {
    width: calc(100vw - 91px);
  }
  .timeline ul li:nth-child(even) div {
    left: 45px;
  }
  .timeline ul li:nth-child(even) div::before {
    left: -15px;
    border-width: 8px 16px 8px 0;
    border-color: transparent #000000 transparent transparent;
  }
}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px;background-image: url(ut.jpg)">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;background-image: url(ut.jpg)" id="mySidebar"><br>
  <div class="w3-container">
    
      
    
    <img src="vcet.png"  style="width:100%; " class="w3-round"><br><br>
    <h2><b>Department of CSE</b></h2>
    
  </div>
  <div class="w3-bar-block">
      <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-green"><i class="fa fa-th-large fa-fw w3-margin-right"style="font-size:25px;" ></i><b>Home</b></a> 
      <a  onclick="openCity(event,'anno')" id="defaultOpen" class="tablin w3-bar-item w3-button w3-padding w3-text-deep-orange"><i class="fab fa-app-store-ios fa-fw w3-margin-right"style="font-size:25px;"></i><b>Announcement</b></a> 
    <a  onclick="openCity(event,'syl')" class="tablin w3-bar-item w3-button w3-padding w3-text-blue"><i class="fas fa-chart-pie fa-fw w3-margin-right"style="font-size:25px;"></i><b>Syllabus</b></a> 
    <a onclick="openCity(event,'res')" class="tablin w3-bar-item w3-button w3-padding w3-text-purple"><i class="fab fa-skyatlas fa-fw w3-margin-right"style="font-size:25px;"></i><b>Resources</b></a> 
    <a  onclick="openCity(event,'ass')" class="tablin w3-bar-item w3-button w3-padding w3-text-black"><i class="fab fa-accusoft fa-fw w3-margin-right"style="font-size:25px;"></i><b>Assignments</b></a> 
    <a  onclick="openCity(event,'grd')" class="tablin w3-bar-item w3-button w3-padding w3-text-pink"><i class="fa fa-graduation-cap fa-fw w3-margin-right"style="font-size:25px;"></i><b>Grades</b></a> 
    <a  onclick="openCity(event,'lin')" class="tablin w3-bar-item w3-button w3-padding w3-text-brown"><i class="fa fa-link fa-fw w3-margin-right"style="font-size:25px;"></i><b>Links</b></a> 
    
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
    <h1><b>Design and Analysis of Algorithm</b></h1>
    
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="tabcon w3-row-padding" id="anno">
 <section class="timeline">
  <ul>
    <li>
      <div>
        <time>1934</time>
        Some content here
      </div>
    </li>
    <li>
      <div>
        <time>1937</time> Proin quam velit, efficitur vel neque vitae, rhoncus commodo mi. Suspendisse finibus mauris et bibendum molestie. Aenean ex augue, varius et pulvinar in, pretium non nisi.
      </div>
    </li>
    <li>
        <div style="color: #000000">
        <time>1940</time> Proin iaculis, nibh eget efficitur varius, libero tellus porta dolor, at pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros.
      </div>
    </li>
    <li>
      <div>
        <time>1943</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>1946</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>1956</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>1957</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>1967</time> Aenean condimentum odio a bibendum rhoncus. Ut mauris felis, volutpat eget porta faucibus, euismod quis ante.
      </div>
    </li>
    <li>
      <div>
        <time>1977</time> Vestibulum porttitor lorem sed pharetra dignissim. Nulla maximus, dui a tristique iaculis, quam dolor convallis enim, non dignissim ligula ipsum a turpis.
      </div>
    </li>
    <li>
      <div>
        <time>1985</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>2000</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>2005</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    
     
    <!-- more list items here -->
  </ul>
     
</section>
  </div>
<div class="tabcon w3-container w3-padding-large" style="margin-bottom:32px" id="syl">
   
    <header id="about">
      <h1><b>Syllabus</b></h1>
    </header>
    <!-- Progress bars / Skills -->
  <div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third" id="mubtn">
  <div class="w3-card w3-container" style="min-height:460px;background-color: white; border: 5px solid black;">
      <h3><b>UNIT I</b></h3><br>
 
  <h3><b>FUNDAMENTALS & LINK LAYER</b></h3>
<p>Building a network</p>
<p> Requirements</p>
<p>Layering and protocols </p
<p> Internet Architecture </p>
<p> Network software</p>
<p> Performance</p> 
  <p> Link layer Services </p>
  <p>Framing </p>
  <p> Error Detection </p>
  <p>Flow control </p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px;background-color: white; border: 5px solid black;">
      <h3><b>UNIT II</b></h3><br>

  <h3><b>MEDIA ACCESS & INTERNETWORKING</b> </h3>
  <p>Media access control</p> 
 <p>Ethernet (802.3)</p> 
 <p> Wireless LANs – 802.11 </p>
 <p>Bluetooth </p>
  <p> Switching and bridging</p>
  <p>Basic Internetworking (IP, CIDR, ARP, DHCP,ICMP )</p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px;background-color: white; border: 5px solid black;">
      <h3><b>UNIT III</b></h3><br>
  
  <h3><b>ROUTING</b> </h3>
  <p>Routing (RIP, OSPF, metrics)</p> 
  <p>  Switch basics </p>
  <p> Global Internet (Areas, BGP, IPv6)</p>
  <p> Multicast –addresses</p> 
  <p>multicast routing (DVMRP, PIM) </p>
 
  </div>
</div>
      
</div>
  <div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px;background-color: white; border: 5px solid black;">
      <h3><b>UNIT IV</b></h3><br>
  
     <h3><b>TRANSPORT LAYER</b></h3>
  <p>Overview of Transport layer</p>  
  <p>UDP - Reliable byte stream (TCP) </p>
  <p>Connection management </p>
  <p> Flow control </p>
  <p> Retransmission </p> 
  <p>TCP Congestion control </p>
  <p>Congestion avoidance (DECbit, RED) </p>
  <p>QoS </p>
  <p>Application requirements</p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px;background-color: white; border: 5px solid black;">
      <h3><b>UNIT V</b></h3><br>
 

  <h3><b> APPLICATION LAYER</b></h3>
  <p>Traditional applications</p>
  <p>-Electronic Mail (SMTP, POP3, IMAP, MIME)</p>
  <p>HTTP</p>
  <p>Web Services</p>
  <p>DNS</p>
  <p>SNMP</p>
        </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px;background-color: white; border: 5px solid black;">
  <h3>Download</h3><br>
  <a href="https://www.mediafire.com/?t632cx9icbvnbr2"><i class="fab fa-cloudversify w3-margin-bottom w3-text-red" style="font-size:180px"></i></a>
  <p>Click the icon to Download the Syllabus pdf</p>
  </div>
</div>
</div>
    
    
  </div>

  <!-- Second Photo Grid-->
  <div class="tabcon w3-row-padding" id="res">
     <header id="about">
      <h1><b>Resources</b></h1>
    </header>
    <!-- Progress bars / Skills -->
  <div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third" id="mubtn">
  <div class="w3-card w3-container" style="min-height:460px;background-color: white; border: 5px solid black;">
     <h3><b>UNIT I</b></h3><br>
  <a href="https://www.mediafire.com/?t632cx9icbvnbr2"><i class="fab fa-cloudversify w3-margin-bottom w3-text-red" style="font-size:180px"></i></a>
  <p><b>Click the icon to Download the unit 1 pdf</b></p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px;background-color: white; border: 5px solid black;">
     <h3><b>UNIT II</b></h3><br>
  <a href="https://www.mediafire.com/?t632cx9icbvnbr2"><i class="fab fa-cloudversify w3-margin-bottom w3-text-blue" style="font-size:180px"></i></a>
  <p><b>Click the icon to Download the unit 2 pdf</b></p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px;background-color: white; border: 5px solid black;">
     <h3><b>UNIT III</b></h3><br>
  <a href="https://www.mediafire.com/?t632cx9icbvnbr2"><i class="fab fa-cloudversify w3-margin-bottom w3-text-green" style="font-size:180px"></i></a>
  <p><b>Click the icon to Download the unit 3 pdf</b></p>
 
  </div>
</div>
      
</div>
  <div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px;background-color: white; border: 5px solid black;">
     <h3><b>UNIT IV</b></h3><br>
  <a href="https://www.mediafire.com/?t632cx9icbvnbr2"><i class="fab fa-cloudversify w3-margin-bottom w3-text-orange" style="font-size:180px"></i></a>
  <p><b>Click the icon to Download the unit 4 pdf</b></p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px;background-color: white; border: 5px solid black;">
     <h3><b>UNIT V</b></h3><br>
  <a href="https://www.mediafire.com/?t632cx9icbvnbr2"><i class="fab fa-cloudversify w3-margin-bottom w3-text-pink" style="font-size:180px"></i></a>
  <p><b>Click the icon to Download the unit 5 pdf</b></p>
        </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px;background-color: white; border: 5px solid black;">
  <h3><b>QUESTION BANK</b></h3><br>
  <a href="https://www.mediafire.com/?t632cx9icbvnbr2"><i class="fab fa-cloudversify w3-margin-bottom w3-text-yellow" style="font-size:180px"></i></a>
  <p><b>Click the icon to Download the question bank pdf</b></p>
  </div>
</div>
  </div>
  </div>

 
 

  <!-- Images of Me -->
 

  <div class="tabcon w3-container w3-padding-large" style="margin-bottom:32px" id="ass">
   
    <header id="about">
      <h4><b>Department Status</b></h4>
    </header>
  
   <?php
    if(isset($_POST['submit']))
    {
        //The form has been submitted, prep a nice thank you message
        $output = '<h1>Thanks for your file and message!</h1>';
        //Set the form flag to no display (cheap way!)
        $flags = 'style="display:none;"';

        //Deal with the email
        $name=$_POST['name'];
	$email=$_POST['email'];

        $to = 'kuttyselva57@gmail.com';
        $subject = 'an assignment for you';

        $message = strip_tags($_POST['message']);
        $attachment = chunk_split(base64_encode(file_get_contents($_FILES['file']['tmp_name'])));
        $filename = $_FILES['file']['name'];

        $boundary =md5(date('r', time())); 

        $headers = "From: ".$name."\r\nReply-To: kuttyselva57@gmail.com.com";
        $headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";

        $message="This is a multi-part message in MIME format.

--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

--_2_$boundary
Content-Type: text/plain; charset=\"iso-8859-1\"
Content-Transfer-Encoding: 7bit

$message

--_2_$boundary--
--_1_$boundary
Content-Type: application/octet-stream; name=\"$filename\" 
Content-Transfer-Encoding: base64 
Content-Disposition: attachment 

$attachment
--_1_$boundary--";

        mail($to, $subject, $message, $headers);
    }
?>


<?php echo $output; ?>
<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" <?php echo $flags;?>>
      <div class="w3-section">
          <label for="name">Name</label>
        <input class="w3-input w3-border" type="text" name="name" required>
      </div>
      <div class="w3-section">
          <label for="email">Email</label>
        <input class="w3-input w3-border" type="text" name="email" required>
      </div>
      <div class="w3-section">
        <label for="message">Roll No</label>
        <input class="w3-input w3-border" type="text" name="message" id="message" required>
      </div>
    <div class="w3-section">
        <label for="file">File</label>
        <input class="w3-input w3-border" type="file" name="file" id="file">
      </div>
      <button type="submit" name="submit" id="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
      
  
  </div>
  
  
  <!-- Contact Section -->
 <div class="tabcon w3-container w3-padding-large w3-grey" style="opacity:0.8" id="grd">
      <style>
          td {
  border: 1px solid #726E6D;
  padding: 15px;
}

thead{
  font-weight:bold;
  text-align:center;
  background: #625D5D;
  color:white;
}

table {
  border-collapse: collapse;
}

.footer {
  text-align:right;
  font-weight:bold;
}

tbody >tr:nth-child(odd) {
  background: #D1D0CE;
}

      </style>
  <table>
    <thead>
      <tr>
        <td colspan="3">Course </td>
        <td rowspan="2"> Semester </td>
        <td rowspan="2"> Credits </td>
        <td colspan="2"> Grade </td>
      </tr>
      <tr>
        <td>Code </td>
        <td colspan="2"> Name </td>
        <td> Letter </td>
        <td> Points </td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>CS 225 </td>
        <td colspan="2">Data Structures </td>
        <td> Fall 2015</td>
        <td> 3.0 </td>
        <td> A </td>
        <td> 12.0 </td>
      </tr>
      <tr>
        <td>PHIL 105 </td>
        <td colspan="2">Ethics </td>
        <td> Fall 2015</td>
        <td> 3.0 </td>
        <td> A- </td>
        <td> 10.98 </td>
      </tr>
      <tr>
        <td>ECE 310 </td>
        <td colspan="2">Digital Signal Processing </td>
        <td> Fall 2015</td>
        <td> 3.0 </td>
        <td> A </td>
        <td> 12 </td>
      </tr>
      <tr>
        <td>CS 373 </td>
        <td colspan="2">Combinatorial Algorithms </td>
        <td> Fall 2015</td>
        <td> 3.0 </td>
        <td> B+ </td>
        <td> 9.99</td>
      </tr>
      <tr>
        <td>MATH 225 </td>
        <td colspan="2">Multi-Variable Calculus </td>
        <td> Fall 2015</td>
        <td> 3.0 </td>
        <td> A- </td>
        <td> 10.98 </td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="4" class="footer">Total</td>
        <td> 15.0 </td>
        <td colspan="2">55.95 </td>
      </tr>
      <tr>
        <td colspan="4" class="footer">GPA</td>
        <td colspan="3">3.73 / 4.0 </td>
      </tr>
  </table>

  </div>

   
 <div class="tabcon w3-center w3-padding-24" id="lin">
      <header id="about">
      <h1><b>Links</b></h1>
    </header>
      <div>
      <iframe width="100%" height="500"  name="frm" src="https://www.youtube.com/embed/b9HafRqtVWc">
</iframe>
  
      </div>
     
    <!-- Progress bars / Skills -->
  <div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third" id="mubtn">
  <div class="w3-card w3-container" style="min-height:460px;background-color: white; border: 5px solid black;">
     <h3><b>Routers</b></h3><br>
     <a href="https://www.youtube.com/embed/Ofjsh_E4HFY" target="frm"><i class="fab fa-youtube w3-margin-bottom w3-text-red" style="font-size:150px"></i></a>
  <h3><b>Hub router switch explanation</b></h3>
  </div>
</div>

<div class="w3-third" id="mubtn">
  <div class="w3-card w3-container" style="min-height:460px;background-color: white; border: 5px solid black;">
     <h3><b>TCP/IP protocol</b></h3><br>
     <a href="https://www.youtube.com/embed/b9HafRqtVWc" target="frm"><i class="fab fa-youtube w3-margin-bottom w3-text-red" style="font-size:150px"></i></a>
  <h3><b>tcp Gate Lectures by Ravindrababu Ravula</b></h3>
  </div>
</div>

<div class="w3-third" id="mubtn">
  <div class="w3-card w3-container" style="min-height:460px;background-color: white; border: 5px solid black;">
     <h3><b>The OSI Model Animation</b></h3><br>
     <a href="https://www.youtube.com/embed/-6Uoku-M6oY" target="frm"><i class="fab fa-youtube w3-margin-bottom w3-text-red" style="font-size:150px"></i></a>
  <h3><b>3D animation of The Open Systems Interconnection Model in Computer Networking</b></h3>
  </div>
</div>
      
</div>
  <div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third" id="mubtn">
  <div class="w3-card w3-container" style="min-height:460px;background-color: white; border: 5px solid black;">
     <h3><b>IP</b></h3><br>
     <a href="https://www.youtube.com/embed/wbp5DDSCrUw" target="frm"><i class="fab fa-youtube w3-margin-bottom w3-text-red" style="font-size:150px"></i></a>
  <h3><b>Lecture Series on Computer Networks by Prof. S. Ghosh,Department of Computer Science & Engineering, I.I.T.,Kharagpur.</b></h3>
  </div>
</div>

<div class="w3-third" id="mubtn">
  <div class="w3-card w3-container" style="min-height:460px;background-color: white; border: 5px solid black;">
     <h3><b>Network layer</b></h3><br>
     <a href="https://www.youtube.com/embed/ZLtkhsgQp8U" target="frm"><i class="fab fa-youtube w3-margin-bottom w3-text-red" style="font-size:150px"></i></a>
  <h3><b>Gate Lectures by Ravindrababu Ravula</b></h3>
  </div>
</div>

<div class="w3-third" id="mubtn">
  <div class="w3-card w3-container" style="min-height:460px;background-color: white; border: 5px solid black;">
     <h3><b>802.3</b></h3><br>
     <a href="https://www.youtube.com/embed/KDHbP81SAmA" target="frm"><i class="fab fa-youtube w3-margin-bottom w3-text-red" style="font-size:150px"></i></a>
  <h3><b>nptel lecture by prof.s.ghosh</b></h3>
  </div>
</div>
  </div>
  </div>

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
function openCity(evt, cityName) {
    var i, tabcon, tablin;
    tabcon = document.getElementsByClassName("tabcon");
    for (i = 0; i < tabcon.length; i++) {
        tabcon[i].style.display = "none";
    }
    tablin = document.getElementsByClassName("tablin");
    for (i = 0; i < tablin.length; i++) {
        tablin[i].className = tablin[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


</script>
<script>

   (function() {

  'use strict';

  // define variables
  var items = document.querySelectorAll(".timeline li");

  // check if an element is in viewport
  // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        items[i].classList.add("in-view");
      }
    }
  }

  // listen for events
  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);

})();
</script>
<script>
    function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}
</script>
<script>
    var items = document.querySelectorAll(".timeline li");
 
// code for the isElementInViewport function
 
function callbackFunc() {
  for (var i = 0; i < items.length; i++) {
    if (isElementInViewport(items[i])) {
      items[i].classList.add("in-view");
    }
  }
}
 
window.addEventListener("load", callbackFunc);
window.addEventListener("scroll", callbackFunc);
</script>

</body>
</html>