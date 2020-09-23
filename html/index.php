<?php   
    $nama="Bayu Pamungkas";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Threehouse <?php echo $nama; ?></title>
    <link rel="stylesheet" href="asset/css/all.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <style>
        
    </style>
</head>
<body>

    <!-- class container -->
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-lg-4 border bg-dark">
                <div class="d-flex flex-coloumn m-5">
                    <img class="d-flex align-self-center" src="images/rodok.jpg" alt="logo" width= "120px">
                </div>
                
                <div class="d-flex flex-coloumn m-5">
                    <div class="d-flex align-self-center">
                        <p class="h2 text-light"><?php echo $nama; ?></p>
                    </div>
                </div>
            </div>
            
            <!-- class content  -->
            <div class="content col-lg-8 border p-0 vh-100">
                <div class="d-flex flex-column border">
                    <p class="h2">My first page PHP</p>

                    <section class="pl-5">
                        <p class="h2">Unit</p>
                        <?php include "inc/units.php"; ?>
                        <p class="lead"><?php echo celciusToFahrenheit(80); ?></p>
                    </section>

                    <section class="pl-5">
                        <p class="h2">String</p>
                        <?php include "inc/strings.php"; ?>
                        <p class="lead"><?php echoaskName("AhMad DhaNi"); ?></p>
                    </section>
                </div>

                

                <div class="d-flex position-absolute fixed-bottom">
                    <p class="font-weight-normal"> <?php echo $nama; echo " Last modified: "
                    .date("F d Y H:i:s", getlastmod());?>
                    </p>
                </div>


            </div>
            
        </div>
    </div>

    <script src="asset/js/jquery-3.5.1.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    </body>
</html>