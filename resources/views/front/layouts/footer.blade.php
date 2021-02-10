@php
    $settings = \App\Http\Controllers\HomeController::getSetting()
@endphp
</main>
<footer>
    <!-- Footer Start-->
    <div class="footer-area">
        <div class="container">
            <div class="footer-top footer-padding">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{asset('front/')}}/assets/img/logo/logo2_footer.png"
                                                              alt=""></a>
                                </div>
                                <div style="color:floralwhite">
                                    <strong>Company : </strong> {{$settings->company}}<br>
                                    <strong>Address : </strong> {{$settings->address}}<br>
                                    <strong>Phone : </strong> {{$settings->phone}}<br>
                                    <strong>Email : </strong> {{$settings->email}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Link</h4>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Listing</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Categories</h4>
                                <ul>
                                    <li><a href="#">Reasonable Hotel</a></li>
                                    <li><a href="#">Popular Restaurant</a></li>
                                    <li><a href="#">Easy Shopping</a></li>
                                    <li><a href="#">Night Life</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Download App</h4>
                                <ul>
                                    <li class="app-log"><a href="#"><img
                                                src="{{asset('front/')}}/assets/img/gallery/app-logo.png" alt=""></a>
                                    </li>
                                    <li><a href="#"><img src="{{asset('front/')}}/assets/img/gallery/app-logo2.png"
                                                         alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                All rights reserved | {{$settings->company}} | This template is made with <i
                                    class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                                                                      target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <!-- Footer Social -->
                        <div class="footer-social f-right">
                            @if($settings->facebook != null)<a href="https://www.facebook.com/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>@endif
                            @if($settings->twitter != null)<a href="https://www.twitter.com/" target="_blank"><i
                                    class="fab fa-twitter"></i></a>@endif
                            @if($settings->instagram != null)<a href="https://www.instagram.com/" target="_blank"><i
                                    class="fab fa-instagram"></i></a>@endif
                            @if($settings->youtube != null)<a href="https://www.youtube.com/" target="_blank"><i
                                    class="fab fa-youtube"></i></a>@endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>


<!-- JS here -->
<!-- All JS Custom Plugins Link Here here -->
<script src="{{asset('front/')}}/./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('front/')}}/./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('front/')}}/./assets/js/popper.min.js"></script>
<script src="{{asset('front/')}}/./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('front/')}}/./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('front/')}}/./assets/js/owl.carousel.min.js"></script>
<script src="{{asset('front/')}}/./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('front/')}}/./assets/js/wow.min.js"></script>
<script src="{{asset('front/')}}/./assets/js/animated.headline.js"></script>
<script src="{{asset('front/')}}/./assets/js/jquery.magnific-popup.js"></script>

<!-- Nice-select, sticky -->
<script src="{{asset('front/')}}/./assets/js/jquery.nice-select.min.js"></script>
<script src="{{asset('front/')}}/./assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="{{asset('front/')}}/./assets/js/contact.js"></script>
<script src="{{asset('front/')}}/./assets/js/jquery.form.js"></script>
<script src="{{asset('front/')}}/./assets/js/jquery.validate.min.js"></script>
<script src="{{asset('front/')}}/./assets/js/mail-script.js"></script>
<script src="{{asset('front/')}}/./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('front/')}}/./assets/js/plugins.js"></script>
<script src="{{asset('front/')}}/./assets/js/main.js"></script>
<!-- Jquery Plugins, Accordion Jquery -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#accordion" ).accordion();
    } );
</script>
<!-- Summernote Scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
    });
</script>

@livewireScripts


</body>
</html>
