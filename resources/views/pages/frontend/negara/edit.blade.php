@extends('layouts.frontend')

@section('content')
<div class="container pt-5">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Edit Data Negara</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('negara.update', $negara->id)}}"  enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="kd_negara">Kode Negara</label>
                    <input type="text" class="form-control" name="kd_negara" id="kd_negara" value="{{old('kd_negara') ? old('kd_negara'): $negara->kd_negara }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="nm_negara">Nama Negara</label>
                    <input type="text" class="form-control" name="nm_negara" id="nm_negara" value="{{old('nm_negara') ? old('nm_negara'): $negara->nm_negara }}">
                    </div>
                </div>
            </div>

                <div class="card-footer">
                    <div class="d-grid">
                        <button class="btn btn-success" type="submit">Edit</button>
                        <a href="{{ route('negara.index')}}" class="btn btn-warning" type="cancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection