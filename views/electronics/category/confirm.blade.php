@extends('masters.adMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">Are you sure you want to delete category?</h1>
        </div>
        @include('electronics.category.detail')

        <form action="{{route('category.destroy', ['Cate_id' =>$category->Cate_id])}}" method="post">
            @csrf
            <input type="hidden" name="Ad_id" value="{{$category->Cate_id}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('category.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
