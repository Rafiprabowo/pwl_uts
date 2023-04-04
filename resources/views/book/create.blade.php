@extends('layouts.app') 
   
@section('content') 
    
<div class="container mt-5"> 
    
    <div class="row justify-content-center align-items-center"> 
        <div class="card" style="width: 24rem;"> 
            <div class="card-header"> 
            Tambah Buku 
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
            <form method="post" action="{{ route('buku.store') }}" id="myForm"> 
            @csrf 
                <div class="form-group"> 
                    <label for="kodebuku">Kode Buku</label> <input type="text" name="kodebuku" class="formcontrol" id="kodebuku" aria-describedby="kodebuku" >                 
                </div> 
                <div class="form-group"> 
                    <label for="judul">Judul</label>                     
                    <input type="judul" name="judul" class="formcontrol" id="judul" aria-describedby="judul" >                 
                </div> 
                <div class="form-group"> 
                    <label for="pengarang">Pengarang</label>     
                    <input type="pengarang" name="pengarang" class="formcontrol" id="pengarang" aria-describedby="password" >                 
                </div> 
                <div class="form-group"> 
                    <label for="jenisbuku">Jenis Buku</label> <input type="jenisbuku" name="jenisbuku" class="formcontrol" id="jenisbuku" aria-describedby="jenisbuku" >                 
                </div> 
                <div class="form-group"> 
                   <label for="harga">Harga</label>                     
                   <input type="harga" name="harga" class="formcontrol" id="harga" aria-describedby="harga" >                 
               </div> 
               <div class="form-group"> 
                <label for="qty">Qty</label>                     
                <input type="qty" name="qty" class="formcontrol" id="qty" aria-describedby="No_Handphone" >                 
            </div> 
            <button type="submit" class="btn btn-primary">Submit</button> 
            </form> 
            </div> 
        </div> 
    </div> 
    </div> 
@endsection 
                
