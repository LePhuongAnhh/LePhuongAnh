@extends('masters.adMaster')

@section('main')


    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
        <h1 class="display-4">Admin Account Details</h1>
        </div>
        @include('electronics.admin.detail')
        <a type="button" href="{{route('admin.index')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>
    </div>
@endsection
