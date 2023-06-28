@extends('_layouts.main')
@section('body')
    {{-- works start --}}
    {{-- section start --}}
    @include('_partials.components.scroller',['first_word' => 'Get', 'second_word' => 'In Touch', 'showdivider' => false])
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
{{--                        <div class="subtitle subtitle-light">Contact Us</div>--}}
                        {{-- section title end --}}
                        {{-- divider start --}}
                        <div class="inner-divider-half"></div>
                        {{-- divider end --}}
                        <div class="post-spacing-3">
                            {{-- section txt start --}}
                            <div class="intro">
                                Want to talk about your next project, Pantone’s color of the year, or why the word “dictionary” is in the dictionary? Want to talk about your next project, Pantone’s color of the year, or why the word “dictionary” is in the dictionary? We’ll hop on a call, a zoom or grab a drip coffee face to face.
                                <span>Our treat.</span>.
                            </div>
                            {{-- section txt end --}}
                            {{-- divider start --}}
                            <div class="inner-divider-half"></div>
                            {{-- divider end --}}
                            {{-- section txt start --}}
                            <div class="section-txt">
                                <p>
                                    <script src="https://portal.seventyseven.co/frm/ReWA8qU38Ghr2fo.js"></script>
                                </p>
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
@endsection
