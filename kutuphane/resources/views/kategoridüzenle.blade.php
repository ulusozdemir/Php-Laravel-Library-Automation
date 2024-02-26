@extends('anasayfa')

@section('title', 'Kategori Düzenle')

@section('content')
    <h1>Kategori Düzenle</h1>
    <form method="POST" action="{{ route('kategori.guncelle', ['id' => $kategoriler->id]) }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="tur">Kategori Türü:</label>
            <input type="text" class="form-control" name="tur" value="{{ $kategoriler->tur }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
@endsection
