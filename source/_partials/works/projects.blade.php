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
                        @foreach($projects as $project)
                            <div class="{{ $loop->iteration %2 == 0 ? 'showcase-img-left' : 'showcase-img-right' }}">
                            <a href="{{$project->getURL()}}" class="pos-index-99"><img src="{{$project->hero_image_url}}" alt="Img"></a>
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
