<?php
include("admin/conf/config.php");

$ret = "SELECT * FROM `iB_SystemSettings` ";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); 
$res = $stmt->get_result();
while ($sys = $res->fetch_object()) {
?>
    <!DOCTYPE html>
    <html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $sys->sys_name; ?> - <?php echo $sys->sys_tagline; ?></title>
        <link href="dist/css/robust.css" rel="stylesheet">
    </head>

    <body>

        <nav class="navbar navbar-lg navbar-expand-lg navbar-transparant navbar-dark navbar-absolute w-100">
            <div class="container">
                

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="btn btn-warning" target="_blank" href="admin/pages_index.php">Admin Portal</a>
                        </li>
                        <li class="nav-item active">
                            <a class="btn btn-info" target="_blank" href="client/pages_client_index.php">Client Portal</a>
                        </li>
                        <li class="nav-item active">
                            <a class="btn btn-danger" href="aboutus.php" target="_blank">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="intro py-5 py-lg-9 position-center text-white">
                <img src="1.gif" class="img-cover"/>
        
            <div class="intro-content py-6 text-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto text-center">
                            <h1 class="my-3 display-4 d-none d-lg-inline-block">₹ <?php echo $sys->sys_name; ?></h1>
                            <p class="lead mb-3">
                                <?php echo $sys->sys_tagline; ?>
                            </p>
                        
                            <a class="btn btn-success btn-lg mr-lg-2 my-1" target="_blank" href="client/pages_client_signup.php" role="button">Registration Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="dist/js/bundle.js"></script>
    </body>

    </html>
<?php
} ?>