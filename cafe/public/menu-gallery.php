
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Babette">
    <link href="./images/favicon/coffee-cup.png" rel="icon">
    <title>Thực Đơn Bánh Ngọt</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/libraries.css" />
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
    <!-- HEADER -->
  <?php
    include './template/header1.php';
  ?>

   <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout1 text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="./images/backgrounds/banh-ngot.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            
            <h1 class="pagetitle__heading">Thực Đơn Bánh Ngọt</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="./index.php">Trang Chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Thực Đơn</a></li>
                <li class="breadcrumb-item active text-warning" aria-current="page">Thực Đơn Bánh Ngọt</li>
              </ol>
            </nav>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
        Menu layout 3
    =========================== -->
    
    <section class="menu-layout3 pb-60">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-30">
              <h2 class="heading__title">Khám phá thực đơn bánh ngọt</h2>
              <div class="heading__icon">
                <img src="images/shapes/shape2.png">
              </div>
              
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
        
        <!-- TRUY XUẤT DỮ LIỆU TỪ BẢNG CAFE_BANHNGOT-->
        <?php
          include './menu/menu_banhngot.php';
        ?>
        <!--HẾT ĐOẠN TRUY XUẤT -->
        </div><!-- /.row  -->
        
    </section><!-- /.menu layout 3 -->

    <!--FOOTER-->
    <?php
      include './template/footer.php';
    ?>

 
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript" src="./js/jquery.validate.js"></script>
  
    </script>
</body>
</html>