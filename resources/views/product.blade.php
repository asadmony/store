@extends('layouts.app')

@push('css')
<style>
    .catcard{
        width: 10rem;
        box-shadow: 1px 1px 59px #feffff, 1px 1px 0px #35A3DE, 1px 1px 5px #F01D7E;
    }
    .card:hover{
        box-shadow: 0px 0px 5px #feffff, 1px 1px 10px #1d5c7e, 1px 1px 5px #F01D7E;
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
    .card:hover {
        transform: scale(1.1);
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
    }

</style>
@endpush

@section('content')

@include('layouts.sideBar')

<div class="container">
@include('modules.productSpecs')

</div>

@include('modules.productModal')
{{-- /featured products --}}
@endsection

@push('js')
@endpush
