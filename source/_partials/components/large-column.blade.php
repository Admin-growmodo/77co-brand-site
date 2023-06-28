{{-- col start --}}
<div class="col-lg-6">
    @isset($div_position)
        <div class="showcase showcase-all">
        <div class="{{ ($div_position == 'Right') ? 'showcase-img-right' : 'showcase-img-left' }}">
    @endisset
    {{-- section title start --}}
    <div class="subtitle subtitle-light">{{$title}}</div>
    {{-- section title end --}}
    {{-- divider start --}}
    <div class="inner-divider-half"></div>
    {{-- divider end --}}
    <div class="post-spacing-2">
        {{-- section txt start --}}
        <div class="intro">
            {!! $body !!}
        </div>
        {{-- section txt end --}}
    </div>
    {{-- divider start --}}
    @isset($div_position)
        </div>
        </div>
    @endisset
{{--    <div class="inner-divider-half"></div>--}}
    {{-- divider end --}}
</div>
{{-- col end --}}
