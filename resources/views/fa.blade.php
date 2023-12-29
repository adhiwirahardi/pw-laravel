@extends('app')

@section('content')
    <h1>Forex Analysis with Alpha Vantage</h1>
    <div style="width: 100%; height: 600px; overflow: hidden; border: 1px solid #ddd; border-radius: 8px;">
        <iframe src="{{ asset('GBPUSD_Prediction_Analysis.html') }}" style="width: 100%; height: 100%; border: none;"></iframe>
    </div>
@endsection
