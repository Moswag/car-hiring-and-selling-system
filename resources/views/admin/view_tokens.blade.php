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
                            <th><em>Company Name</em></th>
                            <th><em>Mission</em></th>
                            <th><em>Status</em></th>
                            <th><em>Action</em></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tokens as $token)
                            <tr>
                                <td><span>{{$token->id}}</span></td>
                                <td><i>{{
                                \App\Company::find($token->company_id)->name

                                }}</i></td>
                                <td><i>{{$token->token}}</i></td>
                                <td><i>{{$token->status}}</i></td>
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
