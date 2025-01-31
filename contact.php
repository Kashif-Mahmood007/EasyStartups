<?php
  include 'components/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact US</title>
</head>

    <style>
      #isEmpty{
        margin-left: .5%;
      }
    </style>

<body>

<?php

    $login = false;

    session_start();
    if(isset($_SESSION['loggedin'])){
        $login = true;
      }

    require "components/_navbar.php";
    require "components/_connect.php";

    $loggedinID = $_SESSION['userid'];

    // For storing data  

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if(isset($_POST['submit'])){

          $name = mysqli_real_escape_string($conn, $_POST['name']);
          $name = str_replace(">", "&gt;", $name);          // securying our plateform from XSS attack
          $name = str_replace("<", "&lt;", $name);

          $email = mysqli_real_escape_string($conn, $_POST['email']);
          $email = str_replace(">", "&gt;", $email);          
          $email = str_replace("<", "&lt;", $email);

          $phone = mysqli_real_escape_string($conn, $_POST['phone']);
          $phone = str_replace(">", "&gt;", $phone);          
          $phone = str_replace("<", "&lt;", $phone);

          $city = mysqli_real_escape_string($conn, $_POST['city']);
          $city = str_replace(">", "&gt;", $city);          
          $city = str_replace("<", "&lt;", $city);

          $country = mysqli_real_escape_string($conn, $_POST['country']);
          $country = str_replace(">", "&gt;", $country);          
          $country = str_replace("<", "&lt;", $country);

          $address = mysqli_real_escape_string($conn, $_POST['address']);
          $address = str_replace(">", "&gt;", $address);          
          $address = str_replace("<", "&lt;", $address);

          $skills = mysqli_real_escape_string($conn, $_POST['skills']);
          $skills = str_replace(">", "&gt;", $skills);          
          $skills = str_replace("<", "&lt;", $skills);

          $ideatitle = mysqli_real_escape_string($conn, $_POST['ideatitle']);
          $ideatitle = str_replace(">", "&gt;", $ideatitle);          
          $ideatitle = str_replace("<", "&lt;", $ideatitle);
          
          $desc = mysqli_real_escape_string($conn, $_POST['ideadesc']);
          $desc = str_replace(">", "&gt;", $desc);          
          $desc = str_replace("<", "&lt;", $desc);

          $resources = mysqli_real_escape_string($conn, $_POST['resources']);
          $resources = str_replace(">", "&gt;", $resources);          
          $resources = str_replace("<", "&lt;", $resources);


          $sql = "INSERT INTO `contact` (`loggedinID`,`name`, `phone`, `email`, `city`, `country`, `address`, `skills`, `ideatitle`, `ideadesc`, `resources`, `datetime`) 
          VALUES ('$loggedinID','$name', '$phone', '$email', '$city', '$country', '$address', '$skills', '$ideatitle', '$desc', '$resources', current_timestamp())"; 


          $result = mysqli_query($conn, $sql);
          
          if($result){
              echo '
                <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                  <strong>SUCCESS!</strong> YOUR DETAILS ARE SUBMITTED SUCCESSFULLY.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              ';
              $_SESSION['formFill'] = true;
          }
          else{
              echo '
                <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                  <strong>FAILURE !</strong> YOUR COMMENT DETAILS ARE NOT SUBMITTED DUE TO SOME TECHNICAL ISSUE.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>        
              ';
          }

      }
    }
?>


<section class="py-3 py-md-5 mt-5">
  <div class="container">
    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6">
        <img class="img-fluid rounded" loading="lazy" src="images/contact.jpg" alt="Get in touch">
      </div>
      <div class="col-12 col-lg-6">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-11">
            <h2 class="h1 mb-3">Get in touch</h2>
            <p class="lead fs-4 text-secondary mb-5 text-justify">CONTACT ONE OF OUR AGENTS BELOW TO GET MORE INFORMATON ABOUT WHAT WE CAN PROVIDE SPECIFICALLY ABOUT YOUR STARTUP IDEA.</p>
            
            <div class = "d-flex justify-content-around">
              <div class = "first_child">
                <div class="d-flex mb-4">
                  <div class="me-4 text-primary">
                    
                  </div>
                  <div>
                    <h4 class="mb-3">NAME</h4>
                    <p class="mb-0">
                      <a class="link-secondary text-decoration-none">KASHIF MAHMOOD</a>
                    </p>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    
                  </div>
                  <div>
                    <h4 class="mb-3">CONTACT#</h4>
                    <p>
                      <a class="link-secondary text-decoration-none" href="tel:+923371733897">+92-337-1733897</a>
                    </p>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    
                  </div>
                  <div>
                    <h4 class="mb-3">WHATSAPP</h4>
                    <p>
                      <a class="link-secondary text-decoration-none" href="tel:+923371733897">+92-337-1733897</a>
                    </p>
                  </div>
                </div>
              </div>
              
              <div class = "second_child">
                <div class="d-flex mb-4">
                  <div class="me-4 text-primary">
                    
                  </div>
                  <div>
                    <h4 class="mb-3">NAME</h4>
                    <p class="mb-0">
                      <a class="link-secondary text-decoration-none">GHULAM MUSTAFA</a>
                    </p>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    
                  </div>
                  <div>
                    <h4 class="mb-3">CONTACT#</h4>
                    <p>
                      <a class="link-secondary text-decoration-none" href="tel:+923286615227">+92-328-6615227</a>
                    </p>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    
                  </div>
                  <div>
                    <h4 class="mb-3">WHATSAPP</h4>
                    <p>
                      <a class="link-secondary text-decoration-none" href="tel:+923081366556">+92-308-1366556</a>
                    </p>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php

