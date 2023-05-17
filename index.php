<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer's Information</title>

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
            <a class="nav-link text-white bg-gradient bg-danger me-3 btn-outline-danger" href="logout.php?"
                onclick="return confirm('You want to Logout?')">Logout</a>
        </li>
    </ul>


    <div class="row" style="margin-top:2%;">

        <!-- column 1- -->
        <div class="col-4  " style="width:500px; height:auto; background-color:#f4f4ff">
            <div class="container position-fixed">
                <div class="d-flex justify-content-between m-5 ">
                    <h3><img src="logo.png" style="width: 65px; height: 50px"> JONG SHOP</h3>
                </div>
                <!-- Modal Add Button -->
                <div class="d-flex justify-content-between mt-4 ms-5 mb-5  ">
                    <button type="button" class="btn btn-primary btn-sm fs-2 p-2 shadow " style="border-radius:15px"
                        data-bs-toggle="modal" data-bs-target="#AddModal"><svg xmlns="http://www.w3.org/2000/svg"
                            width="50" height="40" fill="currentColor" class="bi bi-person-fill-add"
                            viewBox="0 0 16 16">
                            <path
                                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path
                                d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
                        </svg>Add New</a>
                </div>
                <div class="container ms-5">
                    <a href="profile.php" type="button" class="btn btn-outline-primary fs-4 mb-1 text-black "
                        style="width: 350px; border-radius: 20px;"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                            height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        </svg> Developer's
                        Profile</a><br>
                    <a href="index.php" type="button" class="btn btn-outline-primary fs-4 mb-1 text-black"
                        style="width: 350px; border-radius: 20px;"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                            height="30" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </svg> Customer's Information</a><br>
                    <a href="products_list.php" type="button" class="btn btn-outline-primary fs-4 mb-1 text-black"
                        style="width: 350px; border-radius: 20px;"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                            height="30" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                            <path
                                d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                            <path
                                d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                        </svg> Product's Information</a>
                </div>

                <div class="container" style="margin-top:7%">
                    <h4 style="color: #001bb1;">MISSION</h4>
                    <p>To provide our clients with the highest quality system <br>integration
                        and administration services that exceed<br> their expectations. We will
                        accomplish this by hiring <br>and retaining the best people, providing them
                        with the <br>best tools and training available, and continually improving <br>
                        our processes and services.</p>

                    <h4 class="mt-4" style="color: #001bb1;">VISON</h4>
                    <p>To be the leading provider of system integration services <br>
                        in our industry by delivering innovative solutions that meet<br>
                        or exceed our clients’ expectations. We will achieve this by<br>
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
            <p class="text-center fs-1 fw-bold text-black " style="margin-top:5%"> Customer's Information</p>


            <div class="container">
                <form action="home.php" method="get" class="form-floating m-4 border border-dark border-opacity-25"
                    style="border-radius: 30px;">
                    <input type=" text" class="form-control" style="border-radius: 30px;" id="floatingInput"
                        placeholder="Search customer.." name="keyword">
                    <label for="floatingInput">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                        Search customer..</label>
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
                $where = " WHERE cust_name LIKE '%$keyword%' OR barangay LIKE '%$keyword%'";
                $result = $conn->query("SELECT * FROM customers $where ORDER BY customer_id DESC");

            } else {
                $result = $conn->query("SELECT * FROM customers ORDER BY customer_id DESC");
            } ?>

            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="container" style="margin-left:14%">
                    <div class="container">
                        <div class=" float-start d-flex ">
                            <div class="card text-bg-light shadow p-3 ms-3 me-4 mb-3  " style=" width:500px;
                background-image:url(back5.png); 
                background-position: center;
                background-size: cover;
                height:25vh;
                border-radius:20px">
                                <div class="row g-0">
                                    <div class="col-md-4" style="width:auto">
                                        <img src=" uploads/<?= $row['images']; ?>" class="img-fluid rounded-circle "
                                            alt=".pdf file" style="width:105px; height:60%; border-color:  max-width: 250px;
                              padding: 1rem;
                              position: relative;
                              background: linear-gradient(to right, red, purple);
                              padding: 3px;">
                                    </div>
                                    <div class="col-md-8  " style="width:auto; height:auto">
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-4  " style="width:250px">
                                                    <h5 class="card-title text-capitalize fw-semibold text-primary ">
                                                        <?= $row['cust_name']; ?>
                                                    </h5>
                                                    <p class="card-text  text-black">
                                                        <?= $row['sex']; ?> <br>
                                                        <?= $row['age']; ?> years old<br>
                                                        <?= $row['contact']; ?> 

                                                    </p>
                                                    <p class="card-text text-warning-emphasis text-black">
                                                        <?= $row['barangay']; ?>,
                                                        <?= $row['city']; ?>
                                                    </p>
                                                </div>
                                                <div class="col-4 " style="width:auto">
                                                    <!-- Edit Button -->
                                                    <a href="customer_id=<?= $row['customer_id'];?> & cust_name=<?= $row['cust_name']; ?> & sex=<?= $row['sex']; ?> &age=<?= $row['age']; ?> & contact=<?= $row['contact']; ?> & barangay=<?= $row['barangay']; ?> & city=<?= $row['city']; ?> & country=<?= $row['country']; ?>"
                                                        class="btn btn-outline-success btn-sm mb-1" style="border:none"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#EditModal<?= $row['customer_id']; ?>"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                            <path
                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                        </svg></a><br>
                                                    <!-- Delete Button -->
                                                    <a onclick="return confirm('Delete this customer?')"
                                                        href="delete.php?customer_id=<?= $row['customer_id']; ?>"
                                                        class="btn btn-outline-danger btn-sm mb-1" style="border:none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                            <path
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                        </svg> </a><br>
                                                    <!-- View Button -->
                                                    <a href="mapop.php?>" class="btn btn-outline-primary btn-sm "
                                                        style="border:none" data-bs-toggle="modal"
                                                        data-bs-target="#LocationModal<?= $row['customer_id']; ?>"> <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-geo-alt-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" style="margin-top: 10%"
                                            id="LocationModal<?= $row['customer_id']; ?>" tabindex="-1"
                                            aria-labelledby="LocationModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color: #00055b;">
                                                        <h1 class="modal-title fs-5 text-white" style="margin-left: 30%;"
                                                            id="LocationModalLabel">
                                                            <?= $row['barangay']; ?>,
                                                            <?= $row['city']; ?>
                                                        </h1>
                                                        <button type="button" class="btn-close bg-white "
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mapouter">
                                                            <div class="gmap_canvas"><iframe class="gmap_iframe"
                                                                    width="100%" frameborder="0" scrolling="no"
                                                                    marginheight="0" marginwidth="0"
                                                                    src="https://maps.google.com/maps?width=723&amp;height=432&amp;hl=en&amp;q=
                        <?= $row['barangay']; ?> <?= $row['city']; ?> <?= $row['country']; ?>&amp;t=k&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                                                                    href="https://capcuttemplate.org/">Capcut Template</a>
                                                            </div>
                                                            <style>
                                                                .mapouter {
                                                                    position: relative;
                                                                    text-align: right;
                                                                    width: 100%;
                                                                    height: 432px;
                                                                }

                                                                .gmap_canvas {
                                                                    overflow: hidden;
                                                                    background: none !important;
                                                                    width: 100%;
                                                                    height: 432px;
                                                                }

                                                                .gmap_iframe {
                                                                    height: 432px !important;
                                                                }
                                                            </style>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- Edit Modal -->
                                        <div class="modal fade" id="EditModal<?= $row['customer_id']; ?>" tabindex="-1"
                                            role="dialog" aria-labelledby="EditModal" aria-hidden="true">
                                            <div class="modal-dialog">

                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color: #00055b;">
                                                        <h1 class="modal-title fs-5 text-white" style="margin-left: 30%"
                                                            id="exampleModalLabel">Edit
                                                            Customer</h1>
                                                        <button type="button" class="btn-close bg-white"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="update.php" method="post" class="form-floating mb-3">
                                                            <input type="hidden" name="customer_id"
                                                                value="<?= $row['customer_id'] ?>">
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control" id="floatingInput1"
                                                                    name="cust_name" placeholder="Customer Name"
                                                                    value="<?= $row['cust_name']; ?>" required>
                                                                <label for="floatingInput1">Customer Name</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control" id="floatingInput1"
                                                                    name="sex" placeholder="Sex"
                                                                    value="<?= $row['sex']; ?>" required>
                                                                <label for="floatingInput1">Sex</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control" id="floatingInput1"
                                                                    name="age" placeholder="Age"
                                                                    value="<?= $row['age']; ?>" required>
                                                                <label for="floatingInput1">Age</label>
                                                            </div>
                                                            <div class="form-floating mb-4">
                                                                <input type="text" class="form-control" id="floatingInput2"
                                                                    name="contact" placeholder="Contact"
                                                                    value="<?= $row['contact']; ?>" required>
                                                                <label for="floatingInput2">Contact</label>
                                                            </div>
                                                            <div class="form-floating mb-4">
                                                                <input type="text" class="form-control" id="floatingInput3"
                                                                    name="barangay" placeholder="Barangay"
                                                                    value="<?= $row['barangay']; ?>">
                                                                <label for="floatingInput3">Address</label>
                                                            </div>
                                                            <div class="form-floating mb-4">
                                                                <input type="text" class="form-control" id="floatingInput3"
                                                                    name="city" placeholder="City"
                                                                    value="<?= $row['city']; ?>">
                                                                <label for="floatingInput3">City</label>
                                                            </div>
                                                            <div class="form-floating mb-4">
                                                                <input type="text" class="form-control" id="floatingInput3"
                                                                    name="country" placeholder="Country"
                                                                    value="<?= $row['country']; ?>">
                                                                <label for="floatingInput3">Country</label>
                                                            </div>
                                                            <div class="form-floating mb-4">
                                                                <input type="file" class="form-control" id="floatingInput3"
                                                                value="<?= $row['images']; ?> name="images">
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button class="btn btn-primary mb-5" type="submit">Update
                                                                    Information</button>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php include 'edit.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

    </div>
    </div>

</body>

</html>