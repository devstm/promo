@extends('layouts.theme')
@section('content')

    @foreach($craftsmen as $craftsman)
    <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__body">
            <div class="kt-widget kt-widget--user-profile-3">
                <div class="kt-widget__top">
                    <div class="kt-widget__media kt-hidden-">
                        <img src="/assets/media/users/100_13.jpg" alt="image">
                    </div>
                    <div
                        class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                    </div>
                    <div class="kt-widget__content">
                        <div class="kt-widget__head">
                            <a href="#" class="kt-widget__username">
                                {{$craftsman->name}}
                            </a>
                            <div class="kt-widget__action">
                                <button type="button" class="btn btn-label-success btn-sm btn-upper">ask</button>&nbsp;
                                <button type="button" class="btn btn-brand btn-sm btn-upper" style="background-color: red; border-color: orange">delete</button>
                            </div>
                        </div>
                        <div class="kt-widget__subhead">
                            <a href="#"><i class="flaticon2-new-email"></i>{{$craftsman->email}}</a>
                            <a href="#"><i class="flaticon2-placeholder"></i>{{$craftsman->address}}</a>
                            <a href="#"><i class="flaticon2-placeholder"></i>{{$craftsman->phone}}</a>
                        </div>
                        <div class="kt-widget__info">
                            <div class="kt-widget__desc">
                                I distinguish three main text objektive could be merely to inform people.
                                <br> A second could be persuade people.You want people to bay objective
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   @endforeach
@endsection
