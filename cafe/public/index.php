
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Babette">
    <link href="./images/favicon/coffee-cup.png" rel="icon">
    <title>Trang Chủ</title>
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
    Slider
    ============================== -->
    <section id="slider" class="slider slider-layout1">
      <div class="carousel owl-carousel carousel-arrows carousel-dots carousel-dots-light" data-slide="1"
        data-slide-md="1" data-slide-sm="1" data-autoplay="true" data-nav="true" data-dots="true" data-space="0"
        data-loop="true" data-speed="3000" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
        <div class="slide-item align-v-h text-center bg-overlay">
          <div class="bg-img"><img src="images/backgrounds/16.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="slide__content">
                  <h2 class="slide__title">Mang đến Trải nghiệm Nếm thử Tốt nhất!</h2>
                  <p class="slide__desc">Nguyên liệu an toàn, sản phẩm chất lượng, phục vụ tận tình.</p>
                  
                </div><!-- /.slide-content -->
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h text-center bg-overlay">
          <div class="bg-img"><img src="images/backgrounds/14.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="slide__content">
                  <h2 class="slide__title">Mang đến Trải nghiệm Nếm thử Tốt nhất!</h2>
                  <p class="slide__desc">Nguyên liệu an toàn, sản phẩm chất lượng, phục vụ tận tình.</p>
                  
                  
                </div><!-- /.slide-content -->
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
       </div><!-- /.carousel -->
    </section><!-- /.slider -->
    
    <!--SLIDE



    -->


    <!-- ========================
        Menu layout layout 5
    =========================== -->
    <section class="menu-layout1">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading heading-layout1 text-center mb-50">
              <span class="heading__subtitle">Danh mục yêu thích</span>
              <h2 class="heading__title">Khám phá thực đơn</h2>
              <div class="heading__icon">
                <img src="images/shapes/shape2.png" alt="heading img">
              </div>
             
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tab1">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="menu-wrapper">
                      
                      <!--TRUY XUẤT DỮ LIỆU TỪ BẢNG COFE-COFFE -->
                      <?php
                        include './menu/menu_coffe.php';
                      ?>
                      <!--HẾT ĐOẠN TRUY XUẤT -->

                    </div><!-- /.menu-wrapper -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="menu-wrapper">
                      
                    <!--TRUY XUẤT DỮ LIỆU TỪ BẢNG COFE-TEA -->
                    <?php
                        include './menu/menu_tea.php';
                      ?>
                    <!--HẾT ĐOẠN TRUY XUẤT -->

                    </div><!-- /.menu-wrapper -->
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.row  -->
              </div><!-- /.tab  -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <a href="menu-gallery.php" class="btn btn__link btn__secondary">Xem thêm thực đơn</a>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.menu layout 5 -->


    <!-- =====================
       Banner layout1
    ======================== -->
    <section class="banner banner-layout1">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-sm-6 col-md-3 col-lg-4">
            <div class="banner__img" data-aos="fade-right">
              <img src="images/banners/1.jpg" alt="banner" class="img-fluid">
            </div><!-- /.banner__img -->
          </div><!-- /.col-lg-4 -->
          <div class="col-6 col-sm-6 col-md-3 col-lg-4">
            <div class="banner__img mt-30" data-aos="fade-right" data-aos-delay=".5s">
              <img src="images/banners/2.jpg" alt="banner" class="img-fluid">
            </div><!-- /.banner__img -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="banner__text text-center mt-30" data-aos="fade-left">
              <div class="heading heading-layout1 mb-30">
                <span class="heading__subtitle">Sự Kiện sắp ra mắt</span>
                <h2 class="heading__title">Không gian ấm áp và thân thiện </h2>
                <div class="heading__icon">
                  <img src="images/shapes/shape2.png" alt="heading img">
                </div>
                <p class="heading__desc">Các sự kiện đặc biệt sắp ra mắt để chào đón mùa hè mới mẻ.</p>
              </div><!-- /.heading -->
              <a href="events.php" class="btn btn__secondary btn__link">Xem thêm sự kiện</a>
            </div><!-- /.banner__text -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout1 -->

    <!-- =============================
        Modal DAT CHO
      ================================-->
      <button type="button" class="btn btn-info btn-lg d-none" id="openModal" data-bs-toggle="modal" href="#myModal" role="button">Open Modal</button>
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Thông Tin Đặt Bàn</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
            <table class="table table-borderless">
                <tbody>
                  <tr>
                    <th>Tên khách hàng:</th>
                    <td id="a"></td>
                  </tr>
                  <tr>
                    <th>Email:</th>
                    <td id="b"></td>
                  </tr>
                  <tr>
                    <th>Số điện thoại:</th>
                    <td id="c"></td>
                  </tr>
                  <tr>
                    <th>Số lượng ghế:</th>
                    <td id="d"></td>
                  </tr>
                  <tr>
                    <th>Thời gian:</th>
                    <td><span id="e"></span> vào lúc <span id="f"></span></td>
                  </tr>
                  <tr>
                    <th>Ghi chú:</th>
                    <td id="g"></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="modal-footer">
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">XÁC NHẬN</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">HUỶ</button>
          </div>
        </div>
        </div>
      </div>
      
      <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel2">Đặt bàn thành công</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <b>Cảm ơn đã lựa chọn chúng tôi!</b>
                <br>Chúc bạn sẽ có những trải nghiệm tuyệt vời tại CafeFrance

            </div>
            <div class="modal-footer">
            <a href="index.php"><button type="button" class="btn btn-outline-warning">OK</button></a>
            </div>
          </div>
        </div>
      </div>

    <!-- ========================
      Reservation
    =========================== -->

    <section class="reservation reservation-layout2 bg-overlay bg-parallax">
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
                      <button type="submit" class="btn btn__secondary btn__block" id="xacNhan">Đặt Bàn</button>
                    </div><!-- /.col-lg-12 -->
                  </div><!-- /.row -->
                </form><!-- /.reservation__form -->
              </div><!-- /.reservation-container -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Reservation layout2 -->


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
				submitHandler:  function(){
          $('#openModal').click();

              var ten = $("#hoten").val();
              var mail = $("#email").val();
              var sdt = $("#phone").val();
              var sl = $("#soluong").val();
              var ng = $("#ngay").val();
              var tg = $("#thoigian").val();
              var gc = $("#ghichu").val();

            
              $("#a").text(ten);
              $("#b").text(mail);
              $("#c").text(sdt);
              $("#d").text(sl);
              $("#e").text(ng);
              $("#f").text(tg);
              $("#g").text(gc);
          
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



