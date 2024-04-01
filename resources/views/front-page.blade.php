@extends('layouts.app')
@section('content')
    @php
        $sections = array(
            'hero',
            'about-us',
            'our-services',
            'process',
            'action-statistics',
            'benefits-partners',
            'testimonials'
        );
    @endphp

    @foreach($sections as $section)
        @include('sections.home.'.$section)
    @endforeach
@endsection