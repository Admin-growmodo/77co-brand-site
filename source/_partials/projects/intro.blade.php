<div class="bg-light">
    <div class="container-fluid nopadding">
        <div class="extra-margin-all">
            <div class="works-section">
                <div class="container-fluid no-mrg-pdg">
                    <div class="row no-gutter">
                        <div class="col-md-12">
                            {{-- item start --}}
                            <div class="box-img">
                                {{-- item IMG start --}}
                                <div class="img-fullwidth-all">
                                    <img alt="Img" src="{{ $page->hero_image_url }}">
                                </div>
                                {{-- item IMG end --}}
                            </div>
                            {{-- item end --}}
                        </div>
                    </div>
                </div>

                <div class="inner-divider"></div>
            </div>
        </div>
    </div>
</div>

<div class="bg-light">
    <div class="container-fluid nopadding">
        <div class="extra-margin-all post-spacing">
            <div class="d-flex">
                <div class="col-lg-6">
                    <div class="subtitle subtitle-light pink-text">The Project</div>
                    <div class="inner-divider-half"></div>
                    <div class="post-spacing-2">
                        <div class="intro">
                            {!! $description !!}
                        </div>
                    </div>
                </div>
                @isset($stats->value)
                    @php
                        $html .= '<div class="col-3 justify-content-center"><div class="project-stats pb-2" stat="' . $stats['value'] . '">0</div><p class="text-center subtitle">' . $stats['label'] . '</p></div>';
                    @endphp
                <div class="col-lg-6">
                    <div class="subtitle subtitle-light pink-text">The Stats</div>
                    <div class="inner-divider-half"></div>
                    <div class="post-spacing-2">
                        <div class="intro">
                            <div class="d-flex justify-content-center">
                            {!! $html !!}
                            </div>
                        </div>
                    </div>
                </div>
                @endisset
                @isset($stats)
                    @if (!empty($stats))
                        <div class="col-lg-6">
                            <div class="subtitle subtitle-light pink-text">The Stats</div>
                            <div class="inner-divider-half"></div>
                            <div class="post-spacing-2">
                                <div class="intro">
                                    <div class="d-flex justify-content-center">
                                        @foreach ($stats as $stat)
                                            <div class="col-4 justify-content-center">
                                                <div class="project-stats pb-2" stat="{{ $stat['value'] }}">0</div>
                                                <p class="text-center subtitle">{{ $stat['label'] }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endisset
            </div>
            <div class="inner-divider"></div>
        </div>
    </div>
</div>
@if($page->challenge)
<div class="bg-light">
    <div class="container-fluid nopadding">
        <div class="extra-margin-all post-spacing">
            <div class="d-flex flex-row-reverse">
                <div class="col-lg-6">
                    <div class="subtitle subtitle-light pink-text">The Challenge</div>
                    <div class="inner-divider-half"></div>
                    <div class="post-spacing-2">
                        <div class="intro">
                            {!! $page->challenge !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="inner-divider"></div>
        </div>
    </div>
</div>
@endif

@if($page->approach)
<div class="bg-light">
    <div class="container-fluid nopadding">
        <div class="extra-margin-all post-spacing">
            <div class="d-flex">
                <div class="col-lg-6">
                    <div class="subtitle subtitle-light pink-text">The Approach</div>
                    <div class="inner-divider-half"></div>
                    <div class="post-spacing-2">
                        <div class="intro">
                            {!! $page->approach !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="inner-divider"></div>
        </div>
    </div>
</div>
@endif

@if($page->approach)
<div class="bg-light">
    <div class="container-fluid nopadding">
        <div class="extra-margin-all post-spacing">
            <div class="d-flex flex-row-reverse">
                <div class="col-lg-6">
                    <div class="subtitle subtitle-light pink-text">The Solution</div>
                    <div class="inner-divider-half"></div>
                    <div class="post-spacing-2">
                        <div class="intro">
                            {!! $page->solution !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="inner-divider"></div>
        </div>
    </div>
</div>
@endif