@extends('admin.layouts.master')
@section('fasilitas','active')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Edit Fasilitas</h1>
  </div>
   <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body p-0">
            <form action="{{ url('admin/fasilitas/'.$data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="p-4">
                <div class="form-group col-md-6">
                    <label for="">Nama Fasilitas</label>
                    <input type="text" value="{{ $data->nama }}" name="nama" id="" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Foto</label>
                    <br>
                    <img id="output" src="{{ asset($data->foto) }}" class="img-thumbnail mb-2" width="200px" height="200px"  />
                    <br>
                    <input type="file" name="image" class="form-control" accept="image/*" onchange="loadFile(event)">
                </div>
                <div class="form-group col-md-6">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <div class="section-body">
  </div>
</section>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
@endsection
