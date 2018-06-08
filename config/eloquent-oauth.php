<?php

use App\User;

return [
    'model' => User::class,
    'table' => 'oauth_identities',
    'providers' => [
        'facebook' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/facebook/redirect',
            'scope' => [],
        ],
        'google' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'http://larforum.test/google/redirect',
            'scope' => [],
        ],
        'github' => [
            'client_id' => 'cd6c105ea2a59fcd0216',
            'client_secret' => '1c04653bec987fdc86be1e3d86b1443f4817c9c9',
            'redirect_uri' => 'http://larforum.test/github/redirect',
            'scope' => [],
        ],
        'linkedin' => [
            'client_id' => '815gmemqk1yx6v',
            'client_secret' => '2Gxed5SgPWDANCay',
            'redirect_uri' => 'http://larforum.test/linkedin/redirect',
            'scope' => [],
        ],
        'instagram' => [
            'client_id' => '5d08ab1d93b64a26913f6640666b5de5',
            'client_secret' => ' ae97599bc06a43f8a95015b8e22f7f5b ',
            'redirect_uri' => 'http://larforum.test/instagram/redirect',
            'scope' => [],
        ],
        'soundcloud' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/soundcloud/redirect',
            'scope' => [],
        ],
    ],
];
