@extends('buku.layout')

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
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
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
                        <label for="judul">Judul</label> 
                        <input type="text" name="judul" class="form-control" id="judul" aria-describedby="judul" > 
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label> 
                        <input type="penerbit" name="penerbit" class="form-control" id="penerbit" aria-describedby="penerbit" > 
                    </div>
                    <div class="form-group">
                        <label for="pengarang">Pengarang</label> 
                        <input type="pengarang" name="pengarang" class="form-control" id="pengarang" aria-describedby="pengarang" > 
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis</label> 
                        <input type="jenis" name="jenis" class="form-control" id="jenis" aria-describedby="jenis" > 
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label> 
                        <input type="stok" name="stok" class="form-control" id="stok" aria-describedby="stok" > 
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>






            
        </div>
    </div>
</div>
@endsection 