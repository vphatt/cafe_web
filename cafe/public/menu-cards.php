
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Babette">
    <link href="./images/favicon/coffee-cup.png" rel="icon">
    <title>Thực Đơn Thức Uống</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/libraries.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="wrapper">
   <!-- HEADER -->
  <?php
    include './template/header2.php';
  ?>

    <main>
      <!-- ========================
        Menu layout6
    =========================== -->
    <div class="menu-layout1 menu-layout6 py-0">
      <div class="container-fluid col-padding-0">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <img src="images/banners/5.jpg" alt="banner" class="img-fluid w-100">
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="menu__card-inner">
              <div class="heading heading-layout1 text-center mb-40">
                <!-- <span class="heading__subtitle">Starts At 2:00 pm</span> -->
                <h2 class="heading__title" style="color:rgb(229, 159, 109)">CÀ PHÊ</h2>
              </div><!-- /.heading -->
              <div class="menu-wrapper">
                <!--TRUY XUẤT DỮ LIỆU TỪ BẢNG COFE-COFFE -->
                      <?php
                        include './menu/menu_coffe.php';
                      ?>
                      <!--HẾT ĐOẠN TRUY XUẤT -->
              </div><!-- /.menu-wrapper -->
            </div><!-- /.menu__card-inner -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row  -->
      </div><!-- /.container -->
</div><!-- /.menu layout 6 -->
    
    <!-- ========================
        Menu layout6
    =========================== -->
    <section class="menu-layout1 menu-layout6 py-0">
      <div class="container-fluid col-padding-0">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="menu__card-inner">
              <div class="heading heading-layout1 text-center mb-40">
                <!-- <span class="heading__subtitle">Starts At 7:00 pm</span> -->
                <h2 class="heading__title " style="color:rgb(229, 159, 109)">TRÀ TRÁI CÂY</h2>
              </div><!-- /.heading -->
              <div class="menu-wrapper">
                <!--TRUY XUẤT DỮ LIỆU TỪ BẢNG COFE-TEA -->
                <?php
                        include './menu/menu_tea.php';
                      ?>
                    <!--HẾT ĐOẠN TRUY XUẤT -->
              </div><!-- /.menu-wrapper -->
            </div><!-- /.menu__card-inner -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <img src="images/banners/6.jpg" alt="banner" class="img-fluid w-100">
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row  -->
      </div><!-- /.container -->
    </section><!-- /.menu layout 6 -->
    </main>

    <!--FOOTER-->
    <?php
      include './template/footer.php';
    ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript" src="./js/jquery.validate.js"></script>
  
</body>

</html>