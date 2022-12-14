<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Raleway:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <!-- Flickity  -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- Font Awesome 6.2.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- AOS JS  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Bootstrap 5.2-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-transparent fixed-top">
        <div class="container nav-edit">
            <a class="navbar-brand" href="/"><span>canvas.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <i class="fa-solid fa-house d-lg-none d-block"></i>
                        <a class="nav-link nav-link-hover" href="/">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <i class="fa-solid fa-list-ul d-lg-none d-block"></i>
                        <a class="nav-link nav-link-hover" href="list" role="button">DANH SÁCH</a>
                    </li>
                </ul>
                <div class="navbar-search">
                    <input type="text" class="form-control" placeholder="Tìm kiếm...">
                    <a href="#">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="main-list">
        <div class="container p-0">
            <div class="d-flex flex-lg-row-reverse flex-column align-items-start justify-content-between gap-3"
                style="padding-top: 110px;">
                <div class="d-lg-none d-inline-block p-3 fs-3 pt-0 sidebarToggle" style="cursor: pointer;"
                    id="sidebar-toggle">
                    <i class="fa-solid fa-list"></i>
                </div>
                <div class="col-lg-3 col-12 d-none d-lg-flex flex-column align-items-start sidebarMenu"
                    data-aos=" zoom-in" data-aos-delay="400" id="sidebar-menu">
                    <h4 class="title-style">Danh Mục</h4>
                    <div class="d-flex flex-column justify-content-start align-items-start gap-3 
                        rounded-4 py-3 px-4 overflow-auto w-100"
                        style="background-color: rgb(41,41,51); height: 75vh;">
                        <h5 class="list-title">Danh Sách Loại Trường</h5>
                        <div class="">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="categoryList" id="categoryList1">
                                <label class="form-check-label" for="categoryList1">
                                    Đại Học Công Lập
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="categoryList" id="categoryList2">
                                <label class="form-check-label" for="categoryList2">
                                    Đại Học Ngoài Công Lập
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="categoryList" id="categoryList3">
                                <label class="form-check-label" for="categoryList3">
                                    Học Viện
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="categoryList" id="categoryList4">
                                <label class="form-check-label" for="categoryList4">
                                    Cao Đẳng
                                </label>
                            </div>
                        </div>
                        <hr class="d-block w-100 text-white">
                        <h5 class="list-title">Danh Sách Quận</h5>
                        <div class="">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="districtList"
                                    id="districtList-HoanKiem">
                                <label class="form-check-label" for="districtList-HoanKiem">
                                    Quận Hoàn Kiếm
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="districtList"
                                    id="districtList-DongDa">
                                <label class="form-check-label" for="districtList-DongDa">
                                    Quận Đống Đa
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="districtList"
                                    id="districtList-BaDinh">
                                <label class="form-check-label" for="districtList-BaDinh">
                                    Quận Ba Đình
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="districtList"
                                    id="districtList-2BaTrung">
                                <label class="form-check-label" for="districtList-2BaTrung">
                                    Quận Hai Bà Trưng
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="districtList"
                                    id="districtList-HoangMai">
                                <label class="form-check-label" for="districtList-HoangMai">
                                    Quận Hoàng Mai
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="districtList"
                                    id="districtList-ThanhXuan">
                                <label class="form-check-label" for="districtList-ThanhXuan">
                                    Quận Thanh Xuân
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="districtList"
                                    id="districtList-LongBien">
                                <label class="form-check-label" for="districtList-LongBien">
                                    Quận Long Biên
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="districtList"
                                    id="districtList-NamTuLiem">
                                <label class="form-check-label" for="districtList-NamTuLiem">
                                    Quận Nam Từ Liêm
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="districtList"
                                    id="districtList-BacTuLiem">
                                <label class="form-check-label" for="districtList-BacTuLiem">
                                    Quận Bắc Từ Liêm
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="districtList"
                                    id="districtList-TayHo">
                                <label class="form-check-label" for="districtList-TayHo">
                                    Quận Tây Hồ
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="districtList"
                                    id="districtList-CauGiay">
                                <label class="form-check-label" for="districtList-CauGiay">
                                    Quận Cầu Giấy
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="districtList"
                                    id="districtList-HaDong">
                                <label class="form-check-label" for="districtList-HaDong">
                                    Quận Hà Đông
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="d-block mx-auto px-3 py-2 mt-4 rounded-3 text-white fw-bold"
                        style="background-image: linear-gradient(to top right, #f4424b, #ec6b71);">Tìm Kiếm</button>
                </div>
                <div class="col-lg-9 col-12">
                    <h4 class="title-style">Danh Sách</h4>
                    <div class="school-list" data-aos="zoom-in">
                        <div class="school-list-card">
                            <div class="school-list-card-top">
                                <img src="../img/background11.jpg" alt="">
                            </div>
                            <div class="school-list-card-bottom">
                                <div class="school-list-card-bottom-district">
                                    <span>Hai Bà Trưng</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại Học Bách Khoa Hà Nội</h5>
                            </div>
                            <button onclick="location.href='detail/1'" type="button">
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                        <div class="school-list-card">
                            <div class="school-list-card-top">
                                <img src="../img/background1.jpg" alt="">
                            </div>
                            <div class="school-list-card-bottom">
                                <div class="school-list-card-bottom-district">
                                    <span>Hai Bà Trưng</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại Học Bách Khoa Hà Nội</h5>
                            </div>
                            <button onclick="location.href='detail.html'" type="button">
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                        <div class="school-list-card">
                            <div class="school-list-card-top">
                                <img src="../img/background3.jpg" alt="">
                            </div>
                            <div class="school-list-card-bottom">
                                <div class="school-list-card-bottom-district">
                                    <span>Hai Bà Trưng</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại Học Bách Khoa Hà Nội</h5>
                            </div>
                            <button onclick="location.href='detail.html'" type="button">
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                        <div class="school-list-card">
                            <div class="school-list-card-top">
                                <img src="../img/background12.jpg" alt="">
                            </div>
                            <div class="school-list-card-bottom">
                                <div class="school-list-card-bottom-district">
                                    <span>Hai Bà Trưng</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại Học Bách Khoa Hà Nội</h5>
                            </div>
                            <button onclick="location.href='detail.html'" type="button">
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                        <div class="school-list-card">
                            <div class="school-list-card-top">
                                <img src="../img/background6.jpg" alt="">
                            </div>
                            <div class="school-list-card-bottom">
                                <div class="school-list-card-bottom-district">
                                    <span>Hai Bà Trưng</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại Học Bách Khoa Hà Nội</h5>
                            </div>
                            <button onclick="location.href='detail.html'" type="button">
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                        <div class="school-list-card">
                            <div class="school-list-card-top">
                                <img src="../img/background5.jpg" alt="">
                            </div>
                            <div class="school-list-card-bottom">
                                <div class="school-list-card-bottom-district">
                                    <span>Hai Bà Trưng</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại Học Bách Khoa Hà Nội</h5>
                            </div>
                            <button onclick="location.href='detail.html'" type="button">
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                        <div class="school-list-card">
                            <div class="school-list-card-top">
                                <img src="../img/background4.jpg" alt="">
                            </div>
                            <div class="school-list-card-bottom">
                                <div class="school-list-card-bottom-district">
                                    <span>Hai Bà Trưng</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại Học Bách Khoa Hà Nội</h5>
                            </div>
                            <button onclick="location.href='detail.html'" type="button">
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                        <div class="school-list-card">
                            <div class="school-list-card-top">
                                <img src="../img/background7.jpg" alt="">
                            </div>
                            <div class="school-list-card-bottom">
                                <div class="school-list-card-bottom-district">
                                    <span>Hai Bà Trưng</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại Học Bách Khoa Hà Nội</h5>
                            </div>
                            <button onclick="location.href='detail.html'" type="button">
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                        <div class="school-list-card">
                            <div class="school-list-card-top">
                                <img src="../img/background8.jpg" alt="">
                            </div>
                            <div class="school-list-card-bottom">
                                <div class="school-list-card-bottom-district">
                                    <span>Hai Bà Trưng</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại Học Bách Khoa Hà Nội</h5>
                            </div>
                            <button onclick="location.href='detail.html'" type="button">
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination mb-0 mt-5 justify-content-center align-items-center bg-transparent gap-2"
                    style="--bs-pagination-bg: transparent; --bs-pagination-border-width: none; --bs-pagination-color: #fff">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>

    <div class="footer footer-list-page">
        <div class="footer-top container">
            <h5>Stay In Touch</h5>
            <ul>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-google"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>© 2022 Copyright: Web-Gang Team</p>
        </div>
    </div>

    <!-- Font Awesome 6.2.0 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Flickity  -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <!-- Ionicons  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- AOS JS  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- Bootstrap 5.2-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../js/script.js"></script>
    <script src="../js/aos.js"></script>
</body>

</html>