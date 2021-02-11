@extends('layouts.craftsman')
@section('content')
    <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">
        <div class="kt-portlet kt-portlet--height-fluid-">
            <div class="kt-portlet__body">
                <!--begin::Widget -->
                <div class="kt-widget kt-widget--user-profile-4">
                    <div class="kt-widget__head">
                        <div class="kt-widget__media">
                            <img class="kt-widget__img kt-hidden-"
                                 src="assets/media/users/300_21.jpg"
                                 alt="image">
                        </div>
                        <div class="kt-widget__content">
                            <div class="kt-widget__section">
                                <div class="kt-widget__username">
                                    {{$data->name}}
                                </div>>
                                <div class="kt-widget__action">
                                    <a href="#" class="btn btn-icon btn-circle btn-label-facebook">
                                        <i class="socicon-facebook"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-circle btn-label-twitter">
                                        <i class="socicon-twitter"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-circle btn-label-google">
                                        <i class="socicon-google"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget__body">
                        <a href="/test" class="kt-widget__item kt-widget__item--active">
                            Profile Overview
                        </a>
                        <a href="/location/{{$data->id}}" class="kt-widget__item">
                            اضافة مكان عمل جديد
                        </a>
                        <a href="#" class="kt-widget__item">
                            Account info
                        </a>
                        <a href="#" class="kt-widget__item">
                            Change Passwort
                        </a>
                        <a href="#" class="kt-widget__item">
                            Email settings
                        </a>
                        <a href="#" class="kt-widget__item">
                            Saved Credit Cards
                        </a>
                        <a href="#" class="kt-widget__item">
                            Tax information
                        </a>
                    </div>
                </div>
            </div>
            <!--end::Widget -->
        </div>
    </div>
    <div class="kt-grid__item kt-grid__item--fluid kt-app__content" >
        <div class="row" >
            <div class="col-xl-6" style="width: 65%" >
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
