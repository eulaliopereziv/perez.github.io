<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
</head>

<body>

  <!-- Modal -->
  <div class="modal fade mt-5 " id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #00055b;">
          <h1 class="modal-title fs-5 text-white" style="margin-left:30%;"id="exampleModalLabel">Add Customer</h1>
          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
          <form action="save.php" method="post" class="form-floating mb-3"  enctype="multipart/form-data">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput1" name="cust_name" placeholder="Customer Name"
                required>
              <label for="floatingInput1">Customer Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput1" name="sex" placeholder="Sex"
                required>
              <label for="floatingInput1">Sex</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput1" name="age" placeholder="Age"
                required>
              <label for="floatingInput1">Age</label>
            </div>
            <div class="form-floating mb-4">
              <input type="text" class="form-control" id="floatingInput2" value="+63" name="contact"
                placeholder="Contact" required>
              <label for="floatingInput2">Contact</label>
            </div>
            <div class="form-floating mb-4">
              <input type="text" class="form-control" id="floatingInput3" name="barangay" placeholder="Barangay"
                required>
              <label for="floatingInput3">Barangay</label>
            </div>
            <div class="form-floating mb-4">
              <input type="text" class="form-control" id="floatingInput3" name="city" placeholder="City" required>
              <label for="floatingInput3">City/Municipality</label>
            </div>
            <div class="form-floating mb-4">
              <input type="text" class="form-control" id="floatingInput3" name="country" placeholder="Country" required>
              <label for="floatingInput3">Country</label>
            </div>
            <div class="form-group">
              <label for="picture">Profile Picture</label>
              <input type="file" class="form-control-file" id="picture" name="picture" accept="image/jpeg,image/png "
                required>
                <input type="hidden" name="submit" value="1">
            </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary mb-5" type="submit">Save Information</button>
        </div>
        </form>
      </div>
    </div>
  </div>

</body>

</html>