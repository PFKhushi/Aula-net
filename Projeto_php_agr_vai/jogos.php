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
            <h1 class="card-text" style="height: 70px;">2048 (Broken)</h1>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="jogos/2048/index.php" target="_blank"><button type="button" class="btn btn-sm btn-dark">Play!</button></a>
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
            <h1 class="card-text" style="height: 70px;">Checkers (Broken)</h1>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="jogos/damas/index.php" target="_blank"><button type="button" class="btn btn-sm btn-dark">Play!</button></a>
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
                <a href="jogos/xadrez/index.php" target="_blank"><button type="button" class="btn btn-sm btn-dark">Play!</button></a>
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
                <a href="jogos/dodge/index.html" target="_blank"><button type="button" class="btn btn-sm btn-dark">Play!</button></a>
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
            <h1 class="card-text" style="height: 70px;">Escape Room (Broken)</h1>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="jogos/escape-room/index.html" target="_blank"><button type="button" class="btn btn-sm btn-dark">Play!</button></a>
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
            <h1 class="card-text" style="height: 70px;">Hangman (Broken)</h1>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="jogos/jogo-da-forca/index.php" target="_blank"><button type="button" class="btn btn-sm btn-dark">Play!</button></a>
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
                <a href="jogos/jogo-da-memoria/index.html" target="_blank"><button type="button" class="btn btn-sm btn-dark">Play!</button></a>
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
            <h1 class="card-text" style="height: 70px;">Plinko (Broken)</h1>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="jogos/plinko/index.html" target="_blank"><button type="button" class="btn btn-sm btn-dark">Play!</button></a>
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
                <a href="jogos/travessia-do-rio/index.php" target="_blank"><button type="button" class="btn btn-sm btn-dark">Play!</button></a>
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
            <h1 class="card-text" style="height: 70px;">Snake (Broken)</h1>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="jogos/jogo-da-cobrinha/index.html" target="_blank"><button type="button" class="btn btn-sm btn-dark">Play!</button></a>
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
                <a href="jogos/jogo-de-navinha/index.html" target="_blank"><button type="button" class="btn btn-sm btn-dark">Play!</button></a>
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
            <h1 class="card-text" style="height: 70px;">Tic-Tac-Toe (Broken)</h1>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="jogos/jogo-da-velha/index.html" target="_blank"><button type="button" class="btn btn-sm btn-dark">Play!</button></a>
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