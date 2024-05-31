@extends('template.bootstrap')

@section('title', 'Details')

@section('content')

    <h1>
        Details Data {{ $data->name }}</h1>

    <table class="table">
        <td>{{ $data->name }}</td>
        <td>{{ $data->nim }}</td>
        <td>
            @if ($data->gender == 'L')
                Laki - Laki
            @else
                Perempuan
            @endif
        </td>
        <td>{{ $data->kelas }}</td>
    </table>
@endsection
