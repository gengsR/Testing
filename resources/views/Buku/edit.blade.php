@extends('buku.layout')

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
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('buku.update', $Buku->id_buku) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                    <label for="judul">Judul</label>
                        <input type="judul" name="judul" class="form-control" id="judul" value="{{ $Buku->judul }}" aria-describedby="judul">
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="penerbit" name="penerbit" class="form-control" id="penerbit" value="{{ $Buku->penerbit }}" aria-describedby="penerbit">
                    </div>
                    <div class="form-group">
                        <label for="pengarang">Pengarang</label>
                        <input type="pengarang" name="pengarang" class="form-control" id="pengarang" value="{{ $Buku->pengarang }}" aria-describedby="pengarang">
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <input type="jenis" name="jenis" class="form-control" id="jenis" value="{{ $Buku->jenis }}" aria-describedby="jenis">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" name="stok" class="form-control" id="stok" value="{{ $Buku->stok }}" aria-describedby="stok">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection