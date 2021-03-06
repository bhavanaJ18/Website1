<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iEducate - Learning Hub</title>
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <?php
  include 'partials/dbcon.php';
  if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn,$_POST['number']);

    $emailquery = "select * from user1 where email = '$email'";
    $query = mysqli_query($conn, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
      echo "Email already exists";
    }
    else{
    $insertquery = "insert into user1 (name, email, number) values('$name','$email','$number')";
    $iquery = mysqli_query($conn, $insertquery);
    if ($iquery){
      ?>
  <script>
    alert(" Inserted Successfully");
  </script>
  <?php
    }
    else{
    ?>
  <script>
    alert("Data not inserted");
  </script>
  <?php
    } 
    }         
  }
  ?>
  <nav class="navbar background h-nav-resp">
    <ul class="nav-list v-class-resp">
      <div class="logo"><img src="images/retro-styled-2388622_640.png" alt="logo">
      </div>
      <li><a href="#">Home</a></li>
      <li><a href="#About Us">About</a></li>
      <li><a href="#Services">Services</a></li>
      <li><a href="#Contact">Contact US</a></li>
    </ul>
    <div class="rightNav v-class-resp">
      <input type="text" name="search" id="search">
      <button class="btn btn-sm">Search</button>
    </div>
    <div class="burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
  </nav>
  <section class="background firstSection">
    <div class="box-main">
      <div class="firstHalf">
        <p class="text-big"> iEducate.... The Learning Hub</p>
        <p class="text-small">The hub is the educational institute which is best educational hub for the 7million people
          around the world. It is the online educational hub </p>
        <div class="buttons">
          <button class="btn">Subscribe</button>
          <button class="btn">Watch video</button>
        </div>
      </div>
      <div class="secondHalf">
        <img src="images/notebook-336634_640.jpg" alt="notebook">
      </div>
    </div>
  </section>
  <section class="section">
    <div class="paras">
      <p class=" sectionTag text-big">Educate You</p>
      <p class="sectionsubTag text-small">Education is the process of facilitating learning, or the acquisition of
        knowledge, skills, values, morals, beliefs, and habits. Educational methods include teaching, training,
        storytelling, discussion and directed research. Education frequently takes place under the guidance of
        educators, however learners can also educate themselves. Education can take place in formal or informal settings
        and any experience that has a formative effect on the way one thinks, feels, or acts may be considered
        educational. The methodology of teaching is called pedagogy.</p>
    </div>
    <div class="thumbnail">
      <img src="images/notebook-336634_640.jpg" alt="" class="imgfluid">
    </div>
  </section>
  <section class="section section-left">
    <div class="paras">
      <p class="text-big">Knowlegde is the best thing</p>
      <p class="text-small">Education began in prehistory, as adults trained the young in the knowledge and skills
        deemed necessary in their society. In pre-literate societies, this was achieved orally and through imitation.
        Story-telling passed knowledge, values, and skills from one generation to the next. As cultures began to extend
        their knowledge beyond skills that could be readily learned through imitation, formal education developed.
        Schools existed in Egypt at the time of the Middle Kingdom.</p>
      <p>Matteo Ricci (left) and Xu Guangqi (right) in the Chinese edition of Euclid's Elements published in 1607
        Plato founded the Academy in Athens, the first institution of higher learning in Europe. The city of Alexandria
        in Egypt, established in 330 BCE, became the successor to Athens as the intellectual cradle of Ancient Greece.
        There, the great Library of Alexandria was built in the 3rd century BCE. European civilizations suffered a
        collapse of literacy and organization following the fall of Rome in CE 476.</p>
    </div>
    <div class="thumbnail">
      <img src="images/notebook-336634_640.jpg" alt="" class="imgfluid">
    </div>
  </section>
  <section class="section">
    <div class="paras">
      <p class="text-big">We educate You to build a better Tomorrow</p>
      <p class="text-small">Formal education is commonly divided formally into such stages as preschool or kindergarten,
        primary school, secondary school and then college, university, or apprenticeship.</p>

      <p> There are movements for education reforms, such as for improving quality and efficiency of education towards
        applicable relevance in the students' lives and efficient problem solving in modern or future society at large
        or for evidence-based education methodologies. A right to education has been recognized by some governments and
        the United Nations.[a] Global initiatives aim at achieving the Sustainable Development Goal 4, which promotes
        quality education for all. In most regions, education is compulsory up to a certain age.</p>
    </div>
    <div class="thumbnail">
      <img src="images/notebook-336634_640.jpg" alt="" class="imgfluid">
    </div>
  </section>
  <section class="contact" id="Contact">
    <h2 class="text-center">Contact Us</h2>
    <div class="form">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
      <div class="form-group ">
        <label for="name" class="form-label">Name</label>
        <input class="form-input" type="text" name="name" id="name" placeholder="Enter Your Name" required>
      </div>
      <div class="form-group ">
        <label for="email" class="form-label">Email</label>
        <input class="form-input" type="email" name="email" id="email" placeholder="Enter Your Email" required>
      </div>
      <!-- <input class="form-input" type="password" name="password" id="password" placeholder="Enter Your Password"
        required> -->
      <div class="form-group ">
        <label for="number" class="form-label">Number</label>
        <input class="form-input" type="text" name="number" id="number" placeholder="Enter Your Number" required>
      </div>
      <div class="form-group ">
        <label for="concern" class="form-label">Concern</label>
        <textarea class="form-input" name="concern" id="text" cols="30" rows="10" placeholder="Your concern Please"
          required></textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-sm btn-dark">Submit</button>
      </div>
    </form>
    </div>
  </section>
  <footer class="background">
    <p class="text-footer">
      Copyright &copy; 2021 www.iEducate.com - All rights reserved
    </p>
  </footer>

  <script src="js/respo.js"></script>
</body>

</html>