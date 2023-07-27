@extends('layouts.app')

@section('content')
    @include('areas.home')
    @include('areas.navigation')
    @include('areas.benefits')
    @include('areas.quote3')
    @include('areas.purchase')
    @include('areas.fun-facts')
    @include('areas.goufix')
    @include('areas.extra_benefits')
{{--    @include('areas.map')--}}
    @include('areas.contact')
    @include('areas.footer')

{{--    @include('areas.quote1')--}}
{{--    @include('areas.about')--}}
{{--    @include('areas.mission')--}}
{{--    @include('areas.testimonials')--}}
{{--    @include('areas.featured')--}}
{{--    @include('areas.skills')--}}

@endsection