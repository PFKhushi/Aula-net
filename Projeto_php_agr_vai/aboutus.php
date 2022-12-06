<?php

require('includes/dbhandler.inc.php');

$consulta = "SELECT * FROM aboutus"; 
$cons = $conn->query($consulta) or die($conn->error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>


<body >
    <?php while($data = $cons->fetch_array()){  ?>

        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                
                
                <h1 class="display-5 fw-bold"><?php echo $data['Title'];?></h1>
                <p class="col-md-8 fs-4"><?php echo $data['Content'];?></p>
                
                
                <a class="btn btn-dark" href="?pg=inicio" role="button">Início</a>
            </div>
        </div>
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        
        <main class="px-3">
            <h1>Contact Information.</h1>
            <p class="lead">
            </p>
            <p class="lead">Contact Number: <?php echo $data['CttNum'];?></p>
            <p class="lead">Contact Email: <?php echo $data['CttMail'];?></p>
            <p class="lead">
            </p>

    <?php } ?>
        </main>

        </div>
    


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>