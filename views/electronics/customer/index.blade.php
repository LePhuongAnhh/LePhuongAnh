@extends('masters.adMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
        <h1 class="display-4">Customer Account</h1>
        </div>
{{--        @include('electronics.customer.sessionmesage')--}}
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">FullName</th>
                <th scope="col">Username</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customer as $c)
                <tr>
                    <td>{{$c->Cus_Fullname}}</td>
                    <td>{{$c->Cus_Username}}</td>
                    <td>{{$c->Phone}}</td>
                    <td>{{$c->Address}}</td>
                    <td><a type="button" class="btn btn-primary btn-sm"
                           href="{{route('customer.show', ['Cus_id' => $c->Cus_id])}}"
                        >Details</a>
                    </td>
                    <td><a type="button" class="btn btn-success btn-sm"
                          href="{{route('customer.edit', ['Cus_id' => $c->Cus_id])}}"
                        >Edit</a>
                    </td>
                    <td>
                        <a type="button" class="btn btn-danger btn-sm"
                          href="{{route('customer.confirm', ['Cus_id' => $c->Cus_id])}}"
                        >Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

@section('script')
@endsection


