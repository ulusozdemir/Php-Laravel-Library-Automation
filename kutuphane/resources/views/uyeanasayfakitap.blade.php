@extends('uyeanasayfa')

@section('title', 'Kitaplar')

@section('content')

    <h1>Kitaplar</h1>
    <form action="{{ route('uyeanasayfakitap') }}" method="GET">
    <input type="text" name="arama" placeholder="...">
    <button type="submit">Ara</button>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>Kitap Adi</th>
                <th>Kategori</th>
                <th>Basim Yili</th>
                <th>Yayin Evi</th>
                <th>Durum</th>
            </tr>
            @foreach($kitaplar as $kitap)
                <tr>
                    <td>{{ $kitap->kitapadi }}</td>
                    <td>{{ $kitap->kategori->tur }}</td>
                    <td>{{ $kitap->basimyili }}</td>
                    <td>{{ $kitap->yayinevi }}</td>
                    @if ($kitap->durum == '1')
                        <td>Stokta Var</td>
                    @else
                        <td>Stokta Yok</td>
                    @endif
                    <td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
