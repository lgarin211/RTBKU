


    
    <!-- Layanan Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Fasilitas - Fasilitas Rumah Talenta BCA</p>
                <h1 class="display-5 mb-5">PIC dan Koordinator Fasilitas di RTB</h1>
            </div>
            <div class="row g-4">


            <?php
            // ramdom order
            // $data=DB::table('supports')->inRandomOrder()->get();
            $data=DB::table('supports')->get();
            ?>
            @foreach($data as $key=>$row)
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 90px; height: 80px;">
                                <img class="img-fluid rounded-circle" style="background-size: contain" src="{{url('/storage/').'/'.$row->LOGO}}" alt="Icon">
                            </div>
                            <h5 class="mb-3">{{$row->NamaFasilitas}}</h4>
                                <p class="mb-0">{!! $row->NamaPic!!}</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom" data-bs-toggle="modal" data-bs-target="#modaltarget{{$key}}">
                            <a class="text-primary fw-medium" href="#" class="btn btn-primary">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Modal {{$key}} -->
                <div class="modal fade" id="modaltarget{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content rounded">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {!! $row->DetailPIC !!}
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </div>
    <!-- Layanan End -->
