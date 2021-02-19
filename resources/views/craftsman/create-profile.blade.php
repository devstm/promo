@extends('layouts.craftsman')
@section('content')

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid" style="padding: 0;">
        <div class="kt-wizard-v4" id="kt_user_add_user" data-ktwizard-state="step-first" style="width: 77% ;">
            <!--end: Form Wizard Nav -->
            <div class="kt-portlet">
                <form class="kt-form" action="{{route('profile.store' , optional(auth('craftsman')->user())->id)}}"
                      method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <div class="kt-grid">
                        <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
                            <!--begin: Form Wizard Form-->
                                <div class="kt-heading kt-heading--md">إكمال عملية التسجيل</div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="kt-section__body">
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">صورة الملف
                                                    الشخصي</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="kt-avatar kt-avatar--outline" id="kt_user_add_avatar">
                                                        <div class="kt-avatar__holder"
                                                             style=""></div>
                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip"
                                                               title="Change avatar">
                                                            <i class="fa fa-pen"></i>
                                                            <input type="file" name="kt_user_add_user_avatar">
                                                        </label>
                                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip"
                                                              title="Cancel avatar">
																							<i class="fa fa-times"></i>
																						</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">الإسم الشخصي</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <input class="form-control" type="text" name="first_name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">إسم العائلة</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <input class="form-control" type="text" name="last_name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">الهاتف</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="la la-phone"></i></span></div>
                                                        <input type="text" class="form-control" name="phone"
                                                               placeholder="Phone" aria-describedby="basic-addon1">
                                                    </div>
                                                    <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">الحالة
                                                    الاجتماعسة</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <input class="form-control" type="text" name="martial_status">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">اوصف نفسك بجمله</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <input class="form-control" type="text" name="description">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">وسيلة تواصل</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <input class="form-control" type="text" name="contact">
                                                    <input style="display: none" name="craftsmanId" value="{{optional(auth('craftsman')->user())->id}}">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <button type="submit">save</button>
                </form>

                <!--end: Form Wizard Form-->
            </div>
        </div>
    </div>


    <!-- end:: Content -->
@endsection
