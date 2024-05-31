@extends('template.bootstrap')

@section('title', 'Home')

@section('content')

    <h1>Yakin menghapus data {{ $data->name }} ?</h1>
    <br>
    <form action="/delete/{{ $data->id }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Delete!</button>
    </form>
@endsection
