<?php
include '../config.php';
// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `books`.`id`,
`books`.`name`,
`books`.`description`,
`books`.`pdf`,
`books`.`imageLocation`,
`books`.`bookscol`
FROM `online_library`.`books`;";
$result = $conn->query($sql);


$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <title>Cloud Based Online library </title>

</head>

<body>

    <div class="site-wrap">

        <header class="site-navbar py-1" role="banner">
            
            <div class="container">
                <div class="row align-items-center">
                    

            </div>
            <div class="col-10 col-md-8 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    
                    <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                        <li class="active">
                            <a href="index.html">Home</a>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="manage.php">Manage Liberary Pass</a></li>
                        <li><a href="bus_details.html">Liberary Details</a></li>
                    </ul>
                </nav>
            </div>
            
        </div>
    </div>
    
</header>

<div class="site-blocks-cover inner-page-cover" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
          <h1 class="text-white font-weight-light">Online Librery</h1>
          <div><a href="index.html">Home</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Books Details</span></div>
          
        </div>
      </div>
    </div>
  </div>  

  <?php if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    <div class="site-section" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-5 mb-md-0">
          <img src="images/<?php echo $row['imageLocation'] ?>" alt="Image" class="img-fluid rounded">
        </div>
        <div class="col-md-6 pl-md-5">
          <h2 class="font-weight-light text-black mb-4" style="text-align: center"><?php echo $row["name"]?></h2>
          <p>Discription</p>
          <p><?php echo $row["description"]?></p>
            <a href="pdfs/<?php echo $row['pdf'] ?>">Read more</a>

        </div>
      </div>
    </div>
  </div>
  <?php
  }
} else {
  echo "0 results";
}
?>
<!-- 
  <div class="site-section" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-5 mb-md-0">
          <img src="images/Christ_In_Islam.png" alt="Image" class="img-fluid rounded">
        </div>
        <div class="col-md-6 pl-md-5">
          <h2 class="font-weight-light text-black mb-4" style="text-align: center">Christ In Islam</h2>
          <p>Discription</p>
          <p><B>JESUS - HIS STATUS</B><br>
            Were the Muslims on the panel, trying to placate the viewers out of policy,
            deceit or diplomacy? Nothing of the kind! They were only articulating what
            God Almighty had commanded them to say in the Holy Quran. As Muslims
            they had no choice. They had said in so many words -"WE MUSLIMS
            BELIEVE, THAT JESUS WAS ONE OF THE MIGHTIEST MESSENGERS OF GOD,
            THAT HE WAS THE CHRIST, THAT HE WAS BORN MIRACULOUSLY -
            WITHOUT ANY MALE INTERVENTION (which many modern-day Christians do
            not believe today), THAT HE GAVE LIFE TO THE DEAD BY GOD'S
            PERMISSION, AND THAT HE HEALED THOSE BORN BLIND AND THE LEPERS
            BY GOD'S PERMISSION. IN FACT NO MUSLIM IS A MUSLIM IF HE DOES NOT
            BELIEVE IN JESUS!"</p>
            <a href="#">Read more</a>

        </div>
      </div>
    </div>
  </div> -->
<!-- 
  <div class="site-section" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="font-weight-light text-black mb-4" style="text-align: center">Muhummed (pbuh) The Natural Successor To Christ</h2>
            <p>Discription</p>
          <p> <B>MULTI-FACETED SUCCESSION</B><br>
            Successions are of many kinds like the birthright of the "first-born" as in Jewish
            law. Or the ascending of the eldest son or daughter to the kingly throne. Or by
            election, to select a candidate by the vote of the majority. Or Theologically, an
            appointment by Divine Decree of God's chosen Messengers. Like the call of Abraham,
            Moses, Jesus or Muhummed (May the Peace and Blessings of God be upon them all)
            who were appointed or "annointed" in consecration to their office.</p>
            <a href="#">Read more</a>
        </div>
        <div class="col-md-6 pl-md-5">
            <img src="images/Muhummed_pbuh_The_Natural_Successor_To_Christ.png" alt="Image" class="img-fluid rounded">
          
        </div>
      </div>
    </div>
  </div>

  <div class="site-section" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-5 mb-md-0">
          <img src="images/Al-Quran_The_Miracle_of_Miracles.png" alt="Image" class="img-fluid rounded">
        </div>
        <div class="col-md-6 pl-md-5">
          <h2 class="font-weight-light text-black mb-4" style="text-align: center">Al-Quran The Miracle of Miracles</h2>
          <p>Discription</p>
          <p> <B>MULTI-FACETED SUCCESSION</B><br>
            Successions are of many kinds like the birthright of the "first-born" as in Jewish
            law. Or the ascending of the eldest son or daughter to the kingly throne. Or by
            election, to select a candidate by the vote of the majority. Or Theologically, an
            appointment by Divine Decree of God's chosen Messengers. Like the call of Abraham,
            Moses, Jesus or Muhummed (May the Peace and Blessings of God be upon them all)
            who were appointed or "annointed" in consecration to their office.</p>
            <a href="#">Read more</a>

          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            <img src="images/Hinduism_Islam.png" alt="Image" class="img-fluid rounded">
          </div>
        <div class="col-md-6 pl-md-5">
          <h2 class="font-weight-light text-black mb-4" style="text-align: center">SIMILARITIES BETWEEN HINDUISM & ISLAM</h2>
          <p>Discription</p>
          <p> <B>INTRODUCTION</B><br>
          
          <B>Da’wah is a duty<B><br>
          Most Muslims know that Islam is a universal 
          religion, meant for all humankind. Allah (swt) is the 
          Lord of the entire Universe, and Muslims have been 
          entrusted with the duty of conveying His message 
          to all humankind. Alas, most Muslims today have 
            become callous towards this duty! While accepting 
            Islam as the best way of life for ourselves, most of us 
            are unwilling to share this knowledge with those to 
            whom the message has not yet been conveyed.
            The Arabic word ‘Da’wah’ means ‘a call’ or ‘an 
            invitation’. In Islamic context, it means to strive for 
            the propagation of Islam.<br> 
            The Glorious Qur’an says:<br>
            <B>“Ah! Who is more unjust than those who conceal 
              the testimony they have from Allah? But Allah is 
              not unmindful of what ye do!”
              [Al Qur’an 2:140]
            </B>
            
          </p>
          
          <a href="pdfs/Hinduism_Islam.pdf">Read more</a>
          
        </div>
      </div>
    </div>
  </div> 
  
-->
  
  
  
    <div class="site-section border-top">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-5 text-black">Get a book post at your adderess for free</h2>
            <p class="mb-0"><a href="book.php" class="btn btn-primary py-3 px-5 text-white">Get Now</a></p>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="mb-5">
                <h3 class="footer-heading mb-4">About Liberary</h3>
                <p>Path towards Guidance</p>
              </div>
  
              
              
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0" style="margin-left: auto;">
              <div class="row mb-5">
                <div class="col-md-12">
                  <h3 class="footer-heading mb-4">Navigations</h3>
                </div>
                <div class="col-md-6 col-lg-6">
                  <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
                
              </div>
  
              
  
            </div>
  
                      
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <p>
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
              </p>
            </div>
            
          </div>
        </div>
      </footer>



        
        
        
  
        
        

    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    </body>

</html>