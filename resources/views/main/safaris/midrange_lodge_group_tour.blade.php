@extends('layouts.base')
@section('contents')
    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Mid-range Lodge Group Tour</h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Mid-range Lodge Group Tour</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="package-details-wrapper pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tour-package-details">
                        <div class="pd-header">
                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location">
                                        <i class="bi bi-geo-alt"></i> 4 DAYS / 3 NIGHTS
                                    </h5>
                                </div>
                                <h2 class="pd-title">Mid-range Lodge Group Tour</h2>
                            </div>
                            <div class="pd-thumb">
                                <img src="assets/images/package/pd-thumb.png" alt="" />
                            </div>
                        </div>
                        <div class="package-details-tabs">
                            <ul class="nav nav-pills tab-switchers gap-xxl-4 gap-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-package1" data-bs-toggle="pill"
                                        data-bs-target="#pill-body1" type="button" role="tab" aria-controls="pill-body1"
                                        aria-selected="true">
                                        <i class="bi bi-info-lg"></i> Overview
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
                                        <i class="bi bi-images"></i> Rates
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-package4" data-bs-toggle="pill"
                                        data-bs-target="#pill-body4" type="button" role="tab" aria-controls="pill-body4"
                                        aria-selected="false">
                                        <i class="bi bi-geo-alt"></i> Getting There
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active package-info-tab mt-3" id="pill-body1" role="tabpanel"
                                    aria-labelledby="pills-package1">
                                    <h5> <b>Serengeti, Ngorongoro, Tarangire</b></h5>
                                    <p>
                                        This is our most iconic itinerary as it represents what our company is all about.
                                        During this tour you will have the chance of, not only visiting all the parks of the
                                        Northern Safari Circuit of Tanzania (including 3 nights in the Serengeti which is,
                                        for us, the ideal timeframe), but also have fascinating cultural experiences in lake
                                        Eyasi with the Hadzabe tribe.
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
                                    </div>
                                </div>

                                <div class="tab-pane fade package-plan-tab tab-body mt-3" id="pill-body2" role="tabpanel"
                                    aria-labelledby="pills-package2">
                                    <div class="accordion plans-accordion" id="planAccordion">
                                        <div class="accordion-item plans-accordion-single">
                                            <div class="accordion-header" id="planHeadingOne">
                                                <div class="accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#planCollapse1" aria-expanded="true" role="navigation">
                                                    <div class="paln-index-circle">
                                                        <h4>01</h4>
                                                    </div>
                                                    <div class="plan-title">
                                                        <h5>DAY 0 : ARRIVAL</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse1" class="accordion-collapse collapse show"
                                                aria-labelledby="planHeadingOne" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        Fly to KILIMANJARO AIRPORT Pick-up and then drive to Arusha, then
                                                        you will have a short briefing of the program
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item plans-accordion-single">
                                            <div class="accordion-header" id="planHeadingThree">
                                                <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#planCollapse2" aria-expanded="true"
                                                    aria-controls="planCollapse1" role="navigation">
                                                    <div class="paln-index-circle">
                                                        <h4>02</h4>
                                                    </div>
                                                    <div class="plan-title">
                                                        <h5>DAY 1 : ARUSHA ??? TARANGIRE NATIONAL PARK</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse2" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingThree" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        After breakfast, your safari guide will drive you to Tarangire
                                                        National Park. Tarangire is best known for its elephant families,
                                                        savannah, iconic baobab trees, seasonal swamps, and the life-giving
                                                        Tarangire River. Animals gather at the river to drink and cool off
                                                        from the hot African sun. You will see giraffes, bushbuck, and
                                                        hartebeest. The Park is also home to buffalo, zebra, and wildebeest.
                                                        These animals are closely followed by a range of predators such as
                                                        lions and leopards. From the open roof of the vehicle, you will be
                                                        able to take in the landscape and watch the variety of wildlife. You
                                                        will enjoy a picnic lunch in the park, which includes coffee and
                                                        soft drinks. After a full day in the park, you will be driven to
                                                        Eileen???s Trees Inn where you will check in, enjoy dinner and enjoy
                                                        your overnight stay.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item plans-accordion-single">
                                            <div class="accordion-header" id="planHeadingFour">
                                                <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#planCollapse3" aria-expanded="true" role="navigation">
                                                    <div class="paln-index-circle">
                                                        <h4>03</h4>
                                                    </div>
                                                    <div class="plan-title">
                                                        <h5>DAY 2 : SERENGETI NATIONAL PARK</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse3" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFour" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        After breakfast you will drive up the crater highlands, stopping at
                                                        the rim for a spectacular view of the Ngorongoro Crater and
                                                        continuing as far as the eye can see, the vast view of the
                                                        Serengeti. Serengeti means ???endless plain??? and is inhabited by more
                                                        than 2 million wildebeest and other wildlife. From January to April
                                                        the wildebeest, plains zebra, and Thomson???s gazelle give birth to
                                                        their calves. Large predators including lions, cheetah, and hyenas
                                                        are drawn to the area by this abundance of prey which migrates
                                                        throughout the park. Many smaller animals like rock hyrax, bat-eared
                                                        fox, mongoose, honey badger, jackal, monkey, baboon, and African
                                                        hare also inhabit the area. There are also over 500 species of
                                                        birds. After this exciting game drive, you will return to camp for
                                                        dinner and your overnight stay.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item plans-accordion-single">
                                            <div class="accordion-header" id="planHeadingFive">
                                                <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#planCollapse4" aria-expanded="true" role="navigation">
                                                    <div class="paln-index-circle">
                                                        <h4>04</h4>
                                                    </div>
                                                    <div class="plan-title">
                                                        <h5>DAY 3 : SERENGETI NATIONAL PARK ??? NGORONGORO CRATER</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse4" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        You will rise very early and enjoy a sunrise game drive to spot
                                                        animals when they are more active and also to witness a fantastic
                                                        African sunrise; one of the most spectacular sites one can
                                                        experience. You will then return to camp for breakfast, check-out,
                                                        and travel to the Ngorongoro Crater. This vast crater is inhabited
                                                        by the greatest concentration of wildlife on the planet; almost
                                                        every species of wildlife indigenous to East Africa including the
                                                        rare black rhino. The crater contains a river, several swamps, and a
                                                        soda lake that, from the top, looks like steam, a forest, and open
                                                        plains. The large bull elephant that resides here has extremely
                                                        large tusks, due to the rich mineral content of the volcanic soil
                                                        and its grasses. You will enjoy lunch during this extraordinary game
                                                        drive. After a full day inside the crater, you will ascend to the
                                                        crater rim and drive to the Rhino Lodge. After check-in, you will
                                                        have dinner and enjoy your overnight stay.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item plans-accordion-single">
                                            <div class="accordion-header" id="planHeadingFive">
                                                <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#planCollapse5" aria-expanded="true" role="navigation">
                                                    <div class="paln-index-circle">
                                                        <h4>05</h4>
                                                    </div>
                                                    <div class="plan-title">
                                                        <h5>DAY 4 : NGORONGORO CRATER ??? ARUSHA</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse5" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        After an early breakfast, you will check out of the lodge and drive
                                                        to the Ngorongoro Crater. You will descend down a steep track into
                                                        the caldera to enjoy your last game drive. You will experience a
                                                        breathtaking range of animals and birds. The caldera (a collapsed
                                                        volcano) is home to over 25,000 mammals ranging from the ???Big Five???
                                                        (lion, elephant, buffalo, rhino, leopard) to over 500 species of
                                                        birds. You will enjoy a picnic lunch inside the crater and then make
                                                        your way back up the crater rim in the afternoon. You will then
                                                        drive back to Arusha, arriving in the late afternoon. This is where
                                                        your safari will end. You???ll be dropped off at the airport. Main
                                                        Destination: Ngorongoro Crater.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel"
                                    aria-labelledby="pills-package3">
                                    <h3> <b>Important to Know</b></h3>
                                    <p>
                                        ??? This tour is not available to solo travelers.<br>
                                        ??? Rates are per person and exclude the international flight from/to your home
                                        country.<br>
                                        ??? This tour accepts children who are 12 years and older.<br>
                                    </p>
                                    <h4 class="mt-3">Rates Per Person:</h4>
                                    <table class="table mt-3 package-info-table mb-0">
                                        <tbody>
                                            <tr>
                                                <th>ITINERARY</th>
                                                <th colspan="5" class="justify-content-center">
                                                    <div
                                                        class="tour-transport d-flex align-items-center justify-content-center">
                                                        {{ Date('Y') }} PRIVATE SAFARI PRICES PER PERSON (USD)
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Days</th>
                                                <th>2 Pax</th>
                                                <th>3 Pax</th>
                                                <th>4 Pax</th>
                                                <th>5 Pax</th>
                                                <th>6 Pax</th>
                                            </tr>
                                            <tr>
                                                <th>10</th>
                                                <td>3350</td>
                                                <td>2840</td>
                                                <td>2650</td>
                                                <td>2450</td>
                                                <td>2420</td>
                                            </tr>
                                            <tr>
                                                <th>9</th>
                                                <td>3080</td>
                                                <td>2570</td>
                                                <td>2480</td>
                                                <td>2300</td>
                                                <td>2250</td>
                                            </tr>
                                            <tr>
                                                <th>8</th>
                                                <td>2650</td>
                                                <td>2350</td>
                                                <td>2270</td>
                                                <td>2150</td>
                                                <td>1950</td>
                                            </tr>
                                            <tr>
                                                <th>7</th>
                                                <td>2350</td>
                                                <td>2100</td>
                                                <td>1920</td>
                                                <td>1720</td>
                                                <td>1700</td>
                                            </tr>
                                            <tr>
                                                <th>6</th>
                                                <td>2000</td>
                                                <td>1700</td>
                                                <td>1550</td>
                                                <td>1400</td>
                                                <td>1380</td>
                                            </tr>
                                            <tr>
                                                <th>5</th>
                                                <td>1750</td>
                                                <td>1380</td>
                                                <td>1320</td>
                                                <td>1240</td>
                                                <td>1150</td>
                                            </tr>
                                            <tr>
                                                <th>4</th>
                                                <td>1450</td>
                                                <td>1320</td>
                                                <td>1150</td>
                                                <td>1050</td>
                                                <td>1020</td>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td>800</td>
                                                <td>660</td>
                                                <td>600</td>
                                                <td>580</td>
                                                <td>580</td>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <td>460</td>
                                                <td>400</td>
                                                <td>360</td>
                                                <td>310</td>
                                                <td>290</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <h3 class="mt-3"> <b>Included:</b></h3>
                                    <p>
                                        ??? Park fees(For non-residents)<br>
                                        ??? All activities(Unless labeled as optional)<br>
                                        ??? All accommodation(Unless listed as upgrade)<br>
                                        ??? A professional driver/guide<br>
                                        ??? All transportation(Unless labeled as optional)<br>
                                        ??? All Taxes/VAT<br>
                                        ??? Roundtrip airport transfer<br>
                                        ??? Meals(As specified in the day-by-day section)<br>
                                        ??? Drinks(As specified in the day-by-day section)<br>
                                    </p>
                                    <h3 class="mt-3"> <b>Excluded:</b></h3>
                                    <p>
                                        ??? International flights (From/to home)<br>
                                        ??? Additional accommodation before and at the end of the tour<br>
                                        ??? Tips (Tipping guideline US$10.00 pp per day)<br>
                                        ??? Personal items (Souvenirs, travel insurance, visa fees, etc.)<br>
                                        ??? Government imposed increase of taxes and/or park fees<br>
                                    </p>
                                </div>
                                <div class="tab-pane fade package-location-tab mt-3" id="pill-body4" role="tabpanel"
                                    aria-labelledby="pills-package4">
                                    <p>
                                        ??? This tour starts and ends in Arusha<br>
                                        ??? This operator can help select your international flights, but you???ll have to book
                                        them yourself help<br>
                                        ??? Fly to/from Kilimanjaro Airport (JRO ??? Check price) near Arusha. Or fly to/from
                                        Arusha<br>
                                        ??? Airport (ARK ??? Check price) via Dar es Salaam or Nairobi (Kenya)<br>
                                        ??? A transfer from and back to the airport is included<br>
                                        ??? Additional accommodation before and at the end of the tour can be arranged for an
                                        extra cost<br>
                                    </p>
                                </div>
                            </div>
                            <form action="#" id="comment_form" method="post">
                                <div class="comment-form mt-5">
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
                                    <div class="custom-input-group">
                                        <div class="submite-btn">
                                            <button type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="package-sidebar">
                        <aside class="package-widget-style-2 widget-form mt-5">
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
