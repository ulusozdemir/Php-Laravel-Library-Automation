@extends('anasayfa')

@section('title', 'Uyeler')

@section('content')

    <h1>Uyeler</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>Uye</th>
                <th>Email</th>
                <th>Sifre</th>
                <th>Telefon</th>
            </tr>
            @foreach($uyeler as $uye)
                <tr>
                    <td>{{ $uye->name }}</td>
                    <td>{{ $uye->email }}</td>
                    <td>****</td>
                    <td>{{ $uye->telefon }}</td>
                    <td>
                    <a href="{{route('uye.sil', ['id' => $uye->id]) }}" class="button">Sil</a>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
