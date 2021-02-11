@extends('layouts.craftsman')
@section('content')

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid" style="padding: 0;">
        <div class="kt-wizard-v4" id="kt_user_add_user" data-ktwizard-state="step-first" style="width: 77% ;">
            <!--end: Form Wizard Nav -->
            <div class="kt-portlet">
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <div class="kt-grid">
                        <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
                            <div class="kt-widget1" style="width: 100%">
                                @if(session()->has('message'))
                                    <div class="alert alert-danger">
                                        {{session()->get('message')}}
                                    </div>
                                @endif

                                <div class="kt-widget1__item" >
                                    <span class="kt-widget1__number kt-font-brand"> إسم المدينة</span>
                                    <span class="kt-widget1__number kt-font-brand">إسم الحي</span>
                                    <span class="kt-widget1__number kt-font-brand">إسم الشارع</span>
                                    <span class="kt-widget1__number kt-font-brand">حذف</span>
                                </div>
                                @foreach($data as $location)
                                <div class="kt-widget1__item">
                                    <span class="kt-widget1__number kt-font-brand">  {{$location->getCityName()}}</span>
                                    <span class="kt-widget1__number kt-font-brand">  {{$location->getNeighborhoodsName()}}</span>
                                    <span class="kt-widget1__number kt-font-brand">  {{$location->street}}</span>
                                    <span class="kt-widget1__number kt-font-brand">
                                                <form action="{{ route('location.destroy', $location->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="btn btn-danger">  {{ __('location.delete')}}</button>
                                                </form>
                                            </span>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
