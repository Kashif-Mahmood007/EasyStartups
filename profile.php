<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Profile Information </title>
</head>
<body>

<?php

    $login = false;

    session_start();
    if(isset($_SESSION['loggedin'])){
        $login = true;
        $userid = $_SESSION['userid'];
    }

    require "components/_connect.php";
    require "components/_navbar.php";

?>


<?php

    $name = "";
    $email = "";
    $phone = "";
    $city = "";
    $country = "";
    $address = "";
    $skills = "";
    $ideatitle = "";
    $ideadesc = "";
    $resources = "";
    $datetime = "";


    // for edit specific record

    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        if(isset($_POST['update'])){

            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $city = mysqli_real_escape_string($conn, $_POST['city']);
            $country = mysqli_real_escape_string($conn, $_POST['country']);
            $address = mysqli_real_escape_string($conn, $_POST['address']);
            $skills = mysqli_real_escape_string($conn, $_POST['skills']);
            $ideatitle = mysqli_real_escape_string($conn, $_POST['ideatitle']);
            $ideadesc = mysqli_real_escape_string($conn, $_POST['ideadesc']);
            $resources = mysqli_real_escape_string($conn, $_POST['resources']);

            $sql = "UPDATE `contact`
            SET `name` = '$name' , `phone` = '$phone', `email` = '$email' ,`city` = '$city' ,`country` = '$country' ,`address` = '$address' ,`skills` = '$skills' ,`ideatitle` = '$ideatitle' , `ideadesc` = '$ideadesc' ,`resources` = '$resources'
            WHERE `loggedinID` = '$userid'";

            $result = mysqli_query($conn, $sql);

            if($result){
                echo '
                <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                    <strong>SUCCESS!</strong> THE RECORD IS UPDATED SUCCESSFULLY.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
            }

            else{
                echo '
                <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                    <strong>FAILURE!</strong> THE RECORD IS NOT UPDATED DUE TO SOME TECHNICAL ERROR, TRY AGAIN.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
            }

        }
        
        
    // for delete specific record

        elseif(isset($_POST['deleterecord'])){
            $sql = "DELETE FROM `contact` WHERE `loggedinID` = '$userid'";
            $result = mysqli_query($conn, $sql);
    
            if(!$result){
                echo '
                    <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                        <strong>FAILURE!</strong> THE RECORD IS NOT DELETED DUE TO SOME TECHNICAL ERROR, TRY AGAIN.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                ';
            } else {
                echo '
                    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                    <strong>SUCCESS!</strong> THE RECORD IS DELETED SUCCESSFULLY
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    ';

                $_SESSION['formFill'] = false;
            }
        }
        
    }

    // for display the corresponding data on the profile

    $sql = "SELECT * FROM `easystartups`.`contact` WHERE `loggedinID` = '$userid'"; 
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if($num > 0){
        while($row = mysqli_fetch_assoc($result)){

            $_SESSION['formFill'] = true;

            $name = $row['name'];
            $phone = $row['phone'];
            $email = $row['email'];
            $city = $row['city'];
            $country = $row['country'];
            $address = $row['address'];
            $skills = $row['skills'];
            $ideatitle = $row['ideatitle'];
            $ideadesc = $row['ideadesc'];
            $resources = $row['resources'];
            $datetime = $row['datetime'];

            echo '
                <div class="container bootdey pt-5 p-5">

                    <div class="media align-items-center py-3 mb-3">
                    <img src="https://thumbs.dreamstime.com/b/default-avatar-profile-image-vector-social-media-user-icon-potrait-182347582.jpg" alt="Profile Picture" class="d-block ui-w-100 rounded-circle">
                    <div class="media-body ml-4">
                        <h4 class="font-weight-bold mb-0">'.$name.'</h4>
                        <div class="text-muted mb-2"><a class = "text-dark" href = "mailto:'.$email.'">'.$email.'</a></div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editmodal">
                            EDIT PROFILE
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deletemodal">
                            DELETE PROFILE    
                        </button>
                    </div>
                    </div>

                    
                    <div class="card-body">

                    <h6 class="mt-5 mb-3">PROFILE INFO</h6>
                        <table class="table user-view-table m-0">
                        <tbody>
                            <tr>
                            <td>Registered:</td>
                            <td>'.$datetime.'</td>
                            </tr>
                            <tr>
                            <td>Name:</td>
                            <td>'.$name.'</td>
                            </tr>
                            <tr>
                            <td>Skills:</td>
                            <td>'.$skills.'</td>
                            </tr>
                            <tr>
                            <td>Status:</td>
                            <td>Active</td>
                            </tr>
                        </tbody>
                        </table>

                        <h6 class="mt-4 mb-3">PERSONAL INFO</h6>

                        <table class="table user-view-table m-0">
                        <tbody>
                            <tr>
                            <td>Country:</td>
                            <td>'.$country.'</td>
                            </tr>
                            <tr>
                                <td>City:</td>
                                <td>'.$city.'</td>
                            </tr>
                            <tr>
                            <td>Address:</td>
                            <td>'.$address.'</td>
                            </tr>
                        </tbody>
                        </table>

                        <h6 class="mt-4 mb-3">CONTACT INFO</h6>

                        <table class="table user-view-table m-0">
                        <tbody>
                            <tr>
                            <td>Phone:</td>
                            <td><a class = "text-dark text-decoration-none" href = "tel:'.$phone.'">'.$phone.'</a></td>
                            </tr>
                            <tr>
                            <td>Email:</td>
                            <td><a class = "text-dark text-decoration-none" href = "mailto:'.$email.'">'.$email.'</a></td>
                            </tr>
                        </tbody>
                        </table>

                        <h6 class="mt-4 mb-3">Project</h6>

                        <table class="table user-view-table m-0">
                        <tbody>
                            <tr>
                            <td>Project idea:</td>
                            <td>
                                    '.$ideatitle.'
                            </tr>
                            <tr>
                            <td>Description:</td>
                            <td>
                                '.$ideadesc.'
                            </td>
                            </tr>
                            <tr>
                            <td>Resources required:</td>
                            <td>
                                '.$resources.'
                            </td>
                            </tr>
                        </tbody>
                        </table>

                    </div>
                    </div>

                </div>
                <div class = "p-3"></div>';
        }

        require "components/_footer.php";
        
    }



    // If there's no data in profile, profile is incomplete

    else{

        $sql = "SELECT * FROM `easystartups`.`signup` WHERE `sno` = '$userid'"; 
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        if($num > 0){
            while($row = mysqli_fetch_assoc($result)){
                $name = $row['name'];
                
                echo '
                <div class="container my-5">
                    <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">WELCOME, '.strtoupper($name).'</h4>
                    <hr>
                    <p>YOUR PROFILE IS INCOMPLETE. PLEASE COMPLETE YOUR PROFILE.</p>
                    <p class="mb-0">CLICK THE BUTTON BELOW TO CONTINUE.</p>
                    <form action="contact.php" method="post">
                        <input type="submit" value="Profile" class = "mt-3 mb-2 btn btn-outline-dark" name = "profilebtn">
                    </form>
                    </div>
                </div>
                ';
            }
        }

    }
    
    ?>


