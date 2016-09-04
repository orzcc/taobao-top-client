<?php
/*
 * This file is part of Laravel Taobao Top Client.
 *
 * (c) orzcc <orzcczh@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
return [

 	'default' => 'app',

	'connections' => [
        'app' => [
            'app_key'       => env('TAOBAO_APP_KEY', 'APP KEY'),
            'app_secret'    => env('TAOBAO_APP_SECRET', 'APP SECRET'),
            'format'        => 'json',
        ]
    ]
];