@extends('layout.content')
@section('content')

<section class="anggota">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="full text_align_center">
                    <div class="card-body">
                        <h1>Persyaratan dan Tata Cara Pendaftaran</h1>
                        <p>Persyaratan umum mengikuti magang di KPK</p>
                       
                    </div>
                    <div class="row g-5">
                        @php $no=1; @endphp
                        @foreach($syarat as $s)
                        <h5 class="card-title"><span class="badge bg-warning rounded-pill">{{ $no++ }}</span>
                            <span class="card-text">{{ $s->nama_syarat }}</span>
                            </h5>
                        @endforeach
                    </div>
                    <hr/>
                    
                    <div class="card-body">
                        <p>Tata cara pendaftaran magang di KPK</p>
                        <div class="row g-3">
                            <div class="col-md-12">
                                @php $no=1; @endphp

                                @foreach($tata as $t)
                                <h5 class="card-title"><span class="badge bg-warning rounded-pill">{{ $no++ }}</span>
                                    <span class="card-text">{{ $t->nama_tata }}</span>
                                </h5>
                        @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection