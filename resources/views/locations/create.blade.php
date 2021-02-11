@extends('layouts.craftsman')

@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid" style="padding: 0;">
        <div class="kt-wizard-v4" id="kt_user_add_user" data-ktwizard-state="step-first" style="width: 77% ;">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            {{__('addNew')}}
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
                <div>

                </div>
                <form class="kt-form kt-form--label-right" action="/location/{{$data[2]->id}}" method="post">
                    {{ csrf_field() }}
                    <div class="row" style="margin-top: 25px">
                    <div class="col-xl-6">
                        <div class="form-group">
                            <div class="col-12">
                                <select class="form-control" data-dependent name="city_id" id="city">
                                    <option value="1">إختر المدينة</option>
                                    @foreach($data[0] as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <div class="col-12">
                                <select class="form-control dynamic" name="neighborhood_id" id="net">
                                    <option value="1">إختر الحي السكني</option>
                                    @foreach($data[1] as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control" type="text" name="street" placeholder="street"
                                       id="street">
                            </div>
                        </div>
                    </div>
                    <div style="display: none">
                        <div class="col-10">
                            <input class="form-control" type="text" name="craftsmanId" value="{{$data[2]->id}}"
                                   id="street">
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-10">
                                    <button type="submit" class="btn btn-success"> {{__('save')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <script type="text/javascript">
        $("#city").change(function () {
            $.ajax({
                url: "{{ url('/location/get') }}?country_id=" + $(this).val(),
                method: 'GET',
                success: function (data) {
                    $('#net').html(data.html);
                }
            });
        });
    </script>


@endsection
