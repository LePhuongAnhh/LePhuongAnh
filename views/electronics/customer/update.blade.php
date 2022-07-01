@extends('masters.adMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">Update An Customer Account</h1>
        </div>
        @include('partials.adErrors')

        <form action="{{route('customer.update', ['Cus_id' => old('Cus_id')?? $customer->Cus_id])}}" method="post">
            @csrf
            @include('electronics.customer.cusFields')

            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
