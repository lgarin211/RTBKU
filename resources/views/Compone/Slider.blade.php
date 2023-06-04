 <!-- Carousel Start -->
 <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner" style="position: relative;width: 100%;overflow: hidden;height: 40rem;">
                <?php
                    $data=DB::table('sliders')->where('Active', '1')->inRandomOrder()->get();
                ?>
                @foreach($data as $row)
                <div class="carousel-item @if($loop->first)active @endif">
                    <img class="w-100" src="{{url('/storage/')}}/{{$row->Gambar}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <p class="fs-4 text-white animated slideInRight">Welcome to
                                        <strong>{{setting('site.title')}}</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-4 animated slideInRight">{{$row->Judul}}</h1>
                                    @if ($row->LINK !='#')
                                        <a href="{{$row->LINK}}" class="btn btn-primary animated slideInRight">{{$row->LINK }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
