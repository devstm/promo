@extends('layouts.theme')
@section('content')

    @foreach($data as $report)
        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__body">
                <div class="kt-widget kt-widget--user-profile-3">
                    <div class="kt-widget__top">
                        <div class="kt-widget__content">
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

