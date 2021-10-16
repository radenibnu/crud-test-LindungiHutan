@extends('layouts.frontend')

@section('content')
<div class="container pt-5">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Input Data Film</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('film.store')}}"  enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="kd_film">Kode Film</label>
                    <input type="text" class="form-control  @error('kd_film'){{ 'is-invalid' }} @enderror" name="kd_film" id="kd_film">
                    <span class="text-danger">
                        @error('kd_film')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="nm_film">Nama Film</label>
                    <input type="text" class="form-control  @error('nm_film'){{ 'is-invalid' }} @enderror" name="nm_film" id="nm_film">
                    <span class="text-danger">
                        @error('nm_film')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="genre">Genre</label>
                    <input type="text" class="form-control  @error('genre'){{ 'is-invalid' }} @enderror" name="genre" id="genre">
                    <span class="text-danger">
                        @error('genre')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="artis">Artis</label>
                    <input type="text" class="form-control  @error('artis'){{ 'is-invalid' }} @enderror" name="artis" id="artis">
                    <span class="text-danger">
                        @error('artis')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="produser">Produser</label>
                    <input type="text" class="form-control  @error('produser'){{ 'is-invalid' }} @enderror" name="produser" id="produser">
                    <span class="text-danger">
                        @error('produser')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="pendapatan">Pendapatan</label>
                    <input type="text" class="form-control  @error('pendapatan'){{ 'is-invalid' }} @enderror" name="pendapatan" id="pendapatan">
                    <span class="text-danger">
                        @error('pendapatan')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="nominasi">Nominasi</label>
                    <input type="text" class="form-control  @error('nominasi'){{ 'is-invalid' }} @enderror" name="nominasi" id="nominasi">
                    <span class="text-danger">
                        @error('nominasi')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                </div>

                
            </div>

                <div class="card-footer">
                    <div class="d-grid">
                        <button class="btn btn-success" type="submit">Add</button>
                        <a href="{{ route('film.index')}}" class="btn btn-warning" type="cancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection