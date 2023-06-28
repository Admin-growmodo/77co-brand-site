@extends('_layouts.main')
@section('body')
        {{-- works start --}}
        {{-- section start --}}
        @include('_partials.components.scroller',['first_word' => 'Our', 'second_word' => 'Works', 'showdivider' => false])
        {{-- section end --}}
        {{-- section start --}}
        <div class="bg-light">
            <div class="container container-fix">
                <div class="extra-margin-all post-spacing">
                    {{-- row start --}}
                    <div class="row">
                        {{-- col start --}}
                        <div class="col-lg-12">
                            {{-- section title start --}}
                            {{-- <div class="subtitle subtitle-light">The Case Studies</div> --}}
                            {{-- section title end --}}
                            {{-- divider start --}}
                            <div class="inner-divider-half"></div>
                            {{-- divider end --}}
                            <div class="post-spacing-3">
                                {{-- section txt start --}}
                                <div class="intro">
                                We're proud to partner with our clients on various projects from branding, to websites to full blown media campaigns. Each project is approach with a blend of strategy, creativity and execution to drive results. Scroll down for some of our favorites.
                                </div>
                                {{-- section txt end --}}
                                {{-- divider start --}}
                                <div class="inner-divider-half"></div>
                                {{-- divider end --}}
                                {{-- section txt start --}}
                                <div class="section-txt">
                                </div>
                                {{-- section txt end --}}
                            </div>
                        </div>
                        {{-- col end --}}
                    </div>
                    {{-- row end --}}
                    {{-- divider start --}}
                    <div class="inner-divider"></div>
                    {{-- divider end --}}
                </div>
            </div>
        </div>
        {{-- section end --}}
        {{-- section start --}}
        @include('_partials.works.projects')
        {{-- section end --}}
        {{-- works end --}}
@endsection