<?php


// for launching the modal for edit info

echo '
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="profile.php" method="post" class = "container mt-5" style = "background:aliceblue">
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
            <div class="col-12">
            <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="fullname" name="name" value="'.$name.'" required placeholder="Enter Full Name">
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
                        <input type="email" class="form-control" id="email" name="email" value="'.$email.'" required placeholder="Enter Your Email Address">
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
                    <input type="tel" class="form-control" id="phone" name="phone" value="'.$phone.'" required placeholder="Enter your Phone Number (+92 xxx xxxxxxx)">
                    <div class="invalid-feedback">
                        Please enter a valid Phone Number as (+92 336 2233456), must follow proper spaces.
                    </div>
                    </div>
                </div>

                                
                <div class="col-12 col-md-6">
                <label for="email" class="form-label">City <span class="text-danger">*</span></label>
                <div class="input-group">

                <input type="text" class="form-control" id="city" name="city" value="'.$city.'" required placeholder="Enter Your City">
                <div class="invalid-feedback">
                Please enter a valid city name, it must contains only alphabets.
                </div>
                </div>
                </div>

                
                <div class="col-12 col-md-6">
                <label for="email" class="form-label">Country <span class="text-danger">*</span></label>
                    <div class="input-group">

                    <input type="text" class="form-control" id="country" name="country" value="'.$country.'" required placeholder="Enter your Country">
                        <div class="invalid-feedback">
                        Please enter a valid country name, it must contains only alphabets.
                        </div>
                    </div>
                </div>


                <div class="col-12">
                <label for="subject" class="form-label">Address <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="address" name="address" value="'.$address.'" required placeholder="Enter your complete address">
                    <div class="invalid-feedback">
                        Address may contains special symbols (- . , # _ !) along with spaces
                    </div>
                </div>


                <div class="col-12">
                <label for="subject" class="form-label">Skills <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="skills" name="skills" value="'.$skills.'" required placeholder="Enter your Skills set">
                    <div class="invalid-feedback">
                        it contains only special symbols includes (- _ . ,) along with wide spaces.
                    </div>
                </div>
                    
                <div class="col-12">
                <label for="subject" class="form-label">Tell us About your Idea <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="ideatitle" name="ideatitle" value="'.$ideatitle.'" required placeholder="Enter the crisp title,  just title">
                    <div class="invalid-feedback">
                        Idea Title must be start with alphabets not numbers or special symbols but may contains numbers and special symbols.
                    </div>
                </div>


                <div class="col-12">
                <label for="message" class="form-label">How will You do it? <span class="text-danger">*</span></label>
                <textarea class="form-control" id="description" name="ideadesc" rows="6" required placeholder="Give your complete strategy but briefly">'.$ideadesc.'</textarea>
                <div class="invalid-feedback">
                Idea Description must be start with alphabets not numbers or special symbols but may contains numbers and special symbols.  
                </div>
                </div>

                <div class="col-12">
                <label for="message" class="form-label">What Resources can we Help You With? <span class="text-danger">*</span></label>
                <textarea class="form-control" id="resources" name="resources" rows="3" required placeholder="Enter Resources you need but with Description">'.$resources.'</textarea>
                <div class="invalid-feedback">
                    Resources field must start with alphabets not number or special symbols but may contain numbers and special symbols
                </div>
            </div>



                
                <div class="col-12">
                    <div class="d-grid">
                        <div id = "isEmpty" class = "pt-3">

                        </div>
                    <button class="btn btn-primary btn-lg mt-4" type="submit" name = "update" id = "submit">Save Changes</button>
                    </div>
                </div>


            </div>    
        </form>
      </div>
    </div>
  </div>
</div>';


        // Delete Button modal


echo '
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="profile.php" method="post" class = "container mt-5">
                <p class = "mt-2">Do you want to delete this record</p>
                <input type="submit" class="btn btn-primary mt-3" value = "Delete record" name ="deleterecord">
            </form>
        </div>
    </div>
    </div>
</div>';

?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="js/contact.js"></script>

</body>
</html>



