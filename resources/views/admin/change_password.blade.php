@extends('layouts.master')
@section('content')
<div class="content-area">
    <div class="inner-bg">
      <div class="element-title">
        <h4>Change Password</h4>
      </div>
        <div class="pnl-bdy billing-sec">
            <div class="row">
    
          <div class="col-md-6 col-sm-6 field">
            <label>New Password <span>*</span> </label>
            <input name="password" placeholder="Password" type="password">
          </div>
          <div class="col-md-6 col-sm-6 field">
            <label>Confirm New Password <span>*</span> </label>
            <input name="confirm_password" placeholder="Confirm Password" type="password">
          </div>

          <div class="col-md-12 col-sm-12">
            <button type="submit">Change Password</button>
          </div>
      </div>
        </div>
    </div>
</div>
@endsection
