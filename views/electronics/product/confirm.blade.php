@extends('masters.adMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">Are you sure you want to delete product?</h1>
        </div>
        @include('electronics.product.detail')

        <form action="{{route('product.destroy', ['Elec_id' =>$product->Elec_id])}}" method="post">
            @csrf
            <input type="hidden" name="Elec_id" value="{{$product->Elec_id}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('product.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
