@extends('web.layout')

@section('header')
@include('web.header', ['active' => 'home'])
@endsection

@section('slider')
@include('web.commons.slider')
@endsection


@section('upcoming_event')
@include('web.commons.home_event_ribbon')
@endsection

@section('home_feature')
@include('web.commons.home_feature')
@endsection


@section('home_about')
@include('web.commons.home_about')
@endsection

@section('home_projects')
@include('web.commons.home_projects')
@endsection

@section('footer')
@include('web.footer')
@endsection