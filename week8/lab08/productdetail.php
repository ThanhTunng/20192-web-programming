<?php
  // include_once "Config.php";
  // $connect = mysqli_connect(Config::DB_HOST,Config::DB_USER,Config::DB_PASSWORD,Config::DB_NAME);
  // if(mysqli_connect_errno()){
  //   echo "Failed to connect to Database".mysqli_connect_error();
  // }
  // $table_name = 'products';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product detail</title>
    <link rel="stylesheet" href="product-detail-style.css" type="text/css">
  </head>
  <body>
    <header class="pageheader" id="pageheader">
      <div class="headerbar" id="headerbar">
        <div class="contentarea contentarea--noflex">
          <div class="headerbar__inner"><span class="headerbar__content" data-headerbarcontent=" in den Warenkorb hinzugefügt."></span><a class="headerbar__linktocart no-decoration" href="checkout.html"><img src="public/images/cart.svg" alt="" title=""><span class="headerbar__notificationcount"></span></a></div>
        </div>
      </div>
      <div class="contentarea">
        <nav class="main-menu">
          <ul class="main-menu__list">
            <li class="main-menu__item"><a class="main-menu__link" href="index.html" title="Startpage"><span class="main-menu__mobilecontent">Startpage</span></a></li>
            <li class="main-menu__item"><a class="main-menu__link" href="checkout.html" title="Checkout"><span class="main-menu__mobilecontent">Checkout</span></a></li> 
          </ul>
        </nav>
      </div>
    </header>
    <div class="contentarea">
      <div class="row">
        <div class="shop__detailcolumn"><img src="public/upload/product1.png" alt="" title="Product 1"></div>
        <div class="shop__detailcolumn">
          <h1>Name
            <?php
              $SQLcmd = "SELECT name FROM $table_name where id = ";
            ?>
          </h1>
          <p>Description</p>
          <span class="shoplist__data"></span>
          <div class="shop__ordersection">
            <p class="shoplist__price">Price</p>
            <div class="shop__amount">
              <label for="qtyadd">Amount:</label>
              <div class="selectfield">
                <select id="qtyadd">
                  <?php
                    for ($i=1; $i < 20; $i++) { 
                      echo "<option value=$i>$i</option>";
                    }
                  ?>
                </select>
              </div>
            </div>
            <p class="shop__buttonsection">
              <button class="btn btn--spacerbottom addtocart" id="addtocart" data-productid="1" data-productimage="public/upload/product1.png" data-productprice="17.96" data-productname="Product 1" data-productdata="" data-productproperties="">add to cart</button><a class="btn btn--unimportant btn--spacerbottom" href="javascript:history.back()">back</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="notificationwrap" id="notificationwrap">
      <div class="notification notification--skeleton" id="notificationskeleton">
        <div class="notification__title">Information</div>
        <div class="notification__content">
          <p class="notification__text" data-notificationmessage="{qty} x {productname} added"></p>
        </div>
      </div>
    </div>
    <script data-main="public/javascripts/main" src="public/javascripts/vendor/require.js"></script>
  </body>
</html>