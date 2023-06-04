  <!-- Team Start -->
  <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Struktur Kepengurusan di Rumah Talenta BCA</p>
                {{-- <h4 class="display-5 mb-5">PIC Asrama dan Koordinator Lantai di RTB</h4> --}}
            </div>
            <div class="row g-4">

                @php
                    $team=DB::table('pengurus')->get();
                @endphp

                @foreach ($team as $item)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{url("/storage/".$item->Gambar)}}" alt="">
                        <h5>{{$item->Nama}}</h5>
                        <span class="text-primary">{{$item->Jabatan}}</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fa fa-caret-square-o-down"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fa fa-caret-square-o-right"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fa fa-caret-square-o-up"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fa fa-lightbulb-o"></i></a></li>
                        </ul>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Team End -->
