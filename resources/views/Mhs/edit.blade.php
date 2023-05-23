@extends('master.tampilan')
@section('judul','Edit')
@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit</h1>
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

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit</h3>

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
          <form method="post" action="/mahasiswa/update/{{$data->id}}">
          	@csrf
          	<div class="grup">
          		<label>Nama</label>
          		<input type="text" name="nama" value="{{$data->nama}}" autocomplete="off" class="form-control">
          		  @error('nama')
         <p class="text-danger">{{$message}}</p>
         @enderror
          	</div>

          		<div class="grup">
          		<label>Program Studi</label>
          		<input type="text" name="progdi" value="{{$data->progdi}}" autocomplete="off" class="form-control">
          		  @error('progdi')
         <p class="text-danger">{{$message}}</p>
         @enderror
          	</div>

          		<div class="grup">
          		<label>Semester</label>
          		     <select name="semester" class="form-control">
           <option value="pilih">Pilih</option>
          <option @if($data->semester=='Semester 1') selected @endif value="Semester 1">Semester 1</option>
            <option @if($data->semester=='Semester 2') selected @endif value="Semester 2">Semester 2</option>
            <option @if($data->semester=='Semester 3') selected @endif value="Semester 3">Semester 3</option>
            <option @if($data->semester=='Semester 4') selected @endif value="Semester 4">Semester 4</option>
            <option @if($data->semester=='Semester 5') selected @endif value="Semester 5">Semester 5</option>
            <option @if($data->semester=='Semester 6') selected @endif value="Semester 6">Semester 6</option>
            <option @if($data->semester=='Semester 7') selected @endif value="Semester 7">Semester 7</option>
            <option @if($data->semester=='Semester 8') selected @endif value="Semester 8">Semester 8</option>
         </select>
          		
          	</div>

          	  <div class="grup">
         <label>Gender</label>
         <input type="text" name="gender" value="{{$data->gender}}" class="form-control" autocomplete="off">
         @error('gender')
         <p class="text-danger">{{$message}}</p>
         @enderror
       </div>


          <div class="grup">
         <label>Alamat</label>
        <textarea name="alamat" class="form-control" rows="12" cols="11"><{{$data->alamat}}</textarea>
         @error('gender')
         <p class="text-danger">{{$message}}</p>
         @enderror
       </div>

       <button class="btn btn-primary mt-4"><i class="fas fa-save"></i> Save</button>

          </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection