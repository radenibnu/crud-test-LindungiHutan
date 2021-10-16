@extends('layouts.frontend')

@section('content')    

    {{-- <h1 class="h3 mb-2 text-gray-800">List Data Pembayaran SPP</h1> --}}

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h4>List Data Produser</h4>
            <a href="{{ route('produser.create') }}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add Data Produser</span>
            </a>
          
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Kode Produser</th>
                             <th>Nama Produser</th>
                             <th>International</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                        @forelse ($produsers as $produser)
                        <tr>
                            <td>  {{ $loop->iteration}}</td>
                            <td> {{$produser->kd_produser}}</td>
                            <td> {{$produser->nm_produser}}</td>
                            <td> {{$produser->international}}</td>
                            <td>
                                <form action="{{ route('produser.destroy', $produser->id) }}" method="POST">
                                    {{-- <a href="{{ route('produser.show', $spp->id) }}" type="" class=""><input type="button" class="btn btn-success btn-sm" value="View"></a> --}}
                                    <a href="{{route('produser.edit', $produser->id) }}" type="" class=""><input type="button" class="btn btn-warning btn-sm" value="Edit"></a>

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