<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
@extends('masters.homepageMaster')
@section('main')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap');
        body {
            background: #ffffff;
            font-family: 'Roboto Condensed', sans-serif
        }
        .row1{
            display: flex;
            padding: 1px 10px 0 25px;
        }
        .product-content-left{
            width: 50%;
        }
        .product-content-left img{
            width: 100%;
        }
        .left-big-img {
            width: 80%;
            padding-right: 10px;
        }
        .left-big-img img{
            width: 500px;
            height: 500px;
        }
        .product-content-right{
            margin: 10px;
            font-size: 15px;
        }
        .icons i {
            font-size: 17px;
            color: green;
            margin-right: 2px
        }
        .offers i {
            color: green
        }
        .delivery i {
            color: blue
        }
        .aa{
            display: flex;
        }
        label.radio {
            cursor: pointer
        }
        label.radio input {
            position: absolute;
            top: 0;
            left: 0;
            visibility: hidden;
            pointer-events: none
        }
        label.radio span {
            padding: 2px 11px;
            margin-right: 3px;
            border: 1px solid #8f37aa;
            display: inline-block;
            color: #8f37aa;
            border-radius: 3px;
            text-transform: uppercase
        }
        .mt-3{
            display: flex;
        }

        @media screen and (min-width: 768px) {

        }



    </style>

    <div class="container-fluid mt-5">
        <div class="row1">
            <div class="product-content-left">
                <div class="left-big-img">
                    <a href="{{route('harvelElec.detail', ['Elec_id' => $product->Elec_id])}}">
                        <img src="{{asset('storage/' .$product->Elec_Images )}}"></a>
                </div>
            </div>
            <div class="product-content-right">
                <div >
                    <span class="name font-weight-bold" style="font-size: 28px">{{$product->Elec_Name}}</span>
                <div>
                    <span class="bran" style="color: gray">Brand: {{$product->Brand}}</span>
                </div>
{{--                    <div>--}}
{{--                        <span class="category" style="color: gray">Category: {{$product->CategoryName}}</span>--}}
{{--                    </div>--}}
                <div>
                    <span class="price font-weight-bold" style="font-size: 20px">{{$product->Price}}$</span>
                </div>
                <div class="d-flex align-items-center mt-4 offers mb-1">
                    <i class="fa fa-check-square-o mt-1"></i><span class="ml-1 font-weight-bold">Bank Offers</span><span class="ml-1">20% Instant Discount on SBI Credit Cards<br></span></div>
                <div class="d-flex align-items-center offers mb-1"><i class="fa fa-check-square-o mt-1"></i><span class="ml-1 font-weight-bold">Bank Offers</span><span class="ml-1">5% Unlimited Cashback on Axis Bank Credit Card<br></span></div>
                <div class="d-flex align-items-center offers mb-1"><i class="fa fa-check-square-o mt-1"></i><span class="ml-1 font-weight-bold">Bank Offers</span><span class="ml-1">Extra 5% off* with Axis Bank Buzz Credit Card<br></span></div>
                <div class="d-flex align-items-center offers"><i class="fa fa-check-square-o mt-1"></i><span class="ml-1 font-weight-bold">Bank Offers</span><span class="ml-1">20% Instant Discount on pay with&nbsp;&nbsp;google wallet<br></span></div>
                <div class="d-flex align-items-center mt-5 delivery"><i class="fa fa-map-marker"></i><span class="ml-2">Delivery from sweden, 15-45 days<br></span><span class="ml-2 mr-2">|<br></span><span class="ml-2 mr-2 text-success">FREE<br></span></div>
                <hr>
                <div class="aa">
                    <label class="radio">
                        <input type="radio" name="ram" value="128GB" checked> <span>128GB</span>
                        <input type="radio" name="ram" value="256GB"> <span>256GB</span>
                        <input type="radio" name="ram" value="256GB"> <span>512GB</span>
                    </label>
                </div>
                <div><span class="font-weight-bold">Seller:</span><span class="ml-2">Harvel Electric</span></div>
                <div class="mt-3">
                    <form><button class="btn btn-dark mr-2" type="button">ADD TO CART</button></form>
                    <form><button class="btn btn-success mr-2" type="button">BUY NOW</button></form>
                    <form method="get" action="{{asset('images/Harvel Electric.docx')}}">
                        <button type="submit" class="btn btn-info">DOWNLOAD</button>
                    </form>
                </div>
                <div class="mt-2">
                    <p><b>Description: </b></p> {{$product->Elec_Description}}</span>
                </div>
            </div>
        </div>
    </div>
@endsection


