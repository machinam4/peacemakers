@extends('layouts.base')
@section('contents')
    <div class="hero-area hero-style-one overflow-hidden">
        <div class="container-fluid p-0">
            <div class="swiper hero-slider-one">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero-single-slide">
                            <div class="hero-highlighted-bg">
                                <img src="{{ asset('assets/images/banner/peacemaker_banner-4.jpeg') }}" alt="">
                            </div>
                            <div class="hero-content-bg">
                                <div class="hero-content position-relative">
                                    <h2 class="hero-title">Wild & <span>Safari</span></h2>
                                    <p>we have been helping guests from all over the globe create carefully crafted personal
                                        African safari holidays and inspiring wildlife photography for students with nature
                                        experiences. </p>
                                    <div class="hero-btns">
                                        <a href="package.html" class="button-fill-primary">View Adventure</a>
                                        <a href="package.html" class="button-outlined-primary">Take A Tour</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-single-slide">
                            <div class="hero-highlighted-bg">
                                <img src="{{ asset('assets/images/banner/peacemaker_banner-2.jpeg') }}" alt="">
                            </div>
                            <div class="hero-content-bg">
                                <div class="hero-content position-relative">
                                    <h2 class="hero-title"> Move The <span>Earth</span></h2>
                                    <p>PEACEMAKERS EXPEDITIONS offers quality travel experiences that provide our travellers
                                        with a journey that is both informative and inspiring.</p>
                                    <div class="hero-btns">
                                        <a href="package.html" class="button-fill-primary">View Adventure</a>
                                        <a href="package.html" class="button-outlined-primary">Take A Tour</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-single-slide">
                            <div class="hero-highlighted-bg">
                                <img src="{{ asset('assets/images/banner/peacemaker_banner-1.jpeg') }}" alt="">
                            </div>
                            <div class="hero-content-bg">
                                <div class="hero-content position-relative">
                                    <h2 class="hero-title">Travel & <span>Adventure</span></h2>
                                    <p> Our company has a substantial operating capacity, which is powered by a team of
                                        highly professional safari drivers guides who possess several years’ experience of
                                        service in Tourism.
                                    </p>
                                    {{-- <div class="hero-btns">
                                        <a href="package.html" class="button-fill-primary">View Adventure</a>
                                        <a href="package.html" class="button-outlined-primary">Take A Tour</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-arrows text-center d-lg-flex d-none">
            <div class="hero-prev" tabindex="0" role="button" aria-label="Previous slide"> <i
                    class="bi bi-arrow-left"></i> Prev </div>
            <div class="hero-next" tabindex="0" role="button" aria-label="Next slide">Next <i
                    class="bi bi-arrow-right"></i></div>
        </div>
        <div class="hero-pagination d-block w-auto">
        </div>
    </div>


    <div class="package-area package-style-one pt-110 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-head-alpha">
                        <h2>Explore Tanzania With Peacemakers Expeditions</h2>
                        <p>we have been helping guests from all over the globe create
                            carefully crafted personal African safari holidays and inspiring wildlife photography for
                            students with nature experiences.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="package-btn text-lg-end">
                        <a href="package.html" class="button-fill-primary">View All Tour</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="package-card-alpha">
                        <div class="package-thumb">
                            <a href="package-details.html"><img
                                    src="{{ asset('assets/images/package/Peacemaker-majestic1.jpeg') }}" alt=""></a>
                            <p class="card-lavel">
                                <i class="bi bi-clock"></i> <span>6 Days/5 Nights</span>
                            </p>
                        </div>
                        <div class="package-card-body">
                            <h3 class="p-card-title"><a href="package-details.html">Majestic Tanzania.</a></h3>
                            <p>•Tarangire National Park •Lake Manyara National Park •Serengeti National Park •Ngorongoro
                                Crater
                            </p>
                            <div class="p-card-bottom">
                                <div class="book-btn">
                                    <a href="package-details.html">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="package-card-alpha">
                        <div class="package-thumb">
                            <a href="package-details.html"><img
                                    src="{{ asset('assets/images/package/Peacemaker-family.jpeg') }}" alt=""></a>
                            <p class="card-lavel">
                                <i class="bi bi-clock"></i> <span>8 Days/7 Nights</span>
                            </p>
                        </div>
                        <div class="package-card-body">
                            <h3 class="p-card-title"><a href="package-details.html">Epic Family Safari Adventure.</a></h3>
                            <p>•Tarangire •Serengeti •Ngorongoro •Manyara •Lake Eyasi</p>
                            <div class="p-card-bottom">
                                <div class="book-btn">
                                    <a href="package-details.html">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="package-card-alpha">
                        <div class="package-thumb">
                            <a href="package-details.html"><img
                                    src="{{ asset('assets/images/package/Peacemaker-adventure.jpeg') }}" alt=""></a>
                            <p class="card-lavel">
                                <i class="bi bi-clock"></i> <span>5 Days/4 Nights</span>
                            </p>
                        </div>
                        <div class="package-card-body">
                            <h3 class="p-card-title"><a href="package-details.html">Adventure Trip</a></h3>
                            <p>•Tarangire •Lake Manyara •Serengeti •Ngorongoro</p>
                            <div class="p-card-bottom">
                                <div class="book-btn">
                                    <a href="package-details.html">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="destination-area destination-style-one pt-110 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-head-alpha">
                        <h2>Explore Top Destination</h2>
                        <p>PEACEMAKERS EXPEDITIONS offers quality travel experiences that provide our travellers with a
                            journey that
                            is both informative and inspiring.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="slider-arrows text-center d-lg-flex d-none justify-content-end mb-3">
                        <div class="testi-prev custom-swiper-prev" tabindex="0" role="button" aria-label="Previous slide">
                            <i class="bi bi-chevron-left"></i>
                        </div>
                        <div class="testi-next custom-swiper-next" tabindex="0" role="button" aria-label="Next slide"><i
                                class="bi bi-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 overflow-hidden">
            <div class="swiper destination-slider-one">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="destination-card-style-one">
                            <div class="d-card-thumb">
                                <a href="destination-details.html"><img
                                        src="{{ asset('assets/images/destination/serengeti.jpeg') }}" alt=""></a>
                            </div>
                            <div class="d-card-overlay">
                                <div class="d-card-content">
                                    <h3 class="d-card-title"><a href="destination-details.html">Serengeti</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-card-style-one">
                            <div class="d-card-thumb">
                                <a href="destination-details.html"><img
                                        src="{{ asset('assets/images/destination/ngorongoro.jpeg') }}" alt=""></a>
                            </div>
                            <div class="d-card-overlay">
                                <div class="d-card-content">
                                    <h3 class="d-card-title"><a href="destination-details.html">NgoroNgoro</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-card-style-one">
                            <div class="d-card-thumb">
                                <a href="#"><img src="{{ asset('assets/images/destination/manyara.jpeg') }}" alt=""></a>
                            </div>
                            <div class="d-card-overlay">
                                <div class="d-card-content">
                                    <h3 class="d-card-title"><a href="destination-details.html">Lake Manyara</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-card-style-one">
                            <div class="d-card-thumb">
                                <a href="destination-details.html"><img
                                        src="{{ asset('assets/images/destination/tarangire.jpeg') }}" alt=""></a>
                            </div>
                            <div class="d-card-overlay">
                                <div class="d-card-content">
                                    <h3 class="d-card-title"><a href="destination-details.html">Tarangire</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-card-style-one">
                            <div class="d-card-thumb">
                                <a href="destination-details.html"><img
                                        src="{{ asset('assets/images/destination/arusha.jpeg') }}" alt=""></a>
                            </div>
                            <div class="d-card-overlay">
                                <div class="d-card-content">
                                    <h3 class="d-card-title"><a href="destination-details.html">Arusha</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="newslatter-wrapper mt-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="newslatter-side text-center text-lg-start mx-auto mx-lg-0">
                        <h2>Subscribe Our <span>Newsletter</span></h2>
                        <p>Sign up to receive the best offers on promotion and
                            new destinations.</p>
                        <form action="#" method="post" id="newslatter-form">
                            <div class="newslatter-form-input">
                                <input type="text" name="newslatter" id="newslatter-input" placeholder="Email Here...">
                                <button type="submit" class="newslatter-submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="achievement-counter-side">
                        <div class="row g-4">
                            <div class="col-lg-6  col-md-6">
                                <div class="achievement-box-style-one">
                                    <div class="achievement-icon">
                                        <img src="{{ asset('assets/images/icons/counter-icon2.svg') }}" alt="">
                                    </div>
                                    <div class="achievement-box-content">
                                        <h2>500+</h2>
                                        <h4>Awesome Tour</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6  col-md-6">
                                <div class="achievement-box-style-one">
                                    <div class="achievement-icon">
                                        <img src="{{ asset('assets/images/icons/counter-icon3.svg') }}" alt="">
                                    </div>
                                    <div class="achievement-box-content">
                                        <h2>300+</h2>
                                        <h4>New Destinations</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6  col-md-6">
                                <div class="achievement-box-style-one">
                                    <div class="achievement-icon">
                                        <img src="{{ asset('assets/images/icons/counter-icon1.svg') }}" alt="">
                                    </div>
                                    <div class="achievement-box-content">
                                        <h2>05+</h2>
                                        <h4>Years Experience</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6  col-md-6">
                                <div class="achievement-box-style-one">
                                    <div class="achievement-icon">
                                        <img src="{{ asset('assets/images/icons/counter-icon4.svg') }}" alt="">
                                    </div>
                                    <div class="achievement-box-content">
                                        <h2>150+</h2>
                                        <h4>Best Mountains</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="gallary-area gallary-style-one pt-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-head-alpha text-center mx-auto">
                        <h2>Peacemakers Expeditions Gallery</h2>
                        {{-- <p>Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus.
                            Suspendissendt
                            blandit interdum. Sed pellentesque at nunc eget consectetur.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="gallary-item">
                        <img src="{{ asset('assets/images/gallary/peacemakers-gxl1.jpeg') }}" alt="Image Gallery">
                        <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here"
                            href="assets/images/gallary/peacemakers-gxl1.jpeg">
                            <i class="bi bi-eye"></i>
                        </a>
                    </div>
                    <div class="gallary-item">
                        <img src="{{ asset('assets/images/gallary/peacemakers-gmd1.jpeg') }}" alt="Image Gallery">
                        <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here"
                            href="assets/images/gallary/peacemakers-gmd1.jpeg">
                            <i class="bi bi-eye"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="gallary-item">
                        <img src="{{ asset('assets/images/gallary/peacemakers-gsm1.jpeg') }}" alt="Image Gallery">
                        <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here"
                            href="assets/images/gallary/peacemakers-gsm1.jpeg">
                            <i class="bi bi-eye"></i>
                        </a>
                    </div>
                    <div class="gallary-item">
                        <img src="{{ asset('assets/images/gallary/peacemakers-gsm2.jpeg') }}" alt="Image Gallery">
                        <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here"
                            href="assets/images/gallary/peacemakers-gsm2.jpeg">
                            <i class="bi bi-eye"></i>
                        </a>
                    </div>
                    <div class="gallary-item">
                        <img src="{{ asset('assets/images/gallary/peacemakers-gmd2.jpeg') }}" alt="Image Gallery">
                        <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here"
                            href="assets/images/gallary/peacemakers-gmd2.jpeg">
                            <i class="bi bi-eye"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="gallary-item">
                        <img src="{{ asset('assets/images/gallary/peacemakers-gxl2.jpeg') }}" alt="Image Gallery">
                        <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here"
                            href="assets/images/gallary/peacemakers-gxl2.jpeg">
                            <i class="bi bi-eye"></i>
                        </a>
                    </div>
                    <div class="gallary-item">
                        <img src="{{ asset('assets/images/gallary/peacemakers-gmd3.jpeg') }}" alt="Image Gallery">
                        <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here"
                            href="assets/images/gallary/peacemakers-gmd3.jpeg">
                            <i class="bi bi-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
