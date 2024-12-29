@extends('layout.content')
@section('content')

<section class="anggota">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="full text_align_center">
                    <div class="card-body">
                        <h1>Pengumuman Hasil Akhir Seleksi Program Magang Komisi Pemberantasan Korupsi</h1>
                        <p> <?php= "Sehubung telah selesainya seluruh rangkaian seleksi, berikut disampaikan nama-nama peserta yang dinyatakan terpilih dalam Program Magang KPK T.A" . date('y') . : ?></p>
                    </div>
                    <div class="table-responsive">
                        <table id="anggota" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Anggota</th>
                                    <th>Unit</th>
                                    <th>Posisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no =1;

                                @endphp
                                @foreach ($anggota as $team)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $team->nama_anggota }}</td>
                                    <td>{{ $team->nama_unit }}</td>
                                    <td>{{ $team->nama_posisi }}</td>
                                </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection