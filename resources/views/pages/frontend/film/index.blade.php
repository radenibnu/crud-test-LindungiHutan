@extends('layouts.frontend')

@section('content')    

    <h1 class="h3 mb-2 text-gray-800">List Data FIlmn</h1>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
            <a href="{{ route('film.create') }}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add Data FIlm</span>
            </a>
            {{-- <a href="{{ route('form.cetak') }}" class="btn btn-primary btn-icon-split">
                <span class="text">Export to PDF</span>
            </a> --}}
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Kode Film</th>
                             <th>Nama FIlm</th>
                             <th>Genre</th>
                             <th>Artis</th>
                             <th>Produser</th>
                             <th>Pendapatan</th>
                             <th>Nominasi</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                        @forelse ($films as $film)
                        <tr>
                            <td> {{ $loop->iteration}}</td>
                            <td> {{$film->kd_film}}</td>
                            <td> {{$film->nm_film}}</td>
                            <td> {{$film->genre}}</td>
                            <td> {{$film->artis}}</td>
                            <td> {{$film->produser}}</td>
                            <td> {{$film->pendapatan}}</td>
                            <td> {{$film->nominasi}}</td>
                            <td>
                                <form action="{{ route('film.destroy', $film->id) }}" method="POST">
                                    {{-- <a href="{{ route('film.show', $film->id) }}" type="" class=""><input type="button" class="btn btn-success btn-sm" value="View"></a> --}}
                                    <a href="{{route('film.edit', $film->id) }}" type="" class=""><input type="button" class="btn btn-warning btn-sm" value="Edit"></a>

                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm btn-table" type="submit" onclick="return confirm('Delete Confirmation')">
                                       Delete
                                        </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            <strong> Oopps ! </strong> Data kosong
                          </div>
                        @endforelse
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
@endsection