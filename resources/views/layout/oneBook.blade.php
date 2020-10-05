@extends('layout/basicLayout')

@section('title')
    <title>{{ $item->title }}</title>
@endsection


@section('content')
<input type="button" value="Back" onclick="javascript:history.back()">
    <div style="display: flex;">
        <div style="width: 200px; height: 300px; padding: 5px; display: flex; flex-direction: column;">
            <div>
                <img src="{{ asset("$item->image") }}"  style="width: 100%; height: 300px">
            </div>
            
            
        </div>
        <div>
            <div style="height: 20px; margin-top:2px">
                <b style="font-size: 15px">{{ $item->title }}</b>
            </div>
            
            <div style="height: 20px; margin-top:2px">
                <p style="color: grey; font-size: 14px">{{ $item->creator}}</p>
            </div>
    
            <div style="height: 20px; margin-top:2px">
                <p style="color: red">Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
            </div>
            
        </div>
    </div>
    <div>
        <b style="font-size: 18px">Description</b>
        <p>
            {{ $item->description }}
        </p>
    </div>
@endsection