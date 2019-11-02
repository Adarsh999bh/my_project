<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: rgb(157, 192, 238);text-align:center;">
    <?php
    $name = $_POST['cardname'];
    $num = $_POST['cardnumber'];
    $expm = $_POST['expmonth'];
    $expy = $_POST['expyear'];
    $cvv = $_POST['cvv'];
    //$appid = $_POST['applid'];
    if($_POST["cardnumber"]=="" || $_POST["expmonth"]=="" || $_POST["cvv"]=="" || $name=="" || $expy==""){
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<h3>Please enter all details..!</h3>";

    }
    else{
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        $servername = "localhost";
        $username = "root";
        $password ="";
        $databasename = "studentbusp";

        $connection = mysqli_connect($servername,$username,$password,$databasename);
        if(!$connection)
        {
        die("connection failed :".mysqli_connect_error());
        }
        else{
            $qq = "select * from apid";
            $r = mysqli_query($connection,$qq);
            $row=$r->fetch_assoc();
            $aplid = $row['aplid'];
            $date = date("y-m-d");
            $vdate = date("y-m-d",strtotime(date("y-m-d",strtotime($date))." + 1 year"));
            $paid = "yes";
            // echo $date;
            // echo "<br>";
            // echo $vdate;
             $sql = "update paydetails set paid='$paid',p_date='$date',p_validity='$vdate' where p_applid='$aplid';";
             if(mysqli_query($connection,$sql))
             {
                echo "<h2>Registration Complete...!!!</h2>";
             }
             else
             {
                echo mysqli_error($connection);
                echo "not inserted";
             }
        }
        }
    
   
    ?>
    
</body>
</html>