@extends('layouts.frontend')

@section('content')
<div class="container pt-5">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Input Data Artis</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('artis.store')}}"  enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Kode Artis</label>
                    <input type="text" class="form-control @error('kd_artis'){{ 'is-invalid' }} @enderror" name="kd_artis" >
                    <span class="text-danger">
                        @error('kd_artis')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Nama Artis</label>
                    <input type="text" class="form-control  @error('nm_artis'){{ 'is-invalid' }} @enderror" name="nm_artis">
                    <span class="text-danger">
                        @error('nm_artis')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jk" class="form-control @error('jk'){{ 'is-invalid' }} @enderror">
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                        <span class="text-danger">
                            @error('jk')
                                {{ $message }}
                            @enderror
                        </span>
                    </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Bayaran</label>
                    <input type="text" class="form-control @error('bayaran'){{ 'is-invalid' }} @enderror" name="bayaran">
                    <span class="text-danger">
                        @error('bayaran')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Award</label>
                    <input type="text" class="form-control @error('award'){{ 'is-invalid' }} @enderror" name="award">
                    <span class="text-danger">
                        @error('award')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Negara</label>
                    <input type="text" class="form-control @error('negara'){{ 'is-invalid' }} @enderror" name="negara">
                    <span class="text-danger">
                        @error('negara')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                </div>

              
            </div>

                <div class="card-footer">
                    <div class="d-grid">
                        <button class="btn btn-success" type="submit">Add</button>
                        <a href="{{ route('artis.index')}}" class="btn btn-warning" type="cancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection