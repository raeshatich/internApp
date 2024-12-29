@extends('layout.content')
@section('content')
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>

</div>
@endif


<div class="col-md-12">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="full">
                <div class="card-body">
                <h1>Menu Input Informasi </h1>
                
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Informasi</h5>
                <button type="button" class="btn btn-warning btn-round ml-auto" data-bs-toggle="modal" data-bs-target="#addinfo">
                    Input
                    <i class="bi bi-plus-lg">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                      </svg>
                    </i>
                  </button>
            </div>
        <div class="table-responsive">
            <table class="display table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Dokumen</th>
                        <th>Format</th>
                        <th>Action</th>                
                    </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach($informasi as $info)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $info->nama_informasi }}</td>
                        <td> <a href="{{ Storage::url('post-file/'.$info->format) }}">{{$info->format}}</a> </td>
                        

                        <td>
                            <a href="#modal_edit{{ $info->id }}" data-toggle="modal" class="btn btn-primary btn-xs">Edit</a>
                            <a href="#modal_hapus{{ $info->id }}" data-toggle="modal" class="btn btn-danger btn-xs">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
            
            <div class="modal fade" id="addinfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Tambah Informasi</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        
                      </button>
                    </div>
                    <form action="/infocrud/store" enctype="multipart/form-data" method="POST">
                     @csrf 
                     <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Informasi</label>
                            <input type="text" name="name_dokumen" class="form-control" placeholder="Nama Informasi..." required>
                        </div>
                        <div class="mb-3">
                            <label>Format</label>
                            <input type="file" class="form-control" name="format" id="format" placeholder="File Dokumen..." required>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Save changes</button>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection