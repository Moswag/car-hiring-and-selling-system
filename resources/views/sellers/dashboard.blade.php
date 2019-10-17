@extends('layouts.master')
@section('content')
    <div class="content-area">
        <div class="gap inner-bg">
            <div class="element-title">
                <h4>View Companies </h4>
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @elseif(Session::has('error'))
                    <div class="alert alert-danger">{{Session::get('error')}}</div>
                @endif
            </div>
            <div class="table-styles">
                <div class="widget">
                    <table class="prj-tbl striped bordered table-responsive">
                        <thead class="">
                        <tr>
                            <th><em>ID</em></th>
                            <th><em>Name</em></th>
                            <th><em>Mission</em></th>
                            <th><em>Action</em></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <td><span>{{$company->id}}</span></td>
                                <td><i>{{$company->name}}</i></td>
                                <td><i>{{$company->mission}}</i></td>
                                <td>
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
