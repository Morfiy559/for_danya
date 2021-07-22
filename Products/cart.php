<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a id="abs" class="navbar-brand" href="../index.html"
            >Carequality_store</a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarNav"
          >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" current-aria="" href="../index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../products.html">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../contacts.html">Contacts</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="container goods">

    <?php
        include 'goods.php';
        foreach ($_SESSION as $key => $value) {
            if($key=='amount') continue;
            if($value==0) continue;
            echo '
                <div class="product" id="'.$key.'">
                    <img src="../'.$key.'.jpg" alt="">
                    <span>Название:'.$goods["$key"]["name"].'</span>
                    <span>| Количество:'.$value.'</span>
                </div>
            ';
        }
        
        unset($value); // разорвать ссылку на последний элемент
    ?>
    <form action="mail.php" id='order' method="POST">
    <!-- <input type="email" name="email" id="email" placeholder="email">
    <input type="tel" name="telephone" id="tel" placeholder="telephone number"> -->
    <input type="submit" value="Оформить заказ" name="order">
    </form>
    
    </div>

    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script>

 </script>    

  </body>
</html>
