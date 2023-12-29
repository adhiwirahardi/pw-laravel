@extends('app')

@section('content')
    <h1 style="text-align: center;">Used Car Price Prediction</h1>
    <div style="width: 100%; height: 600px; overflow: hidden; border: 1px solid #ddd; border-radius: 8px;">
        <iframe src="{{ asset('Car_Price_Pred.html') }}" style="width: 100%; height: 100%; border: none;"></iframe>
    </div>
@endsection
