
@extends('masters.homepageMaster')
@section('main')
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('images/aaa.png')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/bbb.png')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/ccc.png')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container1">
        <h2>The product</h2>
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
                                <a class="product-name card-title">{{$s->Elec_Name}}</a>
                                <h3 class="price card-text">{{$s->Price}}$</h3>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <a class="brand" style="padding-left: 1rem">Brand: {{$s->Brand}}</a>
                            </td>
                        </tr>
                        <tr >
                            <td>
                                <a class="btn btn-primary-custom text-light" style="margin-left: 78px" >Add to cart</a>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>

        @endforeach

    </div>

@endsection
