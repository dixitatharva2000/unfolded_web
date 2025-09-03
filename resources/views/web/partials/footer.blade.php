 <!--===== FOOTER AREA START=======-->

 <div class="footer1 mt-80 md:mt-40 sm:mt-40">
     <div class="container">
         <div class="row">
             <div class="col-lg-3 col-md-6">
                 <div class="logo">
                     <a href="index.html"><img src="{{ asset('web/assets/img/logo/logo1.png') }}" style="height: 50px;"
                             alt="vexon" /></a>
                 </div>
                 <div class="heading1 mt-16">
                     <p>We organize & simplify your reception & marketing ambience.</p>
                     <div class="footer-social1">
                         <ul>
                             <li>
                                 <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                             </li>
                             <li>
                                 <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                             </li>
                             <li>
                                 <a href="#"><i class="fa-brands fa-instagram"></i></a>
                             </li>
                             <li>
                                 <a href="#"><i class="fa-regular fa-basketball"></i></a>
                             </li>
                             <li>
                                 <a href="#"><i class="fa-brands fa-behance"></i></a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
             {{-- <div class="col-lg-3 col-md-6 mb-50 sm:mb-30 sm:mt-30">
					<div class="footer-list1 ml-80 md:ml-0 sm:ml-0">
						<h3>Explore Categories</h3>
						<ul>
							<li><a href="#">Digital Marketing </a></li>
							<li><a href="#">Ai & Technology </a></li>
							<li><a href="#">Content Strategy </a></li>
							<li><a href="#">Social Media </a></li>
							<li><a href="#">SEO & Analytics </a></li>
							<li><a href="#">Design & Development </a></li>
						</ul>
					</div>
				</div>
 --}}
             <div class="col-lg-2 col-md-6">
                 <div class="footer-list1 ml-50 md:ml-0 sm:ml-0 mb-50 sm:mb-30">
                     <h3>Useful Links</h3>
                     <ul>
                         <li><a href="#">Home </a></li>
                         <li><a href="#">About </a></li>
                         <li><a href="#">Services </a></li>
                         <li><a href="#">Contact us </a></li>
                     </ul>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="footer-contact-list1 mb-50 sm:mb-30">
                     <h3>Contact Us</h3>
                     <div class="footer-contact-box1">
                         <div class="icon">
                             <img src="{{ asset('web/assets/img/icons/footer1-icon1.svg') }}" alt="vexon" />
                         </div>
                         <div class="text">
                             <a href="#">unfolded.co.in@gmail.com</a>
                         </div>
                     </div>
                     <div class="footer-contact-box1">
                         <div class="icon">
                             <img src="{{ asset('web/assets/img/icons/footer1-icon1.svg') }}" alt="vexon" />
                         </div>
                         <div class="text">
                             <a href="#">info@unfolded.co.in</a>
                         </div>
                     </div>

                     <div class="footer-contact-box1">
                         <div class="icon">
                             <img src="{{ asset('web/assets/img/icons/footer1-icon2.svg') }}" alt="vexon" />
                         </div>
                         <div class="text">
                             <a href="#">Nasik , Mumbai & Pune</a>
                         </div>
                     </div>

                     <div class="footer-contact-box1">
                         <div class="icon">
                             <img src="{{ asset('web/assets/img/icons/footer1-icon3.svg') }}" alt="vexon" />
                         </div>
                         <div class="text">
                             <a href="#">+1 (423) 788-4988</a>
                         </div>
                     </div>
                     <div class="footer-contact-box1">
                         <div class="icon">
                             <img src="{{ asset('web/assets/img/icons/footer1-icon3.svg') }}" alt="vexon" />
                         </div>
                         <div class="text">
                             <a href="#">+1 (732) 497-2972</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6">
                 <div class="footer-contact-list1 mb-50 sm:mb-30">
                     <h3>Location</h3>
                 </div>
             </div>
         </div>

         <div class="coppyrihgt1">
             <div class="row coppyrihgt-border">
                 @php
                     $year = date('Y');
                 @endphp
                 <div class="col-md-6">
                     <p class="coppyrihgt">Copyright © {{ $year }} Unfolded All Rights Reserved.</p>
                 </div>
                 <div class="col-md-6">
                     <div class="conditions">
                         <a href="#"> Privacy Policy </a>
                         <a href="#"> Terms & Conditions </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!--===== FOOTER AREA END=======-->
