@extends('layouts.frontend')

@section('content')    

    <h1 class="h3 mb-2 text-gray-800">List Data Artis</h1>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
            <a href="{{ route('artis.create') }}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add Data Artis</span>
            </a>
         
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Kode Artis</th>
                             <th>Nama Artis</th>
                             <th>Jenis Kelamin</th>
                             <th>Bayaran</th>
                             <th>Award</th>
                             <th>Negara</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                        @forelse ($artis as $row)
                        <tr>
                            <td> {{ $loop->iteration}}</td>
                            <td> {{$row->kd_artis}}</td>
                            <td> {{$row->nm_artis}}</td>
                            <td> {{$row->jk}}</td>
                            <td> {{$row->bayaran}}</td>
                            <td> {{$row->award}}</td>
                            <td> {{$row->negara}}</td>
                            <td>
                                <form action="{{ route('artis.destroy', $row->id) }}" method="POST">
                                    {{-- <a href="{{ route('artis.show', $row->id) }}" type="" class=""><input type="button" class="btn btn-success btn-sm" value="View"></a> --}}
                                    <a href="{{route('artis.edit', $row->id) }}" type="" class=""><input type="button" class="btn btn-warning btn-sm" value="Edit"></a>

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