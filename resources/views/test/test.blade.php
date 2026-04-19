@extends('layout.app')

@section('baslik')
    deneme sayfası
@endsection

@section('content')
    <table border="1" style="border:1px solid red;">
        @foreach ($yemekler as $yemek)
            <tr>
                <td>
                    {{ $yemek }} {{ $yemek }}
                </td>
            </tr>
        @endforeach
        <table>
        @endsection

        @section('footer')
            alt başlık
        @endsection
