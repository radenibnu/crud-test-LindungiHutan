@extends('layouts.frontend')

@section('content')
<div class="container pt-5">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Input Data Genre</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('genre.store')}}"  enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="kd_genre">Kode Genre</label>
                    <input type="text" class="form-control  @error('kd_genre'){{ 'is-invalid' }} @enderror" name="kd_genre" id="kd_genre">
                    <span class="text-danger">
                        @error('kd_genre')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="nm_genre">Nama Genre</label>
                    <input type="text" class="form-control  @error('nm_genre'){{ 'is-invalid' }} @enderror" name="nm_genre" id="nm_genre">
                    <span class="text-danger">
                        @error('nm_genre')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
            </div>

                <div class="card-footer">
                    <div class="d-grid">
                        <button class="btn btn-success" type="submit">Add</button>
                        <a href="{{ route('genre.index')}}" class="btn btn-warning" type="cancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection