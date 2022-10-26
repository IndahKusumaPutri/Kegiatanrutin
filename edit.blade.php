@extends('layouts.app')
@section('menu', 'master')
@section('submenu', 'rutin')
@section('title', 'Data Kegiatan')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1 class="m-0">Ubah Data Kegiatan Rutin Posyandu</h1> --}}
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
                        <div class="float-sm-left">
                            <p>Ubah Data Kegiatan</p>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form class="form-horizontal" action="/rutin/edit/{{ $rutin->id_kegiatan }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="POST">
                            <div class="form-group row">
                                <label class="control-label col-sm-2">Tanggal Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tanggal" value="{{ $rutin->tanggal }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-2">Waktu Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="time" class="form-control" name="waktu" value="{{ $rutin->waktu }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-2">Jenis Layanan</label>
                                <div class="col-sm-10">
                                    <select class="col-sm-12 form-control" name="id_layanankesehatan">
                                        @foreach ($lakes as $key => $val)
                                            <option value="<?= $val['id_layanankesehatan'] ?>"
                                                {{ $val->lakes === $regispasien->id_layanankesehatan ? 'selected' : '' }}>
                                                {{ $val['nama_layanan'] }}  {{ $val['jenis_layanan'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-2">Tempat Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tempat" value="{{ $rutin->tempat }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-2">Keterangan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="keterangan"
                                        value="{{ $rutin->keterangan }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-offset-2 col-sm-6">
                                    <a href="{{ route('rutin.index') }}" class="btn btn-outline-danger">Batal</a>
                                    <button type="submit" class="btn btn-outline-primary" onclick="return confirm('Yakin anda ingin mengubah data tersebut?')">Perbaharui Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
