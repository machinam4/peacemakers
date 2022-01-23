@extends('layouts.base')
@section('contents')
    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Majestic Tanzania</h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Majestic Tanzania</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="package-details-wrapper pt-76">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tour-package-details">
                        <div class="pd-header">
                            <div class="pd-top row row-cols-lg-4 row-cols-md-2 row-cols-2 gy-4">
                                <div class="col">
                                    <div class="pd-single-info">
                                        <div class="info-icon">
                                            <img src="assets/images/icons/pd1.svg" alt="" />
                                        </div>
                                        <div class="info">
                                            <h6>Duration</h6>
                                            <span>4 Days</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="pd-single-info">
                                        <div class="info-icon">
                                            <img src="assets/images/icons/pd2.svg" alt="" />
                                        </div>
                                        <div class="info">
                                            <h6>Tour Type</h6>
                                            <span>Daily Tour</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="pd-single-info">
                                        <div class="info-icon">
                                            <img src="assets/images/icons/pd3.svg" alt="" />
                                        </div>
                                        <div class="info">
                                            <h6>Group Size</h6>
                                            <span>30 People</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="pd-single-info">
                                        <div class="info-icon">
                                            <img src="assets/images/icons/pd4.svg" alt="" />
                                        </div>
                                        <div class="info">
                                            <h6>Tour Guide</h6>
                                            <span>05 People</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pd-thumb">
                                <img src="assets/images/package/pd-thumb.png" alt="" />
                            </div>
                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location">
                                        <i class="bi bi-geo-alt"></i> Mount Dtna, Spain
                                    </h5>
                                    <ul class="d-flex align-items-center rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                                <h2 class="pd-title">San Francisco Golden Gate Bridge.</h2>
                            </div>
                        </div>
                        <div class="package-details-tabs">
                            <ul class="nav nav-pills tab-switchers gap-xxl-4 gap-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-package1" data-bs-toggle="pill"
                                        data-bs-target="#pill-body1" type="button" role="tab" aria-controls="pill-body1"
                                        aria-selected="true">
                                        <i class="bi bi-info-lg"></i> Information
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-package2" data-bs-toggle="pill"
                                        data-bs-target="#pill-body2" type="button" role="tab" aria-controls="pill-body2"
                                        aria-selected="false">
                                        <i class="bi bi-file-earmark-spreadsheet"></i> Travel Plan
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-package3" data-bs-toggle="pill"
                                        data-bs-target="#pill-body3" type="button" role="tab" aria-controls="pill-body3"
                                        aria-selected="false">
                                        <i class="bi bi-images"></i> Tour Gallary
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-package4" data-bs-toggle="pill"
                                        data-bs-target="#pill-body4" type="button" role="tab" aria-controls="pill-body4"
                                        aria-selected="false">
                                        <i class="bi bi-geo-alt"></i> Location
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active package-info-tab mt-3" id="pill-body1" role="tabpanel"
                                    aria-labelledby="pills-package1">
                                    <h3 class="d-subtitle">Majestic Tanzania</h3>
                                    <p>
                                        Pellentesque accumsan magna in augue sagittis, non
                                        fringilla eros molestie. Sed feugiat mi nec ex vehicula,
                                        nec vestibulum orci semper. Class aptent taciti sociosqu
                                        ad litora torquent per conubia nostra, per inceptos
                                        himenaeos. Donec tristique commodo fringilla. Duis aliquet
                                        varius mauris eget rutrum. Nullam sit amet justo
                                        consequat, bibendum orci in, convallis enim. Proin
                                        convallis neque viverra finibus cursus. Mauris lacinia
                                        lacinia erat in finibus. In non enim libero.Pellentesque
                                        accumsan magna in augue sagittis, non fringilla eros
                                        molestie. Sed feugiat mi nec ex vehicula, nec vestibulum
                                        orci semper. Class aptent taciti sociosqu ad litora
                                        torquent per conubia nostra, per inceptos himenaeos. Donec
                                        tristique commodo fringilla. Duis aliquet varius mauris
                                        eget rutrum. Nullam sit amet justo consequat, bibendum
                                        orci in, convallis enim. Proin convallis neque viverra
                                        finibus cursus. Mauris lacinia lacinia erat in finibus. In
                                        non enim libero.
                                    </p>
                                    <div class="p-info-featured-img row position-relative g-4 row-cols-1 row-cols-sm-2">
                                        <div class="col">
                                            <div class="featured-img">
                                                <img src="assets/images/package/feat-img1.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="featured-img">
                                                <img src="assets/images/package/feat-img2.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="featured-video position-absolute">
                                            <img src="assets/images/package/feat-img3.png" alt="" />
                                            <div class="video-overlay">
                                                <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                                    class="play-icon video-popup" data-fancybox>
                                                    <i class="bi bi-play-fill"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table package-info-table mb-0">
                                        <tbody>
                                            <tr>
                                                <th>Destination</th>
                                                <td>New York City</td>
                                            </tr>
                                            <tr>
                                                <th>Depature</th>
                                                <td>Yes Required</td>
                                            </tr>
                                            <tr>
                                                <th>Departure Time</th>
                                                <td>01 April, 2021 10.00AM</td>
                                            </tr>
                                            <tr>
                                                <th>Return Time</th>
                                                <td>08 April, 2021 10.00AM</td>
                                            </tr>
                                            <tr>
                                                <th>Included</th>
                                                <td>
                                                    <ul class="included-list">
                                                        <li>
                                                            <i class="bi bi-check2"></i>Specilaized
                                                            Bilingual Guide
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-check2"></i>Private Transport
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-check2"></i> Entrance Fees
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-check2"></i> Box
                                                            Lunch,Water,Dinner and Snacks
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Excluded</th>
                                                <td>
                                                    <ul class="excluded-list">
                                                        <li>
                                                            <i class="bi bi-x-lg"></i> Additional Services
                                                        </li>
                                                        <li><i class="bi bi-x-lg"></i> Insurance</li>
                                                        <li><i class="bi bi-x-lg"></i> Drink</li>
                                                        <li><i class="bi bi-x-lg"></i> Tickets</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="tour-transport-col">
                                                    <div
                                                        class="tour-transport d-flex align-items-center justify-content-center">
                                                        <img src="assets/images/icons/bus.svg" alt="" />
                                                        <span>Travel With Bus</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="rating-overview">
                                        <h3 class="d-subtitle">Overview</h3>
                                        <div class="rating-overview-row row g-0">
                                            <div class="col-lg-4 col-md-5 col-sm-5">
                                                <div
                                                    class="total-rating d-flex justify-content-center align-items-center flex-column h-100">
                                                    <h3>10.00</h3>
                                                    <h5>Excellent</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7">
                                                <div class="rating-info">
                                                    <div class="rating-box">
                                                        <h6>Accommodation <span>5.0</span></h6>
                                                        <div class="rating-bar"></div>
                                                    </div>
                                                    <div class="rating-box">
                                                        <h6>Transport <span>5.0</span></h6>
                                                        <div class="rating-bar"></div>
                                                    </div>
                                                    <div class="rating-box">
                                                        <h6>Comfort <span>5.0</span></h6>
                                                        <div class="rating-bar"></div>
                                                    </div>
                                                    <div class="rating-box">
                                                        <h6>Hospitality <span>5.0</span></h6>
                                                        <div class="rating-bar"></div>
                                                    </div>
                                                    <div class="rating-box">
                                                        <h6>Food <span>5.0</span></h6>
                                                        <div class="rating-bar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="#" id="comment_form" method="post">
                                        <div class="comment-form mt-110">
                                            <h4>Leave Your Comment</h4>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="custom-input-group">
                                                        <input type="text" placeholder="Your Full Name" id="name1" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="custom-input-group">
                                                        <input type="text" placeholder="Your Email" id="email1" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-input-group">
                                                <input type="text" placeholder="Tour Type" id="type" />
                                            </div>
                                            <div class="custom-input-group">
                                                <textarea cols="20" rows="7" placeholder="Write Message"></textarea>
                                            </div>
                                            <ul class="form-rating d-flex">
                                                <li><i class="bi bi-star"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                            </ul>
                                            <div class="custom-input-group">
                                                <div class="submite-btn">
                                                    <button type="submit">Send Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade package-plan-tab tab-body mt-3" id="pill-body2" role="tabpanel"
                                    aria-labelledby="pills-package2">
                                    <h3 class="d-subtitle">Details</h3>
                                    <p>
                                        Pellentesque accumsan magna in augue sagittis, non
                                        fringilla eros molestie. Sed feugiat mi nec ex vehicula,
                                        nec vestibulum orci semper. Class aptent taciti sociosqu
                                        ad litora torquent per conubia nostra, per inceptos
                                        himenaeos. Donec tristique commodo fringilla. Duis aliquet
                                        varius mauris eget rutrum. Nullam sit amet justo
                                        consequat, bibendum orci in, convallis enim. Proin
                                        convallis neque viverra finibus cursus. Mauris lacinia
                                        lacinia erat in finibus.
                                    </p>
                                    <div class="accordion plans-accordion" id="planAccordion">
                                        <div class="accordion-item plans-accordion-single">
                                            <div class="accordion-header" id="planHeadingOne">
                                                <div class="accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#planCollapse1" aria-expanded="true" role="navigation">
                                                    <div class="paln-index-circle">
                                                        <h4>01</h4>
                                                    </div>
                                                    <div class="plan-title">
                                                        <h5>DAY 1 : Departure And Small Tour</h5>
                                                        <h6>10.00 AM to 10.00 PM</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse1" class="accordion-collapse collapse show"
                                                aria-labelledby="planHeadingOne" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        Pellentesque accumsan magna in augue sagittis, non
                                                        fringilla eros molestie. Sed feugiat mi nec ex
                                                        vehicula, nec vestibulum orci semper. Class aptent
                                                        taciti sociosqu ad litora torquent per conubia
                                                        nostra, per inceptos himenaeos. Donec tristique
                                                        commodo fringilla.
                                                    </p>
                                                    <ul>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Specilaized
                                                            Bilingual Guide
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Private Transport
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Entrance Fees
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Box
                                                            Lunch,Water,Dinner and Snacks
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item plans-accordion-single">
                                            <div class="accordion-header" id="planHeadingTwo">
                                                <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#planCollapse2" aria-expanded="true" role="navigation">
                                                    <div class="paln-index-circle">
                                                        <h4>02</h4>
                                                    </div>
                                                    <div class="plan-title">
                                                        <h5>DAY 1 : Departure And Small Tour</h5>
                                                        <h6>10.00 AM to 10.00 PM</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse2" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        Pellentesque accumsan magna in augue sagittis, non
                                                        fringilla eros molestie. Sed feugiat mi nec ex
                                                        vehicula, nec vestibulum orci semper. Class aptent
                                                        taciti sociosqu ad litora torquent per conubia
                                                        nostra, per inceptos himenaeos. Donec tristique
                                                        commodo fringilla.
                                                    </p>
                                                    <ul>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Specilaized
                                                            Bilingual Guide
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Private Transport
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Entrance Fees
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Box
                                                            Lunch,Water,Dinner and Snacks
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item plans-accordion-single">
                                            <div class="accordion-header" id="planHeadingThree">
                                                <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#planCollapse3" aria-expanded="true"
                                                    aria-controls="planCollapse1" role="navigation">
                                                    <div class="paln-index-circle">
                                                        <h4>03</h4>
                                                    </div>
                                                    <div class="plan-title">
                                                        <h5>DAY 1 : Departure And Small Tour</h5>
                                                        <h6>10.00 AM to 10.00 PM</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse3" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingThree" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        Pellentesque accumsan magna in augue sagittis, non
                                                        fringilla eros molestie. Sed feugiat mi nec ex
                                                        vehicula, nec vestibulum orci semper. Class aptent
                                                        taciti sociosqu ad litora torquent per conubia
                                                        nostra, per inceptos himenaeos. Donec tristique
                                                        commodo fringilla.
                                                    </p>
                                                    <ul>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Specilaized
                                                            Bilingual Guide
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Private Transport
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Entrance Fees
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Box
                                                            Lunch,Water,Dinner and Snacks
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item plans-accordion-single">
                                            <div class="accordion-header" id="planHeadingFour">
                                                <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#planCollapse4" aria-expanded="true" role="navigation">
                                                    <div class="paln-index-circle">
                                                        <h4>04</h4>
                                                    </div>
                                                    <div class="plan-title">
                                                        <h5>DAY 1 : Departure And Small Tour</h5>
                                                        <h6>10.00 AM to 10.00 PM</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse4" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFour" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        Pellentesque accumsan magna in augue sagittis, non
                                                        fringilla eros molestie. Sed feugiat mi nec ex
                                                        vehicula, nec vestibulum orci semper. Class aptent
                                                        taciti sociosqu ad litora torquent per conubia
                                                        nostra, per inceptos himenaeos. Donec tristique
                                                        commodo fringilla.
                                                    </p>
                                                    <ul>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Specilaized
                                                            Bilingual Guide
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Private Transport
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Entrance Fees
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Box
                                                            Lunch,Water,Dinner and Snacks
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item plans-accordion-single">
                                            <div class="accordion-header" id="planHeadingFive">
                                                <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#planCollapse5" aria-expanded="true" role="navigation">
                                                    <div class="paln-index-circle">
                                                        <h4>04</h4>
                                                    </div>
                                                    <div class="plan-title">
                                                        <h5>DAY 1 : Departure And Small Tour</h5>
                                                        <h6>10.00 AM to 10.00 PM</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse5" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        Pellentesque accumsan magna in augue sagittis, non
                                                        fringilla eros molestie. Sed feugiat mi nec ex
                                                        vehicula, nec vestibulum orci semper. Class aptent
                                                        taciti sociosqu ad litora torquent per conubia
                                                        nostra, per inceptos himenaeos. Donec tristique
                                                        commodo fringilla.
                                                    </p>
                                                    <ul>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Specilaized
                                                            Bilingual Guide
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Private Transport
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Entrance Fees
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-check-lg"></i> Box
                                                            Lunch,Water,Dinner and Snacks
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel"
                                    aria-labelledby="pills-package3">
                                    <div class="row g-4">
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <a href="assets/images/gallary/pgl-1.png" data-fancybox="gallery"
                                                    data-caption="Caption Here"><img src="assets/images/gallary/pgl-1.png"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <a href="assets/images/gallary/pgl-2.png" data-fancybox="gallery"
                                                    data-caption="Caption Here"><img src="assets/images/gallary/pgl-2.png"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="package-gallary-item">
                                                <a href="assets/images/gallary/pgx-1.png" data-fancybox="gallery"
                                                    data-caption="Caption Here"><img src="assets/images/gallary/pgx-1.png"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <a href="assets/images/gallary/pgl-3.png" data-fancybox="gallery"
                                                    data-caption="Caption Here"><img src="assets/images/gallary/pgl-3.png"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <a href="assets/images/gallary/pgl-4.png" data-fancybox="gallery"
                                                    data-caption="Caption Here"><img src="assets/images/gallary/pgl-4.png"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="package-gallary-item">
                                                <a href="assets/images/gallary/pgx-2.png" data-fancybox="gallery"
                                                    data-caption="Caption Here"><img src="assets/images/gallary/pgx-2.png"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <a href="assets/images/gallary/pgl-5.png" data-fancybox="gallery"
                                                    data-caption="Caption Here"><img src="assets/images/gallary/pgl-5.png"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <a href="assets/images/gallary/pgl-6.png" data-fancybox="gallery"
                                                    data-caption="Caption Here"><img src="assets/images/gallary/pgl-6.png"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="package-gallary-item">
                                                <a href="assets/images/gallary/pgx-3.png" data-fancybox="gallery"
                                                    data-caption="Caption Here"><img src="assets/images/gallary/pgx-3.png"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade package-location-tab mt-3" id="pill-body4" role="tabpanel"
                                    aria-labelledby="pills-package4">
                                    <div class="mapouter">
                                        <div class="gmap_canvas">
                                            <iframe id="gmap_canvas"
                                                src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=9&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe><a
                                                href="https://123movies-to.org/"></a><br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="package-sidebar">
                        <aside class="package-widget-style-2 widget-form mt-30">
                            <div class="widget-title text-center d-flex justify-content-between">
                                <h4>Request a Qoute</h4>
                            </div>
                            <div class="widget-body">
                                <form action="#" method="post" id="booking-form">
                                    <div class="booking-form-wrapper">
                                        <div class="custom-input-group">
                                            <input type="text" placeholder="Your Full Name" id="name" />
                                        </div>
                                        <div class="custom-input-group">
                                            <input type="email" placeholder="Your Email" id="email" />
                                        </div>
                                        <div class="custom-input-group">
                                            <input type="tel" placeholder="Phone" id="phone" />
                                        </div>
                                        <div class="custom-input-group">
                                            <i class="bi bi-chevron-down"></i>
                                            <select id="ticket_type">
                                                <option selected>Tickets Type</option>
                                                <option value="1">Tickets Type 1</option>
                                                <option value="2">Tickets Type 2</option>
                                                <option value="3">Tickets Type 3</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="custom-input-group">
                                                    <i class="bi bi-chevron-down"></i>
                                                    <select id="truist-adult">
                                                        <option selected>Adult</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="custom-input-group">
                                                    <i class="bi bi-chevron-down"></i>
                                                    <select id="tourist-child">
                                                        <option selected>Child</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-input-group">
                                            <i class="bi bi-calendar3"></i>
                                            <input placeholder="Select your date" type="text" name="checkIn"
                                                id="datepicker2" value="" class="calendar" />
                                        </div>
                                        <div class="custom-input-group">
                                            <textarea cols="20" rows="7" placeholder="Your message"></textarea>
                                        </div>
                                        <div class="custom-input-group">
                                            <div class="submite-btn">
                                                <button type="submit">Request</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </aside>
                        <aside class="widget-banner mt-30">
                            <a href="#">
                                <img src="assets/images/banner/sidebar-banner.png" alt="" class="img-fluid" />
                            </a>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
