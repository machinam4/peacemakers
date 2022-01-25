@extends('layouts.base')
@section('contents')
    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Great Migration</h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Great Migration</li>
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
                                        <i class="bi bi-geo-alt"></i> 10 DAYS / 9 NIGHTS
                                    </h5>
                                </div>
                                <h2 class="pd-title">Great Migration</h2>
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
                                    <h5> <b>Arusha National Park, Ikoma wildlife management Area, NgoroNgoro Crater
                                            Serengeti National Park, Lam]ke Manyara National Park, Lake natron.</b></h5>
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
                                                        <h5>DAY 0 : ARRIVAL – Fly to KILIMANJARO AIRPORT</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse1" class="accordion-collapse collapse show"
                                                aria-labelledby="planHeadingOne" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        You will be picked up from the airport by a Mapping Africa
                                                        representative and transferred to your accommodations in Arusha,
                                                        where you will stay overnight, you will have a short briefing of the
                                                        program relax, and prepare for your adventures to come.
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
                                                        <h5>DAY 1 : ARUSHA NATIONAL PARK + WALKING SAFARI</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse2" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingThree" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>


                                                        Today your safari adventure begins! We will pick you up from your
                                                        hotel in or around Arusha. Your guide will take you to Arusha
                                                        National Park, a park with beautiful scenery and a large population
                                                        of animals. The park is divided into three parts: Mount Meru,
                                                        Ngurdoto Crater and Momella Lakes. After a game drive you will do a
                                                        guided walking safari. On foot you can enjoy giraffes, buffalos and
                                                        other animals from a good distance. At the end of the day we take
                                                        you to your lodge where you can relax at the pool.
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
                                                        <h5>DAY 2 : TARANGIRE NATIONAL PARK</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse3" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFour" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        At 7 am after breakfast, you will be picked up from the hotel by
                                                        your safari guide and driven to Tarangire National Park. Enjoy the
                                                        wildlife! Tarangire National Park is almost 3000 sq. km in size and
                                                        is probably best known for its huge numbers of elephants and baobab
                                                        trees. The name of the park comes from the Tarangire River which
                                                        crosses through the park. Tarangire is especially spectacular during
                                                        the dry season (June – November) as wildlife concentrations rival
                                                        that of the Serengeti. This is because enormous populations of
                                                        elephants and other animals are drawn to the Tarangire River as
                                                        their only source of water. With its varied habitats and permanent
                                                        water in the Tarangire River, the park is home to over 2000
                                                        elephants and 500 bird species.
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
                                                        <h5>DAY 3 : RIFT VALLEY-WALKING TOUR</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse4" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        It’s time to be active today. We will start early in the morning
                                                        with a hike on the Great Rift Valley wall. We will start in the
                                                        village of Mto Wa Mbu as we walk through the banana plantations to
                                                        the Rift Valley wall. Make sure you wear good hiking shoes, the walk
                                                        will be a bit steep and rocky. Once you are on top, you will enjoy
                                                        the amazing panoramic view of Lake Manyara and Mto WA Mbu. You’ll be
                                                        surprised by all the green colors! After a few minutes’ rest, we
                                                        will walk down to the place where the bikes are waiting for us. The
                                                        bike tour will take you through the village and you’ll have lunch
                                                        with a local family. A true Tanzanian experience. In the afternoon,
                                                        we will go back.
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
                                                        <h5>DAY 4 : NGORONGORO CRATER</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse5" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        Today we will wake up early in the morning and after breakfast, we
                                                        will drive into the amazing Ngorongoro Crater. The Ngorongoro Crater
                                                        is the largest intact crater in the world. The crater life is
                                                        estimated at 30,000 large mammals. Due to its natural borders, there
                                                        is an abundance of wildlife throughout the conservation area which
                                                        is home to the Big Five including the African black rhino as well as
                                                        hyena, zebra and elephants to name a few. Your overnight stay will
                                                        be
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item plans-accordion-single">
                                            <div class="accordion-header" id="planHeadingFive">
                                                <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#planCollapse6" aria-expanded="true" role="navigation">
                                                    <div class="paln-index-circle">
                                                        <h4>06</h4>
                                                    </div>
                                                    <div class="plan-title">
                                                        <h5>DAY 5 : SERENGETI NATIONAL PARK</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse6" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        Today, we will head towards the Serengeti. After a few hours’ drive,
                                                        we will arrive at the Serengeti gate. After lunch, we will do a game
                                                        drive all afternoon in this beautiful park. The Serengeti is known
                                                        for its endless plains of savannah and forest landscapes. The park
                                                        is famous for the migration involving about 1.5 million herbivores
                                                        and followers. At the end of the day, we will arrive at Africa
                                                        Safari Ikoma. Located between Serengeti Seronera, Grumeti and
                                                        Ikorongo Game Reserves, the location is perfect for exploring the
                                                        Serengeti. It’s the perfect retreat for a relaxing moment watching
                                                        birdlife or just relaxing while listening to the sounds of the
                                                        African bush.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item plans-accordion-single">
                                            <div class="accordion-header" id="planHeadingFive">
                                                <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#planCollapse7" aria-expanded="true" role="navigation">
                                                    <div class="paln-index-circle">
                                                        <h4>07</h4>
                                                    </div>
                                                    <div class="plan-title">
                                                        <h5>DAY 6 : IKOMA WILDLIFE MANAGEMENT AREA</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse6" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        Today we will start the day with a game drive in the Ikoma Wildlife
                                                        Management Area. This area supports a variety of wildlife across 242
                                                        square kilometers of pristine wilderness including herds of
                                                        elephants, waterbucks, black and white Colobus monkeys, shy leopards
                                                        and both the greater and the lesser kudus. In the afternoon, we will
                                                        explore the area on foot with a ranger (walking safari) and we will
                                                        end with a sundowner. A unique experience!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item plans-accordion-single">
                                            <div class="accordion-header" id="planHeadingFive">
                                                <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#planCollapse8" aria-expanded="true" role="navigation">
                                                    <div class="paln-index-circle">
                                                        <h4>08</h4>
                                                    </div>
                                                    <div class="plan-title">
                                                        <h5>DAY 7 : SERENGETI NATIONAL PARK</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse6" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        Today we will continue our game drives in Serengeti and we will be
                                                        heading north. In the migration season, we can pass by the Mara
                                                        River. Be amazed by the thousands of animals crossing the river.
                                                        It’s a once in a lifetime experience! At the end of the day, we will
                                                        overnight at Africa Safari Maasai Boma Lodge. As the accommodation’s
                                                        name suggests, it is inspired by a traditional Maasai Boma. Look
                                                        around you and you’ll understand why; you’re in their midst.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item plans-accordion-single">
                                            <div class="accordion-header" id="planHeadingFive">
                                                <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#planCollapse9" aria-expanded="true" role="navigation">
                                                    <div class="paln-index-circle">
                                                        <h4>09</h4>
                                                    </div>
                                                    <div class="plan-title">
                                                        <h5>DAY 8 : NORTH SERENGETI -> LAKE NATRON</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse6" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        After breakfast, we will head to Lake Natron. The drives from the
                                                        northern Serengeti are remote, with a desolate, otherworldly beauty
                                                        and an incomparable feeling of space and antiquity. The roads pass
                                                        through untraveled Maasai land, with small bomas and big mountains
                                                        often in view in a wild landscape. From June to November at the
                                                        lake, around two million flamingos gather. On the way to the lodge,
                                                        we can make a stop at the hot springs. We will overnight at Africa
                                                        Safari Lake Natron. The lodge has a swimming pool that is embedded
                                                        in its surrounding landscapes and comes complete with stunning views
                                                        of neighboring Mount Ol Donyo Lengai, a still-active volcano. Enjoy
                                                        the view! From the lodge, you can take a 10-minute walk to the lake
                                                        with your guide. Main Destination:
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item plans-accordion-single">
                                            <div class="accordion-header" id="planHeadingFive">
                                                <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#planCollapse10" aria-expanded="true" role="navigation">
                                                    <div class="paln-index-circle">
                                                        <h4>10</h4>
                                                    </div>
                                                    <div class="plan-title">
                                                        <h5>DAY 9 : LAKE NATRON -> LAKE MANYARA NATIONAL PARK</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse6" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        In the morning, your guide will take you for an adventurous walk to
                                                        the waterfalls (make sure to bring walking shoes). Several Maasai
                                                        villages are found nearby and your guide for the hike will be a
                                                        Maasai. After lunch, you’ll head to Mto WA Mbu where you will
                                                        overnight at Africa Safari Lake Manyara. Main Destination: Lake
                                                        Natron.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item plans-accordion-single">
                                            <div class="accordion-header" id="planHeadingFive">
                                                <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#planCollapse11" aria-expanded="true" role="navigation">
                                                    <div class="paln-index-circle">
                                                        <h4>11</h4>
                                                    </div>
                                                    <div class="plan-title">
                                                        <h5>DAY 10 : LAKE MANYARA NATIONAL PARK</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse6" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        Today we will go to Lake Manyara. This park is known for its
                                                        breathtaking panoramic views, waterfalls, babbling brooks with clear
                                                        water and hot springs. We will do a game drive in Lake Manyara all
                                                        day and in the afternoon, we will drive back to Arusha where we
                                                        arrive before dinner. Additional accommodation can be arranged or
                                                        you’ll be dropped off at the airport.
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
                                        • This tour is not available to solo travelers.<br>
                                        • Rates are per person and exclude the international flight from/to your home
                                        country.<br>
                                        • This tour accepts children who are 12 years and older.<br>
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
                                        • Park fees(For non-residents)<br>
                                        • All activities(Unless labeled as optional)<br>
                                        • All accommodation(Unless listed as upgrade)<br>
                                        • A professional driver/guide<br>
                                        • All transportation(Unless labeled as optional)<br>
                                        • All Taxes/VAT<br>
                                        • Roundtrip airport transfer<br>
                                        • Meals(As specified in the day-by-day section)<br>
                                        • Drinks(As specified in the day-by-day section)<br>
                                    </p>
                                    <h3 class="mt-3"> <b>Excluded:</b></h3>
                                    <p>
                                        • International flights (From/to home)<br>
                                        • Additional accommodation before and at the end of the tour<br>
                                        • Tips (Tipping guideline US$10.00 pp per day)<br>
                                        • Personal items (Souvenirs, travel insurance, visa fees, etc.)<br>
                                        • Government imposed increase of taxes and/or park fees<br>
                                    </p>
                                </div>
                                <div class="tab-pane fade package-location-tab mt-3" id="pill-body4" role="tabpanel"
                                    aria-labelledby="pills-package4">
                                    <p>
                                        • This tour starts and ends in Arusha<br>
                                        • This operator can help select your international flights, but you’ll have to book
                                        them yourself help<br>
                                        • Fly to/from Kilimanjaro Airport (JRO – Check price) near Arusha. Or fly to/from
                                        Arusha<br>
                                        • Airport (ARK – Check price) via Dar es Salaam or Nairobi (Kenya)<br>
                                        • A transfer from and back to the airport is included<br>
                                        • Additional accommodation before and at the end of the tour can be arranged for an
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
