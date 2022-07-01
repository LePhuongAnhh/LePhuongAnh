@extends('masters.adMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
        <h1 class="display-4">Update An Administrator Account</h1>
        </div>
        @include('partials.adErrors')

        <form action="{{route('admin.update', ['Ad_id' => old('Ad_id')?? $admin->Ad_id])}}" method="post">
            @csrf
            @include('electronics.admin.adFields')

            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
