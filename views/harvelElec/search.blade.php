@extends('masters.homepageMaster')

@section('main')

    <div class="container1">
        <h2>There are {{count($product)}} product(s)</h2>
    </div>

    <div class="grid-container">
        @foreach($product as $s)
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                <div class=" card" style="background-color: #f8f7ff">
                    <a  href="{{route('harvelElec.detail', ['Elec_id' => $s->Elec_id])}}">
                        <img width = "100%" height="250rem" src="{{asset('storage/'.$s->Elec_Images )}}" class=" rounded thumbnail-image">
                    </a>
                    <table class="card-body">
                        <tr>
                            <td class="d-flex justify-content-between align-items-center ">
                                <h3 class="product-name card-title">{{$s->Elec_Name}}</h3>
                                <div class="d-flex flex-column mb-2">
                                    <span class="price card-text">{{$s->Price}}$</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 style="padding-left: 1rem">{{$s->Brand}}</h4>
                            </td>
                        </tr>
                        <tr >
                            <td>
                                <a href="#" class="btn btn-primary-custom text-light" >Add to cart</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        @endforeach
    </div>

@endsection
