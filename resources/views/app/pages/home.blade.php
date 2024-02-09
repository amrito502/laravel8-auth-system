@extends('app.app_master')
@section('app_content')
@include('app.components.banner.home_banner')
@include('app.components.review')
@include('app.components.about.about')
@include('app.components.services.services')
@include('app.components.project.project')
{{-- @include('app.components.client_say') --}}
@include('app.components.teams')
@include('app.components.contact.contact')
@endsection








{{--  --}}
