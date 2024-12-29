@extends('layout.home')
@section('home')

<section class="info">

  <h1>Program Magang KPK</h1>
  <p>Komisi Pemberantasan Korupsi membuka kesempatan kepada Warga Negara Indonesia yang berstatus 
    mahasiswa tingkat akhir atau lulusan baru Perguruan Tinggi serta memiliki integritas dan komitmen yang tinggi
     untuk mengikuti program magang. Bagi peserta yang memenuhi persyaratan dan lulus seleksi, akan diberikan 
    kesempatan pembelajaran melalui pelibatan pelaksaan tugas dan fungsi pencegahan dan pemberantasan tindak pidana korupsi.</p>
</section>

<hr/>
<div class="text">
  <p>
  Silakan pilih salah satu unit kerja yang sesuai dengan kompetensi dan peminatan sebagai berikut:
</p>
</div>
<div class="row g-3">
  @foreach($unit as $row)
  <div class="col-12 col-md-6 col-lg-4 ">
    <div class="card">
      <a href="{{ route('detail',$row->id) }}">
      <div class="card-body">
        <div class="card-title">
          {{ $row->nama_unit }}
        </div>
      </div>
    </div>
  </div>
</a>
  @endforeach
  
</div>


{{-- <div class="row row-cols-1 row-cols-md-3 g-4">
  @foreach($unit as $row)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $row->nama_unit }}</h5>
     <a class="btn btn-primary" role="button"  data-bs-toggle="modal" data-bs-target="#exampleModal"
     {{route('detail',$row->id)}}>Detail </a>
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onClick="detail{{route('detail',$row->id)}}">
      Launch demo modal
    </button>
  </div>
  </a>
</div>
</div> --}}

{{-- <div class="row row-cols-1 row-cols-md-3 g-4">
  @foreach($unit as $row)
  <div class="col">
    <div class="card h-100">
      <a href="{{ route('detail', $row->id) }}">
      <div class="card-body">
        <div class="full text_align_center">
          <h5 class="card-title">{{ $row->nama_unit }}</h5>
        </div>
      </div>
      </a>
      @endforeach
    </div>
  </div>
</div> --}}


<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="detail">
        {{ $row->nama_unit }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endforeach

<script>
  function detail(id) {
    alert(id);
    $.ajax({
      url:"{url: 'home/detail'",
      type="POST",
      data:{id:jid},
      success:function(getreturn)
    })
    
  }
</script> --}}


    
@endsection