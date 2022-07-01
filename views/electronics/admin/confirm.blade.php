@extends('masters.adMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
        <h1 class="display-4">Are you sure you want to delete admin account?</h1>
        </div>
        @include('electronics.admin.detail')

        <form action="{{route('admin.destroy', ['Ad_id' =>$admin->Ad_id])}}" method="post">
            @csrf
            <input type="hidden" name="Ad_id" value="{{$admin->Ad_id}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('admin.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
