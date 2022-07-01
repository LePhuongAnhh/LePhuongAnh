@extends('masters.adMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">Update Electronics</h1>
        </div>
        @include('partials.adErrors')

        <form action="{{route('product.update', ['Elec_id' => old('Elec_id')?? $product->Elec_id])}}" method="post" enctype= "multipart/form-data">
            @csrf
            @include('electronics.product.proFields')

            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection

