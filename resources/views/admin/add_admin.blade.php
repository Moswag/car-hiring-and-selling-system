@extends('layouts.master')
@section('content')
<div class="content-area">
    <div class="inner-bg">
      <div class="element-title">
        <h4>Add Admin</h4>
      </div>
        <div class="pnl-bdy billing-sec">
            <div class="row">
            <form method="post" action="{{route('save_admin')}}">
            {{csrf_field()}}
          <div class="col-md-6 col-sm-6 field">
            <label>Name <span>*</span> </label>
            <input type="text" name="name" required>
          </div>
          <div class="col-md-6 col-sm-6 field">
            <label>Surname <span>*</span> </label>
            <input  type="text" name="surname" required>
          </div>
          <div class="col-md-6 col-sm-6 field">
            <label>Email <span>*</span> </label>
            <input  type="text" name="email" required>
          </div>
          <div class="col-md-6 col-sm-6 field">
            <label>Phonenumber <span>*</span> </label>
            <input  type="text" name="phonenumber"  required>
          </div>
          <div class="col-md-12 col-sm-12 field">
            <label>Address  <span>*</span> </label>
            <input type="text" placeholder="Address" name="address" required/>
          </div>
          <div class="col-md-6 col-sm-6 field">
            <label>Password <span>*</span> </label>
            <input  type="password" name="password" required>
          </div>
          <div class="col-md-6 col-sm-6 field">
            <label>Confirm Password <span>*</span> </label>
            <input  type="password" name="confirm_password" required>
          </div>


          <div class="col-md-6 col-sm-6">
            <div class="col-md-12">
              <div class="buttonz">
                <button type="submit">save</button>
              </div>
            </div>

          </div>
          </form>
      </div>
        </div>
    </div>
</div>
@endsection
