@extends('layouts.frontend')

@section('content')
<div class="container pt-5">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Edit Data Produser</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('produser.update', $produser->id)}}">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="kd_produser">Kode Produser</label>
                    <input type="text" class="form-control" name="kd_produser" id="kd_produser" value="{{old('kd_produser') ? old('kd_produser'): $produser->kd_produser }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="nm_produser">Nama Produser</label>
                    <input type="text" class="form-control" name="nm_produser" id="nm_produser" value="{{old('nm_produser') ? old('nm_produser'): $produser->nm_produser }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="international">International</label>
                    <input type="text" class="form-control" name="international" id="international" value="{{old('international') ? old('international'): $produser->international }}">
                    </div>
                </div>
             

            </div>

            <div class="card-footer">
                <div class="d-grid">
                    <button class="btn btn-success" type="submit">Edit</button>
                    <a href="{{ route('produser.index')}}" class="btn btn-warning" type="cancel">Cancel</a>
                </div>
            </div>

            </form>
        </div>
    </div>
</div>
@endsection