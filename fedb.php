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
    <div id="feed" class="containr text-center">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h3><em> FEEDBACK</em></h3>

        <p><em>Enter your valuable feedback here: </em></p>
        <br>
            <div id="contact" class="container">

                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="usn" name="usn" placeholder="USN" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="phone no" name="pno" placeholder="PHONE NO" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                <br>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <button class="btnpull" type="submit" style="color:black;">Send</button>
                    </div>
                </div>
                <?php
$name = $_POST['name'];
$usn = $_POST['usn'];
$pno = $_POST['pno'];
$email = $_POST['email'];
$comments = $_POST['comments'];
$msg = "Name : ".$name."\nUSN : ".$usn."\nPhone No. : ".$pno."\nEmail ID : ".$email."\n".$comments;
$id = "adarshbhandary48@gmail.com";
$sub = "FEEDBACK";
$hed = "From:e-Buspass@gmail.com";

if(mail($id,$sub,$msg,$hed))
{
  echo "<center>message sucessfully sent..!</center>";
}
else
{
    echo "<center>message not sent.</center>";
}



?>

            </div>
    </div>
</body>

</html>
