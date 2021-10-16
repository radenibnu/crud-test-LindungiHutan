@extends('layouts.frontend')

@section('content')
<div class="container pt-5">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Edit Data SPP</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('artis.update', $artis->id)}}"  enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="nama">Kode Artis</label>
                    <input type="text" class="form-control" name="kd_artis" id="kd_artis" value="{{old('kd_artis') ? old('kd_artis'): $artis->kd_artis }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="kelas">Nama Artis</label>
                    <input type="text" class="form-control" name="nm_artis" id="nm_artis" value="{{old('nm_artis') ? old('nm_artis'): $artis->nm_artis }}">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status"> Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin"
                            value="{{ old('jk') ? old('jk') : $artis->jk }}">
                            <option>PRIA</option>
                            <option>WANITA</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="bayaran">Bayaran</label>
                    <input type="text" class="form-control" name="bayaran" id="bayaran" value="{{old('bayaran') ? old('bayaran'): $artis->bayaran }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="bayaran">Award</label>
                    <input type="text" class="form-control" name="award" id="award" value="{{old('award') ? old('award'): $artis->award }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="bayaran">Negara</label>
                    <input type="text" class="form-control" name="negara" id="negara" value="{{old('negara') ? old('negara'): $artis->negara }}">
                    </div>
                </div>
            </div>

                <div class="card-footer">
                    <div class="d-grid">
                        <button class="btn btn-success" type="submit">Edit</button>
                        <a href="{{ route('artis.index')}}" class="btn btn-warning" type="cancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection