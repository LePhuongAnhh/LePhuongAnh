@extends('masters.adMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">Update An Administrator Account</h1>
        </div>
        @include('partials.adErrors')

        <form action="{{route('category.update', ['Cate_id' => old('Cate_id')?? $category->Cate_id])}}" method="post">
            @csrf
            @include('electronics.category.cateFields')

            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
