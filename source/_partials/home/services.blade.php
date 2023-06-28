@include('_partials.components.scroller', ['first_word'=>'Our', 'second_word'=>'Services', 'showdivider'=>false])
        <div class="bg-light">
        <div class="container container-fix">
            <div class="extra-margin-all post-spacing">
                {{-- divider start --}}
                <div class="inner-divider"></div>
                {{-- divider end --}}
                {{-- row start --}}
                <div class="row">
                    @foreach ($services->chunk(3) as $chunk)
                    {{-- col start --}}
                    <div class="col-lg-6">
                        {{-- panel wrapper start --}}
                        {{-- <div class="panel-wrapper"> --}}

                            <div class="accordion" id="accordion">
                            
                            @foreach($chunk as $service)

                            <div class="py-4">
                                <h2 class="panel-title" id="headingOne">
                                {{-- <button class="" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> --}}
                                    {{ $service->title }} Treatment
                                {{-- </button> --}}
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="panel-body">
                                    {!! $service->description !!}
                                </div>
                                </div>
                            </div>

                            @endforeach

                            {{-- 
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingOne" role="tab">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                
                                                <span class="panel-title">
                                                    {{ $service->title }}
                                                    </span>
                                                
                                                <i class="pull-left ion ion-plus"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse in" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
                                        
                                        <div class="panel-body">
                                            <p>{{ $service->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            --}}
                        </div>
                        {{-- panel wrapper end --}}
                    </div>
                    {{-- col end --}}
                    @endforeach
                </div>
                {{-- row end --}}
            </div>
        </div>
    </div>