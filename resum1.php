
<?php
session_start();

if(isset($_POST["sub"])){
    if(isset($_POST["email"]) && isset($_POST["subj"]) && isset($_POST["message"])){
        $email = $_POST["email"];
        $sub = $_POST["subj"];
        $mess =wordwrap($_POST["message"], 70);

if(filter_var("$email, FILTER_VALIDATE_EMAIL")){
    $email_error = "Invalid Email Address!";
}

$mailto = "priscavincent2018@gmail.com";
$headers = "From: ".$email ;
$tex = "You have received an E-mail from ". $email."\n\n". $mess ;

if(mail($mailto ,$sub,$tex,$headers)){
echo  "Thank you for Reaching Out to Me,
Your Mail has been Receive!";
// header("location:sucess.php");
}else{
echo "Unable to send mail";
}

    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=source+code+pro:400,900|source+sans+pro:300,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="styl.css">
</head>
<body>
<header>
    <div class="im">
 <!-- <img src="image/code.jpg" alt="">  -->
</div>
<button class="nav-toggle" aria-label="toggle navigation">
<span class="hamburger"></span>
</button>
<nav class="nav">
    <ul class="nav__list">
<li class="nav_item"><a href="#form" class="nav_link">Contact Me</a></li>
<li class="nav_item1"><a href="#service" class="nav_link">My Services</a></li>
<li class="nav_item1"><a href="#about" class="nav_link">About</a></li>
<li class="nav_item2"><a href="#education" class="nav_link">Education</a></li>
<li class="nav_item3"><a href="#work1" class="nav_link">Work Experience</a></li>
<li class="nav_item3"><a href="#jo" class="nav_link">Job Skills</a></li>
<li class="nav_item3"><a href="#lan" class="nav_link">Language</a></li>
<li class="nav_item3"><a href="#ass" class="nav_link">Association</a></li>
    </ul>
</nav>
    </header>
    <!-- introduction -->
    <section class="intro" id="home">
        <h1 class="section__title section__title--intro">
Hi, I am <strong>Prisca Ogochukwu</strong>
        </h1>
        <p class="section__subtitle section__subtitle--intro"> Backend Dev</p>
        <img src="image/prisca.jpg" alt="" class="intro__img">
    </section>
    <!-- my services-->
<section class="my-service " id="service">
    <h2 class="section__title  section__title--service">What I do</h2>
<div class="service">
    <div class="service">
        
<h3>Build Web Pages </h3>
<p class="what">
I implement design to build  web pages and i develope web pages with security<br />
 and good functionalities,<br />
i make sure to meet the customers Demand.
</p>
    </div>
</div>

<a href="#work" class="btn">My work</a>
</section>

<section class="about_me" id="about">
<h2 class="section__title section__title--about">Who I am </h2>

<p class="section__subtitle section__subtitle--about"> Web Developer</p>

<div class="about__me_body">
    <p> I am an individual who believes in Tech, <br />
I enjoy solving problems that has to do with Tech and developing things that would benefit the world.<br />
 I am determined and an optimistic individual who believes that there is always a solution to any problem relating to Tech.<br />
I look forward in working with you.<br /></p>
    
</div>
<img src="image/me.jpg" alt="" class="about_me__img">
</section>

<section class="my-work" id="work1">
<h2 class="section_title">work Experience</h2>
<ul class="ul"> 
<b><li>Zuri Team</b> </li><br>							 
<li>Jan 2021-May 2021 </li><br>
<b><li>Location</b>: Remote </li><br>
<b><li>Post Held</b>: Internship.</li>
</ul>
<br>
<ul class="ul">
<b><li>Bincom Dev Center</li></b>	<br>
<li> 2021 - July 2021 </li><br>
<b><li>Location</b>: Remote </li><br>
<b><li>Post Held</b>: Internship</li>	
</ul>
<br>
<ul class="ul">
<b><li>Side Hustle</b></li>	<br>
<li>June - August 2021 </li><br>
<b><li>Location</b>: Remote </li><br>
<b><li>Post held</b>: Internship.</li> 
</ul>
<br>
<ul class="ul">
<b><li>HNG8i</b>	</li><br>
<li>August 2021 | Presently working Here </li><br>
<b><li>Location</b>: Remote </li><br>
<b><li>Post held</b>: Internship.</li> 
</ul>
</section>

<section class="wor" id="work">
<h2 class="section__title section__title--work">My Projects</h2>
<h3>I have build so many projects that would really Impress You </h3><br>
<li>E-Mechanic Website</li>
<li> Student Attendance List</li>
<li>Timetable</li>
<li>Portfolio</li>
<li>Online Store</li>
<h3 class="got">You Can find all this Projects in my GitHub Link Below</h3>
<p>LinkedIn Profile: www.linkedin.com/in/vincent-prisca-4a3886209</p>
<p>GitHub Profile: https://github.com/princessvincent</p>
</section>

<section class="ed">
<h3 id="education"><b>EDUCATION</b></h3>        <br>
<p>
<b><i>Federal Polytechnic Oko</i></b><br>
<i>Degree|Computer Science</i><br>
<i>BGSS Secondary school</i><br>
</i>(SSCE) | S.S.C.E</i>
</p> 
</section>

<section class="jos">
<h3 id="jo" ><b>JOB SKILLS</b></h3>      <br>
<p >
<ul id="pro">
<p>Programming Language</p>
<li>PHP</li><br>
<li>LARAVEL</li><br>
<li>HTML</li><br>
<li>CSS</li>
</ul>
</section>

<section class="lang">
<h3 id="lan"><b>LANGUAGE</b></h3>  <br>
<ul>
    <p id="en"><b>English</b></p>
    <p id="en"><b>Igbo</b></p>
</ul>
</section >

<section class="assoc">
<h3 id="ass"><b>ASSOCIATION</b></h3>   <br>
<ul>
    <p id="na"><b>NACOSS( National Association Of Computer Science):</b>Member</p>
</ul>
</section>


<div class="contact-form"><h2  class="meet" id="form">Let's Meet</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST" class="contact-form">
         <input type="email" name="email" class="inpu" placeholder="Your Email" required><br><br>
         <input type="text" name="subj" class="inpu" placeholder="Subject" required><br><br>
         <input type="text" name="message"  class="inp" placeholder="Message" required><br><br>
         <button type="submit" name="sub" class="sub">Contact Me</button>
     </form></div>

<!-- footer -->
<footer class="footer">
    <li><a href="mailto:priscavincent2018@gmail.com" class="footer__link">Contact me via Email</a></li>
    <li><a href="tel:08168792413" class="footer__link">Contact me via Phone Call</a></li>
    <ul class="social-list">
        <i class="social_list__item"><a class="social_list__link"></a></i>
    </ul>
</footer>

<script src="javas.js">

    </script>
</body>
</html>