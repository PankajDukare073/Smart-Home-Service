<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Smart home Services</title </head>

<body>
  <nav class="navbar navbar-dark fixed-top bg-danger ">
    <div class="container-sm justify-content-between">
      <span class="navbar-brand mb-0 h1">Smart Home Service</span>
      <div>
        <button class="btn btn-info text-white me-2 py-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
          type="button">Register</button>
        <button class="btn btn-success py-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"
          type="button">Login</button>
      </div>
    </div>
  </nav>

  <img src="./images/bg.jpg" class="position-relative w-100 vh-100 opacity-25" alt="">
  <center>
    <div style="position: absolute; top:150px;  margin:0 auto;" class="w-90 text-white">
      <h1>Smart home Services</h1>
      <p>We provide House Cleaning, Painting services, Wood Polishing, Texture painting, Floor polishing, Water tank
        cleaning, and many other cleaning services. We are one of the best Professional Home services provider in india.
      </p>
    </div>
  </center>

  <!-- Modal for registration -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Select user role</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row justify-content-around ">
              <div class="col border rounded border-success me-3">
                <a href="" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#customermodal"
                  type="button">
                  <img src="./images/flat-customer-support-illustration_23-2148899114.webp" class="w-100" height="200px"
                    alt="">
                  <center>Customer</center>
                </a>
              </div>
              <div class="col border rounded border-success">
                <a href="" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#servicemodal"
                  type="button">
                  <img
                    src="./images/plumber-repairing-pipe-burst-woman-phoning-service-stop-house-flooding_74855-14142.webp"
                    class="w-100" height="200px" alt="">
                  <center>Service Provider</center>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal for login -->
  <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Login User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="mb-3">
                <form action="dbopertion.php" method="post" enctype="multipart/form-data">
                  <select class="form-select" aria-label="Default select example" name="role">
                  <?php
                                                    include_once 'includes/conn.php';
                                                    $query="select * from userrole";
                                                    $result=mysqli_query($conn,$query);
                                                    foreach($result as $row){
                                                echo"
                                                <option>".$row['role']."</option>
                                              ";
                                                    }
                                                ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="mb-3">
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email" name="email">
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="mb-3">
                  <input type="password" class="form-control" id="exampleFormControlInput1"
                    placeholder="Enter password" name="pass">
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-7">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                  <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
              </div>
              <div class="col-5">

                <a href="#!" data-bs-toggle="modal" data-bs-target="#forgotmodal" style="font-size: 1px;">Forgot
                  password?</a>
              </div>
            </div>
            <div class="row justify-content-center mt-1">
              <div class="col-12">
                <div class="mb-3">
                  <center>
                    <input class="btn btn-success justify-content-center" type="submit" value="Login" name="luser">
                  </center>
                  <p class="float-end mt-1" style="font-size: 1px;">Not a member?<a href="#!" data-bs-dismiss="modal"
                      data-bs-toggle="modal" data-bs-target="#staticBackdrop">Register</a></button></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- modal for customer registration-->
  <div class="modal fade" id="customermodal" tabindex="-1" aria-labelledby="customerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register customer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="dbopertion.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-6">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="fname">
                  <label for="floatingInput">Enter First Name</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                    name="lname">
                  <label for="floatingInput">Enter Last Name</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <label for="formFile" class="form-label">Upload Profile Photo</label>
                <input class="form-control" type="file" name="photo">
              </div>
              <div class="col-6">
                <div class="form-floating mb-3">
                  <textarea class="form-control" id="floatingInput" placeholder="name@example.com" name="address"
                    rows="1"></textarea>
                  <label for="floatingInput">Enter Address</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-6">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="mobile">
                  <label for="floatingInput">Enter Mobile Number</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" name="email">
                  <label for="floatingInput">Enter Email Address</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="epass">
                  <label for="floatingInput">Enter Password</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="cpass">
                  <label for="floatingInput">Confirm Password</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <center>
                  <input class="btn btn-success justify-content-center" type="submit" value="Register" name="crbtn">
                </center>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



  <!-- modal for service provider registration-->
  <div class="modal fade" id="servicemodal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register Service Provider</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="dbopertion.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-6">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="fname">
                  <label for="floatingInput">Enter First Name</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                    name="lname">
                  <label for="floatingInput">Enter Last Name</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6 mb-3">
                <label for="formFile" class="form-label">Upload Profile Photo</label>
                <input class="form-control" type="file" id="formFile" name="photo">
              </div>
              <div class="col-6">
                <div class="form-floating mb-3">
                  <textarea class="form-control" id="floatingInput" placeholder="name@example.com" name="address"
                    rows="1"></textarea>
                  <label for="floatingInput">Enter Address</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="stype">
                  <label for="floatingInput">Enter Service Type</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                    name="sname">
                  <label for="floatingInput">Enter Shop Name</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6 mb-3">
                <label for="formFile" class="form-label">Upload Shop Photo</label>
                <input class="form-control" type="file" id="formFile" name="sphoto">
              </div>
              <div class="col-6">
                <table>
                  <tr>
                    <td>Select Service time:</td>
                  </tr>
                  <tr>
                    <td>
                      From:
                    </td>
                    <td>
                      <input type="time" id="appt" name="stfrom">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      To:
                    </td>
                    <td>
                      <input type="time" id="appt" name="stto">
                    </td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="mobile">
                  <label for="floatingInput">Enter Mobile Number</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" name="email">
                  <label for="floatingInput">Enter Email Address</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="epass">
                  <label for="floatingInput">Enter Password</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="cpass">
                  <label for="floatingInput">Confirm Password</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <center>
                  <input class="btn btn-success justify-content-center" type="submit" value="Register" name="srbtn">
                </center>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Forget password-->
  <div class="modal fade" id="forgotmodal" tabindex="-1" aria-labelledby="forgotModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="dbopertion.php" method="post" enctype="multipart/form-data">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="mb-3">
                  <select class="form-select" aria-label="Default select example" name="role">
                  <?php
                                                    include_once 'includes/conn.php';
                                                    $query="select * from userrole";
                                                    $result=mysqli_query($conn,$query);
                                                    foreach($result as $row){
                                                echo"
                                                <option>".$row['role']."</option>
                                              ";
                                                    }
                                                ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="mb-3">
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email" name="email">
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="mb-3">
                  <input type="password" class="form-control" id="exampleFormControlInput1"
                    placeholder="Enter New password" name="epass">
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="mb-3">
                  <input type="password" class="form-control" id="exampleFormControlInput1"
                    placeholder="Confirm New password" name="cpass">
                </div>
              </div>
            </div>
            <div class="row justify-content-center mt-1">
              <div class="col-12">
                <div class="mb-3">
                  <center>
                    <input class="btn btn-success justify-content-center" type="submit" value="Reset" name="rpass">
                  </center>
                </div>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>