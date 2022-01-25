<!doctype html>
<html lang="en">

<head>
    <title>Peacemakers Expeditions</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/images/faicon.png') }}" type="image/gif" sizes="20x20">

    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">

    <link href="{{ asset('assets/css/boxicons.min.css') }}" rel='stylesheet'>

    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net\npm\bootstrap-icons@1.6.1\font\bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>

    <!-- <div class="preloader">
<div class="loader">
<span></span>
<span></span>
<span></span>
<span></span>
</div>
</div> -->


    <div class="main-searchbar-wrapper">
        <div class="container">
            <div class="multi-main-searchber">
                <div class="main-searchbar-close search-toggle">
                    <i class="bi bi-x-lg"></i>
                </div>
                <form action="#" method="post" id="main_searchbar">
                    <div class="row g-4">
                        <div class="col-lg-10">
                            <div class="row gx-0 gy-4">
                                <div class="col-lg-3 col-md-6">
                                    <div class="search-box-single destination-box">
                                        <div class="searchbox-icon ">
                                            <i class="bi bi-geo-alt"></i>
                                        </div>
                                        <div class="searchbox-input">
                                            <label for="deatination_drop">Destination</label>
                                            <select data-placeholder="Where Are You Going?" id="deatination_drop">
                                                <option value="">Where Are You Going?</option>
                                                <optgroup label="India">
                                                    <option>
                                                        Solt Lake
                                                    </option>
                                                    <option>
                                                        Kolkata
                                                    </option>
                                                    <option>
                                                        Mohamia
                                                    </option>
                                                    <option>
                                                        Mumbai
                                                    </option>
                                                    <option>
                                                        New Delhi
                                                    </option>
                                                </optgroup>
                                                <optgroup label=" Bangladash">
                                                    <option>
                                                        Cox's Bazer
                                                    </option>
                                                    <option>
                                                        Rangamati
                                                    </option>
                                                    <option>
                                                        Banderban
                                                    </option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="search-box-single type-box">
                                        <div class="searchbox-icon">
                                            <i class="bi bi-text-paragraph"></i>
                                        </div>
                                        <div class="searchbox-input">
                                            <label for="activity-dropdown">Travel Type</label>
                                            <select class="defult-select-drowpown" data-placeholder="All Activity"
                                                id="activity-dropdown">
                                                <option value="">All Activity</option>
                                                <option value="1">Type 1</option>
                                                <option value="2">Type 2</option>
                                                <option value="3">Type 3</option>
                                                <option value="4">Type 4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="search-box-single type-box">
                                        <div class="searchbox-icon">
                                            <i class="bi bi-person-plus"></i>
                                        </div>
                                        <div class="searchbox-input">
                                            <label for="person-dropdown">Person</label>
                                            <select class="defult-select-drowpown" id="person-dropdown">
                                                <option selected value="0">01</option>
                                                <option value="1">02</option>
                                                <option value="2">03</option>
                                                <option value="3">04</option>
                                                <option value="4">05</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="search-box-single date-box">
                                        <div class="searchbox-icon">
                                            <i class="bi bi-capslock"></i>
                                        </div>
                                        <div class="searchbox-input date-picker-input">
                                            <label for="datepicker">When</label>
                                            <input placeholder="Select your date" type="text" name="checkIn"
                                                id="datepicker" value="" class="calendar">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="main-form-submit">
                                <button type="submit">Find Now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="category-sidebar-wrapper">
        <div class="category-sidebar">
            <div class="category-header d-flex justify-content-between align-items-center">
                <h4>Category</h4>
                <div class="category-toggle">
                    <i class="bi bi-x-lg"></i>
                </div>
            </div>
            <div class="row row-cols-lg-3 row-cols-2 gy-5 mt-3">
                <div class="col">
                    <a class="category-box" href="package.html">
                        <div class="cate-icon mx-auto">
                            <img src="{{ asset('assets/images/icons/cate1.svg') }}" alt="">
                        </div>
                        <h5>Adventure</h5>
                    </a>
                </div>
                <div class="col">
                    <a class="category-box" href="package.html">
                        <div class="cate-icon mx-auto">
                            <img src="{{ asset('assets/images/icons/cate2.svg') }}" alt="">
                        </div>
                        <h5>Group Tour</h5>
                    </a>
                </div>
                <div class="col">
                    <a class="category-box" href="package.html">
                        <div class="cate-icon mx-auto">
                            <img src="{{ asset('assets/images/icons/cate3.svg') }}" alt="">
                        </div>
                        <h5>Couple Tour</h5>
                    </a>
                </div>
                <div class="col">
                    <a class="category-box" href="package.html">
                        <div class="cate-icon mx-auto">
                            <img src="{{ asset('assets/images/icons/cate4.svg') }}" alt="">
                        </div>
                        <h5>Single Tour</h5>
                    </a>
                </div>
                <div class="col">
                    <a class="category-box" href="package.html">
                        <div class="cate-icon mx-auto">
                            <img src="{{ asset('assets/images/icons/cate5.svg') }}" alt="">
                        </div>
                        <h5>Honeymoon</h5>
                    </a>
                </div>
                <div class="col">
                    <a class="category-box" href="package.html">
                        <div class="cate-icon mx-auto">
                            <img src="{{ asset('assets/images/icons/cate6.svg') }}" alt="">
                        </div>
                        <h5>Sea Beach</h5>
                    </a>
                </div>
                <div class="col">
                    <a class="category-box" href="package.html">
                        <div class="cate-icon mx-auto">
                            <img src="{{ asset('assets/images/icons/cate7.svg') }}" alt="">
                        </div>
                        <h5>Mountain Tour</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="topbar-area topbar-style-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 align-items-center d-xl-flex d-none">
                    <div class="topbar-contact-left">
                        <ul class="contact-list">
                            <li><i class="bi bi-telephone-fill"></i> <a href="tel:+255 782 869 676">+255 782 869 676</a>
                            </li>
                            <li><i class="bi bi-envelope-fill"></i> <a
                                    href=""><span>info@peacemakersexpeditions.com</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6 text-xl-center text-md-start text-center">
                    <div class="topbar-ad">
                        <a href="#">Travel with style</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 d-md-flex  d-none align-items-center justify-content-end">
                    <ul class="topbar-social-links">
                        <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="#"><i class='bx bxl-instagram-alt'></i></a></li>
                        <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="#"><i class="bx bxl-whatsapp-square"></i></a></li>
                        <li><a href="#"><i class='bx bxl-pinterest'></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <header>
        <div class="header-area header-style-one">
            <div class="container">
                <div class="row">
                    <div
                        class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 align-items-center d-xl-flex d-lg-block">
                        <div class="nav-logo d-flex justify-content-between align-items-center">
                            <a href="index.html"><img src="{{ asset('assets/images/logo-w.jpeg') }}" alt="logo"></a>
                            <div class="d-flex align-items-center gap-4">
                                <div class="nav-right d-xl-none">
                                    <ul class="nav-actions">
                                        <li class="category-toggle">
                                            <i class='bx bx-category'></i>
                                        </li>
                                        <li class="search-toggle">
                                            <i class='bx bx-search-alt'></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mobile-menu d-flex ">
                                    <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                        <span class="h-top"></span>
                                        <span class="h-middle"></span>
                                        <span class="h-bottom"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-xs-6">
                        <nav class="main-nav float-end">
                            <div class="inner-logo d-xl-none text-center">
                                <a href="#"><img src="{{ asset('assets/images/log.png') }}"
                                        alt="Peacemakers Expeditions"></a>
                            </div>
                            <ul>
                                <li>
                                    <a href="{{ Route('home') }}">HOME</a>
                                </li>
                                <li><a href="{{ Route('about') }}">ABOUT US</a></li>
                                <li class="has-child-menu">
                                    <a href="javascript:void(0)">DESTINATIONS</a>
                                    <i class="fl flaticon-plus">+</i>
                                    <ul class="sub-menu">
                                        <li><a href="{{ Route('serengeti') }}">Serengeti</a></li>
                                        <li><a href="{{ Route('ngorongoro') }}">NgoroNgoro</a></li>
                                        <li><a href="{{ Route('manyara') }}">Lake Manyara National Park</a></li>
                                        <li><a href="{{ Route('tarangire') }}">Tarangire National Park</a></li>
                                        <li><a href="{{ Route('arusha') }}">Arusha National Park</a></li>
                                        <li><a href="{{ Route('zanzibar') }}">Zanzibar</a></li>
                                    </ul>
                                </li>
                                <li class="has-child-menu">
                                    <a href="javascript:void(0)">TOURS</a>
                                    <i class="fl flaticon-plus">+</i>
                                    <ul class="sub-menu">
                                        <li class="has-child-menu">
                                            <a href="package.html">Safaris</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ Route('majestic_tanzania') }}">Majestic Tanzania</a>
                                                </li>
                                                <li><a href="{{ Route('epic_family_safari_adventure') }}">Epic Family
                                                        Safari Drive</a>
                                                </li>
                                                <li><a href="{{ Route('luxury') }}">Luxury</a></li>
                                                <li><a href="{{ Route('luxury_journey_of_the_wildbeest_tour') }}">Luxury
                                                        Journey of the Wildbeast
                                                        Tour</a></li>
                                                <li><a href="{{ Route('adventure_trip') }}">Adventure Trip</a></li>
                                                <li><a href="{{ Route('midrange_lodge_group_tour') }}">Mid-range
                                                        Lodge Group Tour</a>
                                                </li>
                                                <li><a href="{{ Route('3days_tarangire_and_lake_manyara') }}">3 Days
                                                        to Tarangire And Lake
                                                        Manyara</a></li>
                                                <li><a href="{{ Route('great_migration') }}">Great Migration</a></li>
                                                <li><a href="{{ Route('safari_cultural') }}">Safari & Cultural
                                                        Activity in
                                                        Kilimanjaro Region</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ Route('package') }}">Culture</a></li>
                                        <li><a href="{{ Route('package') }}">Biking Activities</a></li>
                                    </ul>
                                </li>
                                <li class="has-child-menu">
                                    <a href="javascript:void(0)">TREKKING</a>
                                    <i class="fl flaticon-plus">+</i>
                                    <ul class="sub-menu">
                                        <li class="has-child-menu">
                                            <a href="package.html">Kilimanjaro</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ Route('package') }}">Marangu Route</a></li>
                                                <li><a href="{{ Route('package') }}">Machame Route</a></li>
                                                <li><a href="{{ Route('package') }}">Shira Route</a></li>
                                                <li><a href="{{ Route('package') }}">Rongai Route</a></li>
                                                <li><a href="{{ Route('package') }}">Lemosho Route</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ Route('package') }}">Mount Meru</a></li>
                                        <li><a href="{{ Route('package') }}">Oldonyo Lengai</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ Route('contact') }}">CONTACT US</a></li>
                            </ul>
                            <div class="inner-contact-options d-xl-none">
                                <div class="contact-box-inner"><i class="bi bi-telephone-fill"></i> <a
                                        href="tel:+255782869676">+255 782 869 676</a></div>
                                <div class="contact-box-inner"><i class="bi bi-envelope-fill"></i> <a
                                        href="#">info@peacemakersexpeditions.com</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-xl-2">
                        <div class="nav-right float-end d-xl-flex d-none ">
                            <ul class="nav-actions">
                                <li class="category-toggle">
                                    <i class='bx bx-category'></i>
                                </li>
                                <li class="search-toggle">
                                    <i class='bx bx-search-alt'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('contents')

    <div class="footer-area mt-120">
        <div class="footer-main-wrapper">
            <div class="footer-vactor">
                <img src="{{ asset('assets/images/banner/footer-bg.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="footer-about text-lg-start text-center">
                            <p>PEACEMAKERS EXPEDITION is a Locally owned safari company that provides top-notch Safari
                                and logistic solutions for safari in East Africa.
                                PEACEMAKERS EXPEDITION offers quality travel experiences that provide our travellers
                                with a journey that is both informative and inspiring .
                                Our company has a substantial operating capacity, which is powered by a team of highly
                                professional safari drivers guides who possess several years’ experience of service in
                                Tourism .
                            </p>
                            <div class="footer-social-wrap">
                                <h5>Follow Us On:</h5>
                                <ul class="footer-social-links justify-content-lg-start justify-content-center">
                                    <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                                    <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="#"><i class="bx bxl-whatsapp"></i></a></li>
                                    <li><a href="#"><i class='bx bxl-pinterest-alt'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Quick Link</h4>
                            <ul class="footer-links">
                                <li><a href="{{ Route('home') }}">Home</a></li>
                                <li><a href="{{ Route('about') }}">About Us</a></li>
                                <li><a href="destination.html">Destination</a></li>
                                <li><a href="guide.html">Tours</a></li>
                                <li><a href="{{ Route('package') }}">Trekking</a></li>
                                <li><a href="{{ Route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Tours</h4>
                            <ul class="footer-links">
                                <li><a href="{{ Route('package') }}">Majestic Tanzania</a></li>
                                <li><a href="{{ Route('package') }}">Epic Family Safari Drive</a></li>
                                <li><a href="{{ Route('package') }}">Luxury</a></li>
                                <li><a href="{{ Route('package') }}">Luxury Journey of the Wildbeast Tour</a></li>
                                <li><a href="{{ Route('package') }}">Adventure Trip</a></li>
                                <li><a href="{{ Route('package') }}">Mid-range Lodge Group Tour</a></li>
                                <li><a href="{{ Route('package') }}">3 Days to Tarangire And Lake Manyara</a></li>
                                <li><a href="{{ Route('package') }}">Great Migration</a></li>
                                <li><a href="destination-details.html">Safari & Cultural Activity in Kilimanjaro
                                        Region</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-contact-wrapper">
                    <h5>Contact Us:</h5>
                    <ul class="footer-contact-list">
                        <li><i class="bi bi-telephone-x"></i> <a href="tel:+255782869676 ">+255 782 869 676</a></li>
                        <li><i class="bi bi-envelope-open"></i> <a
                                href=""><span>info@peacemakersexpeditions.com</span></a>
                        </li>
                        <li><i class="bi bi-geo-alt"></i> <a href="#">Arusha, Tanzania</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-6 order-lg-1 order-3 ">
                        <div class="copyright-link text-lg-start text-center">
                            <p>Copyright {{ date('Y') }} Peacemakers Expeditions | Design By <a
                                    href="https://evoton.co.ke">Evoton</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4  order-lg-2 order-1">
                        <div class="footer-logo text-center">
                            <a href="index.html"><img src="assets/images/log-w.png" alt="Peacemakers Expeditions"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 order-lg-3 order-2">
                        <div class="policy-links">
                            <ul class="policy-list justify-content-lg-end justify-content-center">
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
