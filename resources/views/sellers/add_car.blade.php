@extends('layouts.master')
@section('content')
    <div class="content-area">
        <div class="inner-bg">
            <div class="element-title">
                <h4>Add Car</h4>
            </div>
            <div class="pnl-bdy billing-sec">
                <div class="row">
                    <form method="post" action="{{route('save_car')}}">
                        {{csrf_field()}}

                        <div class="col-md-6 col-sm-6 field">
                            <label>Model <span>*</span> </label>
                            <input  type="text" name="model" required>
                        </div>
                        <div class="col-md-6 col-sm-6 field">
                            <label>Year <span>*</span> </label>
                            <input  type="text" name="email" required>
                        </div>
                        <div class="col-md-6 col-sm-6 field">
                            <label>Fuel Capacity <span>*</span> </label>
                            <input  type="text" name="phonenumber"  required>
                        </div>

                        <div class="col-md-6">
                            <label>Company Image</label>
                            <input type="file" name="logo"/>

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
