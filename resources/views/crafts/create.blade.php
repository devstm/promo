@extends('layouts.theme')

@section('content')
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    {{__('crafts.addNew')}}
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
        <form class="kt-form kt-form--label-right" action="{{route('crafts.store')}}" method="post">
            {{ csrf_field() }}
            <div class="kt-portlet__body">
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label"> {{__('crafts.Name')}}:</label>
                    <div class="col-10">
                        <input class="form-control" type="text" name="name" placeholder="crafts name"
                               id="example-text-input">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="describe" class="col-2 col-form-label"> {{__('crafts.Describe')}}</label>
                    <div class="col-10">
                        <input class="form-control" type="text" name="describe" placeholder="describe" id="describe">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="describe" class="col-2 col-form-label"> {{__('crafts.category')}}</label>
                    <div class="col-10">
                        <select class="form-control" name="category_id" id="exampleSelect1">
                            @foreach($categories as $category)
                                 <option value="{{$category->id}}">{{$category->name}}</option>
                           @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="col-10">
                            <button type="submit" class="btn btn-success"> {{__('crafts.save')}}</button>
                            <a href="{{route('crafts.index')}}">
                                <button type="button" class="btn btn-secondary"> {{__('crafts.cancel')}}</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
