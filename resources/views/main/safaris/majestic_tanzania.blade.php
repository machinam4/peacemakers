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

    <div class="package-details-wrapper pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tour-package-details">
                        <div class="pd-header">
                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location">
                                        <i class="bi bi-geo-alt"></i> 6 DAYS / 5 NIGHTS
                                    </h5>
                                </div>
                                <h2 class="pd-title">Majestic Tanzania.</h2>
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
                                    <h5> <b>•Tarangire National Park •Lake Manyara National Park
                                            •Serengeti National Park •Ngorongoro Crater </b></h5>
                                    <p>
                                        In this tour, you will have the opportunity to visit the most iconic parks of the
                                        northern safari circuit of Tanzania – Tarangire National Park, Lake Manyara NP,
                                        Serengeti NP, and Ngorongoro Crater
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
                                    <h4 class="mt-3">Accommodation Recommendation Summary:</h4>
                                    <table class="table mt-3 package-info-table mb-0">
                                        <tbody>
                                            <tr>
                                                <th>Day 1</th>
                                                <td>
                                                    • SANGAIWE LODGE<br>
                                                    • BURUNGE TENTED LODGE<br>
                                                    • MARAMBOI TENTED LODGE<br>
                                                    • OLIVER’S CAMP
                                                </td>
                                                <td>TARANGIRE NATIONAL PARK</td>
                                            </tr>
                                            <tr>
                                                <th>Day 2</th>
                                                <td>
                                                    • MANYARA SERENA LODGE<br>
                                                    • ESCARPMENT LUXURY LODGE<br>
                                                    • GIBB’S FARM<br>
                                                    • MARERA VALLEY LODGE
                                                </td>
                                                <td> LAKE MANYARA NATIONAL PARK</td>
                                            </tr>
                                            <tr>
                                                <th>Day 3</th>
                                                <td>
                                                    • INTO WILD AFRICA LUXURY TENTED CAMPS<br>
                                                    • SERENGETI SERENA LODGE<br>
                                                    • KOBE LUXURY CAMPS<br>
                                                    • KUBUKUBU TENTED LODGE<br>
                                                    • LAHIA TENTED LODGE<br>
                                                    • FOUR SEASONS SERENGETI
                                                </td>
                                                <td>SERENGETI NATIONAL PARK</td>
                                            </tr>
                                            <tr>
                                                <th>Day 4</th>
                                                <td>
                                                    • INTO WILD AFRICA LUXURY TENTED CAMPS<br>
                                                    • SERENGETI SERENA LODGE<br>
                                                    • KOBE LUXURY CAMPS<br>
                                                    • KUBUKUBU TENTED LODGE<br>
                                                    • LAHIA TENTED LODGE<br>
                                                    • FOUR SEASONS SERENGETI
                                                </td>
                                                <td>SERENGETI NATIONAL PARK</td>
                                            </tr>
                                            <tr>
                                                <th>Day 5</th>
                                                <td>
                                                    • RHINO LODGE<br>
                                                    • NGORONGORO FARM HOUSE LODGE<br>
                                                    • NGORONGORO SERENA SAFARI LODGE<br>
                                                    • LAKE MASEK TENTED LODGE<br>
                                                    • TLOMA LODGE
                                                </td>
                                                <td>SERENGETI NATIONAL PARK</td>
                                            </tr>
                                            <tr>
                                                <th>Day 6</th>
                                                <td colspan="2" class="tour-transport-col">
                                                    <div
                                                        class="tour-transport d-flex align-items-center justify-content-center">
                                                        <img src="assets/images/icons/bus.svg" alt="" />
                                                        <span>NGORONGORO CRATER</span>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>

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
                                                        <h5>DAY 1 : START OF WILDLIFE SAFARI- TARANGIRE NATIONAL PARK</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse1" class="accordion-collapse collapse show"
                                                aria-labelledby="planHeadingOne" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        We will pick you up from your hotel at 8 am and take you to a very
                                                        special national park. Tarangire is famous for its diverse landscape
                                                        with nine different vegetation zones. The park is particularly known
                                                        for the abundance of Ancient Baobab trees (the largest trees in the
                                                        continent) which fill the landscape and dwarf the animals next to
                                                        them. The river of the park is full of wildlife ranging from a large
                                                        variety of birds to lions, leopards, zebras, giraffes, buffaloes,
                                                        antelopes and, of course, elephants. In fact, the park has the
                                                        largest concentration of elephants in the whole country and provides
                                                        unique chances to observe the interaction between elephant families.
                                                        The lunch area is fascinating, boasting an observatory with amazing
                                                        views to the river and wildlife (with good chances of seeing a hunt
                                                        while having your picnic). In the afternoon we will still do a game
                                                        drive before continuing to your accommodation.
                                                        IN FACT, THE PARK HAS THE LARGEST CONCENTRATION OF ELEPHANTS IN THE
                                                        WHOLE COUNTRY IN COMPARISON TO ITS SIZE AND PROVIDES UNIQUE CHANCES
                                                        TO OBSERVE THE INTERACTION BETWEEN ELEPHANT FAMILIES.
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
                                                        <h5>DAY 2 : LAKE MANYARA NATIONAL PARK</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse2" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingThree" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        Extra tour recommended: Cultural bike tour in Mto WA Mbu village.
                                                        Beautiful short journey across the Great Rift Valley until Lake
                                                        Manyara National Park for a full day game drive. Although small in
                                                        dimension (205 sq. miles), the park has breathtaking scenery and
                                                        well famous for its lush acacia forest, giant figs and mahogany
                                                        trees, as well as to a growing population of baboons and blue
                                                        monkeys. Permanent residents of this park also include giraffes,
                                                        elephants, impalas and a huge amount of buffaloes. The lake is also
                                                        home to a large number of hippos. Some unique facts about this park
                                                        include the tree climbing lions, flamingos in the lake shore, as
                                                        well as the Ground Hornbill and the Crested Eagle. The landscapes of
                                                        Lake Manyara are something that cannot be described with words, and
                                                        the game drives along the lake provide stunning photo opportunities
                                                        of giraffes and buffaloes in the foreground and the lake (and its
                                                        flamingos) in the background. During this day, some extra tours are
                                                        possible, including a bike tour or a boat excursion. In the
                                                        afternoon, transfer to the camp for dinner. SOME UNIQUE FACTS ABOUT
                                                        THIS PARK INCLUDE THE TREE CLIMBING LIONS, FLAMINGOS IN THE LAKE
                                                        SHORE, AS WELL AS THE GROUND HORNBILL AND THE CRESTED EAGLE Our
                                                        recommended Stay at: MANYARA SERENA LODGE ESCARPMENT LUXURY LODGE
                                                        GIBB’S FARM MARERA VALLEY LODGE
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
                                                        <h5>DAY 3 : SERENGETI NATIONAL PARK</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse3" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFour" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        After an early breakfast, depart towards the most famous National
                                                        park in the World, the Serengeti. The driving itself, although long,
                                                        is spectacular. You will drive up the crater highlands, making a
                                                        quick stop at the rim for an out of this world view of Ngorongoro
                                                        Crater. This will be an unforgettable moment for anyone seeing it
                                                        for the first time. After a long but spectacular journey, you will
                                                        arrive in the park in time for a fantastic afternoon game drive. As
                                                        you progress well into the Serengeti, you will see what the name
                                                        means, in the local language, ‘endless plains’. The park has 6,900
                                                        sq. mile (14,000 sq. km) and for most of it, the plains will stretch
                                                        to the horizon defying your senses and perception of distances. It
                                                        is the home of the Great Migration and to 2 million wildebeests,
                                                        hundreds of thousands of zebras and all kinds of antelopes including
                                                        the abundant impalas and Thomson’s gazelles. As for Big Cats and
                                                        large predators, it’s the place of choice to look out for lions,
                                                        cheetahs, leopards, hyenas, with many television scenes like the
                                                        famous river crossings having been filmed in this park. Smaller
                                                        animals like foxes, mongoose, honey badgers, jackals, monkeys,
                                                        baboons, rock hyrax and African hares, together with more than 500
                                                        species of birds, also inhabit this park. There is accommodation for
                                                        all budgets and styles in the Serengeti. Our recommended Stay at:
                                                        INTO WILD AFRICA LUXURY TENTED CAMPS SERENGETI SERENA LODGE KOBE
                                                        LUXURY CAMPS KUBUKUBU TENTED LODGE LAHIA TENTED LODGE FOUR SEASONS
                                                        SERENGETI
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
                                                        <h5>DAY 4 : SERENGETI NATIONAL PARK</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse4" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        Full day in the Serengeti National Park. We are completely flexible
                                                        with your preferences and this day will be organized according to
                                                        your wishes. On every day of the safari, your guide will discuss
                                                        with you the best timings for you, including the game drives and the
                                                        wake up time. For example, on this day, you could do a morning game
                                                        drive, return to the camp for lunch and relaxation and finish with
                                                        an afternoon game drive, or you could do a full day game drive with
                                                        picnic lunch. Extra tour recommended: The wonderful balloon flight
                                                        over the Serengeti plains. Our recommended Stay at: INTO WILD AFRICA
                                                        LUXURY TENTED CAMPS SERENGETI SERENA LODGE KOBE LUXURY CAMPS
                                                        KUBUKUBU TENTED LODGE LAHIA TENTED LODGE FOUR SEASONS SERENGETI
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
                                                        <h5>DAY 5 : SERENGETI NATIONAL PARK TO NGORONGORO</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse5" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        On this day we suggest a very early wake up in order to do an early
                                                        morning game drive (when the animals are more active) and see one of
                                                        the best sunrises you’ll ever witness. It’s really one of the most
                                                        beautiful experiences to have. After the game drive, we return to
                                                        the camp for a rewarding brunch and then we’ll proceed to
                                                        Ngorongoro, the 8th wonder of the Natural World. You will reach
                                                        Ngorongoro in time for a sundowner. Our recommendations Stay at:
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
                                                        <h5>DAY 6 : NGORONGORO CRATER</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse6" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        We will start the day very early and descend into the crater floor
                                                        for an incredible morning of wildlife in one of the most stunning
                                                        places on Earth. The crater spreads for 102 sq. miles and has
                                                        2.000ft high walls, making it virtually Noah’s ark and inhabiting
                                                        almost every species of wildlife that is indigenous to East Africa.
                                                        It’s one of the very rare locations in the whole continent where you
                                                        can witness the black Rhino. The concentration of African wildlife
                                                        if the greatest in the continent. The crater has a river, several
                                                        swamps, and a soda lake with a great concentration of flamingos, a
                                                        forest and open plains. It’s also famous for its elephants which are
                                                        the largest in the world and have huge tusks. This is due to the
                                                        rich mineral content of the volcanic soil and its grasses.
                                                        Ngorongoro Crater is truly a Wonder of the Natural World. After the
                                                        game drive, there will be time for a picnic lunch near the beautiful
                                                        Hippo Lake. After lunch, we will have time for a short game drive
                                                        and then ascend the crater and exit Ngorongoro Conservation Area
                                                        towards Arusha. We expect to be back in Arusha around 5pm although
                                                        we are flexible in case there is a flight to catch or another
                                                        situation.
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