if($_SESSION['formFill'] == false){

  echo '<form action="contact.php" method="post" class = "container mt-5" style = "background:aliceblue">
      <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
          <div class="col-12">
          <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="fullname" name="name" value="" required placeholder="Enter Full Name">
            <div class="invalid-feedback">
              Please enter a valid name started by a-z / A-z between (3-20).
            </div>
          </div>
          <div class="col-12 col-md-6">
          <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
          <div class="input-group">
              <span class="input-group-text">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
              </svg>
              </span>
              <input type="email" class="form-control" id="email" name="email" value="" required placeholder="Enter Your Email Address">
                <div class="invalid-feedback">
                  Please enter a valid email address started with (a-z/A-z) i.e ali0987@gmail.com, Wide spaces are not allwed in email.
                </div>
          </div>
          </div>
          <div class="col-12 col-md-6">
          <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
          <div class="input-group">
              <span class="input-group-text">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
              </svg>
              </span>
              <input type="tel" class="form-control" id="phone" name="phone" value="" required placeholder="Enter your Phone Number (+92 XXX XXXXXXX)">
                <div class="invalid-feedback">
                  Please enter a valid Phone Number as (+92 336 2233456), must follow proper spaces.
                </div>
          </div>
          </div>


          <div class="col-12 col-md-6">
              <label for="email" class="form-label">City <span class="text-danger">*</span></label>
              <div class="input-group">
                  
                  <input type="text" class="form-control" id="city" name="city" value="" required placeholder="Enter Your City">
                    <div class="invalid-feedback">
                      Please enter a valid city name, it must contains only alphabets.
                    </div>
              </div>
              </div>
              <div class="col-12 col-md-6">
                  <label for="email" class="form-label">Country <span class="text-danger">*</span></label>
              <div class="input-group">
                  
                  <input type="text" class="form-control" id="country" name="country" value="" required placeholder="Enter your Country">
                    <div class="invalid-feedback">
                    Please enter a valid country name, it must contains only alphabets.
                    </div>
              </div>
              </div>


          <div class="col-12">
          <label for="subject" class="form-label">Address <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="address" name="address" value="" required placeholder="Enter your complete address">
            <div class="invalid-feedback">
              Address may contains special symbols (- . , # _ !) along with spaces
            </div>
          </div>

          <div class="col-12">
          <label for="subject" class="form-label">Skills <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="skills" name="skills" value="" required placeholder="Enter your Skills set">
            <div class="invalid-feedback">
              it contains only special symbols includes (- _ . , |) along with wide spaces.
            </div>
          </div>
          
          <div class="col-12">
          <label for="subject" class="form-label">Tell us About your Idea <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="ideatitle" name="ideatitle" value="" required placeholder="Enter the crisp title,  just title">
            <div class="invalid-feedback">
              Idea Title must be start with alphabets not numbers or special symbols but may contains numbers and special symbols.
            </div>
          </div>


          <div class="col-12">
          <label for="message" class="form-label">How will You do it? <span class="text-danger">*</span></label>
          <textarea class="form-control" id="description" name="ideadesc" rows="6" required placeholder="Give your complete strategy but briefly"></textarea>
            <div class="invalid-feedback">
              Idea Description must be start with alphabets not numbers or special symbols but may contains numbers and special symbols.  
            </div>
          </div>

          <div class="col-12">
          <label for="message" class="form-label">What Resources can we Help You With? <span class="text-danger">*</span></label>
          <textarea class="form-control" id="resources" name="resources" rows="3" required placeholder="Enter Resources you need but with Description"></textarea>
            <div class="invalid-feedback">
              Resources field must start with alphabets not number or special symbols but may contains numbers and special symbols
            </div>

          <div class="col-12">
          <div class="d-grid">
              <div id = "isEmpty" class = "pt-3">
              
              </div>
              <button class="btn btn-primary btn-lg mt-4" type="submit" name = "submit" id = "submit">Send Message</button>
          </div>
          </div>
      </div>
  </form>';

}

else{
  echo '
      <div class="container my-5">
          <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">WELCOME</h4>
          <hr>
          <p>YOU ALREADY HAVE SHARE THE IDEA, FOR UPDATE OR DELETE, GO TO PROFILE AND DO THAT.</p>
          <p class="mb-0">CLICK THE BUTTON BELOW TO CONTINUE.</p>
          <form action="profile.php" method="post">
              <input type="submit" value="Profile" class = "mt-3 mb-2 btn btn-outline-dark" name = "profilebtn">
          </form>
          </div>
      </div>
      ';
}


?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="js/contact.js?v=<?php $version?>"></script>

</body>

</html>