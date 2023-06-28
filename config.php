<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Seventy Seven Collective | An Atlanta Digital Marketing Agency',
    'description' => 'We’re a small but nimble, full-service branding and digital marketing agency with all the experience of the big agencies, but none of the overhead. From creative strategy and branding to digital marketing and full website design and development, we make the impact. You get the results.',
    'collections' => [
        'recognitions' => [
            'items' => function ($config) {
                $curl = curl_init();

                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://api.flotiq.com/api/v1/content/seventysevenrecognition?page=1&limit=20&order_by=order&order_direction=desc&hydrate=0",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => [
                        "X-AUTH-TOKEN: 4d36eef9b5ec1eca3d92216927847375"
                    ],
                ]);

                $recognitions = json_decode(curl_exec($curl));
                $err = curl_error($curl);

                curl_close($curl);
                if( $recognitions ){
                    return collect($recognitions->data)->map(function ($recognition) {
                        return [
                            'url' => $recognition->url,
                            'img_url' => $recognition->img_url,
                            'alt' => $recognition->alt,
                            ];
                    });
                }
            }
        ],
        'projects' => [
            'extends' => '_layouts.project',


            'items' => function ($config) {


             $context = stream_context_create(array(
                    'http' => array(
                        'header'  => "X-AUTH-TOKEN: 4d36eef9b5ec1eca3d92216927847375"
                    )
                ));

                $projects = json_decode(file_get_contents('https://api.flotiq.com/api/v1/content/seventyseven_works?page=1&limit=20&order_by=order&order_direction=desc&hydrate=0', true, $context), true);

                $collection = collect($projects['data'])->map(function ($project) {

//                    ray($project['images']);
                    $html = preg_replace('/<p[^>]*>(.*)<\/p[^>]*>/i', '$1', $project['description']);

                    ray($html);

                    return [
                        'url' => $project['url'] ?? '',
                        'hero_image_url' => $project['hero_image_url'] ?? '',
                        // 'alt' => $project->alt,
                        'description' => $html ?? '',
                        'title' => $project['title'] ?? '',
                        'name' => Str::slug($project['title']) ?? '',
                        'quote' => $project['quote'] ?? '',
                        'date' => $project['date'] ?? '',
                        'blurb' => $project['blurb'] ?? '',
                        'stats' => $project['stats'] ?? [],
                        'approach' => preg_replace('/<p[^>]*>(.*)<\/p[^>]*>/i', '$1',$project['approach'] ?? ''),
                        'challenge' => preg_replace('/<p[^>]*>(.*)<\/p[^>]*>/i', '$1',$project['challenge'] ?? ''),
                        'solution' => preg_replace('/<p[^>]*>(.*)<\/p[^>]*>/i', '$1',$project['solution'] ?? ''),
                        'show_in_hero' => $project['show_in_hero'] ?? false,
                        'show_on_homepage' => $project['show_on_homepage'] ?? false,
                        'video_url' => $project['video_url'] ?? null,
                        'images' => $project['images']  ?? [],
                        'path' => '{collection}/{name}',
                        ];
                });

                return $collection;
            }
        ],
        'services' => [
            'items' => function ($config) {
                $curl = curl_init();

                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://api.flotiq.com/api/v1/content/services?page=1&limit=20&order_by=order&order_direction=desc&hydrate=0",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => [
                        "X-AUTH-TOKEN: 4d36eef9b5ec1eca3d92216927847375"
                    ],
                ]);

                $services = json_decode(curl_exec($curl));
                $err = curl_error($curl);

                curl_close($curl);

                return collect($services->data)->map(function ($service) {
                    return [
                        'description' => $service->description,
                        'title' => $service->title,
                        ];
                });

            }
        ],
        'teams' => [
            'items' => function ($config) {
                $curl = curl_init();

                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://api.flotiq.com/api/v1/content/seventyseven_teams?page=1&limit=20&order_by=order&order_direction=asc&hydrate=0",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => [
                        "X-AUTH-TOKEN: 4d36eef9b5ec1eca3d92216927847375"
                    ],
                ]);

                $teams = json_decode(curl_exec($curl));
                $err = curl_error($curl);

                curl_close($curl);

                return collect($teams->data)->map(function ($team) {
                    return [
                        'name' => $team->name,
                        'title' => $team->title,
                        'socials' => $team->socials,
                        'image_url' => $team->image_url,
                        ];
                });

            }
        ],
    ],
];
