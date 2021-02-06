@php
  $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp
<footer class="bg-dark py-4">
    <div class="container">
        <div class="row py-2">
            <div class="col-lg-4 text-center text-lg-left mb-2 mb-lg-0">
                <p class="small text-muted text-uppercase mb-0">&copy; copyright 2020 - all rights reserved {{$setting->company}}</p>
            </div>
            <div class="col-lg-4 text-center mb-2 mb-lg-0">
                <ul class="list-inline text-white small mb-0">
                    @if($setting->facebook !=null)<li><a href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a></li>@endif
                    @if($setting->twitter !=null)<li><a href="{{$setting->twitter}}"><i class="fab fa-twitter"></i></a></li>@endif
                    @if($setting->instagram !=null)<li><a href="{{$setting->instagram}}"><i class="fab fa-instagram"></i></a></li>@endif
                    @if($setting->linkedin !=null)<li><a href="{{$setting->facebook}}"><i class="fab fa-linkedin"></i></a></li>@endif

                </ul>
            </div>
            <div class="col-lg-4 text-center text-lg-right">
                <p class="small text-muted text-uppercase mb-0">Template designed by <a href="https://bootstraptemple.com/p/bootstrap-travel">Bootstrap Temple</a>. </p>
            </div>
        </div>
    </div>
</footer>
<!-- JavaScript files-->
<script src="{{asset('assets')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/vendor/owl.carousel2/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/front.js"></script>

