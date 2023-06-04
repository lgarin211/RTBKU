    <!-- Kegiatan Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Dokumentasi Aktivitas </p>
                <h1 class="display-5 mb-5">Rumah Talenta BCA</h1>
            </div>
            <?php $kegiatan = DB::table('kegiatans')->get(); ?>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($kegiatan as $key=>$item )
                @php
                    $item->Dokumentasi=json_decode($item->Dokumentasi);
                @endphp
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('storage/'.$item->Poster)}}" alt="" id="Pilcofig{{$key}}">
                        <div class="project-overlay">
                            <p class="btn btn-lg-square btn-light rounded-circle m-1" data-bs-toggle="modal" data-bs-target="#modaltarget{{$key}}"><i class="fa fa-eye"></i></p>
                            <p class="btn btn-lg-square btn-light rounded-circle m-1"><i class="fa fa-link"></i></p>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="d-block h5" data-bs-toggle="modal" data-bs-target="#modaltarget{{$key}}">{{$item->Judul}}</p>
                        {{-- <span>{!!$item->Deskripsi=strip_tags($item->Deskripsi);Str::limit($item->Deskripsi, 10, ' ...')!!}</span> --}}
                        {{-- cut print just only 10 word --}}
                        <span>
                            @php
                                $ico=strip_tags($item->Deskripsi);
                                $ico=Str::limit($ico, 60, ' ...');
                                echo $ico.'<hr>';
                                // print date
                                $date=date_create($item->created_at);
                                echo date_format($date,"d M Y");
                            @endphp
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    @foreach ($kegiatan as $key=>$item )
    <!-- Modal {{$key}} -->
    <div class="modal fade" id="modaltarget{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
        <div class="modal-content rounded">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                @php
                    $date=date_create($item->created_at);
                    echo date_format($date,"d M Y");
                @endphp
                <hr><br>
                {!!$item->Deskripsi!!}
                <hr>
                @foreach ($item->Dokumentasi as $so)
                    <img src="{{url('/storage/'.$so)}}" class="img-fluid" alt="{{url('/storage/'.$so)}}">
                    <hr>
                @endforeach
            </div>
        </div>
        </div>
    </div>
    @endforeach
    <!-- Kegiatan End -->
