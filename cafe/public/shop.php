
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Babette">
    <link href="./images/favicon/coffee-cup.png" rel="icon">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
   
    <link rel="stylesheet" href="css/libraries.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css"/>
    
    
    <style>
      .openBtn {
        display: none;
      }

      .my-cart-icon{
        color:#d3a971;
        font-size:40px;
        padding: 0.5em;
        padding-right: 0.8em;
      }

      .my-cart-badge{
        color: #fff;
        position: fixed;
        font-size: 10px
      }

      .badge-dark{
        background: black;
        font-size: 15px;
      }

      div.cartBtn{
        position: fixed;
        top: 90px;
        right: 0;
        background-color: #fff;
        z-index: 1000;
        cursor: pointer;
      }
    </style>
    
</head>

<body>
    <div class="wrapper">
    <!-- HEADER -->
    
    <?php
        include './template/header2.php';
    ?>
              
    <!-- ========================
       page title 
    =========================== -->
    <div class="cartBtn">
        <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-dark my-cart-badge"></span></span>
    </div>
    <section id="page-title" class="page-title page-title-layout8">
    
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6">
            <h1 class="pagetitle__heading color-dark">Mua Hàng</h1>

          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-6 col-lg-6">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center" style="background-color: #f9f9f9">
                <li class="breadcrumb-item"><a href="shop.php">Mua Hàng</a></li>
                <li class="breadcrumb-item active text-warning" aria-current="page">Giỏ Hàng</li>
                
              </ol>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

     <!-- ========================
       shop 
    =========================== -->
    <section class="shop-grid menu-layout3">            
    
      <div class="container">
      
        <div class="row">
            <div class="col-sm-12 col-md-12">
              <div class="heading text-center mb-30">
                <h2 class="heading__title">Tất cả sản phẩm</h2>
                <div class="heading__icon">
                  <img src="images/shapes/shape2.png">
                </div>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->   
             
        </div><!-- /.row -->

        

        <div class="row filtered-items-wrap">
        <!-- TRUY XUẤT DỮ LIỆU TỪ TẤT CẢ BẢNG-->
        <?php
          include './menu/menu_shop.php';
        ?>

        <!--HẾT ĐOẠN TRUY XUẤT --> 
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.shop  -->

  
        <!-- MODAL XÁC NHẬN ĐẶT HÀNG --> 
          <div class="modal fade" style="z-index:2000" id="shopcartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Thông tin đặt hàng của bạn</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form id="dathang" method="POST" action="dadathang.php">
                          <div class="row">
                            <div class="col-12 form-group">
                                <input type="text" class="form-control"  id="hoten" name="hoten" placeholder="Họ tên khách hàng:">
                            </div><!-- /.col-lg-4 -->
                            <div class="col-12 form-group">                   
                                <input type="text" class="form-control" id="diachi" name="diachi"  placeholder="Địa chỉ nhận hàng:">                      
                            </div><!-- /.col-lg-4 -->
                            <div class="col-12 form-group">                     
                                <input type="tel" class="form-control"  id="phone" name="phone"  placeholder="Số điện thoại khách hàng:">
                            </div><!-- /.col-lg-4 -->
                            <div class="col-12 form-group">                     
                                <p class="h4">Sản phẩm bạn đã chọn:</p>
                            </div><!-- /.col-lg-4 -->
                            <div class="col-12 form-group">                     
                                <textarea col="30" class="giohang text-dark form-control" name="giohang" id="giohang"></textarea>
                            </div><!-- /.col-lg-4 -->

                            <div class="col-12 form-group"> 
                                <textarea col="10" class="tong text-dark form-control" name="tong" id="tong"></textarea>
                            </div><!-- /.col-lg-4 -->
                              
                            
                          </div><!-- /.row -->
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="xn_dh">XÁC NHẬN</button>
                              <button type="button" id="closeBtnXH" class="btn btn-danger" data-dismiss="modal" aria-label="Close">HUỶ</button>
                            </div>
                        </form><!-- /.reservation__form -->
                      </div>
                </div>
            </div>
        </div>      
  </div>


   

  </div>
  

    <!--FOOTER-->
    <?php
      include './template/footer.php';
    ?>

  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="js/jquery-2.2.3.min.js"></script>
  <script type='text/javascript' src="js/bootstrap.min.js"></script>
  <script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript" src="./js/jquery.validate.js"></script>
  <script type="text/javascript">
      $(document).ready(function () {
             
        var goToCartIcon = function($addTocartBtn){
          var $cartIcon = $(".my-cart-icon");
          var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
          $addTocartBtn.prepend($image);
          var position = $cartIcon.position();
          $image.animate({
            top: position.top,
            right: position.left
          }, 500 , "linear", function() {
            $image.remove();
          });
        }

        $('.my-cart-btn').myCart({
          currencySymbol: 'đ',
          classCartIcon: 'my-cart-icon',
          classCartBadge: 'my-cart-badge',
          classProductQuantity: 'my-product-quantity',
          classProductRemove: 'my-product-remove',
          classCheckoutCart: 'my-cart-checkout',
          affixCartIcon: true,

          clickOnAddToCart: function($addTocart){
            goToCartIcon($addTocart);
          },
          afterAddOnCart: function(products, totalPrice, totalQuantity) {
            console.log("afterAddOnCart", products, totalPrice, totalQuantity);
          },
          clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
            console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
          },
          checkoutCart: function(products, totalPrice, totalQuantity) {
            var tong = "Tổng tiền: " + totalPrice + "đ" + "\n" + "Tổng số lượng: " + totalQuantity;
            $('.tong').html("");
            $('.tong').append(tong);
            $('.giohang').html("");
            $.each(products, function(){
             var chitiet = (this.name + " // " + this.price + " // " + this.quantity + " // " + this.price*this.quantity + "\n");
              $('.giohang').append(chitiet);
            });
            
          }
          
        });

        $.validator.setDefaults({

            
      });

        $("#dathang").validate({
                rules: {
                  hoten: "required",
                  diachi: "required",
                  phone: {required: true, minlength:10, maxlength:10},
                  thanhtoan: "required"
                },

                messages: {
                  hoten: "Vui lòng nhập họ tên",
                  phone: {
                    required: "Vui lòng nhập số điện thoại",
                    minlength: "Số điện thoại không đúng",
                    maxlength: "Số điện thoại không đúng"
                  },
                  diachi: "Vui lòng cung cấp địa chỉ nhận hàng",
                  thanhtoan: "Vui lòng chọn hình thức thanh toán" 
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