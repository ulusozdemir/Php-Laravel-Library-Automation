@extends('anasayfa')

@section('title', 'Emanetler')

@section('content')
    <h1>Emanetler</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>Kitap</th>
                <th>Uye</th>
                <th>Alinma tarihi</th>
                <th>Son teslim tarihi</th>
            </tr>
            @foreach($emanetler as $emanet)
                <tr>
                    <td>{{ $emanet->kitaplar->kitapadi}}</td>
                    <td>{{ $emanet->uyeler->name}}</td>
                    <td>{{ $emanet->alinmatarihi}}</td>
                    <td>{{ $emanet->sontarih}}</td>
                    <td>
                    <a href="{{ route('emanet.sil', ['id' => $emanet->id]) }}" class="button">Teslim Alındı</a>    

                </tr>
            @endforeach
        </table>
        <a href="{{ route('emanet.ekle') }}" class="btn btn-primary">Kitap Emanet Et</a>
    </div>
@endsection
