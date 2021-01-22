@extends('layouts.app')
@push('meta')

@endpush
@push('title')
<title>Home</title>
@endpush
@push('css')
<style>
    /* .catcard{
        width: 10rem;
        box-shadow: 1px 1px 59px #feffff, 1px 1px 0px #35A3DE, 1px 1px 5px #F01D7E;
    }
    .card:hover{
        box-shadow: 0px 0px 5px #feffff, 1px 1px 10px #1d5c7e, 1px 1px 5px #F01D7E;
    }
    @media screen and (min-width: 782px){
        .card:hover {
            transform: scale(1.1);
        }
    }
    .productcard {
        width: 11rem;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        margin-bottom: 1rem;
        text-align: center;
        height: 300px;
        position: relative;
    }
    @media screen and (max-width: 527px){
        .catcard{
            width: 7rem;
            margin: 5px;
        }
        .card-title{
            font-size: 10pt;
        }
        .productcard {
            width: 10.5rem;
        }
    }
    .productcardimg {
        max-height: 160px;
    }
    
    .cardproductname {
        font-size: medium;
        margin-top: 5px;
        position: absolute;
        bottom: 110px;
        left: 10px;
    }
    
    .productcardprice {
        color: grey;
        font-size: 18px;
        position: absolute;
        bottom: 25px;
        left: 15px;
    }
    
    .productcard button {
        position: absolute;
        bottom: 5px;
        left: 0;
        border: none;
        outline: 0;
        padding: 5px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
    }
    
    .productcard button:hover {
        opacity: 0.7;
        z-index: 99999;
    } */
    .pdc{
            width: 20rem;
        }
        @media screen and (max-width: 370px){
            .pdc{
                width: 18rem !important;
            }
        }
</style>
@endpush

@section('content')


@include('slider')

@include('modules.services')

<section class="product-panel">
    <div class="container">
        <div class="container py-2">
            <h2>Categories</h2>
            <div class="row justify-content-center">
                
                    @include('modules.productCard')
                    @include('modules.productCard')
                    @include('modules.productCard')
                    @include('modules.productCard')
                    @include('modules.productCard')
                    @include('modules.productCard')
                    @include('modules.productCard')
                    @include('modules.productCard')
                    @include('modules.productCard')
                    @include('modules.productCard')
                    @include('modules.productCard')
                    @include('modules.productCard')
                    @include('modules.productCard')
                    @include('modules.productCard')
                    @include('modules.productCard')
                    @include('modules.productCard')
                    @include('modules.productCard')
                    @include('modules.productCard')
                    @include('modules.productCard')
                    @include('modules.productCard')
                    @include('modules.productCard')
                {{-- <div class="card" style="height: 300px;">
                    <a data-toggle="modal" data-target="#productModal" href="">
                        <img src="{{ asset('images/category/1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title m-0">Cardawsdawda  wadaw</h5>
                        </div>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</section>

@include('modules.productModal')
@endsection

@push('js')
@endpush
