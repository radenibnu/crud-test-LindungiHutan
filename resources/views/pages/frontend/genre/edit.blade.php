@extends('layouts.frontend')

@section('content')
<div class="container pt-5">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Edit Data Genre</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('genre.update', $genre->id)}}"  enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="kd_genre">Kode Genre</label>
                    <input type="text" class="form-control" name="kd_genre" id="kd_genre" value="{{old('kd_genre') ? old('kd_genre'): $genre->kd_genre }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="nm_genre">Nama Genre</label>
                    <input type="text" class="form-control" name="nm_genre" id="nm_genre" value="{{old('nm_genre') ? old('nm_genre'): $genre->nm_genre }}">
                    </div>
                </div>
            </div>

                <div class="card-footer">
                    <div class="d-grid">
                        <button class="btn btn-success" type="submit">Edit</button>
                        <a href="{{ route('genre.index')}}" class="btn btn-warning" type="cancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection