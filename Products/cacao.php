<?php session_start();

if(!isset($_SESSION['сфера']))$_SESSION['клубничка']=0;
if(!isset($_SESSION['rainbow']))$_SESSION['rainbow']=0;
if(!isset($_SESSION['paw']))$_SESSION['paw']=0;
if(!isset($_SESSION['клубничка']))$_SESSION['клубничка']=0;
if(!isset($_SESSION['зефирка']))$_SESSION['зефирка']=0;
if(!isset($_SESSION['пингвин']))$_SESSION['пингвин']=0;
if(!isset($_SESSION['honey-milk']))$_SESSION['honey-milk']=0;
if(!isset($_SESSION['cacao']))$_SESSION['cacao']=0;
if(!isset($_SESSION['coconut']))$_SESSION['coconut']=0;
if(!isset($_SESSION['bubbles']))$_SESSION['bubbles']=0;
if(!isset($_SESSION['amount']))$_SESSION['amount']=0;
if( isset( $_POST['increase'] ) )
    {
      $_SESSION['cacao']++;
      $_SESSION['amount']++;
    }
if( isset( $_POST['decrease'] ) )
    {
      $_SESSION['cacao']--;
      $_SESSION['amount']--;
    }
    if( isset( $_POST['clear'] ) )
    {
      $_SESSION['сфера']=0;
      $_SESSION['rainbow']=0;
      $_SESSION['paw']=0;
      $_SESSION['клубничка']=0;
      $_SESSION['зефирка']=0;
      $_SESSION['пнгвин']=0;
      $_SESSION['honey-milk']=0;
      $_SESSION['cacao']=0;
      $_SESSION['coconut']=0;
      $_SESSION['bubbles']=0;
      $_SESSION['amount']=0;
    }
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
  <!-- <script src="jquery-3.6.0.min.js"></script>
    <script>
      $(function () {

        $('form > #clear').on('click', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'POST',
            url: 'cart.php',
            data: "",
            dataType: "html",
            cache: false,
            success: function(data) {
              
              if (data == "0")
              {
                $(".block-cart > h3").html("Корзина пуста").show();
                
              }else
              {
                $(".block-cart > h3").html(data);
              }      
            }
          });

        });

      });
    </script> -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <!-- <link rel="stylesheet" href="../jquery-3.6.0.min.js"> -->
    <link rel="stylesheet" href="../glide/css/glide.core.min.css">
    <link rel="stylesheet" href="../glide/css/glide.theme.min.css">
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
                <a class="nav-link" current-aria="" href="../index.html"
                  >Home</a
                >
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
        <div class="cart">
          <a href="cart.php">
          <img src="../shopping-cart.svg" alt="">
          <span><?=$_SESSION['amount'];?> шт.</span>
          </a>
          <form id="clear" method="POST">
            <input id="clear" type="submit" name="clear" value="Очистить корзину" />
          </form>
        </div>
      </nav>
      
    </header>

    <div class="container main item_box">
      <div class="row">
        <div class="col-md-7">
            <img src="../cacao.jpg" alt="">
        </div>
        <div
          class="
            offset-md-1
            col-md-4
            d-flex
            justify-content-center
            text
          "
        >
          <div class="wrapper d-flex flex-column align-items-center product__element">
            <div class="name">Cacao</div>
            <div class="info my-4">
              Состав: 4 ст. ложки соды; 2 ст. ложки лимонной кислоты; 2 ст.
              ложки морской соли; 2 ст. ложки масла облепихи (количество
              базового масла можно уменьшить, если делать бомбочку водным
              способом); эфирные масла мандарина, лимона и апельсина (по желанию
              10-20 капель); пищевой или специальный краситель желтого цвета.
            </div>
            <div class="cost mb-1">450руб</div>
            <div class="product_quantity"></div>
            
            <form method="POST">
            <input type="submit" name="increase" value="Добавить в корзину" />
            <input type="submit" name="decrease" value="Удалить из корзины" />
          </form> 
          </div>
        </div>
      </div>
    </div>
    <footer></footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    <!-- подключение слайдера -->
    <script src="sim-slider.js"></script>
    <!-- вызов слайдера -->
    <script>new Sim()</script>
    <script>
      let slider = document.querySelector('.sim-slider'), 
      right = document.querySelector(".sim-slider-arrow-right img"),
      left = document.querySelector(".sim-slider-arrow-left img");
      slider.onmouseover = slider.onmouseout = handler;

      function handler(event) {
        if (event.type == 'mouseover') {
          right.style.opacity = '0.6';
          left.style.opacity = '0.6';
        }
        if (event.type == 'mouseout') {
          right.style.opacity = '0';
          left.style.opacity = '0'
        }
      }
    </script>
        <script src="../glide/glide.min.js"></script>

    <script>
    new Glide('.glide',{
    type: 'carousel',
    autoplay:4000,
    animationDuration:2000,
    animationTimingFunc: 'ease-in-out',
    }).mount();
    </script>
  </body>
</html>
