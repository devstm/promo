@extends('layouts.craftsman')
@section('content')

    <div class="kt-grid__item kt-grid__item--fluid kt-app__content" >
        <div class="row" >
            <div class="col-xl-6" style="width: 78%" >
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Add new post
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form kt-form--fit kt-form--label-right">
                        <div class="kt-portlet__body" style="padding-bottom: 0" >
                            <div class="form-group row" style="margin-bottom: 15px " >
                                <div style="width: 99% ;">
                                    <textarea name="content" class="form-control"  rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot" style="padding: 5px 25px">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn btn-brand">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
@endsection





{{--@extends('craftsman.layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">Craftsman :: Dashboard</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    You are logged in!--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
