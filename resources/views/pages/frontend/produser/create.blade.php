@extends('layouts.frontend')

@section('content')
<div class="container pt-5">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Input Data Produser</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('produser.store')}}"  enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="kd_produser">Kode Produser</label>
                    <input type="text" class="form-control @error('kd_produser'){{ 'is-invalid' }} @enderror" name="kd_produser" id="kd_produser">
                    <span class="text-danger">
                        @error('kd_produser')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="nm_produser">Nama Produser</label>
                    <input type="text" class="form-control @error('nm_produser'){{ 'is-invalid' }} @enderror" name="nm_produser" id="nm_produser">
                    <span class="text-danger">
                        @error('nm_produser')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                </div>
          

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="international">International</label>
                    <input type="text" class="form-control @error('international'){{ 'is-invalid' }} @enderror" name="international" id="international">
                    <span class="text-danger">
                        @error('international')
                            {{ $message }}
                        @enderror
                    </span>
                    
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <div class="d-grid">
                    <button class="btn btn-success" type="submit">Add</button>
                    <a href="{{ route('produser.index')}}" class="btn btn-warning" type="cancel">Cancel</a>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection