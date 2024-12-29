@extends('layout.content')
@section('content')

<section class="anggota">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="full text_align_center">
                    <div class="card-body">
                        <h1>Menu Informasi</h1>
                        <p>Dokumen</p>
                       
                    </div>
                    <div class="row g-5">
                        @php $no=1; @endphp
                        @foreach($informasi as $info)
                        <div class="col-md-6">
                            <ul class="icon-list">
                                <li>
                                    
                                <td><a href="{{ Storage::url('post-file/'.$info->format) }}">{{$info->format}}</a></td>        

                                </li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                    <hr/>
                    <div class="container">
                        
                    </div>
                    <div class="card-body">
                        <p>Ketentuan Lain-lain</p>

                        <div class="table-responsive">
                            <table class="display table table-stripped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Ketentuan</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $no=1;
                                    @endphp
                                    @foreach($ketentuan as $item)

                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->nama_ketentuan }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection