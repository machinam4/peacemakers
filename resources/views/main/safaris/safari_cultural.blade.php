@extends('layouts.base')
@section('contents')
    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Safari & Cultural Activities in Kilimanjaro Region</h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Safari & Cultural Activities in Kilimanjaro Region</li>
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
                                <h2 class="pd-title">Safari & Cultural Activities in Kilimanjaro Region</h2>
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
                                    <h5> <b>•Tarangire National Park •Lake Manyara National Park •Serengeti National Park
                                            •Ngorongoro Crater</b></h5>
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
                                                        <h5>DAY 1 : ARRIVAL-ARUSHA</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse1" class="accordion-collapse collapse show"
                                                aria-labelledby="planHeadingOne" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        Upon arrival at Kilimanjaro International Airport, you will be met
                                                        and transferred Arusha is a city in East Africa’s Tanzania, located
                                                        at the base of volcanic Mt. Meru. It’s a gateway to safari
                                                        destinations and to Africa’s highest peak, 5,895m Mt. Kilimanjaro,
                                                        lying some 100 kilometers northeast. To the west lies Serengeti
                                                        National Park, home to wildlife including lions, rhinoceros,
                                                        giraffes and leopards. The annual migrations feature huge herds of
                                                        wildebeests crossing its plains.
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
                                                        <h5>DAY 2 : TARANGIRE NATIONAL PARK</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse2" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingThree" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>At 7 am after breakfast, you will be picked up from the hotel by your
                                                        safari guide and driven to Tarangire National Park. Enjoy the
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
                                                        After breakfast, you will continue towards the fertile Ngorongoro
                                                        highlands where wheat and corn are grown by the Iraqw people. Along
                                                        the way you will pass through the mist-shrouded rain forests of the
                                                        Ngorongoro Conservation Area where you might be lucky enough to see
                                                        baboons, or even leopards and elephants in the dense under growth.
                                                        Passing through the Ngorongoro Conservation Area, you will see the
                                                        breath-taking Ngorongoro Crater before traveling onward to the
                                                        Serengeti National Park, which you will reach by midday. The
                                                        Serengeti National Park is the largest park in Tanzania with diverse
                                                        landscapes and habitats, such as grassy plains, swamps, lakes,
                                                        savannah and mountains. After an extensive game drive, you will head
                                                        toward the Seronera Valley for an evening meal and overnight stay at
                                                        your accommodation.
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
                                                        This day is set aside for game drives upon the Serengeti. The
                                                        Serengeti is truly spectacular. It is famous for its vast open
                                                        grasslands which allow for excellent sightings of wildlife. The
                                                        Serengeti is Tanzania’s oldest National Park and it is also one of
                                                        the oldest ecosystems on earth. Its climate and vegetation have
                                                        remained largely untouched for millions of years. Whilst the
                                                        Serengeti boasts abundant wildlife, it is perhaps best known for the
                                                        annual Great Migration. Vast numbers of wildebeest; accompanied by
                                                        large numbers of zebra and antelope move in an annual pattern,
                                                        constantly seeking fresh grazing. The precise location and timing of
                                                        the Migration is entirely dependent upon the rainfall patterns each
                                                        year. After your game drive, you will return to your accommodation
                                                        for a hearty dinner and relaxation under the stars.
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
                                                        <h5>DAY 5 : SERENGETI NATIONAL PARK</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse5" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        Today, you may wish to embark on a sunrise game drive. See the sun
                                                        set fire to the savannah as predators such as leopards and lions
                                                        hunt for their morning meal. Alternatively, you may wish to add a
                                                        sunrise hot air balloon safari and champagne breakfast to your
                                                        safari. Speak with your Lion Ling Tour Consultant about how you can
                                                        add this unforgettable experience to your safari. You will continue
                                                        your exploration of the Serengeti and observe many animals, birds
                                                        and landscapes.
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
                                                        <h5>DAY 6 : SERENGETI TO NGORONGORO</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse6" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        After breakfast you will embark upon a final game drive in the
                                                        Serengeti before travelling to the Ngorongoro Crater. Arriving at
                                                        the edge of the crater in the afternoon, you will have your first
                                                        glimpse of what awaits you the following day – glistening streams,
                                                        open grassland and an infinite number of animals. You will spend the
                                                        night at a luxury lodge on the Crater rim, where the views of the
                                                        Crater are quite unforgettable.
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
                                                        <h5>DAY 7 : NGORONGORO CRATER TO KARATU</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse7" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        When you first see Ngorongoro Crater, it looks like a forgotten
                                                        world. Concealed by the steep volcanic walls is a pristine
                                                        wilderness including sweeping savannah, pockets of acacia woodland
                                                        and glistening lakes and swamps. The Crater was created when a large
                                                        volcano exploded and collapsed in on itself two to three million
                                                        years ago. It is famous for both its geological delights and for
                                                        being a natural reserve which is home to some of the densest large
                                                        mammal populations in the whole of the African continent. The drive
                                                        down the into the Crater is an adventure in itself and when you
                                                        reach the Crater floor, you quickly find yourself amongst large
                                                        numbers of wildebeest, zebra, gazelle, and more than 500 bird
                                                        species. The Crater provides you with the best chance of seeing the
                                                        endangered black rhino, which can sometimes be spotted in the open
                                                        grasslands. After the thrills and excitement of the day, you will
                                                        drive to the nearby town of Karatu for dinner and overnight.
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
                                                        <h5>DAY 8 : LAKE MANYARA NATIONAL PARK TO ARUSHA</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse8" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        After breakfast, you will drive to your final destination on this
                                                        epic safari – Lake Manyara National Park. Manyara is a un spoilt
                                                        paradise and is best known for its abundance of birds and
                                                        tree-climbing lions. The dramatic western escarpment of the Rift
                                                        Valley forms the Park’s western border. To the east is the shallow,
                                                        alkaline Lake Manyara. The lake covers a large area of the park,
                                                        flooding and drying with the seasons and is home to thousands of
                                                        flamingos during the rains. The name Manyara comes from the Maasai
                                                        word ‘emanyara’, a popular plant which is used to build the
                                                        protective enclosure around a family homestead (Boma). The Park’s
                                                        vegetation is diverse, ranging from savannah to evergreen forest. On
                                                        your exploration of the park you may see giraffe, zebra, wildebeest,
                                                        buffalo, and elephant and if you are lucky; lions lounging in the
                                                        trees. After lunch, you will head back to Arusha, where you will
                                                        arrive in the early evening.
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
                                                        <h5>DAY 9 : CULTURAL ACTIVITY IN KILIMANJARO REGION</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse9" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        In the early morning, you will leave your accommodation in Arusha
                                                        and drive to Materuni village in Kilimanjaro region for a wonderful
                                                        coffee tour. You will learn how coffee is cultivated, dried, roasted
                                                        and further processed. You will also be invited to help with the
                                                        grinding of the coffee, which is traditionally accompanied by Chagga
                                                        songs and dances – a fun way to immerse yourself in the local
                                                        culture. If the weather is clear, you will be able to see the summit
                                                        of Mt. Kilimanjaro. After your day in Materuni, you will be driven
                                                        to a small Lodge, set in beautiful grounds, near to Kilimanjaro
                                                        International Airport. Then you will be transferred to the airport
                                                        the next day.
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
                                                        <h5>DAY 10 : DEPARTURE</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="planCollapse10" class="accordion-collapse collapse"
                                                aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                                <div class="accordion-body plan-info">
                                                    <p>
                                                        At an appropriate time, you will be transferred to Kilimanjaro
                                                        airport in time to catch your flight. Main Destination: Kilimanjaro
                                                        Airport
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
