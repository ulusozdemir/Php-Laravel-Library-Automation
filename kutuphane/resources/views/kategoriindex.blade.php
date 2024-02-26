@extends('anasayfa')

@section('title', 'Kategoriler')

@section('content')
    <h1>Kategoriler</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>Kategori</th>
            </tr>
            @foreach($kategoriler as $kategori)
                <tr>
                    <td>{{ $kategori->tur }}</td>
                    <td>
                    <a href="{{ route('kategori.duzenle', ['id' => $kategori->id]) }}" class="button">Düzenle</a>
                    <a href="{{ route('kategori.sil', ['id' => $kategori->id]) }}" class="button">Sil</a>
                </tr>
            @endforeach
        </table>
        <a href="{{ route('kategori.ekle') }}" class="btn btn-primary">Yeni Kategori Ekle</a>
    </div>
@endsection
