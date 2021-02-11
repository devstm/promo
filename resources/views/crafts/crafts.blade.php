@extends('layouts.theme')

@section('content')

    <div
        class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            {{ __('crafts.crafts')}}
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <a href="{{  url('crafts/create')}}">
                        <button type="button"
                                class="btn btn-primary btn-lg btn-block"> {{ __('crafts.addNew')}}</button>
                    </a>
                    <!--begin::Section-->
                    <div class="kt-section">
                        <div class="kt-section__content">
                            <div class="table-responsive">
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{session()->get('message')}}
                                    </div>
                                @endif

                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                        @php
                                            Session::forget('success');
                                        @endphp
                                    </div>
                                @endif
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">{{__('crafts.ID')}}</th>
                                        <th scope="col">{{__('crafts.Name')}}</th>
                                        <th scope="col">{{__('crafts.Describe')}}</th>
                                        <th scope="col">{{__('product.Edit')}}</th>
                                        <th scope="col">{{__('product.Delete')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $index => $val)
                                        <tr>
                                            <td>{{$index+1}}</td>
                                            <td>{{$val->name}}</td>
                                            <td>{{$val->describe}}</td>
                                            <td>

                                                <button type="button" class="bt btn-secondary"><a
                                                        href="{{route("crafts.edit",$val->id)}}">{{__('crafts.Edit')}}</a>
                                                </button>
                                            </td>
                                            <td>
                                                <form action="{{ route('crafts.destroy',$val->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="btn btn-danger">  {{ __('crafts.delete')}}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>

                    <!--end::Section-->
                </div>

                <!--end::Form-->
            </div>

            <!--end::Portlet-->
        </div>
    </div>

@endsection
