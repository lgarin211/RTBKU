

    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 feature-row">
                <?php
                    // $data=DB::table('fasilitas')->where('Active', '1')->inRandomOrder()->get();
                    $data=DB::table('supports')->get();
                ?>
                @foreach($data as $row)
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="feature-item border h-100 p-5">
                            <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                                <img class="img-fluid rounded" src="{{url('/storage/')."/".$row->LOGO}}" alt="Icon">
                            </div>

                            <h5 class="mb-3">{{$row->NamaFasilitas}}</h5>

                            {{-- <p class="mb-0">{!!$row->Desripsi!!}</p> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Features End -->
