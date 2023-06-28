@extends('_layouts.main')

@section('body')
    {{-- home start --}}
    @include('_partials.home.slider')
    <div class="main-title-wrapper-l">
        {{-- section title start --}}
        <h1 class="main-title-main-color-l" id="main-title">
            DRIVING RESULTS
        </h1>
        {{-- section title end --}}
    </div>
    {{-- home end --}}

    @include('_partials.components.vertical-lines')

    @include('_partials.home.intro')
    {{-- projects start --}}
    @include('_partials.home.projects')
    {{-- projects end --}}

    {{-- about start --}}

    {{-- our services start --}}
    @include('_partials.home.services')
    {{-- our services end --}}


    {{-- team start --}}
    @include('_partials.home.team')
    {{-- team end --}}

    {{-- section start --}}

    {{-- team start --}}
    @include('_partials.home.get-in-touch')
    {{-- team end --}}
    {{-- section end --}}
    {{-- section start --}}
{{--    <div class="bg-dark">--}}
{{--        <div class="container container-fix">--}}
{{--            <div class="extra-margin-all post-spacing">--}}
{{--                --}}{{-- divider start --}}
{{--                <div class="inner-divider"></div>--}}
{{--                --}}{{-- divider end --}}
{{--                --}}{{-- row start --}}
{{--                <div class="row">--}}
{{--                    --}}{{-- col start --}}
{{--                    <div class="col-lg-12">--}}
{{--                        --}}{{-- section title start --}}
{{--                        <div class="subtitle subtitle-light">The Offers</div>--}}
{{--                        --}}{{-- section title end --}}
{{--                        --}}{{-- divider start --}}
{{--                        <div class="inner-divider-half"></div>--}}
{{--                        --}}{{-- divider end --}}
{{--                        <div class="post-spacing-3">--}}
{{--                            --}}{{-- section txt start --}}
{{--                            <div class="intro">--}}
{{--                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text--}}
{{--                                <span>ever since the 1500s</span>.--}}
{{--                            </div>--}}
{{--                            --}}{{-- section txt end --}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    --}}{{-- col end --}}
{{--                </div>--}}
{{--                --}}{{-- row end --}}
{{--                --}}{{-- divider start --}}
{{--                <div class="inner-divider"></div>--}}
{{--                --}}{{-- divider end --}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    {{-- section end --}}
    {{-- section start --}}
{{--    <div class="bg-light">--}}
{{--        <div class="container container-fix">--}}
{{--            <div class="extra-margin-all post-spacing">--}}
{{--                --}}{{-- divider start --}}
{{--                <div class="inner-divider"></div>--}}
{{--                --}}{{-- divider end --}}
{{--                --}}{{-- row start --}}
{{--                <div class="row">--}}
{{--                    --}}{{-- col start --}}
{{--                    <div class="col-lg-12">--}}
{{--                        --}}{{-- panel wrapper start --}}
{{--                        <div class="panel-wrapper">--}}
{{--                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">--}}
{{--                                <div class="panel panel-default">--}}
{{--                                    <div class="panel-heading" id="headingOne" role="tab">--}}
{{--                                        <h4 class="panel-title">--}}
{{--                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                                --}}{{-- section title start --}}
{{--                                                <span class="panel-title">--}}
{{--                                                    Web Design--}}
{{--                                                    </span>--}}
{{--                                                --}}{{-- section title end --}}
{{--                                                <i class="pull-left ion ion-plus"></i>--}}
{{--                                            </a>--}}
{{--                                        </h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="panel-collapse collapse in" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">--}}
{{--                                        --}}{{-- section txt start --}}
{{--                                        <div class="panel-body">--}}
{{--                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>--}}
{{--                                        </div>--}}
{{--                                        --}}{{-- section txt end --}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="panel panel-default">--}}
{{--                                    <div class="panel-heading" id="headingTwo" role="tab">--}}
{{--                                        <h4 class="panel-title">--}}
{{--                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
{{--                                                --}}{{-- section title start --}}
{{--                                                <span class="panel-title">--}}
{{--                                                    UX/UI Design--}}
{{--                                                    </span>--}}
{{--                                                --}}{{-- section title end --}}
{{--                                                <i class="pull-left ion ion-plus"></i>--}}
{{--                                            </a>--}}
{{--                                        </h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="panel-collapse collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">--}}
{{--                                        --}}{{-- section txt start --}}
{{--                                        <div class="panel-body">--}}
{{--                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>--}}
{{--                                        </div>--}}
{{--                                        --}}{{-- section txt end --}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="panel panel-default">--}}
{{--                                    <div class="panel-heading" id="headingThree" role="tab">--}}
{{--                                        <h4 class="panel-title">--}}
{{--                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
{{--                                                --}}{{-- section title start --}}
{{--                                                <span class="panel-title">--}}
{{--                                                    Brand Identity--}}
{{--                                                    </span>--}}
{{--                                                --}}{{-- section title end --}}
{{--                                                <i class="pull-left ion ion-plus"></i>--}}
{{--                                            </a>--}}
{{--                                        </h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="panel-collapse collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingThree">--}}
{{--                                        --}}{{-- section txt start --}}
{{--                                        <div class="panel-body">--}}
{{--                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>--}}
{{--                                        </div>--}}
{{--                                        --}}{{-- section txt end --}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        --}}{{-- panel wrapper end --}}
{{--                    </div>--}}
{{--                    --}}{{-- col end --}}
{{--                </div>--}}
{{--                --}}{{-- row end --}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    {{-- section end --}}
    {{-- about end --}}
    {{-- contact start --}}
    {{-- section start --}}
{{--    <div class="bg-light">--}}
{{--        <div class="container-fluid nopadding">--}}
{{--            <div class="extra-margin-all post-spacing">--}}
{{--                --}}{{-- row start --}}
{{--                <div class="row">--}}
{{--                    --}}{{-- col start --}}
{{--                    <div class="col-lg-12">--}}
{{--                        --}}{{-- divider start --}}
{{--                        <div class="inner-divider"></div>--}}
{{--                        --}}{{-- divider end --}}
{{--                        --}}{{-- line start --}}
{{--                        <div class="the-line"></div>--}}
{{--                        --}}{{-- line end --}}
{{--                        --}}{{-- divider start --}}
{{--                        <div class="inner-divider-half"></div>--}}
{{--                        --}}{{-- divider end --}}
{{--                    </div>--}}
{{--                    --}}{{-- col end --}}
{{--                </div>--}}
{{--                --}}{{-- row end --}}
{{--                --}}{{-- row start --}}
{{--                <div class="row">--}}
{{--                    --}}{{-- col start --}}
{{--                    <div class="col-lg-12">--}}
{{--                        --}}{{-- section txt start --}}
{{--                        <div class="animated-text-wrapper">--}}
{{--                            <div class="animated-text">--}}
{{--                                <div class="animated-text-content"><span>The</span> info.&nbsp;</div>--}}
{{--                                <div class="animated-text-content"><span>The</span> info.&nbsp;</div>--}}
{{--                                <div class="animated-text-content"><span>The</span> info.&nbsp;</div>--}}
{{--                                <div class="animated-text-content"><span>The</span> info.&nbsp;</div>--}}
{{--                                <div class="animated-text-content"><span>The</span> info.&nbsp;</div>--}}
{{--                                <div class="animated-text-content"><span>The</span> info.&nbsp;</div>--}}
{{--                                <div class="animated-text-content"><span>The</span> info.&nbsp;</div>--}}
{{--                                <div class="animated-text-content"><span>The</span> info.&nbsp;</div>--}}
{{--                                <div class="animated-text-content"><span>The</span> info.&nbsp;</div>--}}
{{--                                <div class="animated-text-content"><span>The</span> info.&nbsp;</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        --}}{{-- section txt end --}}
{{--                    </div>--}}
{{--                    --}}{{-- col end --}}
{{--                </div>--}}
{{--                --}}{{-- row end --}}
{{--                --}}{{-- row start --}}
{{--                <div class="row">--}}
{{--                    --}}{{-- col start --}}
{{--                    <div class="col-lg-12">--}}
{{--                        --}}{{-- divider start --}}
{{--                        <div class="inner-divider-half"></div>--}}
{{--                        --}}{{-- divider end --}}
{{--                        --}}{{-- line start --}}
{{--                        <div class="the-line"></div>--}}
{{--                        --}}{{-- line end --}}
{{--                        --}}{{-- divider start --}}
{{--                        <div class="inner-divider"></div>--}}
{{--                        --}}{{-- divider end --}}
{{--                    </div>--}}
{{--                    --}}{{-- col end --}}
{{--                </div>--}}
{{--                --}}{{-- row end --}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    {{-- section end --}}
    {{-- section start --}}
{{--    <div class="bg-light">--}}
{{--        <div class="container container-fix">--}}
{{--            <div class="extra-margin-all post-spacing">--}}
{{--                --}}{{-- row start --}}
{{--                <div class="row">--}}
{{--                    --}}{{-- col start --}}
{{--                    <div class="col-lg-12">--}}
{{--                        --}}{{-- section title start --}}
{{--                        <div class="subtitle subtitle-light">The Info</div>--}}
{{--                        --}}{{-- section title end --}}
{{--                        --}}{{-- divider start --}}
{{--                        <div class="inner-divider-half"></div>--}}
{{--                        --}}{{-- divider end --}}
{{--                        <div class="post-spacing-3">--}}
{{--                            --}}{{-- section txt start --}}
{{--                            <div class="intro">--}}
{{--                                Please get in touch by using the following info or feel free to use the form on the contact page.--}}
{{--                            </div>--}}
{{--                            --}}{{-- section txt end --}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    --}}{{-- col end --}}
{{--                </div>--}}
{{--                --}}{{-- row end --}}
{{--                <div class="inner-divider"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    {{-- section end --}}
    {{-- section start --}}

    {{-- section end --}}

    {{-- contact end --}}
@endsection
