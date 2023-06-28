<div class="bg-dark">
    <div class="container container-fix">
        <div class="extra-margin-all post-spacing">
            {{-- divider start --}}
            <div class="inner-divider"></div>
            {{-- divider end --}}
            {{-- row start --}}
            <div class="row">
                {{-- col start --}}
                <div class="col-md-4 col-sm-12">
                    {{-- section title start --}}
                    <div class="subtitle subtitle-light subtitle-light-2">Follow Us On Social</div>
                    {{-- section title end --}}
                    {{-- divider start --}}
                    <div class="inner-divider-50"></div>
                    {{-- divider end --}}
                    {{-- section TXT start --}}
                        <div class="d-flex flex-row">
                            <div class="p-2">
                                <a href="https://www.facebook.com/seventy7co" title="Follow on Facebook" target="_blank">
                                    <svg fill="#fff" width="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="p-2">
                                <a href="https://www.linkedin.com/company/seventyseven-co" title="Follow on LinkedIn" target="_blank">
                                    <svg fill="#fff" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">{{--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --}}
                                        <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="p-2">
                                <a href="https://www.instagram.com/seventy7co/" title="Follow on Instagram" target="_blank">
                                    <svg fill="#fff" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    {{-- section TXT end --}}
                    {{-- divider start --}}
                    <div class="inner-divider-half mobile-visible"></div>
                    {{-- divider end --}}
                </div>
                {{-- col end --}}
                {{-- col start --}}
                <div class="col-md-8 col-sm-12">
                    {{-- section title start --}}
                    <div class="subtitle subtitle-light subtitle-light-2">Recognition</div>
                    {{-- section title end --}}
                    {{-- divider start --}}
                    <div class="inner-divider-50"></div>
                    {{-- divider end --}}
                    {{-- section TXT start --}}
                    <div class="section-txt-2">
                        <div class="d-flex flex-wrap flex-xxl-row flex-xxl-row flex-sm-column">

                            @foreach($recognitions as $recognition)
                                <div class="p-2">
                                    <a href="{{$recognition->url}}">
                                        <img loading="lazy" decoding="async" src="{{$recognition->img_url}}" width="120px" height="120px" alt="{{$recognition->alt}}" data-lazy-src="{{$recognition->img_url}}" data-ll-status="loaded" class="entered lazyloaded"><noscript><img loading="lazy" decoding="async" src="{{$recognition->img_url}}" width="120px" height="120px" alt="{{$recognition->alt}}" /></noscript>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- section TXT end --}}
                    {{-- divider start --}}
                    <div class="inner-divider-half mobile-visible"></div>
                    {{-- divider end --}}
                </div>
                {{-- col end --}}
                {{-- col start --}}
{{--                <div class="col-md-4 col-sm-12">--}}
{{--                     section title start --}}
{{--                    <div class="subtitle subtitle-light subtitle-light-2">Follow Us On Social</div>--}}
{{--                     section title end --}}
{{--                     divider start --}}
{{--                    <div class="inner-divider-50"></div>--}}
{{--                     divider end --}}
{{--                     section TXT start --}}
{{--                    <div class="section-txt-2">--}}

{{--                    </div>--}}
{{--                     section TXT end --}}
{{--                </div>--}}
                {{-- col end --}}
            </div>
            {{-- row end --}}
            {{-- divider start --}}
            <div class="inner-divider inner-divider-last"></div>
            {{-- divider end --}}
        </div>
    </div>
</div>
{{-- footer end --}}
