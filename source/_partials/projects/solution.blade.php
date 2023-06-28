<div class="bg-light">
    <div class="container-fluid nopadding">
        <div class="extra-margin-all post-spacing">
            {{-- divider start --}}
            <div class="inner-divider"></div>
            {{-- divider end --}}
            {{-- row start --}}
            <div class="row">
                {{-- col start --}}
                <div class="col-lg-6">
                    {{-- section title start --}}
                    <div class="subtitle subtitle-light">The Conclusion</div>
                    {{-- section title end --}}
                    {{-- divider start --}}
                    <div class="inner-divider-half"></div>
                    {{-- divider end --}}
                    <div class="post-spacing-2">
                        {{-- section txt start --}}
                        <div class="intro">
                            {!! $page->solution !!}
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
<div class="bg-light">
    <div class="container-fluid nopadding">
        <div class="extra-margin-all">
            {{-- row start --}}
            <div class="row">
                {{-- col start --}}
                <div class="col-lg-12 popup-photo-gallery">
                    {{-- showcase start --}}
                    <div class="showcase showcase-all">
                        <div class="showcase-img-right">
                            <a href="img/works/project-01/4.jpg" title="IMG Description">
                                <img src="img/works/project-01/4.jpg" alt="Img">
                            </a>
                        </div>
                    </div>
                    {{-- showcase end --}}
                    {{-- divider start --}}
                    <div class="inner-divider inner-divider-showcase"></div>
                    {{-- divider end --}}
                    {{-- showcase start --}}
                    <div class="showcase showcase-all">
                        <div class="showcase-img-left">
                            <a href="img/works/project-01/5.jpg" title="IMG Description">
                                <img src="img/works/project-01/5.jpg" alt="Img">
                            </a>
                        </div>
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
{{-- section start --}}
<div class="bg-light">
    <div class="container-fluid nopadding">
        <div class="extra-margin-all post-spacing">
            {{-- row start --}}
            <div class="row">
                {{-- col start --}}
                <div class="col-lg-12">
                    {{-- divider start --}}
                    <div class="inner-divider"></div>
                    {{-- divider end --}}
                    {{-- line start --}}
                    <div class="the-line"></div>

                    {{-- line end --}}
                    {{-- divider start --}}
                    <div class="inner-divider-half"></div>
                    {{-- divider end --}}
                </div>
                {{-- col end --}}
            </div>
            {{-- row end --}}
            {{-- row start --}}
            @if ($page->getNext())
            <div class="row">
                {{-- col start --}}
                <div class="col-lg-12">
                    {{-- section title start --}}
                    <div class="subtitle subtitle-light">Next Project</div>
                    {{-- section title end --}}
                    {{-- divider start --}}
                    <div class="inner-divider-half"></div>
                    {{-- divider end --}}
                    {{-- section title start --}}
                    <h1 class="main-title main-title-all">
                        <a href="{{ $page->getNext()->getPath() }}">
                            {{ $page->getNext()->title }}
                        </a>
                    </h1>
                    {{-- section title end --}}
                </div>
                {{-- col end --}}
            </div>
            @endif
            {{-- row end --}}
            {{-- row start --}}
            <div class="row">
                {{-- col start --}}
                <div class="col-lg-12">
                    {{-- divider start --}}
                    <div class="inner-divider-half"></div>
                    {{-- divider end --}}
                    {{-- line start --}}
                    <div class="the-line"></div>
                    {{-- line end --}}
                    {{-- divider start --}}
                    <div class="inner-divider inner-divider-last"></div>
                    {{-- divider end --}}
                </div>
                {{-- col end --}}
            </div>
            {{-- row end --}}
        </div>
    </div>
</div>
{{-- section end --}}
