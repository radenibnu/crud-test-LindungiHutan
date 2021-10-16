@extends('layouts.frontend')

@section('content')
<div class="container pt-5">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Input Data Negara</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('negara.store')}}"  enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="kd_negara">Kode Negara</label>
                    <input type="text" class="form-control @error('kd_negara'){{ 'is-invalid' }} @enderror" name="kd_negara" id="kd_negara">
                    <span class="text-danger">
                        @error('kd_negara')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="nm_negara">Nama Negara</label>
                    <input type="text" class="form-control @error('nm_negara'){{ 'is-invalid' }} @enderror" name="nm_negara" id="nm_negara">
                    <span class="text-danger">
                        @error('nm_negara')
                            {{ $message }}
                        @enderror
                    </span>
                    
                    </div>
                </div>
            </div>

                <div class="card-footer">
                    <div class="d-grid">
                        <button class="btn btn-success" type="submit">Add</button>
                        <a href="{{ route('negara.index')}}" class="btn btn-warning" type="cancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection