@extends('template.bootstrap')

@section('title', 'Update')

@section('content')

    <form action="/updating/{{ $data->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="mt-2">
            <label for="name" name="name">Nama</label>
            <input type="text" for="name" name="name" class="form-control" value="{{ $data->name }}">
        </div>
        <div class="mt-2">
            <label for="nim" name="nim">Nim</label>
            <input type="text" for="nim" name="nim" class="form-control" value="{{ $data->nim }}">
        </div>
        <div class="mt-2">
            <label for="name" name="name">Jenis Kelamin</label>
            <select name="gender" id="gender" name="gender" class="form-control">
                <option value="L">Laki - Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="mt-2">
            <label for="kelas" name="kelas">Kelas</label>
            <select name="kelas" id="kelas" name="kelas" class="form-control">
                <option value="1A">1 A</option>
                <option value="2A">2 A</option>
                <option value="3A">3 A</option>
            </select>
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>

@endsection
