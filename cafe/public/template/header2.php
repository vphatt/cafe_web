

        <!--================= Modal search =============-->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tìm kiếm sản phẩm</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-group">
                            <div class="row">
                                <div class="">
                                    <input type="text" class="form-control form-control-lg fs-5" placeholder="Tên món..." name="search" id="search">
                                </div>


                                <div class="pt-3">
                                    <span class="d-block p-2 bg-warning text-white fs-5">Kết Quả Tìm Kiếm...</span>
                                    
                                        <p class="not-found pt-3 fs-5">
                                            Không tìm thấy từ khóa của bạn. Vui lòng tìm món khác !
                                        </p>
                                </div>
                                <section class="spham d-flex justify-content-evenly"></section>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--================= Modal gio hang =============-->
        <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Giỏ Hàng Của Bạn</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-group" action="search.php">
                            <div class="row">
                                <div class="col-8 col-md-7">
                                .....
                                </div>
                                <div class="col-4 col-md-5">
                                .......
                                </div>
                                <div class="modal-footer">
                                    <a href="shop-cart.php"><button type="button" class="btn btn-outline-warning">Đặt Hàng</button></a>
                                    <a href="shop.php"><button type="button" class="btn btn-outline-dark">Tiếp Tục Mua Hàng</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<header class="header header-layout2">
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo/logo-light-2.png" class="logo-light" alt="logo">
            <img src="images/logo/logo-dark-1.png" class="logo-dark" alt="logo">
          </a>

          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item with-dropdown">
                <a href="index.php" class="nav__item-link">Trang Chủ</a>
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Về Chúng Tôi</a>
                <ul class="dropdown-menu">
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="contacts.php" class="nav__item-link">Liên Hệ</a></li>
                  <li class="nav__item"><a href="faqs.php" class="nav__item-link">Câu Hỏi Thường Gặp</a></li> <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Thực Đơn</a>
                <ul class="dropdown-menu">
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="menu-gallery.php" class="nav__item-link">Thực Đơn Bánh Ngọt</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="menu-cards.php" class="nav__item-link">Thực Đơn Thức Uống</a></li>
                  <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="events.php" class="nav__item-link">Sự Kiện</a>
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="shop.php" class="nav__item-link">Mua Hàng</a>
              </li><!-- /.nav-item -->
              
              <li class="nav__item">
            
                <button class="openBtn fa fa-search" id="search" data-bs-toggle="modal" data-bs-target="#searchModal"></button>
              </li><!-- /.nav-item -->

            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->
          <div class="navbar-actions-wrap">
            <div class="navbar-actions d-flex align-items-center">
              <a href="reservation.php" class="navbar__action-btn navbar__action-btn-reserve btn">Đặt Bàn</a>
              <a href="#" class="navbar__action-btn hamburger-menu-trigger"><i class="fa fa-bars"></i></a>
            </div><!-- /.navbar-actions -->
          </div><!-- /.navbar-actions-wrap -->
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->