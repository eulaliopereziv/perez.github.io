<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer's Information</title>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="jquery-3.6.4.min.js"></script>
    <script defer src="script.js"></script>

</head>

<body>
    <?php
    require 'dbhelper.php';
    $sel = "SELECT * FROM users";
    $query = mysqli_query($conn, $sel);
    $result = mysqli_fetch_assoc($query);
    ?>

    <!-- Nav Bar -->

    <ul class="nav justify-content-end bg-gradient p-2 fixed-top " style="background-color: #00055b;">
        <li class="nav-item">
            <p class=" text-white fs-4 me-3" style="text-transform:uppercase">
                <?php echo $result['full_name']; ?>
            </p>
        </li>
        <li class="nav-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                class="bi bi-person-circle text-white me-3" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white bg-gradient bg-danger btn-outline-danger" href="index.php?"
                onclick="return confirm('You want to Logout?')">Logout</a>
        </li>
    </ul>


    <div class="row" style="margin-top:2%;">

        <!-- column 1- -->
        <div class="col-4  " style="width:500px; height:auto; background-color:#f4f4ff">
            <div class="container position-fixed">
                <div class=" m-5 ">
                    <h3><img src="logo.png" style="width: 65px; height: 50px"> JONG SHOP</h3>


                </div>
                <!-- Modal Add Button -->
                <div class="d-flex justify-content-between mt-4 ms-5 mb-5   ">
                    <a href="#" type="button" class="btn btn-secondary btn-sm fs-2 p-2 shadow "
                        style="border-radius:15px" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-title="Only work on customer's information menu!"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="40"
                            fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                            <path
                                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path
                                d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
                        </svg>Add New
                    </a>
                </div>
                <script>
                    $(function () {
                        $('[data-bs-toggle="tooltip"]').tooltip();
                    });
                </script>
                <div class="container ms-5 ">
                    <a href="profile.php" type="button" class="btn btn-outline-primary fs-4 mb-1 text-black "
                        style="width: 350px;border-radius: 20px;" ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        </svg> Developer's
                        Profile</a><br>
                    <a href="index.php" type="button" class="btn btn-outline-primary fs-4 mb-1 text-black"
                        style="width: 350px;border-radius: 20px; "><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </svg> Customer's Information</a><br>
                    <a href="products_list.php" type="button" class="btn btn-outline-primary fs-4 mb-1 text-black"
                        style="width: 350px; border-radius: 20px;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                            <path
                                d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                            <path
                                d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                        </svg> Product's Information</a>
                </div>

                <div class="container " style="margin-top:7%">
                    <h4 style="color: #001bb1;">MISSION</h4>
                    <p>To provide our clients with the highest quality system <br>integration
                        and administration services that exceed<br> their expectations. We will
                        accomplish this by hiring <br>and retaining the best people, providing them
                        with the <br>best tools and training available, and continually improving <br>
                        our processes and services.</p>

                    <h4 class="mt-4" style="color: #001bb1;">VISON</h4>
                    <p>To be the leading provider of system integration services <br>
                        in our industry by delivering innovative solutions that meet<br>
                        or exceed our clients expectations. We will achieve this by<br>
                        fostering a culture of innovation, collaboration, and<br>
                        continuous improvement.</p>
                </div>
            </div>
            <?php include 'add.php'; ?>
        </div>
        <!-- column 2- -->
        <div class="col-4 " style="width:1550px; height:auto">
            <div class="spinner-wrapper">
                <div class="spinner-border text-primary"
                    style="width:50px; height:50px; margin-top: 25%; margin-left: 50%;margin-bottom: 50%" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>

            <div class="card rounded-5 shadow" style="margin-top:10%; width:900px; height:500px; margin-left:20%">
                <div class="card-header fs-3  text-white fw-bold text-center" style="background-color:#00055b;">
                    DEVELOPER'S PROFILE
                </div>
                <div class="card-body">
                    <div class="container ">
                        <div class="row">
                            <div class="col " style="width:100px; height:auto">
                                <img src="uploads/jong.jpg" class="image mb-3 rounded-circle border border-primary"
                                    style="width:30%; height:40%">
                                <h5 class="card-title fs-3">Eulalio L. Perez IV</h5>
                                <p class="card-text"><b>Sex:</b> Male</p>
                                <p class="card-text"><b>Age:</b> 21 years old</p>
                                <p class="card-text"><b>Contact:</b> +639454658922</p>
                                <p class="card-text"><b>Course:</b> Bachelor of Science in Information Technology</p>
                            </div>
                            <div class="col">
                                <p><a href="https://web.facebook.com/eulalioliwagon.pereziv/" CLASS="me-2"
                                        type=" button"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg></a>Eulalio Liwagon Perez IV
                                </p>
                                <p>
                                    <a href="" type="button" class="me-2 text-danger"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path
                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg></a>eulalio.pereziv@nmsc.edu.ph
                                </p>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</body>

</html>