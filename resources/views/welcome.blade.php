@extends('layouts.app')

@push('css')
<style>
.card{
    width: 10rem;
    box-shadow: 1px 1px 59px #feffff, 1px 1px 0px #35A3DE, 1px 1px 5px #F01D7E;
}
.card:hover{
    box-shadow: 0px 0px 5px #feffff, 1px 1px 10px #1d5c7e, 1px 1px 5px #F01D7E;
}
.productcard {
    width: 12rem;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.cardproductname{
    font-size: medium;
}

.productcardprice {
  color: grey;
  font-size: 22px;
}

.productcard button {
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
}
</style>
@endpush

@section('content')
@include('slider')

{{-- categories --}}
<div class="container py-2">
    <h2>Categories</h2>
    <div class="row justify-content-center">
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Cardawsdawdawdwdawdawwdaw  wadaw</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/4.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/5.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
    </div>
</div>
{{-- /categories --}}

{{-- brands --}}
<div class="container py-2">
    <h2>Brands</h2>
    <div class="row justify-content-center">
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Cardawsdawdawdwdawdawwdaw  wadaw</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/4.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/5.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
        <div class="card m-2 text-center" style="width: 10rem;">
            <a href="">
                <img src="{{ asset('images/category/1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title m-0">Card title</h5>
                </div>
            </a>
        </div>
    </div>
</div>
{{-- /brands --}}

{{-- featured products --}}
<div class="container py-2">
    <h2>Featured Products</h2>
    <div class="row justify-content-center">
        <div class="card productcard">
            <img src="{{ asset('images/product/1.jpg') }}" alt="Denim Jeans" style="width:100%">
            <h1 class="cardproductname">Tailored Jeans</h1>
            <p class="productcardprice">$19.99</p>
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>
        <div class="card productcard">
            <img src="{{ asset('images/product/1.jpg') }}" alt="Denim Jeans" style="width:100%">
            <h1 class="cardproductname">Tailored Jeans</h1>
            <p class="productcardprice">$19.99</p>
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>
        <div class="card productcard">
            <img src="{{ asset('images/product/1.jpg') }}" alt="Denim Jeans" style="width:100%">
            <h1 class="cardproductname">Tailored Jeans</h1>
            <p class="productcardprice">$19.99</p>
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>
        <div class="card productcard">
            <img src="{{ asset('images/product/2.jpg') }}" alt="Denim Jeans" style="width:100%">
            <h1 class="cardproductname">Tailored Jeans</h1>
            <p class="productcardprice">$19.99</p>
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>
        <div class="card productcard">
            <img src="{{ asset('images/product/3.jpg') }}" alt="Denim Jeans" style="width:100%">
            <h1 class="cardproductname">Tailored Jeans</h1>
            <p class="productcardprice">$19.99</p>
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>
        <div class="card productcard">
            <img src="{{ asset('images/product/4.jpg') }}" alt="Denim Jeans" style="width:100%">
            <h1 class="cardproductname">Tailored Jeans</h1>
            <p class="productcardprice">$19.99</p>
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>
        <div class="card productcard">
            <img src="{{ asset('images/product/5.jpg') }}" alt="Denim Jeans" style="width:100%">
            <h1 class="cardproductname">Tailored Jeans</h1>
            <p class="productcardprice">$19.99</p>
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>
        <div class="card productcard">
            <img src="{{ asset('images/product/6.jpg') }}" alt="Denim Jeans" style="width:100%">
            <h1 class="cardproductname">Tailored Jeans</h1>
            <p class="productcardprice">$19.99</p>
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>
    </div>
</div>
{{-- /featured products --}}
@endsection

@push('js')
@endpush
