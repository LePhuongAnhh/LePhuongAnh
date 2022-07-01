@extends('masters.homepageMaster')

@section('category')
    <div class="container1">
        <h2>The product</h2>
    </div>

    <div class="grid-container">
        @foreach($product as $s)
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                <div class=" card" style="background-color: #f8f7ff">
                <table class="card-body">
                    <tr>
                        <td class="d-flex justify-content-between align-items-center ">
                            <a class="product-name card-title">{{$s->Elec_Name}}</a>
                            <h3 class="price card-text">{{$s->Price}}$</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="brand" style="padding-left: 1rem">Brand: {{$s->Brand}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{route('harvelElec.preview', ['Elec_id' => $s->Elec_id])}}">
                                <img width = 200rem; src="{{asset('storage/'.$s->Elec_Images )}}" /></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="btn btn-primary-custom text-light" style="margin-left: 180px" >Add to cart</a>
                        </td>
                    </tr>
                </table>
            </div>
            </div>
        @endforeach
    </div>
@endsection


