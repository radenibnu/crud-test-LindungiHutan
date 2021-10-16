@extends('layouts.frontend')

@section('content')
<div class="container pt-5">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Edit Data SPP</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('film.update', $film->id)}}"  enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="kd_film">Kode Film</label>
                    <input type="text" class="form-control" name="kd_film" id="kd_film" value="{{old('kd_film') ? old('kd_film'): $film->kd_film }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="nm_film">Nama Film</label>
                    <input type="text" class="form-control" name="nm_film" id="nm_film" value="{{old('nm_film') ? old('nm_film'): $film->nm_film }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="genre">Genre</label>
                    <input type="text" class="form-control" name="genre" id="genre" value="{{old('genre') ? old('genre'): $film->genre }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="artis">Artis</label>
                    <input type="text" class="form-control" name="artis" id="artis" value="{{old('artis') ? old('artis'): $film->artis }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="produser">Produser</label>
                    <input type="text" class="form-control" name="produser" id="produser" value="{{old('produser') ? old('produser'): $film->produser }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="pendapatan">Pendapatan</label>
                    <input type="text" class="form-control" name="pendapatan" id="pendapatan" value="{{old('pendapatan') ? old('pendapatan'): $film->pendapatan }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="nominasi">Nominasi</label>
                    <input type="text" class="form-control" name="nominasi" id="nominasi" value="{{old('nominasi') ? old('nominasi'): $film->nominasi }}">
                    </div>
                </div>
            </div>

                <div class="card-footer">
                    <div class="d-grid">
                        <button class="btn btn-success" type="submit">Edit</button>
                        <a href="{{ route('film.index')}}" class="btn btn-warning" type="cancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection