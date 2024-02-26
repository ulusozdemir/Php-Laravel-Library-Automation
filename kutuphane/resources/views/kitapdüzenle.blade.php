@extends('anasayfa')

@section('title', 'Kitap Düzenle')

@section('content')
    <h1>Kategori Düzenle</h1>
    <form method="POST" action="{{ route('kitap.guncelle', ['id' => $kitaplar->id]) }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="kitapadi">Kitap Adi:</label>
            <input type="text" class="form-control" name="kitapadi" value="{{ $kitaplar->kitapadi }}" required>
        </div>
        <div class="form-group">
            <label for="kategori_id">Kategori:</label>
            <select class="form-control" name="kategori_id" value="{{ $kitaplar->kategori_id }}" required>
                <option value="">Kategori Seçin</option>
                @foreach ($kategoriler as $kategori)
                <option value="{{ $kategori->id }}" {{ $kitaplar->kategori_id == $kategori->id ? 'selected' : '' }}>
                    {{ $kategori->tur }}
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="basimyili">Basim Yili:</label>
            <input type="text" class="form-control" name="basimyili" value="{{ $kitaplar->basimyili }}" required>
        </div>
        <div class="form-group">
            <label for="yayinevi">Yayin Evi:</label>
            <input type="text" class="form-control" name="yayinevi" value="{{ $kitaplar->yayinevi }}" required>
        </div>
        <div class="form-group">
            <label for="durum">Durum:</label>
            <input type="text" class="form-control" name="durum" value="{{ $kitaplar->durum }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
@endsection
