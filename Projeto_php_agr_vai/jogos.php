<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<main>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
        <div class="card shadow-sm" style="width: 425px; height: 375px">
            <img style="width: 425px; height: 225px; object-fit: fill;" src="images/2048.jpg">
            <div class="card-body">
            <h1 class="card-text" style="height: 70px;">2048</h1>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-dark">Play!</button>
                </div>
                <?php if(isset($_SESSION['UsersID'])){ ?>
                <small class="text-muted">c:</small>
                <?php }else{?>
                <small class="text-muted">Must logged in..</small>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm" style="width: 425px; height: 375px">
            <img style="width: 425px; height: 225px; object-fit: fill;" src="images/CHECKERS.jpg">
            <div class="card-body">
            <h1 class="card-text" style="height: 70px;">Checkers</h1>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-dark">Play!</button>
                </div>
                <?php if(isset($_SESSION['UsersID'])){ ?>
                <small class="text-muted">c:</small>
                <?php }else{?>
                <small class="text-muted">Must logged in..</small>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
        <div class="card shadow-sm" style="width: 425px; height: 375px">
            <img style="width: 425px; height: 225px; object-fit: fill;" src="images/CHESSS.jpeg">
            <div class="card-body">
            <h1 class="card-text" style="height: 70px;">Chess</h1>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-dark">Play!</button>
                </div>
                <?php if(isset($_SESSION['UsersID'])){ ?>
                <small class="text-muted">c:</small>
                <?php }else{?>
                <small class="text-muted">Must logged in..</small>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
        <div class="card shadow-sm" style="width: 425px; height: 375px">
            <img style="width: 425px; height: 225px; object-fit: fill;" src="images/DODGE.jpg">
            <div class="card-body">
            <h1 class="card-text" style="height: 70px;">Dodge</h1>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-dark">Play!</button>
                </div>
                <?php if(isset($_SESSION['UsersID'])){ ?>
                <small class="text-muted">c:</small>
                <?php }else{?>
                <small class="text-muted">Must logged in..</small>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
        <div class="card shadow-sm" style="width: 425px; height: 375px">
            <img style="width: 425px; height: 225px; object-fit: fill;" src="images/ESCAPEROOM.jpg">
            <div class="card-body">
            <h1 class="card-text" style="height: 70px;">Escape Room</h1>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-dark">Play!</button>
                </div>
                <?php if(isset($_SESSION['UsersID'])){ ?>
                <small class="text-muted">c:</small>
                <?php }else{?>
                <small class="text-muted">Must logged in..</small>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
        <div class="card shadow-sm" style="width: 425px; height: 375px">
            <img style="width: 425px; height: 225px; object-fit: fill;" src="images/HANGMAN.jpg">
            <div class="card-body">
            <h1 class="card-text" style="height: 70px;">Hangman</h1>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-dark">Play!</button>
                </div>
                <?php if(isset($_SESSION['UsersID'])){ ?>
                <small class="text-muted">c:</small>
                <?php }else{?>
                <small class="text-muted">Must logged in..</small>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
        <div class="card shadow-sm" style="width: 425px; height: 375px">
            <img style="width: 425px; height: 225px; object-fit: fill;" src="images/MEMORYGAME.jpg">
            <div class="card-body">
            <h1 class="card-text" style="height: 70px;">Matching Game</h1>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-dark">Play!</button>
                </div>
                <?php if(isset($_SESSION['UsersID'])){ ?>
                <small class="text-muted">c:</small>
                <?php }else{?>
                <small class="text-muted">Must logged in..</small>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
        <div class="card shadow-sm" style="width: 425px; height: 375px">
            <img style="width: 425px; height: 225px; object-fit: fill;" src="images/PLINKO.jpg">
            <div class="card-body">
            <h1 class="card-text" style="height: 70px;">Plinko</h1>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-dark">Play!</button>
                </div>
                <?php if(isset($_SESSION['UsersID'])){ ?>
                <small class="text-muted">c:</small>
                <?php }else{?>
                <small class="text-muted">Must logged in..</small>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
        <div class="card shadow-sm" style="width: 425px; height: 375px">
            <img style="width: 425px; height: 225px; object-fit: fill;" src="images/RIVERCROSSING.jpg">
            <div class="card-body">
            <h1 class="card-text" style="height: 70px;">River Crossing Game</h1>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-dark">Play!</button>
                </div>
                <?php if(isset($_SESSION['UsersID'])){ ?>
                <small class="text-muted">c:</small>
                <?php }else{?>
                <small class="text-muted">Must logged in..</small>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
        <div class="card shadow-sm" style="width: 425px; height: 375px">
            <img style="width: 425px; height: 225px; object-fit: fill;" src="images/SNAKE.jpg">
            <div class="card-body">
            <h1 class="card-text" style="height: 70px;">Snake</h1>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-dark">Play!</button>
                </div>
                <?php if(isset($_SESSION['UsersID'])){ ?>
                <small class="text-muted">c:</small>
                <?php }else{?>
                <small class="text-muted">Must logged in..</small>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
        <div class="card shadow-sm" style="width: 425px; height: 375px">
            <img style="width: 425px; height: 225px; object-fit: fill;" src="images/SPACEINVADERS.jpg">
            <div class="card-body">
            <h1 class="card-text" style="height: 70px;">Space Invaders</h1>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-dark">Play!</button>
                </div>
                <?php if(isset($_SESSION['UsersID'])){ ?>
                <small class="text-muted">c:</small>
                <?php }else{?>
                <small class="text-muted">Must logged in..</small>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
        <div class="card shadow-sm" style="width: 425px; height: 375px">
            <img style="width: 425px; height: 225px; object-fit: fill;" src="images/TICTACTOE.png">
            <div class="card-body">
            <h1 class="card-text" style="height: 70px;">Tic-Tac-Toe</h1>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-dark">Play!</button>
                </div>
                <?php if(isset($_SESSION['UsersID'])){ ?>
                <small class="text-muted">c:</small>
                <?php }else{?>
                <small class="text-muted">Must logged in..</small>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>