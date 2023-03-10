@extends('layouts.main');

@section('container')
    <form action="/items/store" method="post">
        @csrf
        Nama <input type="text" name="name" required> <br/>
        category <input type="text" name="category" required> <br/>
        status <input type="text" name="status" required> <br/>
        condition <input type="text" name="condition" required> <br/>
        type <input type="text" name="type" required> <br/>
        <input type="submit" value="Simpan Data">
    </form>
@endsection