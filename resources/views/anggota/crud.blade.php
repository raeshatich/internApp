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
                <h1> <?php echo "Menu Input Anggota Magang " . date('Y') . "" ?> </h1>
                
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Anggota</h5>
                <button type="button" class="btn btn-warning btn-round ml-auto" data-bs-toggle="modal" data-bs-target="#addanggota">
                    Daftar
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
                                <th>Nama Anggota</th>
                                <th>Unit</th>
                                <th>Posisi</th>
                                <th>Action</th>                
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach($anggota as $team)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $team->nama_anggota }}</td>
                                <td>{{ $team->nama_unit }}</td>
                                <td>{{ $team->nama_posisi }}</td>
                                <td>
                                    {{-- <a href="#modalEditanggota{{$team->id}}" data-bs-target="#modalEditanggota{{$team->id}}" data-toggle="modal" class="btn btn-primary btn-xs"></i>Edit</a> --}}
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditanggota{{$team->id}}">
                                        Launch demo modal
                                    </button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalhapus{{$team->id}}">
                                        Launch demo modal
                                    </button>
                                    {{-- <a data-bs-target="#modalEditanggota{{$team->id}}" data-toggle="modal" class="btn btn-danger btn-xs"></i>Hapus</a> --}}
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                    
                    <div class="modal fade" id="addanggota" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Anggota</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                
                            </button>
                            </div>
                            <form action="/anggotacrud/store" enctype="multipart/form-data" method="POST">
                            @csrf 
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama Anggota</label>
                                    <input type="text" name="nama_anggota" class="form-control" placeholder="Nama Anggota..." required>
                                </div>
                                <div class="form-group">
                                    <label>Unit</label>
                                    <select name="unit_id" class="form-control" required>
                                        @foreach ($unit as $p)
                                        <option value="" hidden="">--Pilih Unit--</option>
                                        <option value="{{$p->id}}">{{$p->nama_unit}}</option>
                                        @endforeach
                
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Posisi</label>
                                    <select name="posisi_id"  class="form-control" required>
                                        @foreach ($posisi as $p)  
                                        <option value="" hidden="">--Pilih Posisi--</option>  
                                        <option value="{{$p->id}}">{{$p->nama_posisi}}</option>
                                        @endforeach
                
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </form>
                            </div>
                        
                        </div>
                    </div>

                @foreach($anggota as $edit)
                <div class="modal fade" id="modalEditanggota{{ $edit->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Anggota</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            
                        </button>
                        </div>
                        <form action="/anggotacrud{{ $edit->id }}/update" enctype="multipart/form-data" method="POST">
                        @csrf 
                        <div class="modal-body">

                            <input type="hidden" value="{{ $edit->id }}" name="id"required>
                            <div class="form-group">
                                <label>Nama Anggota</label>
                                <input type="text" name="nama_anggota" value="{{ $edit->nama_anggota }}" class="form-control" placeholder="Nama Anggota..." required>
                            </div>
                            <div class="form-group">
                                <label>Unit</label>
                                <select name="unit_id" class="form-control" required>
                                    @foreach ($unit as $p)
                                    <option value="" hidden="">--Pilih Unit--</option>
                                    <option value="{{$p->id}}">{{$p->nama_unit}}</option>
                                    @endforeach
            
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Posisi</label>
                                <select name="posisi_id"  class="form-control" required>
                                    @foreach ($posisi as $p)  
                                    <option value="" hidden="">--Pilih Posisi--</option>  
                                    <option value="{{$p->id}}">{{$p->nama_posisi}}</option>
                                    @endforeach
            
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
                @endforeach

                @foreach($anggota as $g)
                <div class="modal fade" id="modalhapus{{$g->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Edit Anggota</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>  
                
                            <form action="/anggotacrud/{{$g->id}}/destroy" enctype="multipart/form-data" method="GET">
                                @csrf 
                            <div class="modal-body">
                
                                <input type="hidden" value="{{$g->id}}" name="id" required>
                
                                <div class="form-group">
                                    <h4>Apakah Anda Ingin Menghapus Data ini?</h4>
                                </div>
                
                            
                            </div>
                
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                
                            </form>
                            </div>
                        </div>
                </div>
                </div>
                    @endforeach
        
            </div> 
        </div>
    </div>
</div>

    
@endsection