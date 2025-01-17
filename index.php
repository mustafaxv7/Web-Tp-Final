<?php
  include("bdd.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An Adorable Web Design for Insove clinic">
    <meta name="keywords" content="clinic , hospital , doctor, medical care , health , Insove, Insove clinic, web design ">
    <meta name="author" content="Nadour Moustafa">
    <link rel="icon" type="image/svg" sizes="32x32" href="./assets/img/header/logo.svg">
    <link rel="stylesheet" href="css/styles.css">
    <title>Insove | Medical Healthcare</title>
    
</head>
<body>
    <header>
        <img src="./assets/img/header/logo.svg" alt="clinc's logo">
        <nav>
            <ul>
                <li><a class="navLink" href="./index.php">Home</a></li>
                <li><a class="navLink" href="./doctors.php">Doctors</a></li>
                <li><a class="navLink" href="./aboutus.php">About Us</a></li>
                <li><a class="navLink" href="./contact.php">Contact</a></li>
            </ul>
        </nav>
        <a href="./login.php" class="login-button">Log In</a>
    </header>
    <section id="showcase">
        <div class="content">
            <h1>We care about your health</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque, reiciendis laudantium. Optio, provident velit sequi, voluptas non exercitationem ex soluta assumenda ut eum deleniti, quos eligendi id dicta delectus ullam?</p>
            <a href="./registeration.php"><button>Sign Up</button></a>
        </div>
        <img src="./assets/img/hero/img.png" alt="Doctors's img">
    </section>
    <section id="newsletter">
        <div class="partOne">
            <h2>Our Best Services For Your Solution</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, reiciendis vel. Provident excepturi perferendis velit dignissimos necessitatibus, illo fugiat nobis quisquam consectetur consequatur hic asperiores molestiae, omnis cum, aspernatur id.</p>
        </div>
        <div class="services">
            <div class="general-practitioners service">
                <img src="./assets/icons/services/icon-1.svg" alt="general practitioners icon">
                <h3>General Practitioners</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, hic. </p>
            </div>
            <div class="pregnancy-support  service">
                <img src="./assets/icons/services/icon-2.svg" alt="pregnancy support icon">
                <h3>Pregnancy Support</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, hic. </p>
            </div>
            <div class="nutritional-support service">
                <img src="./assets/icons/services/icon-3.svg" alt="nutritional support icon">
                <h3>Nutritional Support</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, hic. </p>
            </div>
            <div class="pharmaceutical-care service">
                <img src="./assets/icons/services/icon-4.svg" alt="general practitioners icon">
                <h3>Pharmaceutical Care</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, hic.</p> 
           </div>
    </div>
    </section>
    <section id="pointOfView">
        <img src="./assets/img/testimonials/img.png" alt="testimonials pictures">
        <div class="comment">
            <img class="quote" src="./assets/icons/testimonials/quote-left.svg" alt="quote left icone">
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque commodi voluptatem nihil sit ut maiores impedit sequi beatae voluptate, inventore mollitia. Maxime aspernatur maiores error, exercitationem assumenda voluptate quidem aut.
            </p>
            <img class="quote-right" src="./assets/icons/testimonials/quote-right.svg" alt="quote right icone">
            <strong class="writer">James Rodrigo</strong>
            <p class="user-type">CUSTOMER</p>
        </div>
    </section>
    <section id="ourTeamSection">
        <h2>Our Team</h2>
        <div class="doctors">
            <article class="pediatrician doctor">
                <img src="./assets/img/team/doctor-1.png" alt="pediatrician doctor ">
                <div class="description">
                    <h3>Dr.Lesilie Taylor</h3>
                    <strong class="speciality">PEDIATRICIAN</strong>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit, reprehenderit quod. Laboriosam optio mollitia totam commodi ad.
                    </p>
                </div>
            </article>
            <article class="cardiologist doctor">
                <img src="./assets/img/team/doctor-2.png" alt="pediatrician doctor ">
                <div class="description">
                    <h3>Dr.Zachary Brown</h3>
                    <strong class="speciality">CARDIOLOGIST</strong>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit, reprehenderit quod. Laboriosam optio mollitia totam commodi ad.
                    </p>
               </div>
            </article>
        </div>
    </section>
    <footer>
        <p> &copy; 2024 Insove - All rights reserved</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>