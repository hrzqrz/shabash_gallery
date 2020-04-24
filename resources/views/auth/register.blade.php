@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
@stop
@section('content')
<div class="container-fluid">
    <div class="wrapper">
        <div class="inner">
            <img src="images/register/image-1.png" alt="" class="image-1">
            @include('includes._register-form')
            <img src="images/register/image-2.png" alt="" class="image-2">
        </div>
        
    </div>
    

    {{-- <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('ثبت نام') }}</div>

                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div> --}}
</div>
@section('scripts')
<script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
<script src="js/register/jquery-3.3.1.min.js"></script>
<script src="js/register/main.js"></script>
@stop
@endsection
