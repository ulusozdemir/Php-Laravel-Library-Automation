@extends('anasayfa')

@section('title', 'Kategori Ekle')

@section('content')
    <h1>Yeni Kategori Ekle</h1>
    <form method="POST" action="{{ route('kategori.kaydet') }}">
        @csrf
        <div class="form-group">
            <label for="tur">Kategori Türü:</label>
            <input type="text" class="form-control" id="tur" name="tur" required>
        </div>
        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>
@endsection
