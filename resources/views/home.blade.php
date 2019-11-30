@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                        <tr>
                            <td>Pic</td>
                            <td>Name</td>
                            <td>Amount</td>
                            <td>Quantity</td>
                            <td>Operation</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $key => $data)
                        <tr>
                            <td><img src="{{url($data->picture)}}" width="150px"> </td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->amount}}</td>
                            <td>{{$data->quantity}}</td>
                            <td><a href="" class="btn btn-primary">Delete</a></td>
                        </tr>
                        @endforeach;
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
