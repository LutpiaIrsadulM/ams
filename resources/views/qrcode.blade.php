@extends('layouts.main')

@section('container')
    
    <div class="card">
        <div class="card-header">
            <h2>Simple QR Code</h2>
        </div>
        <div class="card-body">
            @foreach ($item as $item)
                
            {!! QrCode::size(300)->generate($item->qr_num) !!}
            @endforeach
        </div>
    </div>

    


    @endsection
