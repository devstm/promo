@extends('layouts.craftsman')
@section('post')
<div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
    <div class="kt-portlet__head kt-portlet__head--noborder">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Trends
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="dropdown dropdown-inline">
                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flaticon-more-1"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <ul class="kt-nav">
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                <span class="kt-nav__link-text">Reports</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                <span class="kt-nav__link-text">delete</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                <span class="kt-nav__link-text">Edit</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
        {{--                                      محتوى المنشور هنا --}}
    </div>
</div>

    @endsection
