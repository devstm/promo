@extends('layouts.app')
@section('content')

    <coupon @applied="onCouponApplied"></coupon>
    <h1 v-show="applied"> you use coupon</h1>





{{--    <tasks></tasks>--}}
{{--    <task></task>--}}
{{--<message title="hello world" body ="Laravel is a web application framework with expressive, elegant syntax."></message>--}}
{{--<message title="hello world" body ="Laravel is a  elegant syntax. We believe to be truly fulfilling."></message>--}}
{{--<message title="hello world" body ="Laravel is a web"></message>--}}

 <modal v-show="showModal" @close="showModal=false">
     Any Thing here!!!
 </modal>
    <button @click="showModal=true">ddd</button>

{{--    <tabs>--}}
{{--      <tab name="Home" :selected="true" ><h1>here is the content of Home </h1></tab>--}}
{{--      <tab name="News" ><h1>here is the content of News</h1></tab>--}}
{{--      <tab name="About Us" ><h1>here is the content of About Us</h1></tab>--}}
{{--      <tab name="more" ><h1>here is the content of More</h1></tab>--}}
{{--    </tabs>--}}








    @endsection

