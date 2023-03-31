
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Babette">
    <link href="./images/favicon/coffee-cup.png" rel="icon">
    <title>Sự Kiện</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/libraries.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="wrapper">
    
  <!-- HEADER -->
  <?php
    include './template/header1.php';
  ?>
  
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout1 text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="./images/backgrounds/sukien.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            
            <h1 class="pagetitle__heading">Tham Gia Vào <br>  Các Sự Kiện Của Chúng Tôi</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="./index.php">Trang chủ</a></li>
                <li class="breadcrumb-item active text-warning" aria-current="page">Sự Kiện</li>
              </ol>
            </nav>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Events
    ========================= -->
    <section id="events" class="events text-center pb-60">
      <div class="container">
        <div class="row">
          <!-- Post Item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="event-single.php">
                  <img src="./images/blog/grid/b.jpg" alt="post image">
                </a>
              </div><!-- /.post__img -->
              <div class="post__content">
                <div class="post__meta">
                  <span class="post__meta-date">15/4/2022 - 15/5/2022</span>
                  <div class="post__meta-tag"><span></span>Đang diễn ra</div><!-- /.post-meta-tag -->
                </div><!-- /.post-meta -->
                <h4 class="post__title">Siêu giảm giá!</h4>
               
              </div><!-- /.post__content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="event-single.html">
                  <img src="./images/blog/grid/c.jpg" alt="post image">
                </a>
              </div><!-- /.post__img -->
              <div class="post__content">
                <div class="post__meta">
                  <span class="post__meta-date">1/5/2022</span>
                  <div class="post__meta-tag"><span>Đang diễn ra </span></div><!-- /.post-meta-tag -->
                </div><!-- /.post-meta -->
                <h4 class="post__title">Ra mắt loại bánh ngọt mới "Cookie Mùa Hè" để chào đón mùa hè sôi động.</h4>
                
              </div><!-- /.post__content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="event-single.html">
                  <img src="./images/blog/grid/g.jpg" alt="post image">
                </a>
              </div><!-- /.post__img -->
              <div class="post__content">
                <div class="post__meta">
                  <span class="post__meta-date">15/4/2022 - 15/6/2022</span>
                  <div class="post__meta-tag"><span>Đang diễn ra</span></div><!-- /.post-meta-tag -->
                </div><!-- /.post-meta -->
                <h4 class="post__title">ưu đãi đầu tuần mua 2 tặng 1!
                </h4>
                
              </div><!-- /.post__content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="event-single.html">
                  <img src="./images/blog/grid/a.jpg" alt="post image">
                </a>
              </div><!-- /.post__img -->
              <div class="post__content">
              <div class="post__meta">
                  <span class="post__meta-date">1/6/2022</span>
                  
                </div><!-- /.post-meta -->
                <h4 class="post__title">chào đón mùa hè xanh.
                </h4>
                <h4 class="post__title"></h4>
                
              </div><!-- /.post__content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #5 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="event-single.html">
                  <img src="./images/blog/grid/d.jpg" alt="post image">
                </a>
              </div><!-- /.post__img -->
              <div class="post__content">
                <div class="post__meta">
                  <span class="post__meta-date">27/4/2022 - 7/5/2022</span>
                  <div class="post__meta-tag"><span>đang diễn ra</span></div><!-- /.post-meta-tag -->
                </div><!-- /.post-meta -->
                <h4 class="post__title">tham gia sự kiện ngày hội sắc màu tại cửa hàng với nhiều phần quà hấp dẫn</h4>
               
              </div><!-- /.post__content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #6 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="event-single.html">
                  <img src="./images/blog/grid/f.jpg" alt="post image">
                </a>
              </div><!-- /.post__img -->
              <div class="post__content">
                <div class="post__meta">
                  <span class="post__meta-date">10/3/2022 - 10/4/2022</span>
                   <div class="post__meta-tag sold-out"><span>kết thúc</span></div><!-- /.post-meta-tag -->
                </div><!-- /.post-meta -->
                <h4 class="post__title">đón sinh nhật của bạn cùng France Cafe.</h4>
              
              </div><!-- /.post__content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Events-->


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