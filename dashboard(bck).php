<!DOCTYPE html>
<html lang="en">
<?php
include("config.php");
session_start();
if (isset($_SESSION['loggeduserid'])) {
    $userid = $_SESSION['loggeduserid'];
    $q1 = "SELECT * from reg where id='$userid'";
    $qr = mysqli_query($db, $q1);
    if ($qr) {
        $array = mysqli_fetch_assoc($qr);
        $name = $array['firstname'];
        $sname = $array['lastname'];
        $ag = $array['dob'];
        $phn = $array['phone'];
        $eml = $array['email'];
        $currentDate = new DateTime();
        $DOB = new DateTime($ag);
        $ageinter = $DOB->diff($currentDate);
        $vayasu = $ageinter->y;
    }
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>dashboard</title>
</head>

<body>
    <div id="nk33">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit items</h5>
                    <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="up">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="row-auto mb-3">
                                <div class="col-auto mb-2">
                                    <div class="d-md-flex justify-content-start align-items-left py-2">
                                        <p>Change the first Name</p>
                                    </div>
                                    <input type="text" class="form-control" placeholder="<?= $name ?>" aria-label="id@123" name="fname">
                                </div>
                                <div class="col-auto mb-2">
                                    <div class="d-md-flex justify-content-start align-items-left py-2">
                                        <p>Change the second Name</p>
                                    </div>
                                    <input type="text" class="form-control " placeholder="<?= $sname ?>" aria-label="id@1234" name="lname">
                                </div>
                            </div>
                            <div class="col-auto mb-3">
                                <div class="d-md-flex justify-content-start align-items-left py-2">
                                    <p>Change Email</p>
                                </div>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="<?= $eml ?>" name="cemail">
                            </div>
                          <!---->
                            <div class="col-auto mb-3">
                                <div class="d-md-flex justify-content-start align-items-left py-2">
                                    <p>Change Password </p>
                                </div>
                                <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="password" name="cpass">
                            </div>
                            <div class="col-auto mb-3">
                                <div class="d-md-flex justify-content-start align-items-left py-2">
                                    <p>Confirm Password </p>
                                </div>
                                <input type="password" class="form-control" id="exampleFormControlInput3" placeholder="confirm password" name="cnpass">
                            </div>
                            <div class="col-auto mb-3">
                                <div class="d-md-flex justify-content-start align-items-left py-2">
                                    <p>Change Phone-Number </p>
                                </div>
                                <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="<?= $phn ?> " name="cphn">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!--END OF MODAL-->

    <nav class="navbar" style="background-color: whitesmoke;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">GUVI</a>
        </div>
    </nav>

    <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-4  text-center " style="background-color:whitesmoke;height: 89vh;">
            <div class="d-block mx-auto mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
            </div>
            <h1>
                <p class="fs-5"><?= $name ?> <?= $sname ?></p>
            </h1>
            <hr>
            <div class="Profile align-content-lg-start">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
                <a href="#" class="text-black text-decoration-none fs-6">Profile</a>

                <hr>
            </div>
            <div class="edit align-content-lg-start">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg>
                <!-- Button trigger modal -->
                <a href class="text-black text-decoration-none fs-6" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Edit
                </a>

                <!-- Modal -->

                <hr>
            </div>

            <div class="logout mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                </svg>
                <a href="#" class="text-black text-decoration-none fs-6">Logout</a>
            </div>
        </div>

        <div class="col-lg-10 col-md-9 col-sm-8" style="background-color:white;">
            <p>Name: <?= $name . " " . $sname ?></p><br><!--to add the name-->
            <p>AGE: <?= $vayasu ?> Not out </p><br><!--to add the AGE-->
            <P>contact: <?= $phn ?></P><br><!--to add the contact-->
            <p>email: <?= $eml ?></p><br><!--to add the email-->
        </div>
    </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).on('submit', '#up', function(e) {
            e.preventDefault();

            var formData = new FormData(this); /////continue from here 
            formData.append("updt", true);
            console.log(1);

            $.ajax({
                type: "POST",
                url: "update.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                    var res = jQuery.parseJSON(response);
                    if (res.status == 110) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    } else if (res.status == 108) {

                        $('#errorMessage').addClass('d-none');
                        $('#up')[0].reset();
                        $('#nk33').load(window.location.href + ' #nk33');
                        alertify.set('notifier', 'position', 'top-right');
                        alertify.success(res.message);

                    } else if (res.status == 109) {

                        $('#errorMessage').addClass('d-none');
                        $('#up')[0].reset();
                        $('#nk33').load(window.location.href + ' #nk33');
                        alertify.set('notifier', 'position', 'top-right');
                        alertify.success(res.message);
                    }

                }
            });

        });
    </script>
</body>

</html>