<!-- resources/views/project/ccfd.blade.php -->

@extends('app')

@section('content')
    <h1 style="text-align: center;">Credit Card Fraud Detection Project</h1>
    <div style="width: 100%; height: 600px; overflow: hidden; border: 1px solid #ddd; border-radius: 8px;">
        <iframe src="{{ asset('credit_fraud_detection_using_SMOTE.html') }}" style="width: 100%; height: 100%; border: none;"></iframe>
    </div>
@endsection
