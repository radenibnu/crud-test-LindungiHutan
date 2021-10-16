@extends('layouts.frontend')

@section('content')
     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800">List Data Negara</h1>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
            <a href="{{ route('negara.create') }}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add Data Negara</span>
            </a>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Kode Negara</th>
                             <th>Nama Negara</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                        @forelse ($negaras as $negara)
                        <tr>
                            <td>  {{ $loop->iteration}}</td>
                            <td> {{$negara->kd_negara}}</td>
                            <td> {{$negara->nm_negara}}</td>
                            <td>
                                <form action="{{ route('negara.destroy', $negara->id) }}" method="POST">
                                    {{-- <a href="{{ route('negara.show', $negara->id) }}" type="" class=""><input type="button" class="btn btn-success btn-sm" value="View"></a> --}}
                                    <a href="{{route('negara.edit', $negara->id) }}" type="" class=""><input type="button" class="btn btn-warning btn-sm" value="Edit"></a>

                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm btn-table" type="submit" onclick="return confirm('Delete Confirmation')">
                                       Delete
                                        </button>
                                </form>
                            </td>
                        </tr>
                        @empty

                        @endforelse
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
@endsection

    {{-- @extends('layouts.admin')

@section('content')    

    <h1 class="h3 mb-2 text-gray-800">List Data Kategori Bayar</h1>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
            <a href="{{ route('kategoribayarController.create') }}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add Data Kategori Bayar</span>
            </a>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Kode Bayar</th>
                             <th>Keterangan</th>
                             <th>Biaya</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                        @forelse ($data as $row)
                        <tr>
                            <td> {{ $loop->iteration}}</td>
                            <td> {{$row->kode_bayar}}</td>
                            <td> {{$row->keterangan}}</td>
                            <td> {{$row->biaya}}</td>
                            <td>
                                <form action="{{ route('kategoribayarController.destroy', $row->id) }}" method="POST">
                                    <a href="{{ route('kategoribayarController.show', $kategoribayar->id) }}" type="" class=""><input type="button" class="btn btn-success btn-sm" value="View"></a> --}}
                                    {{-- <a href="{{route('kategoribayarController.edit', $row->id) }}" type="" class=""><input type="button" class="btn btn-warning btn-sm" value="Edit"></a>

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
         </div> --}}
     {{-- </div>
@endsection --}}