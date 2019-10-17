@extends('layouts.master')
@section('content')
    <div class="content-area">
        <div class="gap no-gap">
            <div class="inner-bg">
                <div class="element-title">
                    <h4>Add Token</h4>
                </div>
                <div class="add-prod-from">
                    <form method="post" action="{{route('save_token')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <label>Company name</label>
                                <select type="text" name="company" required>
                                    @foreach($companies as $company)
                                        <option value="{{$company->id}}">{{$company->name}}</option>
                                        @endforeach
                                </select>
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
