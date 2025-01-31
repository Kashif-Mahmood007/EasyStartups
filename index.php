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
    <link rel="stylesheet" href="css/index.css?v=<?php $version?>">
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
    <div class = "main_sec">
        <div class="section1">
            <h2>
                WITH A BRIGHT FUTURE, 
            </h2>

            <h1>
                Easy StartUps
            </h1>

            <h4>
                EXPLORE NEW REALMS OF ENTREPRENEURSHIP
            </h4>

            <h4>
                WITH ALL THE INDUSTRIAL TOOLS SHINING
            </h4>

            <h4>
                BRIGHTLY IN YOUR FUTURE STARTUP
            </h4>

            <a href = "about.php" style = "text-decoration: none;">
              <h4 style = "background: red; padding: 10px 20px; border-radius: 15px; color: white; margin: 10px 0px">
                  EXPLORE SERVICES
              </h4>
            </a>
            
            <!-- <a href="contact.php"><button>GET REGISTER</button></a> -->
        </div>
    </div>    

    <h2 class = "text-center pt-5">Our Projects</h2>    
        
    <div class="row row-cols-1 row-cols-md-3 g-4 container-fluid p-5">
    <div class="col">
        <div class="card h-100">
        <img src="images/10.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat amet cupiditate quidem accusamus praesentium sint nesciunt earum inventore iure, nemo quasi recusandae hic ut mollitia at quae incidunt dolores, dolorum provident sunt nam? Veniam doloremque praesentium assumenda ipsa eaque quasi? Placeat atque inventore optio neque nihil ipsa iure, totam velit.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src = "images/7.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita provident voluptatum rem natus sint, iusto mollitia temporibus quas sapiente amet odit, numquam consectetur autem, placeat recusandae eligendi officia unde laboriosam id. Voluptatem harum unde illo ea quasi alias in fugiat atque ut labore aliquid ipsum vero blanditiis libero, reiciendis qui?</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src = "images/55.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur possimus nisi molestias incidunt ad dicta. Quibusdam veniam tempore sit harum quod, necessitatibus, tempora, quam fugit deserunt molestiae magni et pariatur similique ipsum  dolorem aut at quasi nobis! Id, necessitatibus optio debitis possimus animi quod voluptas similique libero?</p>
        </div>
        </div>
    </div>
    </div>


    <div class="sectionabout">
        <div class="sectionabout1">
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
        <div class="sectionabout2">
            <a href="images/9.jpg" target="_blank">
                <img src="images/9.jpg" alt="error" >
            </a>
        </div>

    </div>    



    <!-- Our Team -->

<section class="bg-light py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center">Our Team</h2>
        <p class="text-secondary mb-5 text-center lead fs-4">We are a group of innovative, experienced, and proficient teams. You will love to collaborate with us.</p>
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
              <img class="img-fluid" loading="lazy" src="./assets/img/team-img-1.jpg" alt="Kashif Mahmood">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">KASHIF MAHMOOD</h4>
                <!-- <p class="text-secondary mb-0">Product Manager</p> -->
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img class="img-fluid" loading="lazy" src="./assets/img/team-img-5.jpg" alt="Ghulam Mustafa">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">GHULAM MUSTAFA</h4>
                <!-- <p class="text-secondary mb-0">Art Director</p> -->
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



<!-- Footer -->
    

    <?php
        require "components/_footer.php";
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src = "js/signupform.js"></script> 
</body>
</html>