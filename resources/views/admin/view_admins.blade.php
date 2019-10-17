@extends('layouts.master')
@section('content')
              <div class="content-area">
                <div class="gap inner-bg">
                  <div class="element-title">
                    <h4>View Admins </h4>
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
                            <th><em>Surname</em></th>
                            <th><em>Email</em></th>
                            <th><em>Phonenumber</em></th>
                            <th><em>Address</em></th>
                            <th><em>Action</em></th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($admins as $admin)
                          <tr>
                            <td><span>{{$admin->id}}</span></td>
                            <td><i>{{$admin->name}}</i></td>
                            <td><i>{{$admin->surname}}</i></td>
                            <td><i>{{$admin->email}}</i></td>
                            <td><i>{{$admin->phonenumber}}</i></td>
                            <td><i>{{$admin->address}}</i></td>
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