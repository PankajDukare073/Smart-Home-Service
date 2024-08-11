<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin</title>
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

        .col-4 h3 {
            margin-bottom: 0px;
        }

        .col-4 {
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
                    <div><a class="navbar-brand" href="admin.php">Smart Home Services</a></div>
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
          $query="select * from customer where id='$aid'";
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
                        <p class="m-0 ">admin</p>
                    </center>
                </div>
                <?php } ?>
            </div>
            <div class="menu">

                <a href="admin.php"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                        class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                        <path
                            d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z" />
                    </svg> &nbsp;Dashboard</a>

                <a href="aprofile.php"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg> &nbsp;Profile</a>

                <a href="aaprove.php"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                        <path
                            d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                        <path
                            d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                    </svg> &nbsp;Approve</a>

                <a href="amanageuser.php"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        fill="currentColor" class="bi bi-clipboard2-minus-fill" viewBox="0 0 16 16">
                        <path
                            d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z" />
                        <path
                            d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM6 8h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1 0-1Z" />
                    </svg> &nbsp;Manage User</a>

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
                </svg> Dashboard</h6>
            <div class="row">
                <div class="col-4 border border-success">
                    <center>
                        <svg style="color: rgb(255, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                            fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                            <path
                                d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                        </svg>
                        <h3>                   <?php
                          include_once 'includes/conn.php';
$sql = "SELECT * FROM service";
$result=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result);

$sql1 = "SELECT * FROM customer where role='Customer'";
$result1=mysqli_query($conn,$sql1);
$rowcount1=mysqli_num_rows($result1);

    echo $rowcount+$rowcount1; 
?></h3>
                        <h5 class="text-muted">
     
                        Total User</h5>
                    </center>
                </div>
                <div class="col-4 border border-success">
                    <center>
                        <svg style="color: rgb(21, 0, 255);" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                            fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path
                                d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
                        </svg>
                        <h3><?php echo $rowcount1;?></h3>
                        <h5 class="text-muted">Customer</h5>
                    </center>
                </div>
                <div class="col-4 border border-success">
                    <center>
                        <svg style="color: rgb(255, 0, 183);" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                            fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                            <path
                                d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
                        </svg>
                        <h3><?php echo $rowcount;?></h3>
                        <h5 class="text-muted">Service provider</h5>
                    </center>
                </div>

            </div>
            <div class="row">
                <div class="col-4 border border-success">
                    <center>
                        <svg style="color: rgb(242, 255, 0);" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                            fill="currentColor" class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                            <path d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z" />
                            <path
                                d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                        </svg>
                        <h3>
                        <?php 
                        $sql3 = "SELECT distinct(stype) FROM service";
                        $result3=mysqli_query($conn,$sql3);
                        $rowcount3=mysqli_num_rows($result3);
                        
                            echo $rowcount3; 
                        ?>    

                        </h3>
                        <h5 class="text-muted">Total Services</h5>
                    </center>
                </div>
                <div class="col-4 border border-success">
                    <center>
                        <svg style="color: rgb(45, 181, 0);" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                            fill="currentColor" class="bi bi-wrench-adjustable-circle" viewBox="0 0 16 16">
                            <path
                                d="M12.496 8a4.491 4.491 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11c.027.2.04.403.04.61Z" />
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-1 0a7 7 0 1 0-13.202 3.249l1.988-1.657a4.5 4.5 0 0 1 7.537-4.623L7.497 6.5l1 2.5 1.333 3.11c-.56.251-1.18.39-1.833.39a4.49 4.49 0 0 1-1.592-.29L4.747 14.2A7 7 0 0 0 15 8Zm-8.295.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27.596-.894Z" />
                        </svg>
                        <h3 class="m-0">
                        <?php 
                        $sql3 = "SELECT * FROM appoint where astatus='2'";
                        $result3=mysqli_query($conn,$sql3);
                        $rowcount3=mysqli_num_rows($result3);
                        
                            echo $rowcount3; 
                        ?>
                        </h3>
                        <h5 class="text-muted">Done Services</h5>
                    </center>
                </div>
                <div class="col-4 border border-success">
                    <center>
                        <svg style="color: rgb(255, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                            fill="currentColor" class="bi bi-wrench-adjustable-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M6.705 8.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27.596-.894Z" />
                            <path
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16Zm-6.202-4.751 1.988-1.657a4.5 4.5 0 0 1 7.537-4.623L7.497 6.5l1 2.5 1.333 3.11c-.56.251-1.18.39-1.833.39a4.49 4.49 0 0 1-1.592-.29L4.747 14.2a7.031 7.031 0 0 1-2.949-2.951ZM12.496 8a4.491 4.491 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11c.027.2.04.403.04.61Z" />
                        </svg>
                        <h3> <?php 
                        $sql3 = "SELECT * FROM appoint where astatus='0'";
                        $result3=mysqli_query($conn,$sql3);
                        $rowcount3=mysqli_num_rows($result3);
                        
                            echo $rowcount3; 
                        ?></h3>
                        <h5 class="text-muted">pending Services</h5>
                    </center>
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