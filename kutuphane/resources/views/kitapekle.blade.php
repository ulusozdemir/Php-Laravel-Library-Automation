@extends('anasayfa')

@section('title', 'Kitap Ekle')

@section('content')
    <h1>Yeni Kitap Ekle</h1>
    <form method="POST" action="{{ route('kitap.kaydet') }}">
        @csrf
        <div class="form-group">
            <label for="kitapadi">Kitap Adi:</label>
            <input type="text" class="form-control" name="kitapadi" required>
        </div>
        <div class="form-group">
            <label for="kategori_id">Kategori:</label>
            <select class="form-control" name="kategori_id" required>
                <option value="">Kategori Seçin</option>
                @foreach ($kategoriler as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->tur }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="basimyili">Basim Yili:</label>
            <input type="text" class="form-control" name="basimyili" required>
        </div>
        <div class="form-group">
            <label for="yayinevi">Yayin Evi:</label>
            <input type="text" class="form-control" name="yayinevi" required>
        </div>
        <div class="form-group">
            <label for="durum">Durum:</label>
            <input type="text" class="form-control" name="durum" required>
        </div>

        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>
@endsection
