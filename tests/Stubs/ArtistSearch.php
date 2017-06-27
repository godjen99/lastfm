<?php

namespace Tests\Stubs;

class ArtistSearch
{
    public static $successfulResult = [
        'results' => [
            'opensearch:Query' => [
                '#text' => '',
                'role' => 'request',
                'searchTerms' => 'black sabbath',
                'startPage' => '1'
            ],
            'opensearch:totalResults' => '6063',
            'opensearch:startIndex' => '0',
            'opensearch:itemsPerPage' => '30',
            'artistmatches' => [
                'artist' => [
                    [
                        'name' => 'Black Sabbath',
                        'listeners' => '2329578',
                        'mbid' => '5182c1d9-c7d2-4dad-afa0-ccfeada921a8',
                        'url' => 'https://www.last.fm/music/Black+Sabbath',
                        'streamable' => '0',
                        'image' => [
                            [
                                '#text' => 'https://lastfm-img2.akamaized.net/i/u/34s/449c7707dc334b07a995ba6459616976.png',
                                'size' => 'small'
                            ],
                            [
                                '#text' => 'https://lastfm-img2.akamaized.net/i/u/64s/449c7707dc334b07a995ba6459616976.png',
                                'size' => 'medium'
                            ],
                            [
                                '#text' => 'https://lastfm-img2.akamaized.net/i/u/174s/449c7707dc334b07a995ba6459616976.png',
                                'size' => 'large'
                            ],
                            [
                                '#text' => 'https://lastfm-img2.akamaized.net/i/u/300x300/449c7707dc334b07a995ba6459616976.png',
                                'size' => 'extralarge'
                            ],
                            [
                                '#text' => 'https://lastfm-img2.akamaized.net/i/u/449c7707dc334b07a995ba6459616976.png',
                                'size' => 'mega'
                            ]
                        ]
                    ],
                    [
                        'name' => 'Blue Sabbath Black Cheer',
                        'listeners' => '1393',
                        'mbid' => '77e75365-6c78-4769-9cfc-656d1c5497ed',
                        'url' => 'https://www.last.fm/music/Blue+Sabbath+Black+Cheer',
                        'streamable' => '0',
                        'image' => [
                            [
                                "#text" => "https://lastfm-img2.akamaized.net/i/u/34s/5b9fa350d92e43d18aa60472837d20b8.png",
                                "size" => "small"
                            ],
                            [
                                "#text" => "https://lastfm-img2.akamaized.net/i/u/64s/5b9fa350d92e43d18aa60472837d20b8.png",
                                "size" => "medium"
                            ],
                            [
                                "#text" => "https://lastfm-img2.akamaized.net/i/u/174s/5b9fa350d92e43d18aa60472837d20b8.png",
                                "size" => "large"
                            ],
                            [
                                "#text" => "https://lastfm-img2.akamaized.net/i/u/300x300/5b9fa350d92e43d18aa60472837d20b8.png",
                                "size" => "extralarge"
                            ],
                            [
                                "#text" => "https://lastfm-img2.akamaized.net/i/u/5b9fa350d92e43d18aa60472837d20b8.png",
                                "size" => "mega"
                            ]
                        ]
                    ]
                ]
            ],
            '@attr' => [
                'for' => 'black sabbath'
            ]
        ]
    ];
}