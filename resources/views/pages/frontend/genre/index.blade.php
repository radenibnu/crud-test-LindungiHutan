@extends('layouts.frontend')

@section('content')    

    <h1 class="h3 mb-2 text-gray-800">List Data Genre Film</h1>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
            <a href="{{ route('genre.create') }}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add Data Genre</span>
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
                             <th>Kode Genre</th>
                             <th>Nama Genre</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                        @forelse ($genres as $genre)
                        <tr>
                            <td> {{ $loop->iteration}}</td>
                            <td> {{$genre->kd_genre}}</td>
                            <td> {{$genre->nm_genre}}</td>
                            <td>
                                <form action="{{ route('genre.destroy', $genre->id) }}" method="POST">
                                    {{-- <a href="{{ route('genre.show', $genre->id) }}" type="" class=""><input type="button" class="btn btn-success btn-sm" value="View"></a> --}}
                                    <a href="{{route('genre.edit', $genre->id) }}" type="" class=""><input type="button" class="btn btn-warning btn-sm" value="Edit"></a>

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