<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
	$(document).ready(function(){
		$("#staticBackdrop2").modal('show');
	});
    </script>
    <title>Service provider notifiction</title>
    <style>
        .menu a {
            text-decoration: none;
            display: block;
            color: white;
            align-items: center;
            margin: 0 auto;
            margin-left: 30px;
            margin-bottom: 5px;

        }

        .col-6 h3 {
            margin-bottom: 0px;
        }

        .col-6 {
            padding: 15px;

        }
    </style>
</head>

<body>
<?php session_start(); ?>
    <div class="row sticky-top">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: brown;">
                <div class="container justify-content-between">
                    <div><a class="navbar-brand" href="service.php">Smart Home Services</a></div>
                    <div>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
    <div class="col-3 vh-100  bg-danger overflow-auto text-white">
        <div class="row justify-content-around">
        <?php
                  include_once 'includes/conn.php';
                     $aid=$_SESSION['id'];
          $query="select * from service where id='$aid'";
          $result=mysqli_query($conn,$query);
         while ($row=mysqli_fetch_array($result)){ 
             ?>
                <div class="col-12">
                    <center>
                        <img src=<?= $row['photo']; ?> width="100px" height="100px" alt=""
                            class="rounded-circle border border-white border-5 mt-1">
                    </center>
                </div>
            </div>
            <div class="row  justify-content-around">
                <div class="col-12">
                    <center>
                        <p class="m-0" style="font-size: 20px;"><?= $row['fname']; ?> <?= $row['lname']; ?></p>
                        <p class="m-0 ">Service Provider</p>
                    </center>
                </div>
                <?php } ?>
            </div>
            <div class="menu">

                <a href="service.php"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                        <path
                            d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z" />
                    </svg> &nbsp;Dashboard</a>

                <a href="sprofile.php"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg> &nbsp;Profile</a>
                <a href="snotifiction.php"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                    </svg> &nbsp;Notification</a>
                <a href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                        class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                        <path fill-rule="evenodd"
                            d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                    </svg> &nbsp;Logout</a>
            </div>
        </div>
        <div class="col-9 vh-100 overflow-auto">
            <h6><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                    <path
                        d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z" />
                </svg> Approve Customer Appointment</h6>
            <div class="row">
                <table class="table table-hover" style="font-size: 15px;">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Sr. No.</th>
                            <th scope="col">Mobile number</th>
                            <th scope="col">Address</th>
                            <th>Date time</th>
                            <th>Datails</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                     include_once 'includes/conn.php';
                     $spid=$_SESSION['id'];
          $query="select * from appoint where astatus='1' and spid='$spid'";
          $result=mysqli_query($conn,$query);
         while ($row=mysqli_fetch_array($result)){
             ?>
                        <tr>
                        <form action="dbopertion.php" method="post" enctype="multipart/form-data">
                        <input type='hidden' value=<?= $row['id']; ?> name='aid'>
                            <input type='hidden' value=<?php echo $_SESSION['id'] ?> name='spid'>
                            <th scope="row"><?= $row['id']; ?></th>
                            <?php
                     $cid=$row['cid'];
          $query1="select * from customer where id='$cid'";
          $result1=mysqli_query($conn,$query1);
         while ($row1=mysqli_fetch_array($result1)){ 
             ?><input type='hidden' value=<?= $row1['id']; ?> name='id'>
                            <td><?= $row1['mobile']; ?></td>
                            <td><?= $row1['address']; ?></td>
                            <?php } ?>
                            <input type='hidden' value="spn" name='filename'>
                            <td><input type="datetime-local" id="birthdaytime" name="datetime"></td>
                            <td><button style="border:none; background-color:transparent;" type="submit" name="vcd" ><svg
                                        style="color: rgb(0, 68, 255);" xmlns="http://www.w3.org/2000/svg" width="25"
                                        height="25" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg></button></td>
                            <td><button style="border:none; background-color:transparent;" type="submit" name="acr"><svg style="color: darkgreen;" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                                </svg></button></td>
                </form>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
       <!-- Modal for view datails user -->
       <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel2" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">View Users Datails</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <table>
                                <?php
                                    include_once 'includes/conn.php';
                                    $cid=$_SESSION['cid'];
          $query="select * from customer where id='$cid'";
          $result=mysqli_query($conn,$query);
         while ($row=mysqli_fetch_array($result)){ ?>
                                    <tr>
                                        <td>
                                            <img src=<?= $row['photo']; ?>
                                                width="200px" height="200px">
                                        </td>
                                        <td>
                                        <?= $row['fname']; ?>
                                            <br>
                                            <?= $row['lname']; ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table" style="font-size: 20px;">
                                <tr>
                                    <th>
                                        Email:
                                    </th>
                                    <td>
                                    <?= $row['email']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Mobile Number:
                                    </th>
                                    <td>
                                    <?= $row['mobile']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Address:
                                    </th>
                                    <td>
                                    <?= $row['address']; ?>
                                    </td>
                                </tr>
                                <?php }?>
                            </table>
                        </div>
                    </div>
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