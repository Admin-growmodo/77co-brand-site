
@if(count($page->images) > 0)
<div class="bg-light">
    <div class="container-fluid nopadding">
        <div class="extra-margin-all">

            @foreach($page->images as $image)
                {{-- row start --}}

            <div class="row">
                {{-- col start --}}
                <div class="col-lg-12 popup-photo-gallery">
                    {{-- showcase start --}}
                    <div class="showcase showcase-all">
                        <div class="{{ ($image['position'] == 'Left') ? 'showcase-img-left' : 'showcase-img-right' }}">
                            <a href="{{$image['url']}}" title="{{$image['alt']}}">
                                <img src="{{$image['url']}}" alt="{{$image['alt']}}">
                            </a>
                        </div>
                    </div>
                </div>
                {{-- col end --}}
            </div>
            {{-- row end --}}

            <div class="inner-divider"></div>
        </div>
        @endforeach
    </div>
</div>
@endif


