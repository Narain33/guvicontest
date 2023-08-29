<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--ALERTIFY-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <title>contest_login</title>
    <style>
        .center-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: 'Dancing Script', cursive;
            font-family: 'Roboto', sans-serif;
        }

        .dual-border {
            display: inline-block;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 20px;
            border: 1px solid #d1d1d1;
        }
    </style>
</head>

<body>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">REGISTRATION FORM</h5>
                    <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="reg" method="POST">
                    <div class="modal-body">
                        <img src="guvi3.jpeg" class="img-fluid" alt=" inside the moda" style="max-width: 20%;height:auto;">

                        <!--form inside the modal-->
                        <div class="card text-center">
                            <div class="card-header">
                                BE A GUVI'AN
                            </div>

                            <div class="card-body">
                                <div class="row-auto mb-3">
                                    <div class="col-auto mb-3">

                                        <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="firstname" required>
                                    </div>
                                    <div class="col-auto mb-3">
                                        <input type="text" class="form-control " placeholder="Last name" aria-label="Last name" name="lastname" required>
                                    </div>
                                </div>
                                <div class="col-auto mb-3">
                                    <input type="email" class="form-control" id="ex" placeholder="name@example.com" name="email" required>
                                </div>
                                <div class="col-auto mb-3">
                                    <label class="visually-hidden" for="autoSizingInput">DOB</label>
                                    <input type="date" class="form-control" id="autoSizingInput" name="dob" placeholder="DOB" name="dob" required>
                                </div>
                                <div class="col-auto mb-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Phone-number" name="phone" required>
                                </div>
                                <div class="col-auto mb-3">
                                    <input type="password" class="form-control" id="leFormControlInput1" placeholder="password" name="password" required>
                                </div>

                                <div class="col-auto mb-3">
                                    <input type="password" class="form-control" id="exa" placeholder="confirm password" name="confirm" required>
                                </div>
                                <div class="d-md-flex justify-content-start align-items-left mb-2  py-2">

                                    <h6 class="mb-0 me-4">Gender: </h6>

                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input class="form-check-input" name="gender" type="radio" id="maleGender" value="Male" name="gender" required>
                                        <label class="form-check-label" for="femaleGender">Male</label>
                                    </div>

                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input class="form-check-input" name="gender" type="radio" id="femaleGender" value="Female" name="gender" required>
                                        <label class="form-check-label" for="maleGender">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input class="form-check-input" name="gender" type="radio" id="others" value="Others" name="gender" required>
                                        <label class="form-check-label" for="maleGender">Others</label>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="reg" class="btn btn-success ">READY TO GO..</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!--------------------end of modal---- form--------->
    <div class="center-container">
        <div class="dual-border">
            <div class="container mt-5">

                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-3">
                        <img src="thalaivar.png" class="img-fluid ml-5" alt="...">
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p class="text-center ">welcome to guvi</p>
                        <form id="login">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control mr-5" id="floatingInput" placeholder="name@example.com" name="emails" required>
                                <label for="floatingInput"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                    </svg> Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password " class="form-control" id="floatingPassword" placeholder="Password" name="pass" required>
                                <label for="floatingPassword">Password</label>
                            </div>
                            <!--login-button--> <button type="submit" name="submit" class="btn btn-success btn-lg w-100 mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                                    <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                                    <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z" />
                                </svg> LOGIN</button>
                        </form>
                        <!-- Button trigger modal -->
                        <div class="par mb-3">
                            <h6 style="text-align: center;"><a href=" your password?">FORGET YOUR PASSWORD?</a></h6>
                        </div><!--LINK-->
                        <button type="button" class="btn btn-primary btn-lg w-100 mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Create account
                        </button>

                        <!-- Modal -->

                    </div>

                </div>

            </div>
            <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                $(document).on('submit', '#reg', function(e) {
                    e.preventDefault();

                    var formData = new FormData(this);
                    formData.append("save_reg", true);


                    $.ajax({
                        type: "POST",
                        url: "signup.php",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            var res = jQuery.parseJSON(response);
                            if (res.status == 422) {
                                $('#errorMessage').removeClass('d-none');
                                $('#errorMessage').text(res.message);

                            } else if (res.status == 200) {

                                $('#errorMessage').addClass('d-none');
                                $('#reg')[0].reset();

                                alertify.set('notifier', 'position', 'top-right');
                                alertify.success(res.message);
                                   
                            } else if (res.status == 500) {
                                
                                $('#errorMessage').addClass('d-none');
                                $('#reg')[0].reset();
                                alertify.set('notifier', 'position', 'top-right');
                                alertify.success(res.message);
                            } else if (res.status == 423) {

                                $('#errorMessage').addClass('d-none');
                                $('#reg')[0].reset();

                                alertify.set('notifier', 'position', 'top-right');
                                alertify.success(res.message);


                            }
                            if (res.status == 201) {
                                $('#errorMessage').addClass('d-none');
                                $('#reg')[0].reset();

                                alertify.set('notifier', 'position', 'top-right');
                                alertify.success(res.message);

                            }
                        }
                    });

                });
                //login user form action
                $(document).on('submit', '#login', function(e) {
                    e.preventDefault();

                    var formData = new FormData(this);
                    formData.append("log", true);
                    console.log(1);

                    $.ajax({
                        type: "POST",
                        url: "login.php",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            console.log(response);
                            var res = jQuery.parseJSON(response);
                            if (res.status == 422) {
                                $('#errorMessage').removeClass('d-none');
                                $('#errorMessage').text(res.message);

                            } else if (res.status == 404) {

                                $('#errorMessage').addClass('d-none');
                                $('#login')[0].reset();

                                alertify.set('notifier', 'position', 'top-right');
                                alertify.success(res.message);

                            } else if (res.status == 200) {

                           
                                $('#errorMessage').addClass('d-none');
                                $('#login')[0].reset();

                                alertify.set('notifier', 'position', 'top-right');
                                alertify.success(res.message);
                                window.location.href="dashboard(bck).php"
                         
                            } else if (res.status == 500) {

                                $('#errorMessage').addClass('d-none');
                                $('#login')[0].reset();
                                alertify.set('notifier', 'position', 'top-right');
                                alertify.error(res.message);
                            }

                        }
                    });

                });
            </script>


</body>

</html>