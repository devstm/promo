@extends('layouts.theme')

@section('content')
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    {{__('categories.Update')}}
                </h3>
            </div>
        </div>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        @endif
        <form class="kt-form kt-form--label-right" action="/category/{{$category->id}}" method="post">
            {{ csrf_field() }}
            <div class="kt-portlet__body">
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label"> {{__('categories.Name')}}:</label>
                    <div class="col-10">
                        <input class="form-control" type="text" name="name" value="{{$category->name}}" placeholder="categories name" id="example-text-input">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="describe" class="col-2 col-form-label"> {{__('categories.Describe')}}</label>
                    <div class="col-10">
                        <input class="form-control" type="text" name="describe" value="{{$category->describe}}"  placeholder="hfghfghfgh" id="describe">
                    </div>
                </div>

            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="col-10">
                            <button type="submit" class="btn btn-success"> {{__('categories.save')}}</button>
                            <a href="{{route('category.index')}}"> <button  type="button" class="btn btn-secondary"> {{__('categories.cancel')}}</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
