@extends('masters.adMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">Are you sure you want to delete customer account?</h1>
        </div>
        @include('electronics.customer.detail')

        <form action="{{route('customer.destroy', ['Cus_id' =>$customer->Cus_id])}}" method="post">
            @csrf
            <input type="hidden" name="Cus_id" value="{{$customer->Cus_id}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('customer.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
