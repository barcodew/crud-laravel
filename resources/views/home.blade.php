@extends('template.bootstrap')

@section('title', 'Home')

@section('content')
    <h1>Losers, Data!</h1>
    <a href="/add-new"><button type="button"
        class="btn btn-primary">Add new</button></a>
    <table class="table">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Action</th>
        </tr>

        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->nim }}</td>
                <td>
                    @if ($item->gender == 'L')
                        Laki - Laki
                    @else
                        Perempuan
                    @endif
                </td>
                <td>{{ $item->kelas }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <a href="/delete/{{ $item->id }}"> <button type="button"
                                class="btn btn-danger">Delete</button></a>
                        <a href="/updating/{{ $item->id }}"> <button type="button" class="btn btn-warning">Edit</button></a>
                        <a href="/Details/{{ $item->id }}"><button type="button"
                                class="btn btn-success">Details</button></a>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
