@extends('layouts.base')
@section('contents')
    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Contact Us</h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="contact-wrapper pt-100">
        <div class="container">
            <div class="row align-items-center justify-content-lg-center gy-5">
                <div class="col-lg-6">
                    <div class="contatc-intro-figure">
                        <img src="assets/images/banner/peacemaker_contact.webp" alt="" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info">
                        <h3>Contact Info.</h3>
                        <ul>
                            <li>
                                <h6>Let’s Talk</h6>
                                <a
                                    href="mailto:peacemakersexpedition@gmail.com"><span>peacemakersexpedition@gmail.com</span></a>
                                {{-- <a href="#"><span>tours@PeaceMakers.com</span></a> --}}
                                <a href="tel:255782869676">+255 782 869 676</a>
                            </li>
                            <li>
                                <h6>Loacation.</h6>
                                <a href="#">Arusha, Tanzania</a>
                            </li>
                            <li>
                                <h6>Visit Us.</h6>
                                <a href="#">Facebook: https://www.facebook.com/peacemakersexpeditions</a>
                                <a href="#">Twitter: https://www.twitter.com/peacemakersexpeditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-120">
            <form action="#" id="contact_form">
                <div class="contact-form-wrap">
                    <h4>Send us a message</h4>
                    <p>
                        Required fields are marked *
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="custom-input-group">
                                <label for="name">Name</label>
                                <input type="text" placeholder="Your name" id="name" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-input-group">
                                <label for="email">Email</label>
                                <input type="text" placeholder="Your Email" id="email" />
                            </div>
                        </div>
                    </div>
                    <div class="custom-input-group">
                        <textarea cols="20" rows="7" placeholder="Your message"></textarea>
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
@endsection
