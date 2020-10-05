@extends('layout/basicLayout')

@section('title')
    <title>All Book</title>
@endsection


@section('content')

    <div style="display: flex;">
        @foreach ($books as $item)
        <a href="{{ url('/id/'.$item->id) }}" style="text-decoration: none">
            <div style="width: 200px; height: 500px; padding: 5px; display: flex; flex-direction: column;">
                <div>
                    <img src="{{ asset("$item->image") }}"  style="width: 100%; height: 300px">
                </div>
                
                <div style="height: 50px; margin-top:2px">
                    <b style="color: black; font-size: 15px">{{ $item->title }}</b>
                </div>
                
                <div style="height: 50px; margin-top:2px">
                    <p style="color: grey; font-size: 14px">{{ $item->creator}}</p>
                </div>
                
                <div style="height: 50px; margin-top:2px">
                    <p style="color: red">Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
                </div>
                
            </div>
        </a>
        @endforeach
    </div>
        
@endsection