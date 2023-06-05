  <!-- Team Start -->
  <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Pengumuman</p>
            {{-- <h4 class="display-5 mb-5">PIC Asrama dan Koordinator Lantai di RTB</h4> --}}
        </div>
        <div class="row">

            @php
                if ($lim==0) {
                    $team=DB::table('news')->get();
                }else{
                    $team=DB::table('news')->limit($lim)->get();
                }

            @endphp
            @foreach ($team as $key=>$item)
            <div class="col-md-12">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis" style="color: blue">{{$item->Penyelengara}}</strong>
                        <h3 class="mb-0">{{$item->Judu}}</h3>
                        <div class="mb-1 text-body-secondary">
                                @php
                                    $date=date_create($item->created_at);
                                    echo date_format($date,"d M Y");
                                @endphp
                        </div>
                            <p class="card-text mb-auto">
                                @php
                                        $ico=strip_tags($item->Isi);
                                        $ico=Str::limit($ico, 120, '.');
                                        echo $ico;
                                @endphp
                                <button class="btn icon-link gap-1 icon-link-hover stretched-link" data-bs-toggle="modal" data-bs-target="#modaltarget{{$key}}">
                                    Read More...
                                </button>
                            </p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="{{url('/storage/'.$item->Poster)}}" alt="" class="img-fluid" style="height: 80%;width: 200px;object-fit: cover;">
                    </div>
                </div>
            </div>

            <!-- Modal {{$key}} -->
            <div class="modal fade" id="modaltarget{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                <div class="modal-content rounded">
                    <div class="modal-header text-center">
                        <h1 class="text-center">{{$item->Judu}}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">

                        @php
                            $date=date_create($item->created_at);
                            echo date_format($date,"d M Y");
                        @endphp
                        <hr><br>
                        {!!$item->Isi!!}
                        <hr>
                    </div>
                </div>
                </div>
            </div>



            @endforeach

        </div>
    </div>
</div>
<!-- Team End -->


