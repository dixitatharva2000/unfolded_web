@extends('web.partials.layouts.wrapper')

@section('content')
    <!--===== HERO AREA START=======-->

    <div class="inner-hero bg-cover" style="background-image: url({{ asset('web/assets/img/bg/inner-hero-bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-heading">
                        <div class="page-prog">
                            <a href="{{ url('/') }}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p class="bold">Contact Us</p>
                        </div>
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===== HERO AREA END=======-->

    <!--===== CONTACT AREA START=======-->

    <div class="contact-page-sec sp">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 ">
                    <div class="heading1 text-center mb-3">
                        <h2>We’d Love to Hear From You</h2>
                        <p class="mt-16">Whether you have questions, feedback, or just want to say hello, we’re here to
                            connect.</p>
                    </div>
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="contact-page-from">
                                <div class="heading1">
                                    <h5>Leave a Reply</h5>
                                    <p class="mt-10">Provide clear contact information, including phone number, email, and
                                        address.
                                    </p>
                                </div>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-input">
                                                <input type="text" placeholder="First Name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-input">
                                                <input type="text" placeholder="Last Name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-input">
                                                <input type="email" placeholder="Email" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-input">
                                                <input type="number" placeholder="Phone" />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="single-input">
                                                <input type="text" placeholder="Subject" />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="single-input">
                                                <textarea rows="5" placeholder="Message"></textarea>
                                            </div>
                                            <div class="button mt-30">
                                                <button class="theme-btn1" type="submit">Submit Request</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row ">
                        <div class="col-12">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119981.38755026064!2d73.72107892285584!3d19.990944013098268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddd290b09914b3%3A0xcb07845d9d28215c!2sNashik%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1756882227909!5m2!1sen!2sin"
                                style="border:0; width: 100%; height: 50rem;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-page-box">
                            <div class="icon">
                                <img src="{{ asset('web/assets/img/icons/contact-page-box1.svg') }}" alt="vexon" />
                            </div>
                            <div class="heading">
                                <h4>Send Email</h4>
                                <a href="mailto:support@vexon.com">support@vexon.com</a>
                                <a href="mailto:contact@vexon.com">contact@vexon.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="contact-page-box">
                            <div class="icon">
                                <img src="{{ asset('web/assets/img/icons/contact-page-box2.svg') }}" alt="vexon" />
                            </div>
                            <div class="heading">
                                <h4>Office Address</h4>
                                <a href="#">8708 Technology Forest Pl Suite 125 -G, The Woodlands</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="contact-page-box">
                            <div class="icon">
                                <img src="{{ asset('web/assets/img/icons/contact-page-box3.svg') }}" alt="vexon" />
                            </div>
                            <div class="heading">
                                <h4>Contact Number</h4>
                                <a href="tel:123-456-7890">123-456-7890</a>
                                <a href="tel:123-456-7890">123-456-7890</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===== CONTACT AREA END=======-->
@endsection
