@extends('FrontEnd.headerFouter')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h1 class="text-center">Order Confirmation</h1>
            </div>
            <div class="card-body">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    </div>
@endsection
