@php $count = 0; @endphp
@if(count($page->images) > 0)
<div class="bg-light">
    <div class="container-fluid nopadding">
        <div class="extra-margin-all">

            @foreach($page->images as $image)
                {{-- row start --}}
                @php $count += 1 @endphp
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
            @if(count($page->images) > $count)
            <div class="inner-divider"></div>
            @endif
        </div>
        @endforeach
    </div>
</div>
@endif


