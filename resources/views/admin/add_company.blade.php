@extends('layouts.master')
@section('content')
    <div class="content-area">
        <div class="gap no-gap">
            <div class="inner-bg">
                <div class="element-title">
                    <h4>Add Company</h4>
                    </div>
                <div class="add-prod-from">
                    <form method="post" action="{{route('save_company')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <label>Company name</label>
                                <input type="text" placeholder="Name" name="name" required>
                            </div>

                            <div class="col-md-12">
                                <label>Company Mission</label>
                                <textarea cols="30" rows="5" placeholder="Mission" name="mission"></textarea>
                            </div>
                            <br> <br> <br>
                            <div class="col-md-12">
                                <label>Company Image</label>
                                    <input type="file" name="logo"/>

                            </div>

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
