@extends('master.tampilan')
@section('judul','Mahasiswa')
@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

@if(Session::get('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Berhasil!</strong> {{Session::get('pesan')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
 <i class="fas fa-plus"></i> Tambah Mahasiswa
</button></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Semester</th>
                <th>Gender</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>

            <tbody>
                @php $no=1; @endphp
               @foreach ($mhs as $data)
             <tr>
             
                 <th>{{$no++;}}</th>
                 <td>{{$data->nama}}</td>
                 <td>{{$data->progdi}}</td>
                 <td>{{$data->semester}}</td>
                 <td>{{$data->gender}}</td>
                 <td>{{$data->alamat}}</td>
                 <td>
                   <form method="post" action="/mahasiswa/hapus/{{$data->id}}" class="d-inline">
                    @csrf
                    @method('delete')
                     <button onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger"> <i class="fas fa-trash"></i> Hapus</button>
                   </form>
                   <a href="/mahasiswa/edit/{{$data->id}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i>  Edit</a>
                 </td>
               @endforeach 
             </tr>

            </tbody>
          </table>
        </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
       Universitas Nasional
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Tambah Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <form method="post" action="">
       @csrf
       <div class="grup">
         <label>Nama</label>
         <input type="text" name="nama" class="form-control" autocomplete="off">
         @error('nama')
         <p class="text-danger">{{$message}}</p>
         @enderror
       </div>

        <div class="grup">
         <label>Program Studi</label>
         <input type="text" name="progdi" class="form-control" autocomplete="off">
         @error('progdi')
         <p class="text-danger">{{$message}}</p>
         @enderror
       </div>
 <div class="grup">
         <label>Semester</label>
         <select name="semester" class="form-control">
           <option value="pilih">Pilih</option>
            <option value="Semester 1">Semester 1</option>
            <option value="Semester 2">Semester 2</option>
            <option value="Semester 3">Semester 3</option>
            <option value="Semester 4">Semester 4</option>
            <option value="Semester 5">Semester 5</option>
            <option value="Semester 6">Semester 6</option>
            <option value="Semester 7">Semester 7</option>
            <option value="Semester 8">Semester 8</option>
         </select>
         
       </div>

          <div class="grup">
         <label>Gender</label>
         <input type="text" name="gender" class="form-control" autocomplete="off">
         @error('gender')
         <p class="text-danger">{{$message}}</p>
         @enderror
       </div>


          <div class="grup">
         <label>Alamat</label>
        <textarea name="alamat" class="form-control" rows="12" cols="11"></textarea>
         @error('gender')
         <p class="text-danger">{{$message}}</p>
         @enderror
       </div>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
           </form>
    </div>
  </div>
</div>

@endsection