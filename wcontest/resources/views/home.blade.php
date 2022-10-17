<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <!-- Poppins & Raleway Fonts -->
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
    <!-- Full Page JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.11/fullpage.min.css"
        integrity="sha512-NGRhMiWY9pf5z8PLens7/u+LLwIPAu1dhJ7u9sHRWIo8TKrVbKiWlRdYRH3pVDCZA10zmobo+PBLGeLOREklBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
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
                        <a class="nav-link nav-link-hover" href="/list" role="button">DANH SÁCH</a>
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
    <div id="fullpage">
        <div class="section s1">
            <div class="carousel" data-flickity="">
                <div class="carousel-cell">
                    <div class="carousel-cell-content">
                        <h4>Đại Học Swinburne <a href="/html/detail.html">
                                <i class="fa-solid fa-arrow-right"></i></a>
                        </h4>
                        <span>Đại học Công nghệ Swinburne Việt Nam là trường đại học quốc tế ở Hà Nội xếp hạng 321 đại
                            học tốt nhất thế giới theo QS Ranking 2021. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Expedita voluptatem consectetur vitae obcaecati hic voluptates a nobis
                            omnis, dolorum officia dolores et accusamus, pariatur natus ut enim ea inventore
                            recusandae!</span>
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="carousel-cell-content">
                        <h4>Đại Học Swinburne <a href="/html/detail.html">
                                <i class="fa-solid fa-arrow-right"></i></a>
                        </h4>
                        <span>Đại học Công nghệ Swinburne Việt Nam là trường đại học quốc tế ở Hà Nội xếp hạng 321 đại
                            học tốt nhất thế giới theo QS Ranking 2021.</span>
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="carousel-cell-content">
                        <h4>Đại Học Swinburne <a href="/html/detail.html">
                                <i class="fa-solid fa-arrow-right"></i></a>
                        </h4>
                        <span>Đại học Công nghệ Swinburne Việt Nam là trường đại học quốc tế ở Hà Nội xếp hạng 321 đại
                            học tốt nhất thế giới theo QS Ranking 2021.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="section s2">
            <div class="container">
                <h3 class="section-title">Danh Sách</h3>
                <div class="category-list">
                    <div class="category-list-item" data-aos="zoom-in" data-aos-delay="">
                        <img src="img/background4.jpg" alt="">
                        <button onclick="location.href='/html/list.html'">Xem tất cả<i
                                class="fa-solid fa-circle-down"></i></button>
                        <div class="category-list-item-bottom">
                            <h5>Đại học công lập</h5>
                            <p>Do nhà nước đầu tư kinh phí và cơ sở vật chất, hoạt động chủ yếu bằng các nguồn tài chính
                                công, khoản đóng góp phi vụ lợi</p>
                        </div>
                    </div>
                    <div class="category-list-item" data-aos="zoom-in" data-aos-delay="200">
                        <img src="img/background8.jpg" alt="">
                        <button onclick="location.href='/html/list.html'">Xem tất cả<i
                                class="fa-solid fa-circle-down"></i></button>
                        <div class="category-list-item-bottom">
                            <h5>Học viện</h5>
                            <p>Đào tạo sâu và chuyên môn cao, chú trọng nghiên cứu</p>
                        </div>
                    </div>
                    <div class="category-list-item" data-aos="zoom-in" data-aos-delay="300">
                        <img src="img/background12.jpg" alt="">
                        <button onclick="location.href='/html/list.html'">Xem tất cả<i
                                class="fa-solid fa-circle-down"></i></button>
                        <div class="category-list-item-bottom">
                            <h5>Cao đẳng</h5>
                            <p>Cao đẳng là hình thức đào tạo đi sâu vào thực hành nghề nghiệp</p>
                        </div>
                    </div>
                    <div class="category-list-item" data-aos="zoom-in" data-aos-delay="400">
                        <img src="img/background10.jpg" alt="">
                        <button onclick="location.href='/html/list.html'">Xem tất cả<i
                                class="fa-solid fa-circle-down"></i></button>
                        <div class="category-list-item-bottom">
                            <h5>Đại học ngoài công lập</h5>
                            <p>được thành lập và điều hành bởi cá nhân, tổ chức trong nước đã được cơ quan có thẩm quyền
                                cho phép thành lập và tự đầu tư</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section s3">
            <div class="container">
                <h3 class="section-title">Top 12 Trường Đại Học</h3>
                <div class="carousel" data-flickity='{ "groupCells": true}'>
                    <!-- Top 1 -->
                    <div class="carousel-cell" data-aos="fade-up" data-aos-duration="3000">
                        <div class="top-list-card">
                            <div class="top-list-card-top">
                                <span class="badge bg-danger">
                                    1 <span class="visually-hidden">unread messages</span>
                                </span>
                                <img src="img/background11.jpg" alt="">
                            </div>
                            <div class="top-list-card-bottom">
                                <div class="top-list-card-bottom-district">
                                    <span>Hai Bà Trưng</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại Học Bách Khoa Hà Nội</h5>
                                <p>Trường Đại Học Bách Khoa Hà Nội có địa chỉ ở số 1, Đại Cồ Việt, Hai Bà Trưng, Hà Nội.
                                    Đây là trường đại học đa ngành về kỹ thuật được thành lập ngày 15 tháng 10 năm 1956.
                                </p>
                            </div>
                            <button onclick="location.href='detail/1'" type="button">
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Top 2 -->
                    <div class="carousel-cell" data-aos="fade-up" data-aos-delay="200" data-aos-duration="3000">
                        <div class="top-list-card">
                            <div class="top-list-card-top">
                                <span class="badge bg-danger">
                                    2 <span class="visually-hidden">unread messages</span>
                                </span>
                                <img src="img/background12.jpg" alt="">
                            </div>
                            <div class="top-list-card-bottom">
                                <div class="top-list-card-bottom-district">
                                    <span>Hai Bà Trưng</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại Học Kinh Tế Quốc Dân</h5>
                                <p>Đại Học Kinh Tế Quốc Dân địa chỉ ở 207 đường Giải Phóng, quận Hai Bà Trưng, Hà Nội.
                                </p>
                            </div>
                            <button>
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Top 3 -->
                    <div class="carousel-cell" data-aos="fade-up" data-aos-delay="400" data-aos-duration="3000">
                        <div class="top-list-card">
                            <div class="top-list-card-top">
                                <span class="badge bg-danger">
                                    3 <span class="visually-hidden">unread messages</span>
                                </span>
                                <img src="img/background3.jpg" alt="">
                            </div>
                            <div class="top-list-card-bottom">
                                <div class="top-list-card-bottom-district">
                                    <span>Thạch Thất</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại học FPT</h5>
                                <p>Trường Đại học FPT là một cơ sở kinh doanh dịch vụ giáo dục tại Việt Nam</p>
                            </div>
                            <button>
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Top 4 -->
                    <div class="carousel-cell">
                        <div class="top-list-card">
                            <div class="top-list-card-top">
                                <span class="badge bg-danger">
                                    4 <span class="visually-hidden">unread messages</span>
                                </span>
                                <img src="img/background4.jpg" alt="">
                            </div>
                            <div class="top-list-card-bottom">
                                <div class="top-list-card-bottom-district">
                                    <span>Cầu Giấy</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại Học Quốc Gia Hà Nội</h5>
                                <p>Đại học Quốc gia Hà Nội tiền thân là Viện Đại học Đông Dương được thành lập năm 1906.
                                    Năm 1945, trên cơ sở Đại học Đông Dương</p>
                            </div>
                            <button>
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Top 5 -->
                    <div class="carousel-cell">
                        <div class="top-list-card">
                            <div class="top-list-card-top">
                                <span class="badge bg-danger">
                                    5 <span class="visually-hidden">unread messages</span>
                                </span>
                                <img src="img/background5.jpg" alt="">
                            </div>
                            <div class="top-list-card-bottom">
                                <div class="top-list-card-bottom-district">
                                    <span>Bắc Từ Liêm</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại Học Công Nghiệp Hà Nội</h5>
                                <p>Trường Đại Học Công Nghiệp Hà Nội (HaUI) trụ sở chính ở Phường Minh Khai, Quận Bắc Từ
                                    Liêm, Thành phố Hà Nội
                                </p>
                            </div>
                            <button>
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Top 6 -->
                    <div class="carousel-cell">
                        <div class="top-list-card">
                            <div class="top-list-card-top">
                                <span class="badge bg-danger">
                                    6 <span class="visually-hidden">unread messages</span>
                                </span>
                                <img src="img/background6.jpg" alt="">
                            </div>
                            <div class="top-list-card-bottom">
                                <div class="top-list-card-bottom-district">
                                    <span>Cầu Giấy</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại học Thương mại</h5>
                                <p>Trường Đại học Thương mại là trường đại học công lập, trực thuộc hệ thống giáo dục
                                    quốc dân nước Cộng hòa xã hội chủ nghĩa Việt Nam
                                </p>
                            </div>
                            <button>
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Top 7 -->
                    <div class="carousel-cell">
                        <div class="top-list-card">
                            <div class="top-list-card-top">
                                <span class="badge bg-danger">
                                    7 <span class="visually-hidden">unread messages</span>
                                </span>
                                <img src="img/background7.jpg" alt="">
                            </div>
                            <div class="top-list-card-bottom">
                                <div class="top-list-card-bottom-district">
                                    <span>Đống Đa</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại Học Ngoại Thương Hà Nội</h5>
                                <p>Ra đời vào năm 1960, có địa chỉ ở 91 phố Chùa Láng, quận Đống Đa, Hà Nội, đại Học
                                    Ngoại Thương Hà Nội là một trong những cái nôi đào tạo sinh viên toàn diện nhất
                                </p>
                            </div>
                            <button>
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Top 8 -->
                    <div class="carousel-cell">
                        <div class="top-list-card">
                            <div class="top-list-card-top">
                                <span class="badge bg-danger">
                                    8 <span class="visually-hidden">unread messages</span>
                                </span>
                                <img src="img/background8.jpg" alt="">
                            </div>
                            <div class="top-list-card-bottom">
                                <div class="top-list-card-bottom-district">
                                    <span>Đống Đa</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại Học Thủy Lợi</h5>
                                <p>Trường Đại Học Thủy Lợi là trường đại học số 1 trong việc đào tạo nguồn nhân lực chất
                                    lượng cao
                                </p>
                            </div>
                            <button>
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Top 9 -->
                    <div class="carousel-cell">
                        <div class="top-list-card">
                            <div class="top-list-card-top">
                                <span class="badge bg-danger">
                                    9 <span class="visually-hidden">unread messages</span>
                                </span>
                                <img src="img/background9.jpg" alt="">
                            </div>
                            <div class="top-list-card-bottom">
                                <div class="top-list-card-bottom-district">
                                    <span>Hoàn Kiếm</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại Học Dược Hà Nội</h5>
                                <p>Là một trong những "tên tuổi" được các bậc phụ huynh và bạn trẻ quan tâm</p>
                            </div>
                            <button>
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Top 10 -->
                    <div class="carousel-cell">
                        <div class="top-list-card">
                            <div class="top-list-card-top">
                                <span class="badge bg-danger">
                                    10 <span class="visually-hidden">unread messages</span>
                                </span>
                                <img src="img/background10.jpg" alt="">
                            </div>
                            <div class="top-list-card-bottom">
                                <div class="top-list-card-bottom-district">
                                    <span>Bắc Từ Liêm</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại học Mỏ - Địa chất</h5>
                                <p>Trường Đại học Mỏ – Địa chất là một trường đại học đa ngành hàng đầu tại Việt Nam,
                                    thuộc nhóm 95 trường đại học hàng đầu Đông Nam Á
                                </p>
                            </div>
                            <button>
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Top 11 -->
                    <div class="carousel-cell">
                        <div class="top-list-card">
                            <div class="top-list-card-top">
                                <span class="badge bg-danger">
                                    11 <span class="visually-hidden">unread messages</span>
                                </span>
                                <img src="img/background1.jpg" alt="">
                            </div>
                            <div class="top-list-card-bottom">
                                <div class="top-list-card-bottom-district">
                                    <span>Cầu Giấy</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại Học Sư Phạm Hà Nội</h5>
                                <p>Trường Đại Học Sư Phạm Hà Nội có địa chỉ tại Xuân Thủy, Cầu Giấy. Trường được thành
                                    lập vào ngày 11 tháng 10 năm 1954
                                </p>
                            </div>
                            <button>
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Top 12 -->
                    <div class="carousel-cell">
                        <div class="top-list-card">
                            <div class="top-list-card-top">
                                <span class="badge bg-danger">
                                    12 <span class="visually-hidden">unread messages</span>
                                </span>
                                <img src="img/background12.jpg" alt="">
                            </div>
                            <div class="top-list-card-bottom">
                                <div class="top-list-card-bottom-district">
                                    <span>Đống Đa</span>
                                    <a href="#">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                                <h5>Đại Học Y Hà Nội</h5>
                                <p>Trường Đại học Y Hà Nội được thành lập năm 1902, là một trường đại học lớn có bề dày
                                    lịch sử lâu đời trong các trường Đại học hiện có ở Việt Nam
                                </p>
                            </div>
                            <button>
                                Xem chi tiết <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section s4">
            <div class="container">
                <h3 class="section-title">Team</h3>
                <div class="team" data-aos="zoom-in">
                    <div class="carousel mt-5"
                        data-flickity='{ "groupCells": "20%", "prevNextButtons": false, "pageDots": false, "autoPlay": true, "pauseAutoPlayOnHover": false }'>
                        <div class="carousel-cell">
                            <div class="team-top">
                                <div class="team-top-img">
                                    <img src="img/background2.jpg" alt="">
                                </div>
                            </div>
                            <div class="team-content">
                                <h5>Nguyễn Việt Hoàng</h5>
                                <span>Leader</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maxime qui
                                    repudiandae dolorum.</p>
                                <ul>
                                    <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="carousel-cell">
                            <div class="team-top">
                                <div class="team-top-img">
                                    <img src="img/background11.jpg" alt="">
                                </div>
                            </div>
                            <div class="team-content">
                                <h5>Nguyễn Minh Đức</h5>
                                <span>Member</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maxime qui
                                    repudiandae dolorum.</p>
                                <ul>
                                    <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="carousel-cell">
                            <div class="team-top">
                                <div class="team-top-img">
                                    <img src="img/background5.jpg" alt="">
                                </div>
                            </div>
                            <div class="team-content">
                                <h5>Đỗ Minh Tuấn</h5>
                                <span>Member</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maxime qui
                                    repudiandae dolorum.</p>
                                <ul>
                                    <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="carousel-cell">
                            <div class="team-top">
                                <div class="team-top-img">
                                    <img src="img/background4.jpg" alt="">
                                </div>
                            </div>
                            <div class="team-content">
                                <h5>Nguyễn Lâm Chúc</h5>
                                <span>Member</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maxime qui
                                    repudiandae dolorum.</p>
                                <ul>
                                    <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="carousel-cell">
                            <div class="team-top">
                                <div class="team-top-img">
                                    <img src="img/background3.jpg" alt="">
                                </div>
                            </div>
                            <div class="team-content">
                                <h5>Nguyễn Thành Đoàn</h5>
                                <span>Member</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maxime qui
                                    repudiandae dolorum.</p>
                                <ul>
                                    <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="footer">
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
    <!-- Full Page JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.11/fullpage.min.js"
        integrity="sha512-ojnoeSkK5NDwnuW5S0ZnddobHez8Bx1yVa3RE+Cd0fGEuY/NEd4sgVF/CJ6eDtnOeLZLbTJpNFrCkUYbHS2hRA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap 5.2-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/fullpage.js') }}"></script>
</body>

</html>