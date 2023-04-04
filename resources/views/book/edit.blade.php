@extends('layouts.app') 
@section('content') 
<div class="container mt-5"> 
    
    <div class="row justify-content-center align-items-center"> 
        <div class="card" style="width: 24rem;"> 
            <div class="card-header"> 
            Edit Buku
            </div> 
            <div class="card-body"> 
                @if ($errors->any()) 
                <div class="alert alert-danger"> 
                    <strong>Whoops!</strong> There were some problems with your i nput.<br><br> 
                    <ul> 
                        @foreach ($errors->all() as $error) 
                            <li>{{ $error }}</li> 
                        @endforeach 
                    </ul> 
                </div> 
            @endif 
            <form method="post" action="{{ route('buku.update', $buku-
            >kode_buku) }}" id="myForm"> 
                        @csrf 
                        @method('PUT') 
                            <div class="form-group"> 
                                <label for="kode_buku">Kode Buku</label>  <input type="text" name="kodebuku" class="formcontrol" id="kodebuku" value="{{ $buku->kode_buku }}" ariadescribedby="Nim" >                 
                            </div> 
                            <div class="form-group"> 
                                <label for="judul">Judul</label>     <input type="text" name="judul" class="formcontrol" id="judul" value="{{ $buku->judul }}" ariadescribedby="judul" >                 
                            </div> 
                            <div class="form-group"> 
                                <label for="pengarang">Pengarang</label>  <input type="pengarang" name="pengarang" class="formcontrol" id="pengarang" value="{{ $buku->pengarang }}" ariadescribedby="pengarang" >                 
                            </div> 
                            <div class="form-group"> 
                                <label for="jenisbuku">Jenis Buku</label> <input type="jenisbuku" name="jenisbuku" class="formcontrol" id="jenisbuku" value="{{ $buku->jenis_buku }}" ariadescribedby="jenisbuku" >                 
                            </div> 
                            <div class="form-group"> 
                                <label for="harga">Harga</label>                     
                                <input type="harga" name="harga" class="formcontrol" id="harga" value="{{ $buku->harga }}" ariadescribedby="harga" >                 
                            </div> 
                            <div class="form-group"> 
                                <label for="qty">QTY</label>                     
                                <input type="qty" name="qty" class="formcontrol" id="qty" value="{{ $buku->qty }}" ariadescribedby="qty" >                 
                            </div> 
                        <button type="submit" class="btn btn-primary">Submit</button> 
                        </form> 
                        </div> 
                    </div> 
                </div> 
            </div> @endsection 
            