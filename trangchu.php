<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopee</title>
    <link rel="icon" href="./assets/img/logo/shopee-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- main -->
    <div class="app">
        <!-- header -->
        <header class="header">
            <div class="grid wide">
                <!-- navbar -->
                <nav class="header__navbar hide-on-mobile-tablet">
                    <ul class="header__nav-list">
                        <li class="header__nav-item header__nav-item--hover header__nav-item--separate">Kênh Người Bán
                        </li>
                        <li class="header__nav-item header__nav-item--hover header__nav-item--separate">Trở thành Người
                            bán Shopee</li>
                        <li class="header__nav-item header__nav-item--hover header__nav-item--separate header__show-qr">
                            Tải ứng dụng
                        </li>
                        <!-- qr code -->
                        <div class="header__qrcode">
                            <img src="./assets/img/qr/qr-code.png" class="header__qr">
                            <div class="header__apps">
                                <a href="#" class="header__app-link">
                                    <img src="./assets/img/qr/app-store.png" class="header__app-img">
                                </a>
                                <a href="#" class="header__app-link">
                                    <img src="assets/img/qr/gg-play.png" class="header__app-img">
                                </a>
                                <a href="#" class="header__app-link">
                                    <img src="./assets/img/qr/app-gallery.png" class="header__app-img">
                                </a>
                                <a href="#" class="header__app-link">
                                    <img src="./assets/img/qr/ltp-img.png" class="header__app-img">
                                </a>
                            </div>
                        </div>
                        <li class="header__nav-item">
                            Kết nối
                            <a href="#" class="header__nav-icon-link">
                                <i class="header__nav-icon fab fa-facebook"></i>
                            </a>
                            <a href="#" class="header__nav-icon-link">
                                <i class="header__nav-icon fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="header__nav-list">
                        <li class="header__nav-item header__show-note">
                            <a href="#" class="header__nav-item-link">
                                <i class="header__nav-icon far fa-bell"></i>
                                Thông báo
                            </a>
                            <!-- thông báo -->
                            <div class="header__notifi">
                                <header class="header__notifi-header">
                                    <h3>Thông Báo Mới Nhận</h3>
                                </header>
                                <ul class="header__notifi-list">
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/casio.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Casio fx 580 VN Plus
                                                </div>
                                                <div class="header__notifi-desc">
                                                    Mua Casio 580 của LTP bao xịn, bao mượt, bao đẹp
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/iphone.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Điện Thoại iPhone 13 Pro 128GB - Hàng Nhập Khẩu
                                                </div>
                                                <div class="header__notifi-desc">
                                                    3 Camera: Ống kính góc rộng f/1.5 - Tele f/2.8 - Siêu rộng f/1.8
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/iphone2.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Apple iPhone 12 Pro Max 128GB
                                                </div>
                                                <div class="header__notifi-desc">
                                                    iPhone 12 Pro Max. Màn hình Super Retina XDR 6.7 inch
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/laptop.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Laptop HP 650 g1 siêu khỏe bền
                                                </div>
                                                <div class="header__notifi-desc">
                                                    Laptop siêu bền, HP 650 g1 siêu khỏe bền ssd 120gb 15,6inh FULL HD
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="./assets/img/sp/laptop2.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Laptop thinkpad x240 chất mỏng nhẹ i5 4300u Ram 4gb Ssd 128gb
                                                </div>
                                                <div class="header__notifi-desc">
                                                    HP 650 g1 chip M đời 4, cpu i5 4200M ram 4gb -8gb
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <footer class="header__notifi-footer">
                                    <a href="#" class="header__notifi-footer-btn">Xem tất cả</a>
                                </footer>
                            </div>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-item-link">
                                <i class="header__nav-icon far fa-question-circle"></i>
                                Hỗ trợ
                            </a>
                        </li>



                        <li class="header__nav-item header__nav-user">

                            <a href="#" class="header__nav-item-link header__nav-item--bold">
                                <div class="header__nav-item-link header__nav-item--bold">
                                    <tbody href="dangnhap.php">đăng nhập </tbody>
                                    |
                                    <tbody href="dangky.php">đăng ký</tbody>
                                </div>
                            </a>
                        </li>
                        <li>
                            <ul class="header__nav-user-menu">
                                <li class="header__nav-user-item">
                                    <img src="assets/img/home/1.PNG" alt="">
                                </li>
                                <li class="header__nav-user-item">
                                    <a href="#">Tài khoản của tôi</a>
                                </li>
                                <li class="header__nav-user-item">
                                    <a href="#">Đơn mua</a>
                                </li>
                                <li class="header__nav-user-item">
                                    <a href="dangnhap.php">Đăng xuất</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- search -->
                <div class="header__contain">
                    <label for="mobile-search" class="header__mobile-search">
                        <i class="header__mobile-search-icon fas fa-search"></i>
                    </label>
                    <div class="header__logo">
                        <a href="#" class="header__logo-link">
                            <img src="./assets/img/logo/logo-full-white.png" class="header__logo-img">
                        </a>
                    </div>
                    <input type="checkbox" id="mobile-search" class="header__search-check" hidden>
                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input type="text" class="header__search-input" placeholder="Tìm kiếm trên Shoppee">
                            <div class="header__search-history">
                                <ul class="header__search-history-list">
                                    <li class="header__search-history-item">
                                        <a href="#">Tai nghe</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="#">Quần áo</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="#">Phụ kiện</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="#">Ốp điện thoại</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="#">Laptop</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="#">Bàn phím</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn header__search-btn">
                            <i class="header__search-btn-icon fas fa-search"></i>
                        </button>
                    </div>
                    <!-- header__cart--no-cart -->
                    <!-- header__cart--has-cart -->
                    <div class="header__cart header__cart--has-cart">
                        <i class="header__cart-icon fas fa-shopping-cart"></i>
                        <div class="header__cart-count">4</div>

                        <div class="header__cart-list no-cart">
                            <img src="./assets/img/sp/no-cart.png" class="header__no-cart-img">
                            <p class="header__no-cart-text">Chưa có sản phẩm</p>
                        </div>

                        <div class="header__cart-list has-cart">
                            <h4 class="header__cart-heading">Sản phẩm đã chọn</h4>
                            <ul class="header__cart-list-item">
                                <li class="header__cart-item">
                                    <img src="./assets/img/sp/iphone2.png" class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Iphone 12 ProMax 128G</h3>
                                            <p class="header__cart-item-price">25.000.000đ</p>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 1</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="./assets/img/sp/laptop2.png" class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Laptop ThinkPad i5</h3>
                                            <p class="header__cart-item-price">12.500.000đ</p>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 1</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="https://down-vn.img.susercontent.com/file/vn-11134207-7qukw-lj0t6x0nnv0y51"
                                        class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Tai Nghe Bluetooth AlP2 Không Dây Pin
                                                Trâu 6h Âm Thanh To Cảm Ứng Chạm Pop Up Kết Nối - PKT</h3>
                                            <p class="header__cart-item-price">250.000đ</p>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 1</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="header__cart-item">
                                    <img src="https://down-vn.img.susercontent.com/file/vn-11134207-23010-57vbthlp9amv68"
                                        class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Tai nghe Gamming 2nd Dareu EH416 EH722
                                                ,EH925-Gnet Gh3,gh5,g09 hàng chính hãng bảo hành 12tháng</h3>
                                            <p class="header__cart-item-price">95.000</p>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 1</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="header__cart-footer">
                                <a href="giohang.html" class="btn btn--primary header__cart-see-cart">Xem giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="header__sort-bar">
                <li class="header__sort-item">
                    <a href="#" class="header__sort-link">Liên quan</a>
                </li>
                <li class="header__sort-item header__sort-item--active">
                    <a href="#" class="header__sort-link">Mới nhất</a>
                </li>
                <li class="header__sort-item">
                    <a href="#" class="header__sort-link">Bán chạy</a>
                </li>
                <li class="header__sort-item">
                    <a href="#" class="header__sort-link">Giá</a>
                </li>
            </ul>
        </header>
        <!-- container -->
        <div class="container">
            <div class="grid wide">
                <div class="row sm-gutter">
                    <div class="col l-2 m-0 c-0">
                        <!-- category -->
                        <nav class="category">
                            <h3 class="category-heading">
                                <i class="category-heading-icon fas fa-list-ul"></i>
                                Bộ lọc tìm kiếm
                            </h3>
                            <div class="category-group">
                                <div class="category-group-title">Theo Danh Mục</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Thiết bị mạng
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Chuột và bàn phím
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Tai Nghe
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Tai nghe không dây
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Wifi
                                    </li>
                                </ul>
                            </div>
                            <div class="category-group">
                                <div class="category-group-title">Nơi Bán</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Hà Nội
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Hồ Chí Minh
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Đà Nẵng
                                    </li>
                                </ul>
                            </div>
                            <div class="category-group">
                                <div class="category-group-title">Đơn Vị Vận Chuyển</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Hoả tốc
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Nhanh
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Tiết kiệm
                                    </li>
                                </ul>
                            </div>
                            <div class="category-group">
                                <div class="category-group-title">Thương Hiệu</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Kingston
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Sandisk
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Seagate
                                    </li>
                                </ul>
                            </div>
                            <div class="category-group">
                                <div class="category-group-title">Khoảng Giá</div>
                                <div class="category-group-filter">
                                    <input type="number" placeholder="đ TỪ" class="category-group-filter-input">
                                    <i class="fas fa-arrow-right"></i>
                                    <input type="number" placeholder="đ ĐẾN" class="category-group-filter-input">
                                </div>
                                <button class="btn btn--primary category-group-filter-btn">Áp dụng</button>
                            </div>
                            <div class="category-group">
                                <div class="category-group-title">Loại Shop</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Shoppee
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Shoppee Mail
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Shop yêu thích
                                    </li>
                                </ul>
                            </div>
                            <div class="category-group">
                                <div class="category-group-title">Tình Trạng</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Mới
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Đã sử dụng
                                    </li>
                                </ul>
                            </div>
                            <div class="category-group">
                                <div class="category-group-title">Lựa Chọn Thanh Toán</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Thanh toán khi nhận hàng
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Chuyển khoản
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Trả góp 0%
                                    </li>
                                </ul>
                            </div>
                            <div class="category-group">
                                <div class="category-group-title">Đánh Giá</div>
                                <div class="rating-star">
                                    <input type="checkbox" class="category-group-item-check">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                </div>
                                <div class="rating-star">
                                    <input type="checkbox" class="category-group-item-check">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                </div>
                                <div class="rating-star">
                                    <input type="checkbox" class="category-group-item-check">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                </div>
                                <div class="rating-star">
                                    <input type="checkbox" class="category-group-item-check">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                </div>
                                <div class="rating-star">
                                    <input type="checkbox" class="category-group-item-check">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                </div>
                            </div>
                            <div class="category-group">
                                <div class="category-group-title">Dịch Vụ & Khuyến Mãi</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Freeship Xtra
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Hoàn xu Xtra
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Đang giảm giá
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Miễn phí vận chuyển
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Gì cũng rẻ
                                    </li>
                                </ul>
                            </div>
                            <button class="btn btn--primary category-group-filter-btn category-group--margin">LÀM
                                MỚI</button>
                        </nav>
                    </div>
                    <div class="col l-10 m-12 c-12">
                        <!-- home filter -->
                        <div class="home-filter hide-on-mobile-tablet">
                            <div class="home-filter-control">
                                <p class="home-filter-title">Sắp xếp theo</p>
                                <button class="btn btn--primary home-filter-btn">Phổ biến</button>
                                <button class="btn home-filter-btn">Mới nhất</button>
                                <button class="btn home-filter-btn">Bán chạy</button>
                                <div class="btn home-filter-sort">
                                    <p class="home-filter-sort-btn">Giá</p>
                                    <i class="fas fa-sort-amount-down-alt"></i>
                                    <ul class="home-filter-sort-list">
                                        <li>
                                            <a href="#" class="home-filter-sort-item-link">
                                                Giảm dần
                                                <i class="fas fa-sort-amount-down-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="home-filter-sort-item-link">
                                                Tăng dần
                                                <i class="fas fa-sort-amount-up-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="home-filter-page">
                                <div class="home-filter-page-number">
                                    <p class="home-filter-page-now">1</p>
                                    /14
                                </div>
                                <div class="home-filter-page-control">
                                    <a href="#" class="home-filter-page-btn home-filter-page-btn--disable">
                                        <i class="fas fa-angle-left"></i>
                                    </a>
                                    <a href="#" class="home-filter-page-btn">
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- home product -->
                        <div class="home-product">
                            <nav class="mobile-category">
                                <ul class="mobile-category-list">
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Thiết bị mạng</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Chuột và bàn phím</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">USB</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Link kiện máy tính</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Wifi</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Ổ cứng</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">CD/DVD</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Tai nghe</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Lót chuột</a>
                                    </li>
                                    <li class="mobile-category-item">
                                        <a href="#" class="mobile-category-item-link">Micro</a>
                                    </li>
                                </ul>
                            </nav>
                            <div id="list-product" class="row sm-gutter"></div>
                            <div id="list-product" class="row sm-gutter">
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="chitietsp.php">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/39afc74390bdf0114ddc53320e638ce9);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name"> Tai nghe Gaming JRS M1 tai nghe chụp
                                                tai có mic Jack Cắm USB âm thanh 7.1 Fullbox bass cực hay Máy Tính TT
                                            </h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">470.000đ</p>
                                                <p class="home-product-item__price-new">95.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>

                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/vn-11134207-7qukw-lj0t6x0nnv0y51);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai Nghe Bluetooth AlP2 Không Dây Pin
                                                Trâu 6h Âm Thanh To Cảm Ứng Chạm Pop Up Kết Nối - PKT</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">300.000đ</p>
                                                <p class="home-product-item__price-new">250.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 3,2k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/cbc6b678d4def9e2cc4bdc7da7f77738);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai Nghe Chụp Tai F10 Plus Headphone
                                                Nghe Nhạc Cực Hay Âm Bass Mạnh Mẽ Bảo Hành 1 Năm</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">490.000đ</p>
                                                <p class="home-product-item__price-new">180.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 1,7k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">30%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/vn-11134207-23010-57vbthlp9amv68);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai nghe Gamming 2nd Dareu EH416 EH722
                                                ,EH925-Gnet Gh3,gh5,g09 hàng chính hãng bảo hành 12tháng</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">470.000đ</p>
                                                <p class="home-product-item__price-new">95.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 2,7k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">20%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/vn-11134207-23010-57vbthlp9amv68);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai nghe chụp tai gaming giả lập 7.1
                                                full box 50 mẫu led rgb cho máy tính pc laptop điện thoại dùng chơi game
                                                giải trí</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">300.000đ</p>
                                                <p class="home-product-item__price-new">270.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 1,2k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">20%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/vn-11134207-7qukw-lhzntsj3z1kx2e);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai nghe chụp tai gaming SIDOTECH Q2 có
                                                dây thiết kế công thái học âm thanh vòm 3D mic chống ồn led RGB cho game
                                                thủ</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">220.000đ</p>
                                                <p class="home-product-item__price-new">160.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 2,3k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">25%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/494bfffc2316b4b97b4f5bb7a096e2f5);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai nghe chụp đầu Hoco W21 kết nối jack
                                                3.5mm, mút đệm hạn chế âm thanh phát ra, giảm đau tai, dây dài 1.2m</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">358.000đ</p>
                                                <p class="home-product-item__price-new">179.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 1,1k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">50%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/6b3380579ffeee010228354d4bfbb062);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai nghe máy tính có míc chụp tai chơi
                                                game chính hãng Hoco W103</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">265.000đ</p>
                                                <p class="home-product-item__price-new">199.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 1,9k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">25%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/eb32084512c3f0b625709d9afc42abee);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai nghe nhiều màu sắc</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">19.900đ</p>
                                                <p class="home-product-item__price-new">10.900đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 3,1k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">45%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/eb32084512c3f0b625709d9afc42abee);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">[Mã ELAUG giảm 6% đơn 50K] Tai Nghe Nhét
                                                Tai HiFi S2000 Pro Super Bass Chống Ồn Cực Tốt, Âm Thanh Khủng, Chơi
                                                Game Ngon</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">90.000đ</p>
                                                <p class="home-product-item__price-new">50.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">44%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/7ad85bf6e3b20f1fe934b81445670140);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai Nghe Bluetooth M10 Phiên Bản Pro
                                                Nâng Cấp Pin Trâu, Nút Cảm Ứng Tự Động Kết Nối, Chống Nước, Chống Ồn,
                                                Bảo Hành 12 T</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">150.000đ</p>
                                                <p class="home-product-item__price-new">75.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">50%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/4fcfecf3e19bbcd2cd81434a4540a258);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai nghe nhét tai TOPK F20 chống ồn có
                                                micro tích hợp điều khiển âm lượng</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">58.000đ</p>
                                                <p class="home-product-item__price-new">36.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">38%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/vn-11134207-7qukw-lhem5oiu88799c);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai Nghe Chụp Tai Bluetooth P47, Tai
                                                Không Dây Có Mic, Có Thẻ Nhớ, Âm Bass Cực Chất, Nghe Nhạc Cực Hay Bảo
                                                Hành 12 Tháng</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">99.000đ</p>
                                                <p class="home-product-item__price-new">49.500đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">50%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/1297d4209890292b056d379d640abc15);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai Nghe Gaming Qkz Ak2 Pro, Tai Nghe
                                                Chơi Game Pubg Và Game Khác, Âm Thanh Super Bass, Dây Chống Rối, Có Mic
                                                Đàm Thoại</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">98.000đ</p>
                                                <p class="home-product-item__price-new">49.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">50%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/940ef8fd1f7f2a781c5ce512d9759826);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai Nghe U19 3.5mm HIFI Dây Quấn Nhiều
                                                Màu Sắc</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">50.000đ</p>
                                                <p class="home-product-item__price-new">20.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">20%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/vn-11134207-7qukw-ligxyg9b86bw86);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai Nghe Nhét Tai SS AKG s10 - s10 plus
                                                màu đen jack cắm 3.5 Bảo Hành 12 Tháng Lỗi 1 Đổi 1</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">110.000đ</p>
                                                <p class="home-product-item__price-new">65.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 3,8k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">41%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/d900781b711449a787fcf2a584b020ef);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai Nghe AKG SamSung S8 S9 S10 S20 S21
                                                S22 Note 8 Note 9 Note 10 Note 20 Nhét Tai Có Dây NAHU Jack 3.5mm và
                                                Type C</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">189.000đ</p>
                                                <p class="home-product-item__price-new">92.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 1,1k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">51%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/vn-11134207-7qukw-lf0xnrhup0lz7b);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Hoco Chính Hãng - Tai nghe jack 3.5mm
                                                Hoco M55 dây TPE dẻo kèm Micro đàm thoại dài 1.2M ốp lưng - Shin Case
                                            </h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">80.000đ</p>
                                                <p class="home-product-item__price-new">56.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 5,6k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">30%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/vn-11134207-7qukw-lf5domuehphzf6);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai nghe gaming có mic cho điện thoại
                                                SIDOTECH G11 chuyên chơi game PUBG mobile / FF / ROS / Tốc chiến mic rời
                                                360</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">139.000đ</p>
                                                <p class="home-product-item__price-new">96.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 1,1k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">31%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/vn-11134201-23030-px97na9j6dov28);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai Nghe Realme Buds 2 nghe rất hay cho
                                                Xiaomi, OPPO, Sony, Huawei, Samsung, Realme, Vsmart, LG, Vivo Citycase
                                            </h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">22.000đ</p>
                                                <p class="home-product-item__price-new">17.600đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 2,7k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">20%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/9ab0e2242200dba7be66440c0e34dbd8);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai nghe siêu trầm Extra Bass E3 JZG
                                                SHARK có MIC kèm hộp đựng thời trang</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">115.000đ</p>
                                                <p class="home-product-item__price-new">69.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 1,2k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">40%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/41894ecaa282d9eb1b096cbb76fbc594);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">[SIÊU RẺ] Tai Nghe AKG SSamsunng S10,+
                                                Tặng 4 nút tai phụ- Tai nghe nhét tai có dây - Hoàng Thiên
                                            </h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">82.600đ</p>
                                                <p class="home-product-item__price-new">50.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 2,3k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">39%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/451f8db13467e693f4c4a37b6972ae9e);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai nghe có dây dẹt HOCO giắc cắm 3.5mm
                                                có mic jack vuông tiện lợi dùng cho samsung xiaomi ...</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">90.000đ</p>
                                                <p class="home-product-item__price-new">55.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 1,1k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">39%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/sg-11134201-22110-it84lt9soojv50);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai Nghe Nhạc Game XK-036 Có Mic Cho
                                                Điện Thoại, Âm Thanh Super Bass Cực Đỉnh</h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">99.000đ</p>
                                                <p class="home-product-item__price-new">55.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 1,9k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">44%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-3 c-6 home-product-item">
                                    <a class="home-product-item-link" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://down-vn.img.susercontent.com/file/f154ce28f6137b54a76220f0919661cb);">
                                        </div>
                                        <div class="home-product-item__info">
                                            <h4 class="home-product-item__name">Tai nghe chụp tai máy tính GAMING MC Q9
                                                có đèn LED đổi màu, có mic đàm thoại, headphone chơi game trên laptop,
                                                pc
                                            </h4>
                                            <div class="home-product-item__price">
                                                <p class="home-product-item__price-old">400.000đ</p>
                                                <p class="home-product-item__price-new">199.000đ</p>
                                                <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                            </div>
                                            <div class="home-product-item__footer">
                                                <div class="home-product-item__save">
                                                    <input type="checkbox" name="save-check" id="heart-save">
                                                    <label for="heart-save" class="far fa-heart"></label>
                                                </div>
                                                <div class="home-product-item__rating-star">
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                    <i class="star-checked far fa-star"></i>
                                                </div>
                                                <div class="home-product-item__saled">Đã bán 3,1k</div>
                                            </div>
                                            <div class="home-product-item__origin">Hà Nội</div>
                                            <div class="home-product-item__favourite">
                                                Yêu thích
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <div class="home-product-item__sale-off-value">50%</div>
                                                <div class="home-product-item__sale-off-label">GIẢM</div>
                                            </div>
                                        </div>
                                        <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- pagination -->
                        <ul class="pagination home-product-pagination">
                            <li class="pagination-item">
                                <a href="#" class="pagination-item-link pagination-item-link--disable">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="pagination-item pagination-item--active">
                                <a href="#" class="pagination-item-link">1</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item-link">2</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item-link">3</a>
                            </li>
                            <li class="pagination-item">
                                <a class="pagination-item-link pagination-item-link--disable">. . .</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item-link">8</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item-link">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <footer class="footer">
            <!-- main footer -->
            <div class="main-footer">
                <div class="grid wide">
                    <div class="row sm-gutter main-footer-info">
                        <div class="col l-2-4 m-4 c-6">
                            <h3 class="footer__heading">CHĂM SÓC KHÁCH HÀNG</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="#" class="footer-item-link">Trung Tâm Trợ Giúp</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Shopee Blog</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Shopee Mall</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Hướng Dẫn Mua Hàng</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Hướng Dẫn Bán Hàng</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Thanh Toán</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Shopee Xu</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Vận Chuyển</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Trả Hàng & Hoàn Tiền</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Chăm Sóc Khách Hàng</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Chính Sách Bảo Hành</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <h3 class="footer__heading">VỀ SHOPEE</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="#" class="footer-item-link">Giới Thiệu Về Shopee Việt Nam</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Tuyển Dụng</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Điều Khoản Shopee</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Chính Sách Bảo Mật</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Chính Hãng</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Kênh Người Bán</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Flash Sales</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Chương Trình Tiếp Thị Liên Kết Shopee</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Liên Hệ Với Truyền Thông</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col l-2-4 m-4 c-12 pay-and-ship">
                            <div>
                                <h3 class="footer__heading">THANH TOÁN</h3>
                                <div class="footer-sale-ship">
                                    <img src="./assets/img/pay/1.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/pay/2.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/pay/3.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/pay/4.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/pay/5.PNG" class="footer-item-sale-ship">
                                </div>
                            </div>
                            <div>
                                <h3 class="footer__heading">ĐƠN VỊ VẬN CHUYỂN</h3>
                                <div class="footer-sale-ship">
                                    <img src="./assets/img/ship/1.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/ship/2.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/ship/3.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/ship/4.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/ship/5.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/ship/6.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/ship/7.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/ship/8.PNG" class="footer-item-sale-ship">
                                    <img src="./assets/img/ship/9.PNG" class="footer-item-sale-ship">
                                </div>
                            </div>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <h3 class="footer__heading">THEO DÕI CHÚNG TÔI</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="#" class="footer-item-link footer-item-link-fb">
                                        <i class="footer-item-icon fab fa-facebook-square"></i>
                                        Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link footer-item-link-is">
                                        <i class="footer-item-icon fab fa-instagram-square"></i>
                                        Instagram
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link footer-item-link-li">
                                        <i class="footer-item-icon fab fa-linkedin"></i>
                                        LinkedIn
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col l-2-4 m-8 c-6">
                            <h3 class="footer__heading">TẢI ỨNG DỤNG SHOPEE</h3>
                            <div class="footer-download">
                                <a href="#" class="footer-download-link">
                                    <img src="./assets/img/qr/qr-code.png" class="footer-download-qr">
                                </a>
                                <div class="footer-download-app">
                                    <a href="#" class="footer-download-link">
                                        <img src="./assets/img/qr/gg-play.png" class="footer-download-app-img">
                                    </a>
                                    <a href="#" class="footer-download-link">
                                        <img src="./assets/img/qr/app-store.png" class="footer-download-app-img">
                                    </a>
                                    <a href="#" class="footer-download-link">
                                        <img src="./assets/img/qr/app-gallery.png" class="footer-download-app-img">
                                    </a>
                                    <a href="#" class="footer-download-link">
                                        <img src="./assets/img/qr/ltp-img.png" class="footer-download-app-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- copyright -->
                    <div class="row">
                        <div class="grid">
                            <p class="copyright-title">
                                © 2023 Shopee copyright - Công ty TNHH CRF - Product by LTP
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- other footer -->
            <div class="other-footer">
                <div class="grid wide">
                    <div class="row other-footer-heading">
                        <div class="col l-2">
                            <a href="#" class="other-footer-link">
                                CHÍNH SÁCH BẢO MẬT
                            </a>
                        </div>
                        <div class="col l-2">
                            <a href="#" class="other-footer-link">
                                QUY CHẾ HOẠT ĐỘNG
                            </a>
                        </div>
                        <div class="col l-2">
                            <a href="#" class="other-footer-link">
                                CHÍNH SÁCH VẬN CHUYỂN
                            </a>
                        </div>
                        <div class="col l-2">
                            <a href="#" class="other-footer-link">
                                TRẢ HÀNG VÀ HOÀN TIỀN
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="grid other-footer-info">
                            <p class="other-footer-title">Thông tin về Shoppee</p>
                            <p class="other-footer-more">
                                Địa chỉ: Tầng 4-5-6, Tòa nhà Capital Place, số 29 đường Liễu Giai,
                                Phường Ngọc Khánh, Quận Ba Đình, Thành phố Hà Nội, Việt Nam.
                                Tổng đài hỗ trợ: 19001221 - Email: cskh@hotro.shopee.vn
                            </p>
                            <p class="other-footer-more">
                                Chịu Trách Nhiệm Quản Lý Nội Dung: Nguyễn Đức Trí -
                                Điện thoại liên hệ: 024 73081221 (ext 4678)
                            </p>
                            <p class="other-footer-more">
                                Mã số doanh nghiệp: 0106773786 do Sở Kế hoạch & Đầu tư
                                TP Hà Nội cấp lần đầu ngày 10/02/2015
                            </p>
                            <p class="other-footer-more">
                                Ngày sản xuất 2015 -
                                Bản quyền gốc thuộc về Công ty TNHH Shopee
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- modal -->
    <div class="modal">
        <div class="modal__body">
            <!-- authen signin-->
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng Ký</h3>
                        <div class="auth-form__switch-btn">Đăng nhập</div>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" placeholder="Số điện thoại" class="auth-form__input">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" placeholder="Mật khẩu" class="auth-form__input">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" placeholder="Nhập lại mật khẩu" class="auth-form__input">
                        </div>
                    </div>
                    <div class="auth-form__policy">
                        <p class="auth-form__policy-text">
                            Bằng việc đăng ký, bạn đồng ý với Shoppee về
                            <a href="#" class="auth-form__text-link">Điều khoản dịch vụ</a> &
                            <a href="#" class="auth-form__text-link">Chính sách bảo mật</a>
                        </p>
                    </div>
                    <div class="auth-form__control">
                        <button class="btn auth-form__back">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG KÝ</button>
                    </div>
                </div>
                <div class="auth-form__signin">
                    <a href="#" class="btn btn-signin auth-form__signin-fb">
                        <i class="auth-form__signin-icon fab fa-facebook-square"></i>
                        <p class="auth-form__signin-text">
                            Kết nối với Facebook
                        </p>
                    </a>
                    <a href="#" class="btn btn-signin auth-form__signin-gg">
                        <i class="auth-form__signin-icon fab fa-google"></i>
                        <p class="auth-form__signin-text">
                            Kết nối với Google
                        </p>
                    </a>
                </div>
            </div>

            <!-- authen login-->
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng Nhập</h3>
                        <div class="auth-form__switch-btn">Đăng ký</div>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" placeholder="Số điện thoại" class="auth-form__input">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" placeholder="Mật khẩu" class="auth-form__input">
                        </div>
                    </div>
                    <div class="auth-form__help">
                        <a href="#" class="auth-form__help-link auth-form__help-forgot">Quên Mật Khẩu</a>
                        <div class="auth-form__help--separate"></div>
                        <a href="#" class="auth-form__help-link">Cần trợ giúp?</a>
                    </div>
                    <div class="auth-form__control">
                        <button class="btn auth-form__back">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG NHẬP</button>
                    </div>
                </div>

                <div class="auth-form__signin">
                    <a href="#" class="btn btn-signin auth-form__signin-sms">
                        <i class="auth-form__signin-icon fas fa-sms"></i>
                        <p class="auth-form__signin-text">
                            SMS
                        </p>
                    </a>
                    <a href="#" class="btn btn-signin auth-form__signin-fb">
                        <i class="auth-form__signin-icon fab fa-facebook-square"></i>
                        <p class="auth-form__signin-text">
                            Facebook
                        </p>
                    </a>
                    <a href="#" class="btn btn-signin auth-form__signin-gg">
                        <i class="auth-form__signin-icon fab fa-google"></i>
                        <p class="auth-form__signin-text">
                            Google
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- script js -->
    <script src="./assets/js/product.js"></script>
</body>

</html>
