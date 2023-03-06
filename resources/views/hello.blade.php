@extends('layouts.master')

@section('hello')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <h1>Hello, {{ $name }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
