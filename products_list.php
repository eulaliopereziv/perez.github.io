<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product's Information</title>
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
                    <a href="#" type="button" class="btn btn-secondary btn-sm fs-2 p-2 shadow " style="border-radius:15px"
                    data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-title="Only work on customer's information menu!"><svg xmlns="http://www.w3.org/2000/svg"
                            width="50" height="40" fill="currentColor" class="bi bi-person-fill-add"
                            viewBox="0 0 16 16">
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
                        style="width: 350px; border-radius: 20px;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        </svg> Developer's
                        Profile</a><br>
                    <a href="index.php" type="button" class="btn btn-outline-primary fs-4 mb-1 text-black"
                        style="width: 350px; border-radius: 20px;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
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
                    <h4  style="color: #001bb1;">MISSION</h4>
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
            <p class="text-center fs-1 fw-bold text-black " style="margin-top:5%"> Product's Information</p>
            <div class="container">
                <form action="home.php" method="get"
                    class="form-floating m-4 rounded-4 border border-dark border-opacity-25">
                    <input type=" text" class="form-control" id="floatingInput" placeholder="Search customer.."
                        name="keyword">
                    <label for="floatingInput">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                        Search product..</label>
                </form>
            </div>

            <?php if (isset($_GET['keyword']) && strlen($_GET['keyword']) > 0): ?>
                <div class="m-3 w-10s">
                    Search result for <b class="text-primary">
                        <?= $_GET['keyword'] ?>
                    </b>.
                </div>
            <?php endif; ?>

            <?php
            require('dbhelper.php');
            if (isset($_GET['keyword']) && strlen($_GET['keyword']) > 0) {
                $keyword = $_GET['keyword'];
                $where = " WHERE product_name LIKE '%$keyword%' OR supplier LIKE '%$keyword%'";
                $result = $conn->query("SELECT * FROM products $where ORDER BY product_id DESC");

            } else {
                $result = $conn->query("SELECT * FROM products ORDER BY product_id DESC");
            } ?>



            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="container">
                    <div class="container">
                        <div class=" float-start d-flex align-items-center">
                            <div class="card text-bg-light shadow p-3 mt-3 ms-4 " style=" width:380px;
                                    background-image:url(card8.png); 
                                    background-position: center;
                                   
                                    height:20vh;
                                    border-radius:20px">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="prof.png" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">

                                            <h5 class="card-title text-capitalize fw-semibold text-muted">
                                                <?= $row['product_name']; ?>
                                            </h5>
                                            <p class="card-text fst-italic">Stocks:
                                                <?= $row['stocks']; ?>
                                            </p>
                                            <p class="card-text fs-4  text-warning-emphasis">
                                                <?= $row['srp']; ?>.00
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>

    </div>

</body>

</html>