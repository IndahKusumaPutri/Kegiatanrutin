@extends('layouts.app')
@section('menu', 'master')
@section('submenu', 'rutin')
@section('title','Data Kegiatan')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1 class="m-0">Tambah Data Kegiatan Rutin Posyandu</h1> --}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="margin-top: 10px">
                        <div class="panel panel-default">
                            <div class="card-header">
                                <!--/.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card" style="margin-top: 10px;">
                                                    <div class="card-header">
                                                        <div class="float-sm-left">
                                                            <p>Tambah Data Kegiatan</p>
                                                        </div>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">
                                                        <form class="form-horizontal" action="/rutin/store" method="post">
                                                            {{ csrf_field() }}
                                                            <div class="form-group row">
                                                                <label class="control-label col-sm-2">Tanggal
                                                                    Kegiatan</label>
                                                                <div class="col-sm-10">
                                                                    <input type="date" class="form-control"
                                                                        name="tanggal">
                                                                    @if ($errors->has('tanggal'))
                                                                        <div class="date-danger">
                                                                            {{ $errors->first('tanggal') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="control-label col-sm-2">Waktu Kegiatan</label>
                                                                <div class="col-sm-10">
                                                                    <input type="time" class="form-control"
                                                                        name="waktu">
                                                                    @if ($errors->has('waktu'))
                                                                        <div class="time-danger">
                                                                            {{ $errors->first('waktu') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="control-label col-sm-2">Jenis Layanan</label>
                                                                <div class="col-sm-10">
                                                                    <select class="col-sm-12 form-control" name="id_layanankesehatan">
                                                                        @foreach ($lakes as $key => $val)
                                                                            :
                                                                            <option value="<?= $val['id_layanankesehatan'] ?>">
                                                                                {{ $val['nama_layanan'] }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @if ($errors->has('id_layanankesehatan'))
                                                                        <div class="text-danger">
                                                                            {{ $errors->first('id_layanankesehatan') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="control-label col-sm-2">Tempat
                                                                    Kegiatan</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"
                                                                        name="tempat">
                                                                    @if ($errors->has('tempat'))
                                                                        <div class="text-danger">
                                                                            {{ $errors->first('tempat') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="control-label col-sm-2">Keterangan</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"
                                                                        name="keterangan">
                                                                    @if ($errors->has('keterangan'))
                                                                        <div class="text-danger">
                                                                            {{ $errors->first('keterangan') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-offset-5 col-sm-6">
                                                                        <a href="{{ route('rutin.index') }}" class="btn btn-outline-danger">Kembali</a>
                                                                        <button type="submit" class="btn btn-outline-primary" onclick="return confirm('Yakin anda ingin menyimpan data tersebut?')">Simpan</i></button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
