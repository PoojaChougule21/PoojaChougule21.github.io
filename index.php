<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Personal Portfolio Website Design</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">Home</a>
      <a href="#about">About</a>
      <a href="#services">Projects</a>
      <a href="#contact">Contact</a>
   </nav>

   <div class="follow">
      
      <a href="https://twitter.com/Poojachougule16" class="fab fa-twitter">Twitter</a>
      <a href="https://linkedin.com/in/pooja-chougule-037a71237" class="fab fa-linkedin">Linkedin</a>
      <a href="https://github.com/PoojaChougule21" class="fab fa-github">Github</a>
   </div>

</header>
<section class="home" id="home">

   <div class="content">
      <h3 data-aos="fade-up">hi, i am POOJA CHOUGULE</h3>
    
      <p data-aos="fade-up">As a Computer Science student always finding best out of me. 
      Seeking an entry-level opportunity with an esteemed organization where
      I can utilize my skills and enhance learning in the field of work.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<section class="about" id="about">

   <h3 class="heading" data-aos="fade-up"> <span>About me</span> </h3>

   <div class="biography">

      <p data-aos="fade-up"></p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Pooja Chougule </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> poojachougule913@gmail.com</h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Belagavi, india </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> 8105749913</h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 21 years </h3>
        
      </div>

      <a href="PoojaChougule.pdf" class="btn" data-aos="fade-up">RESUME <i class="fa fa-download"></i></a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h3 class="heading"> <span>skills</span> </h3>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML,CSS,PHP</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>C, Java, Python(basic)</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>DS</span> <span>70%</span></h3> </div>
        <!-- <div class="bar" data-aos="fade-right"> <h3><span>ML</span> <span>60%</span></h3> </div>-->
         <div class="bar" data-aos="fade-right"> <h3><span>SQL</span> <span>70%</span></h3> </div>
      </div>
      </div>

   </div>

   <div class="edu-exp">

      <h3 class="heading" data-aos="fade-up"> <span>education </span> </h3>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2017 )</span>
               <h3>SSLC</h3>
               <p>school Name : Shantisagar Kannada Medium Highschool Manjari
                  <br>
                  Percentage : 95.35%
               </p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2019 )</span>
               <h3>PUC</h3>
               <p>College Name:CLE's PU College Chikodi.  
                  <br>
                  Percentage : 90.05%
               </p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>(2023 )</span>
               <h3>BE</h3>
               <p>College Name : KLE's Dr.M.S.Sheshgiri College of Engineering and Technology,Belagavi.
                  <br>
                  Percentage : 8.7 CGPA Till 5th sem
               </p>

            </div>

         </div>
         <div class="box-container">

            <h3 class="title" data-aos="fade-right">experience</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2022 )</span>
               <h3>Full Stack developer(intern)</h3>
               <p>Interned as full Stack  developer at Compsoft Technologies <br>
                And build some mini projects  based on the knowledge gained.
               </p>
            </div>

           <div class="box" data-aos="fade-right">
               <span>( 2022 )</span>
               <h3>Data Analytics with Python(certification)</h3>
               <p>
                  NPTEL online Certification for Successfully Completing the course Data Analytics with Python by Indian Institute Of Technology,Roorkee
               </p>
            </div>

           

            </div>

         </div>


      </div>

   </div>
   

</div>

</div>

</section>



<section class="services" id="services">

   <h3 class="heading" data-aos="fade-up"> <span>Projects</span> </h3>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fa-solid fa-film"></i>
         <h3>Online Movie Ticket Booking System</h3>
         <p> It is website used to book the movie tickets. It is designed and developed using following <br>
            Frontend :   HTML,CSS,JavaScript <br>
            Backend Language :  PHP <br>
            Database : MySQL</p>
      </div>

  <div class="box" data-aos="zoom-in">
      <i class=" fa fa-cog"></i>
         <h3>Auto Spare Parts Management System</h3>
         <p>It is software designed and developed using following <br>
             Frontend :  Java swings <br>
             Backend Language : SQL <br>
             Database :  Oracle</p>
         </p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fa-solid fa-leaf"></i>
         <h3>LeafNow website</h3>
         <p>This is website designed to connect Nature enthusiasts for exchanging and donating plants leading to Gogreen<br>
            Frontend : HTML,CSS,PHP<br>
            Backend Language : SQL </p>
      </div>

   

   </div>

</section>


<section class="contact" id="contact">

   <h3 class="heading" data-aos="fade-up"> <span>contact me</span> </h3>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="Enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="Enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="Enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="Enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>8105749913</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>poojachougule913@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Belagavi, india - 590008</p>
      </div>

   </div>

</section>


<script src="js/script.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>
