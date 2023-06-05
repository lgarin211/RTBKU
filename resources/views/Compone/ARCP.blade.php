<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 col-md-6">
                <h4 class="text-white mb-4">Informasi</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{setting('site.alamat')}}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{setting('site.kontak')}}</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{setting('site.email')}}</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-4">Quick Links</h4>
                <a href="{{url('/')}}" class="btn btn-link ">Home</a>
                <a href="{{url("/About")}}" class="btn btn-link">About</a>
                <a href="{{url("/Service")}}" class="btn btn-link">Services</a>
                <a href="{{url("/Activity")}}" class="btn btn-link">Activity</a>
                <a href="{{url("/News")}}" class="btn btn-link">News</a>
            </div>
            <div class="col-lg-2 col-md-6">
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="fw-medium text-light" href="#">{{"RUMAH TALENTA BCA"}}</a>
            </div>
            <div class="col-md-6 text-center text-md-end">
                Build By <a class="fw-medium text-light" href="https://lgarin211.github.io">Agustinus Pardamean Lumban Tobing</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->
