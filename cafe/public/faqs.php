
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Babette">
    <link href="./images/favicon/coffee-cup.png" rel="icon">
    <title>Câu Hỏi Thường Gặp</title>
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
       page title 
    =========================== -->
    <section class="page-title page-title-layout1 text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="./images/backgrounds/faqs.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            
            <h1 class="pagetitle__heading">Các Câu Hỏi Thường Gặp</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="./index.php">Trang Chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Về Chúng Tôi</a></li>
                <li class="breadcrumb-item active text-warning" aria-current="location ">Các Câu Hỏi Thường Gặp</li>
              </ol>
            </nav>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

      <!-- ======================
        FAQ
      ========================= -->
      <section class="faq pb-70">
        <div class="container">
          <div class="row" id="accordion">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse1">
                  <a class="accordion__item-title" href="#">Cửa hàng thành lập vào năm nào?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse1" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>Cửa hàng chính thức đi vào hoạt động từ năm 2012, tính đến hiện tại cửa hàng đang có hơn 10 chi nhánh.</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                  <a class="accordion__item-title" href="#">Chất lượng sản phẩm có tốt không?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse2" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>Các sản phẩm của chúng tôi đều có nguồn gốc và xuất xứ rõ ràng và phương châm hoạt động của chúng tôi chính là chất lượng luôn đặt lên hàng đầu.</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse3">
                  <a class="accordion__item-title" href="#">Các ưu đãi của cửa hàng?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse3" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>Chúng tôi thường xuyên tổ chức các sự kiện vào các ngày đặc biệt với nhiều ưu đãi hấp dẫn dành cho khách hàng</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
            
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse5">
                  <a class="accordion__item-title" href="#">Tôi có thể mua các sản phẩm của bạn ở đâu?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse5" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>Chúng tôi cung cấp các sản phẩm trực tiếp tại cửa hàng hoặc trên trang webside chính thức của chúng tôi. </p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse6">
                  <a class="accordion__item-title" href="#">Tôi có thể phản hồi ý kiến về cửa hàng?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse6" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>Chúng tôi rất mong nhận được sự phản hồi của các bạn để diều chỉnh lại những điều chưa tốt để của hàng hoạt động tốt hơn.</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse7">
                  <a class="accordion__item-title" href="#">Tôi có thể đặt chổ trước không?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse7" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>Nếu muốn bạn phải liên hệ với chung tôi ít nhất là trước một ngày để đam bảo bạn sẽ được phục vụ tốt nhất có thể.</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
            
              </div>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.FAQ -->
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