
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Babette">
    <link href="./images/favicon/coffee-cup.png" rel="icon">
    <title>Liên Hệ</title>
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
      <div class="bg-img"><img src="./images/backgrounds/lienhe.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            
            <h1 class="pagetitle__heading">Liên Lạc Với Chúng Tôi</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="./index.php">Trang Chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Về Chúng Tôi</a></li>
                <li class="breadcrumb-item active text-warning" aria-current="page">Liên Hệ Với Chúng Tôi</li>
              </ol>
            </nav>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

   <!-- ==========================
        contact 1
    =========================== -->
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <p>France Coffee là một cửa hàng chuyên phục vụ các loại bánh ngọt và thức uống với công thức độc quyền. Can kết mang lại những trải nghiệm tuyệt vời về chất lượng sản phẩm cùng với không gian sang trọng, lãng mạng theo phong cách Paris cho quý khách hàng. </p>
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="contact-box">
                  <h6 class="contact__box-title">Địa Chỉ </h6>
                  <ul class="contact__box-list list-unstyled">
                    <li>123, Đường 3/2, Phường Xuân Khánh, Quận Ninh Kiều, Thành Phố Cần Thơ.</li>
                  </ul>
                  
                </div><!-- /.contact-box -->
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="contact-box">
                  <h6 class="contact__box-title">Thời Gian Hoạt Động </h6>
                  <ul class="contact__box-list list-unstyled">
                    <li>Thứ 2 - Thứ 6: 6:00 - 22:00</li>
                    <li>Thứ 7 - Chủ Nhật: 24/24 </li>
                  </ul>
                  
                </div><!-- /.contact-box -->
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="contact-box">
                  <h6 class="contact__box-title">Liên Hệ</h6>
                  <ul class="contact__box-list list-unstyled">
                    <li><span>Email: </span><a href="mailto:France@3coffee.com">France@3coffee.com</a></li>
                    <li><span>Phone: </span><a href="tel:0833330808">84 833330808</a></li>
                  </ul>
                  <a href="#" class="btn btn__link">Liên hệ với chúng tôi</a>
                </div><!-- /.contact-box -->
              </div><!-- /.col-lg-6 -->
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="contact-box">
                  <h6 class="contact__box-title">Theo dõi chúng tôi </h6>
                  <ul class="social__icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>

                  </ul><!-- /.social__icons -->
                </div><!-- /.contact-box -->
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <form class="reservation__form" id="LienHe" method="POST" action="lienhe.php">
              <h1 class="text-center fs-4" style="color: #a97735">Gửi thông tin liên hệ</h1>
              <div class="row" >
                <div class="col-sm-12 form-group">
                  <input type="text" class="form-control" placeholder="Họ tên:" id="ho" name="hoten">
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 form-group">
                  <input type="email" class="form-control" placeholder="Email:" id="email" name="email">
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6 form-group">
                  <input type="text" class="form-control" placeholder="Số Điện Thoại:" id="phone" name="phone">
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 form-group">
                 <textarea class="form-control" placeholder="Nội dung liên hệ ..." id="noidung" name="noidung"></textarea>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
              
                <!-- Button trigger modal -->
                <div class="row">
                  <div class="col-12">
                    <button type="submit" class="btn btn__secondary btn__block">Gửi</button>
                  </div><!-- /.col-lg-12 -->
                </div>

            </form>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact 1 -->
     
     <!--FOOTER-->
     <?php
      include './template/footer.php';
    ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript" src="./js/jquery.validate.js"></script>
  <script type="text/javascript">
    $.validator.setDefaults({
				
			});

      
		$(document).ready(function(){
      $("#LienHe").validate({
						rules: {
							hoten: "required",
							email: { required: true, email: true },
							phone: {required: true, minlength:10, maxlength:10},
              noidung: "required"
						},

						messages: {
							hoten: "Vui lòng nhập họ tên",
							email: {
                required: "Vui lòng nhập email",
                email: "Email không hợp lệ"
              },
							phone: {
                required: "Vui lòng nhập số điện thoại",
                minlength: "Số điện thoại không đúng",
                maxlength: "Số điện thoại không đúng"
              },
              noidung: "Vui lòng viết nội dung bạn muốn gửi đến chúng tôi"
						},

						errorElement: "div",
						errorPlacement: function(error,element){
							error.addClass("invalid-feedback");
							if(element.prop("type") === "checkbox"){
								error.insertAfter(element.siblings("label")); 
							} else{ error.insertAfter(element); }
						},

						highlight: function(element, errorClass, validClass) {
							$(element).addClass("is-invalid").removeClass("is-valid");
						},

						unhighlight: function (element, errorClass, validClass) {
							$(element).addClass("is-valid").removeClass("is-invalid");
						}
					});
         
		});
  </script>
  
</body>

</html>