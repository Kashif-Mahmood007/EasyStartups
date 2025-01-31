<?php
  include 'components/config.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Easy StartUps</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/about.css?v=<?php $version ?>">
  </head>
  <body>

  <?php

        session_start();
        $login = false;

        if(isset($_SESSION['loggedin'])){
            $login = true;
        }
        require "components/_navbar.php";
    ?>

    <div class="mainsection">

        <div class="pic">
            <h1>
                Who We Are ??? 
            </h1>
        </div>
    </div>
    
    <div class="mission">
		<div class="miss1">
			<h1>OUR MISSION</h1>
			<p>With the digital revolution along the world, we aim to digitalize pakistan with our talented people eager to become future entrepreneurs by providing them lacking resources. It all started back with two individuals when they started their journey in government university in pakistan.</p>
			<ul>
				<li>KASHIF MAHMOOD</li>
				<li>GHULAM MUSTAFA</li>
			</ul>
		</div>
		<div class="miss2">
			<a href="images/93.jpg" target="_blank">
				<img src="images/93.jpg" alt="error" >
			</a>
		</div>
	</div>

	
    
<section class="bg-light py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center">Our Investors</h2>
        <p class="text-secondary mb-5 text-center lead fs-4">The following organisations are main source of
        Investments. We proudly won their trust to provide
        Demanding services.</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container overflow-hidden">
    <div class="row gy-4 gy-lg-0 gx-xxl-5 justify-content-center">
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img class="img-fluid" loading="lazy" src="./assets/img/team-img-1.jpg" alt="Flora Nyra">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">Flora Nyra</h4>
                <p class="text-secondary mb-0">Product Manager</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img class="img-fluid" loading="lazy" src="./assets/img/team-img-5.jpg" alt="Evander Mac">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">Evander Mac</h4>
                <p class="text-secondary mb-0">Art Director</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>

      <!-- <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img class="img-fluid" loading="lazy" src="./assets/img/team-img-2.jpg" alt="Taytum Elia">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">Taytum Elia</h4>
                <p class="text-secondary mb-0">Investment Planner</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div> -->
      <!-- <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img class="img-fluid" loading="lazy" src="./assets/img/team-img-4.jpg" alt="Wylder Elio">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">Wylder Elio</h4>
                <p class="text-secondary mb-0">Financial Analyst</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section> 





    <div class="section">
		<div class="section1">
			<h1>Why Easy StartUps</h1>
			<p>In easy startups, we provide world class development assistance with all the resources needed for development and post-development services. These resources include direct and indirect support.</p>
      <p>FEW MAIN-LINE SERVICES INCLUDE</p>
			<ul>
				<li>PREMIUM DEVELOPER ACCOUNTS FOR IN-USE IDES.</li>
				<li>DOMAINS AND HOSTING SERVICES</li>
				<li>CUSTOMISED AWS</li>
				<li>GOOGLE WORKSPACE</li>
				<li>GOOGLE CLOUD AND FIREBASE SERVICES</li>
				<li>DEVELOPER ASSISTANCE</li>
				<li>AI ASSISTANCE (WITH AI PROMPT ENGINEERS)</li>
				<li>CONTENT CREATORS SUPPORT</li>
				<li>MARKETING CAMPAIGNS</li>
				<li>SENIOR DEVELOPERS' SUPPORT</li>
				<li>LABS AND OFFICES SUPPORT</li>
			</ul>
		</div>
		<div class="section2">
			<a href="images/logo1.png" target="_blank">
				<img src="images/logo1.png" alt="Logo of Easy StartUps" >
			</a>
		</div>
	</div>


    <div class="parent">
        <div class="exp">
            <h1>Extraordinary experiences</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit accusantium libero eum repellendus consectetur<br><br> quia temporibus saepe dolores culpa quidem pariatur fugiat id soluta sunt nobis laudantium dolorem, ducimus <br><br>sapiente aliquid. Qui doloribus quisquam deserunt, animi, placeat accusantium fugit eius deleniti<br><br> </p>

        </div>
        <div class="values">
            <h1>Our Core values</h1>
            <ul>
                <li>We uphold the highest standards of honesty</li>
                <li>Our customers are at the heart of our business </li>
                <li>We embrace continuously strive to push boundaries</li>
                <li>Trust is the foundation of our relatioships</li>
                <li>We uphold the highest standards of consistency</li>
                <li>Trust is the foundation of our relatioships</li>
            </ul>

        </div>
    </div>

    <?php
        require "components/_footer.php";
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    
</body>
</html>