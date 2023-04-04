@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row"> 
    <div class="col-lg-12 margin-tb"> 
        <div class="pull-left mt-2"> 
            <h2>BUKU</h2>             </div> 
        <div class="float-right my-2"> 
            <a class="btn btn-
success" href="{{ route('buku.create') }}"> Input Buku</a> 
        </div> 
    </div> 
</div> 

@if ($message = Session::get('success')) 
    <div class="alert alert-success"> 
        <p>{{ $message }}</p> 
    </div> 
@endif 

<table class="table table-bordered"> 
    <tr> 
        <th>Kode_buku</th> 
        <th>Judul</th> 
        <th>Pengarang</th> 
        <th>Jenis Buku</th> 
        <th>Harga</th>
        <th>QTY</th> 
        <th width="280px">Action</th> 
    </tr> 
    @foreach ($books as $book) 
    <tr> 
         
        <td>{{ $book->kode_buku }}</td> 
        <td>{{ $book->judul }}</td> 
        <td>{{ $book->pengarang }}</td> 
        <td>{{ $book->jenis_buku }}</td> 
        <td>{{ $book->qty }}</td>             <td> 
        <form action="{{ route('buku.destroy',$book->kode_buku) }}" method="POST"> 
                <a class="btn btn-
info" href="{{ route('buku.show',$book->kode_buku) }}">Show</a>  
                <a class="btn btn-
primary" href="{{ route('buku.edit',$book->kode_buku) }}">Edit</a>  
                @csrf 

                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete </button>
        </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
