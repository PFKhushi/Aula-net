<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header style="background:LightGray;" class="p-3 mb-3 border-bottom">
        <div class="container-md">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <img src="images/GAMEOVER.png" width="52" height="52s">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="?pg=inicio" class="nav-link px-2 link-secondary">Home</a></li>
                    <li><a href="?pg=jogos" class="nav-link px-2 link-dark">Games</a></li>
                    
                    <li><a href="?pg=aboutus" class="nav-link px-2 link-dark">About us</a></li>
                </ul>


                
                <?php
                    if(!isset($_SESSION)) session_start();
                    if(isset($_SESSION['IDUsers']) || isset($_SESSION['UIDUsers'])){
                        echo 'Welcome, '; echo $_SESSION['UIDUsers']; echo '.    ';

                        if($_SESSION['UsersAccess'] == 1){
                            
                            echo '<div class="dropdown text-end">
                                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://github.com/mdo.png" alt="mdo" width="52" height="52" class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu text-small">
                                    <li><a class="dropdown-item" href="?pg=AdminSettings">Settings</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="includes/logout.inc.php">Sign out</a></li>
                                </ul>
                            </div>';

                        }else{
                            echo '<div class="dropdown text-end">
                                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://github.com/mdo.png" alt="mdo" width="52" height="52" class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu text-small">
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="includes/logout.inc.php">Sign out</a></li>
                                </ul>
                            </div>';
                        }

                        
                    }else{
                        echo '<a href="?pg=login"><button type="button" class="btn btn-dark">Login</button></a>
                            <a href="?pg=signup"><button type="button" class="btn btn-light">Sign Up</button></a>';
                    }
                ?>
                
            </div>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>