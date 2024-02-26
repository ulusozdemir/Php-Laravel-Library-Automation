@extends('anasayfa')

@section('title', 'Emanet Ekle')

@section('content')
    <h1></h1>
    <form method="POST" action="{{ route('emanet.kaydet') }}">
        @csrf
        <div class="form-group">
            <label for="emanetkitap_id">Emanet Kitap:</label>
            <select class="form-control" name="emanetkitap_id" required>
                <option value="">Kitap Seçin</option>
                @foreach ($bosKitaplar as $kitap)
                    <option value="{{ $kitap->id }}">{{ $kitap->kitapadi }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="uye_id">Verilen Uye:</label>
            <select class="form-control" name="uye_id" required>
                <option value="">Uye Secin</option>
                @foreach ($bosUyeler as $uye)
                    <option value="{{ $uye->id }}">{{ $uye->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="alinmatarihi">Alınma Tarihi:</label>
            <input type="date" class="form-control" name="alinmatarihi" required>
        </div>

        <div class="form-group">
            <label for="sontarih">Son Tarih:</label>
            <input type="date" class="form-control" name="sontarih" required>
        </div>
        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>
@endsection
