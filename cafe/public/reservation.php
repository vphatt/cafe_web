

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Babette">
    <link href="./images/favicon/coffee-cup.png" rel="icon">
    <title>Đặt Bàn</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/libraries.css" />
    <link rel="stylesheet" href="css/style.css" />

    <style>
      #xn input,
      #xn textarea {
        pointer-events: none;
      }
    </style>
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
      <section class="page-title page-title-layout7 text-center bg-overlay bg-parallax">
        <div class="bg-img"><img src="images/backgrounds/14.jpg" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              
              <h1 class="pagetitle__heading">Đặt Bàn</h1>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->




      <!-- MODAL XÁC NHẬN ĐẶT CHỖ --> 
      <button type="button" class="btn btn-info btn-lg d-none" id="openModal" data-bs-toggle="modal" href="#myModal" role="button">Open Modal</button>
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Thông Tin Đặt Bàn</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body h6 text-dark">
            <form class="reservation__form" id="xn" method="POST" action="datcho.php">
                  <div class="row">
                    <div class="col-sm-6 form-group">
                      <label>Họ tên:</label>
                        <input type="text" class="form-control h6 text-dark"  id="hoten2" name="hoten2" value="">
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 form-group"> 
                      <label>Email:</label>                    
                        <input type="text" class="form-control h6 text-dark" id="email2" name="email2" value="">                     
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 form-group">
                      <label>Số điện thoại:</label>
                        <input type="text" class="form-control h6 text-dark" id="phone2" name="phone2" value="">                      
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 form-group">
                      <label>Số lượng ghế:</label>
                          <input type="text" class="form-control h6 text-dark" name="soluong2" id="soluong2" value="" > 
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 form-group">
                      <label>Ngày đến:</label>
                        <input type="text" class="form-control h6 text-dark" name="ngay2" id="ngay2"  value="" > 
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 form-group">
                      <label>Giờ:</label>
                          <input type="text" name="thoigian2" id="thoigian2" class="form-control h6 text-dark"  value="" >
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 form-group">
                     <label>Ghi chú:</label>
                      <textarea  cols="30" class="form-control h6 text-dark" name="ghichu2"  id="ghichu2" value=""></textarea>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <p class="h5 fw-bold fst-italic text-muted text-center">Vui lòng kiểm tra lại thông tin của bạn!</p>
                    </div>
                  </div><!-- /.row -->
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">XÁC NHẬN</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">HUỶ</button>
                  </div>
                </form><!-- /.reservation__form -->
            </div>

           
        </div>
        </div>
      </div>
      
 


      <!-- ========================
        Reservation layout2
      =========================== -->
      <section class="reservation reservation-layout2 py-0">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="reservation-container">
                <div class="reservation__banner" data-aos="fade-right">
                  <img class="reservation__banner-img" src="images/backgrounds/pattern/3.jpg" alt="background">
                  <div class="reservation__banner-inner">
                    <span class="reservation__banner-inner-subtitle">Đặt Bàn</span>
                    <h5 class="reservation__banner-inner-title">Thời gian mở cửa</h5>
                    <ul class="list-unstyled">
                      <li><span>Trong tuần</span><span>09.00 – 23:00</span></li>
                      <li><span>Cuối tuần</span><span>Cả ngày</span></li>
                    </ul>
                    <div class="reservation__banner-contact">
                      <span class="reservation__banner-contact-label">Gọi cho chúng tôi</span>
                      <a class="reservation__banner-contact-phone" href="tel:0833330808">0833330808</a>
                    </div><!-- /.reservation__banner-contact -->
                  </div><!-- /.reservation__banner-inner -->
                </div><!-- /.reservation__banner -->
                <form class="reservation__form" id="datcho" method="POST">
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <p>Bạn có thể đặt bàn trực tuyến dễ dàng chỉ trong vài phút. Chúng tôi sẽ liên lạc với bạn khi nhận được yêu cầu.</p>
                    </div><!-- /.col-lg-12 -->
                    <div class="col-sm-6 form-group">
                        <input type="text" class="form-control" placeholder="Họ tên" id="hoten" name="hoten">
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 form-group">                     
                        <input type="text" class="form-control" placeholder="Email" id="email" name="email">                     
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 form-group">                      
                        <input type="tel" class="form-control" placeholder="Số điện thoại" id="phone" name="phone">                      
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 form-group">
                          <input type="number" class="form-control" name="soluong" id="soluong" min="1" max="8" placeholder="Số lượng ghế" > 
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 form-group">
                        <input type="date" class="form-control" name="ngay" id="ngay" value="<?php echo date('Y-m-d'); ?>" > 
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 form-group">
                          <input type="time" name="thoigian" id="thoigian" class="form-control"  >
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 form-group">
                      <textarea  cols="30" class="form-control" placeholder="Ghi chú..." name="ghichu" id="ghichu"></textarea>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <button type="submit" class="btn btn__secondary btn__block" id="xacNhan" data-bs-dismiss>Đặt Bàn</button>
                    </div><!-- /.col-lg-12 -->
                  </div><!-- /.row -->
                </form><!-- /.reservation__form -->
              </div><!-- /.reservation-container -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Reservation layout2 -->
    </main>
    
    

   <!--FOOTER-->
   <?php
      include './template/footer.php';
    ?>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript" src="./js/jquery.validate.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script type="text/javascript">
           
		$.validator.setDefaults({
      submitHandler:  function(){
        $("#openModal").click();

        var ten = $("#hoten").val();
        var mail = $("#email").val();
        var sdt = $("#phone").val();
        var sl = $("#soluong").val();
        var ng = $("#ngay").val();
        var tg = $("#thoigian").val();
        var gc = $("#ghichu").val();


        $("#hoten2").val(ten);
        $("#email2").val(mail);
        $("#phone2").val(sdt);
        $("#soluong2").val(sl);
        $("#ngay2").val(ng);
        $("#thoigian2").val(tg);
        $("#ghichu2").val(gc);
      }
		});

		$(document).ready(function(){
				$("#datcho").validate({
						rules: {
							hoten: "required",
							email: { required: true, email: true },
							phone: {required: true, minlength:10, maxlength:10},
              soluong: "required",
              ngay: "required",
              thoigian: "required"
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
              soluong: "Vui lòng chọn số lượng ghế",
              ngay: "Vui lòng chọn ngày",
              thoigian: "Vui lòng chọn thời gian"
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