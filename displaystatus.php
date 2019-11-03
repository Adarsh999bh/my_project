<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body class="boddy" style="background-color: rgb(157, 192, 238);text-align:center;">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="indd.html">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="ind1.html">Pay Details<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ind2.html">Bus Details<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="fedb.html">feedback</a>
                        <!-- <a class="dropdown-item" href="ind3.html">Bus Details</a> -->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="conn.html">Contact us</a>
                    </div>
                </li>
                <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
            <li class="nav">
                <h2>e-Buspass</h2>
            </li>
        </div>
        <span class="border border-dark"></span>
    </nav>       
<?php
$servername = "localhost";
$username = "root";
$password ="";
$databasename = "studentbusp";

$connection = mysqli_connect($servername,$username,$password,$databasename);
if(!$connection)
{
    die("connection failed :".mysqli_connect_error());
}
$reg = $_POST["appli_no"];
$usn = $_POST["pusn"];
// echo $reg;
// echo $usn;
if(is_null($reg) || is_null($usn))
{
    echo "please enter credentials ";
    echo "<br>";

}
else
{
    $q = "select application_id,s_usn from student";
    $r = mysqli_query($connection,$q);
    $c = 0;
    while ($row=$r->fetch_assoc())
    {
        if($reg == $row["application_id"] && $usn == $row["s_usn"])
        {
            $c = 1;
            break;
        }
    }
    if($c == 1)
    {
        $q = "select s_usn,s_branch,s_sem,clgname,r_name,s_boarding,s_dist,s_eid,paid from student,college,routedetails,paydetails where cid=s_collegeid and r_route=s_route and p_applid=application_id and application_id='$reg';";
        $r = mysqli_query($connection,$q);
        $row=$r->fetch_assoc();
        echo "<br>";
        echo "<h4>USN : ".$row['s_usn']."</h4>";
        echo "<br>";
        echo "<h4>Branch : ".$row['s_branch']."</h4>";
        echo "<br>";
        echo "<h4>Semister : ".$row['s_sem']."</h4>";
        echo "<br>";
        echo "<h4>College name : ".$row['clgname']."</h4>";
        echo "<br>";
        echo "<h4>Route : ".$row['r_name']."</h4>";
        echo "<br>";
        echo "<h4>Boarding point : ".$row['s_boarding']."</h4>";
        echo "<br>";
        echo "<h4>Distance : ".$row['s_dist']." Km</h4>";
        echo "<br>";
        echo "<h4>Email : ".$row['s_eid']."</h4>";
        echo "<br>";
        if($row['paid']=="yes"){
            $zz="PAID";
        }
        else{
            $zz="NOT PAID";
        }
        echo "<h4>Payment status : ".$zz."</h4>";
        if($zz=="NOT PAID"){
            $q="update apid set aplid='$reg';";
            $r = mysqli_query($connection,$q);
            echo '<a href="newcheck.php"><h6 style="color:black;">Go to payments</h6></a>';
        }
        echo "<br>";
    }
    else{
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<h3>Application ID or USn is not valid..!</h3>";
    }
}


?>
</body>
</html>