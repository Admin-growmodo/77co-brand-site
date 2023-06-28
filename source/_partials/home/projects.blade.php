@include('_partials.components.scroller',['first_word' => 'Our', 'second_word' => 'Work', 'showdivider'=> false])
    {{-- section start --}}
        {{-- section start --}}
    <div class="bg-light">
        <div class="container container-fix">
            <div class="extra-margin-all post-spacing">
                {{-- divider start --}}
                <div class="inner-divider"></div>
                {{-- divider end --}}
                {{-- row start --}}
                <div class="row">
                    {{-- col start --}}
                    <div class="col-lg-12">
                        <div class="post-spacing-3">
                            {{-- section txt start --}}
                            <div class="intro py-3">
                                Want to see the goods? How about some of the greats instead. By that, we mean the great work that has come out of the tremendous clients we’re proud to partner with.
                            </div>
                            <div class="intro py-3">
                                Below is just a sampling of our branding, website and digital marketing strategy and execution we have completed for clients…. and there’s more on the horizon.
                            </div>
                            {{-- section txt end --}}
                            {{-- divider start --}}
                            <div class="inner-divider-half"></div>
                            {{-- divider end --}}
                        </div>
                    </div>
                    {{-- col end --}}
                </div>
                {{-- row end --}}
            </div>
        </div>
    </div>

    <div class="bg-light">
        <div class="container-fluid nopadding">
            <div class="extra-margin-all post-spacing">
                {{-- row start --}}
                <div class="row">
                    {{-- col start --}}
                    <div class="col-lg-12">
                        {{-- button start --}}
                        <div class="more-wraper-center more-wraper-center-home">
                            <a class="button button-effect" href="https://player.vimeo.com/video/690941278?h=197b42e59c"  data-toggle="lightbox">
                                <i class="pulse"></i>
                                <div class="more-button-bg-center"></div>
                                <div class="more-button-txt-center more-button-txt-center-home">
                                    <span>Watch Our Sizzle Reel</span>
                                </div>
                            </a>
                        </div>
                        {{-- button end --}}
                    </div>
                    {{-- col end --}}
                </div>
                {{-- row end --}}
                {{-- divider start --}}
                <div class="inner-divider"></div>
                {{-- divider end --}}
            </div>
        </div>




                {{-- row start --}}
                {{--<div class="row">
                    <div class="col-lg-12">
                        <div class="inner-divider-half"></div>
                        <div class="the-line"></div>
                        <div class="inner-divider"></div>
                    </div>
                </div>--}}
                {{-- row end --}}
            </div>
        </div>
    </div>
    {{-- section end --}}
    {{-- section start --}}
    <div class="bg-light">
        <div class="container-fluid nopadding">
            <div class="extra-margin-all">
                {{-- row start --}}
                <div class="row">
                    {{-- col start --}}
                    <div class="col-lg-12">
                        {{-- showcase start --}}
                        <div class="showcase">
                        @foreach($projects->take(6) as $project)
                            <div class="{{ $loop->iteration %2 == 0 ? 'showcase-img-left' : 'showcase-img-right' }}">
                                <a class="pos-index-99"><img src="{{$project->hero_image_url}}" alt="{{$project->title}}" loading="lazy"></a>
                                {{-- section txt start --}}
                                <div class="showcase-txt-wrapper">
                                    {{-- section title start --}}
                                    <div class="showcase-name">
                                        {{$project->title}}
                                    </div>
                                    {{-- section title end --}}
                                    {{-- divider start --}}
                                    <div class="inner-divider-50"></div>
                                    {{-- divider end --}}
                                    {{-- section txt start --}}
                                    <div class="section-txt">
                                        <p>
                                            {!! substr($project->description, 0, 240) !!}{{ strlen($project->description > 240) ? '...' : ''}}
                                        </p>
                                    </div>
                                    {{-- section txt end --}}
                                    {{-- divider start --}}
                                    <div class="inner-divider-50"></div>
                                    {{-- divider end --}}
                                    {{-- button start --}}
                                    <a href="{{$project->getURL()}}">
                                        <div class="button-the-wrapper button-the-wrapper-dark">
                                            <span class="button-the">View project</span>
                                        </div>
                                    </a>
                                    {{-- button end --}}
                                </div>
                                {{-- section txt end --}}
                                {{-- divider start --}}
                                <div class="inner-divider-half"></div>
                                {{-- divider end --}}
                            </div>
                            @endforeach
                        </div>
                        {{-- showcase end --}}
                    </div>
                    {{-- col end --}}
                </div>
                {{-- row end --}}
            </div>
        </div>
    </div>
    {{-- section end --}}
    @include('_partials.components.button',['text' => 'View All Projects', 'url' => '/works'])
