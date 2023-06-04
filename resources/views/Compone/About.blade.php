

    <!-- About Start -->
    {{-- style="background: url('https://karir.bca.co.id/public/assets/img/static/ppa-ppti-banner.jpg')" --}}
    {{-- background: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1)), url(../img/about.jpg) left center no-repeat;
    background-size: cover; --}}

    <style>
        .about {
             /* background: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1)), url("{{url('/storage/').setting('site.gambarabout')}}/{{setting('site.RTBIMG')}}") left center no-repeat !important; */
            background: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1)), url("https://www.bca.co.id/-/media/Feature/News/Siaranpers/2021/05/20210503-ASP-bca-buka-beasiswa-ppbp-dan-ppti-bca-banner.jpg") left center no-repeat !important;
            background-size: cover !important;
        }
    </style>
    {{-- "{{url('/storage/').setting('site.gambarabout')}}/{{setting('site.RTBIMG')}}" --}}
    <div class="container-xxl about my-5" >
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="{{setting('site.vpptti')}}" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        {!! setting('site.bigdec') !!}
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="{{setting('site.linkptti')}}">JOIN US</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Video Modal Start -->
       <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content rounded-0">
               <div class="modal-header">
                   <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <!-- 16:9 aspect ratio -->
                   <div class="ratio ratio-16x9">
                       <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                           allowscriptaccess="always" allow="autoplay"></iframe>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Video Modal End -->
