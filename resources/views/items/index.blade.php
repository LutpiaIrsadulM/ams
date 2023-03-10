@extends('layouts.main')

@section('container')
<div class="row mt-5">
    <div class="col-lg-8">
        <a href="/items/tambah">Tambah item</a>
        <table border="1" class="table">
            <tr>
                <th>Nama</th>
                <th>category</th>
                <th>status</th>
                <th>condition</th>
                <th>type</th>
                <th>Opsi</th>
            </tr>
            @foreach($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->category }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->condition }}</td>
                <td>{{ $item->type }}</td>
                <td>
                    <a href="/items/edit/{{ $item->id }}">Edit</a>
                    |
                    <a href="/items/hapus/{{ $item->id }}">Hapus</a>
                    <a href="/qrcode/create/{{ $item->id }}">Generate Qrcode</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div id="reader"></div>
    </div>
</div>


@endsection