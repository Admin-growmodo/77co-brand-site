<div>
    <div class="main-title-wrapper-img hero-bg overlay overlay-dark">

        {{-- Slider main container --}}
        <div class="swiper">
        {{-- Additional required wrapper --}}
            <div class="swiper-wrapper">
            {{-- Slides --}}
                @foreach($projects->where('show_in_hero', true)->take(4) as $project)
                <div class="swiper-slide">
                    <div class="swiper-slide-inner-bg bg-img-1 overlay overlay-dark"><img src="{{$project->hero_image_url}}" alt="{{$project->title}}" loading="lazy">
                    </div>
                    <a class="button button-effect button-effect-light" href="{{$project->getURL()}}" >
                        <i class="pulse slider"></i>
                        <div class="more-button-bg-center"></div>
                        <div class="more-button-txt-center-slider more-button-txt-center-slider">
                            <span>{{$project->title}}</span>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
            {{-- If we need pagination --}}
            {{--<div class="swiper-pagination"></div>--}}

            {{-- If we need navigation buttons --}}
            <div class="swiper-button-prev">
                <svg class="circle-svg" height="50" width="50">
                    <circle class="circle" cx="25" cy="25" r="24"></circle>
                </svg>
                <ion-icon class="icon_slider_prev" name="chevron-back-outline" role="img" class="md flip-rtl hydrated"></ion-icon>
            
            </div>
            <div class="swiper-button-next">
                <svg class="circle-svg" height="50" width="50">
                    <circle class="circle" cx="25" cy="25" r="24"></circle>
                </svg>
                <ion-icon class="icon_slider_next" name="chevron-forward-outline"></ion-icon>
                
            </div>

            {{-- If we need scrollbar --}}
            <div class="swiper-scrollbar"></div>
        </div>


{{--         hero slider wrapper start --}}
{{--        <div class="swiper-container-wrapper">--}}
{{--             swiper container start --}}
{{--            <div class="swiper-container swiper2">--}}
{{--                 swiper wrapper start --}}
{{--                <div class="swiper-wrapper">--}}
{{--                     swiper slider item start --}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="swiper-slide-inner">--}}
{{--                             swiper slider item IMG start --}}
{{--                            <div class="swiper-slide-inner-bg bg-img-1 overlay overlay-dark"></div>--}}
{{--                             swiper slider item IMG end --}}
{{--                             swiper slider item txt start --}}
{{--                            <div class="swiper-slide-inner-txt">--}}
{{--                                 button start --}}
{{--                                <div class="more-wraper-center more-wraper-center-home">--}}
{{--                                    <a class="button button-effect button-effect-light" href="project-01.html">--}}
{{--                                        <div class="more-wraper-inner-home">--}}
{{--                                            <i class="pulse"></i>--}}
{{--                                            <div class="more-button-txt-center more-button-txt-center-light more-button-txt-center-home">--}}
{{--                                                <span>View project</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                 button end --}}
{{--                            </div>--}}
{{--                             swiper slider item txt end --}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                     swiper slider item end --}}
{{--                     swiper slider item start --}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="swiper-slide-inner">--}}
{{--                             swiper slider item IMG start --}}
{{--                            <div class="swiper-slide-inner-bg bg-img-2 overlay overlay-dark"></div>--}}
{{--                             swiper slider item IMG end --}}
{{--                             swiper slider item txt start --}}
{{--                            <div class="swiper-slide-inner-txt">--}}
{{--                                 button start --}}
{{--                                <div class="more-wraper-center more-wraper-center-home">--}}
{{--                                    <a class="button button-effect button-effect-light" href="project-02.html">--}}
{{--                                        <div class="more-wraper-inner-home">--}}
{{--                                            <i class="pulse"></i>--}}
{{--                                            <div class="more-button-txt-center more-button-txt-center-light more-button-txt-center-home">--}}
{{--                                                <span>View project</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                 button end --}}
{{--                            </div>--}}
{{--                             swiper slider item txt end --}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                     swiper slider item end --}}
{{--                     swiper slider item start --}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="swiper-slide-inner">--}}
{{--                             swiper slider item IMG start --}}
{{--                            <div class="swiper-slide-inner-bg bg-img-3 overlay overlay-dark">--}}
{{--                            </div>--}}
{{--                             swiper slider item IMG end --}}
{{--                             swiper slider item txt start --}}
{{--                            <div class="swiper-slide-inner-txt">--}}
{{--                                 button start --}}
{{--                                <div class="more-wraper-center more-wraper-center-home">--}}
{{--                                    <a class="button button-effect button-effect-light" href="project-03.html">--}}
{{--                                        <div class="more-wraper-inner-home">--}}
{{--                                            <i class="pulse"></i>--}}
{{--                                            <div class="more-button-txt-center more-button-txt-center-light more-button-txt-center-home">--}}
{{--                                                <span>View project</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                 button end --}}
{{--                            </div>--}}
{{--                             swiper slider item txt end --}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                     swiper slider item end --}}
{{--                     swiper slider item start --}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="swiper-slide-inner">--}}
{{--                             swiper slider item IMG start --}}
{{--                            <div class="swiper-slide-inner-bg bg-img-4 overlay overlay-dark"></div>--}}
{{--                             swiper slider item IMG end --}}
{{--                             swiper slider item txt start --}}
{{--                            <div class="swiper-slide-inner-txt">--}}
{{--                                 button start --}}
{{--                                <div class="more-wraper-center more-wraper-center-home">--}}
{{--                                    <a class="button button-effect button-effect-light" href="project-04.html">--}}
{{--                                        <div class="more-wraper-inner-home">--}}
{{--                                            <i class="pulse"></i>--}}
{{--                                            <div class="more-button-txt-center more-button-txt-center-light more-button-txt-center-home">--}}
{{--                                                <span>View project</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                 button end --}}
{{--                            </div>--}}
{{--                             swiper slider item txt end --}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                     swiper slider item end --}}
{{--                </div>--}}
{{--                 swiper wrapper end --}}
{{--            </div>--}}
{{--             swiper container end --}}
{{--        </div>--}}
{{--         hero slider wrapper end --}}
{{--         swiper slider controls start --}}
{{--        <div>--}}
{{--            <div class="swiper-slide-controls slide-prev">--}}
{{--                        <span>--}}
{{--                            <svg class="circle-svg" height="50" width="50">--}}
{{--                                <circle class="circle" cx="25" cy="25" r="24"></circle>--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                <div class="ion-ios-arrow-left"></div>--}}
{{--            </div>--}}
{{--            <div class="swiper-slide-controls slide-next">--}}
{{--                        <span>--}}
{{--                            <svg class="circle-svg" height="50" width="50">--}}
{{--                                <circle class="circle" cx="25" cy="25" r="24"></circle>--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                <div class="ion-ios-arrow-right"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--         swiper slider controls end --}}
{{--        <div data-scroll class="main-title-wrapper-img-hero">--}}
{{--        </div>--}}
{{--        <div class="main-title-wrapper-s">--}}
{{--             section title start --}}
{{--            <h2 class="main-title-main-color-s">--}}
{{--                seventy seven collective--}}
{{--            </h2>--}}
{{--             section title end --}}
{{--        </div>--}}
        <div class="main-title-wrapper-s">
        {{-- section title start --}}
            <h2 class="main-title-main-color-s">
                seventy seven collective
            </h2>
            {{-- section title end --}}
        </div>
    </div>
</div>
