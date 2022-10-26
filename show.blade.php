@extends("layouts.app")
@section("menu","master")
@section("submenu","rutin")
@section('title','Data Kegiatan')
@section("content")
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="container-fluid">
    <div class="row"> 
        <div class="col-md-12">
            <div class="card" style="margin-top: 10px;">
                <div class="card-header">
                    <div class="float-sm-left"> <p>Detail Data Kegiatan Rutin</p> </div> 
                </div> 
                'tanggal','waktu','jenis_kegiatan','tempat','keterangan'
                <form class="form-horizontal">
                <div class="card-body"> {{ csrf_field() }}
                   <input type="hidden" name="_method" value="PUT">
                        <div class="form-group row"> 
                            <label class="col-sm-2">Tanggal Kegiatan</label> 
                            <div class="col-sm-10"> 
                                <p>{{ $rutin->tanggal }}</p>
                            </div> 
                        </div> 
                        <div class="form-group row"> 
                            <label class="col-sm-2">Waktu Kegiatan</label> 
                            <div class="col-sm-10"> 
                                <p>{{ $rutin->waktu }}</p>
                            </div> 
                        </div>
                        <div class="form-group row"> 
                            <label class="col-sm-2">Jenis Layanan</label> 
                            <div class="col-sm-10"> 
                                <p>{{ $rutin->jenis_kegiatan }}</p>
                            </div> 
                        </div>
                        <div class="form-group row"> 
                            <label class="col-sm-2">Tempat Kegiatan</label> 
                            <div class="col-sm-10"> 
                                <p>{{ $rutin->tempat }}</p>
                            </div> 
                        </div>
                        <div class="form-group row"> 
                            <label class="col-sm-2">Keterangan</label> 
                            <div class="col-sm-10"> 
                                <p>{{ $rutin->keterangan }}</p>
                            </div> 
                        </div>
                        <div class="form-group row">
                         <div class="col-sm-offset-2 col-sm-10"> 
                             <a href="{{ route('rutin.index') }}" class="btn btn-outline-danger">Kembali</a> 
                        </div> 
                </div>
                </form>
            </div> 
        </div> 
    </div> 
</div> 
@endsection