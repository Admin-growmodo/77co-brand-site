@include('_partials.components.scroller', ['first_word' => 'Our', 'second_word' => 'Team','showdivider' => false])

<div class="inner-divider-50"></div>
@include('_partials.components.section-blurb',['title'=>'', 'content'=>'Our passion points to us being a great partner. We approach each project as a unique opportunity to solve business problems, whether that means we’re creating one social post or an all-encompassing rebrand, you get our all in everything we do.'])
<div class="bg-light">
        <div class="container-fluid nopadding">
{{--        <div class="swiper team-swiper">--}}
{{--            <div class="swiper-wrapper">--}}
{{--                @foreach($teams->chunk(3) as $team)--}}
{{--                <div class="swiper-slide bg-light">--}}
{{--                    <div class="row py-5" style="width:90%">--}}
{{--                    @foreach($team as $teammate)--}}
{{--                        <div class="col-lg-4 col-md-12 py-3">--}}
{{--                            <div class="carousel-item-all">--}}
{{--                                <img src="{{ $teammate->image_url }}" alt="{{$teammate->name}}">--}}
{{--                            </div>--}}
{{--                            <div class="post-box-inner">--}}
{{--                                 divider start --}}
{{--                                <div class="inner-divider-50"></div>--}}
{{--                                 divider end --}}
{{--                                 section title start --}}
{{--                                <div class="post-title">--}}
{{--                                    {{$teammate->name}}--}}
{{--                                </div>--}}
{{--                                <div class="post-title">--}}
{{--                                    {{$teammate->title}}--}}
{{--                                </div>--}}
{{--                                <div class="post-title">--}}
{{--                                    @foreach($teammate->socials as $social)--}}
{{--                                    <a href="{{$teammate->url}}" target="_blank">{{$teammate->icon}}</a>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                                 section title end --}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--            <div class="swiper-button-next"></div>--}}
{{--            <div class="swiper-button-prev"></div>--}}
{{--        </div>--}}


        <div class="row py-5">
            @foreach($teams as $teammate)
                <div class="col-lg-4 col-md-12 py-3 text-center">
                    <div class="post-box-inner">
                        <img class="img-fluid" src="{{ $teammate->image_url }}" alt="{{$teammate->name}}" width="450" loading="lazy">
                        {{-- divider start --}}
                        <div class="inner-divider-50"></div>
                        {{-- divider end --}}
                        {{-- section title start --}}
                        <div class="post-title">
                            {{$teammate->name}}
                        </div>
                        <div class="post-title">
                            {{$teammate->title}}
                        </div>
                        <div class="post-title">
                            @foreach($teammate->socials as $social)
                                <a href="{{$teammate->url}}" target="_blank">{{$teammate->icon}}</a>
                            @endforeach
                        </div>
                        {{-- section title end --}}
                    </div>
                </div>
            @endforeach
        </div>

        </div>
    </div>
