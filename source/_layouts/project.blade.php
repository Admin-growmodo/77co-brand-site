@extends('_layouts.main')
@section('body')
    @include('_partials.components.vertical-lines')
@include('_partials.components.scroller', ['first_word' => strtok($page->title, " "), 'second_word' => str_replace(strtok($page->title, " "), "", $page->title),'showdivider' => true])

@php
//    ray($page)->label('Project Page Object')
@endphp
@include('_partials.projects.intro', ['description' => $page->description, 'stats' => $page->stats])
@include('_partials.projects.images')
@endsection
