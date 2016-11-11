<?php

/*
 * This file is part of the laravel-uploader.
 *
 * (c) 2016 overtrue <i@overtrue.me>
 */

return [
    'strategies' => [
        /**
         * default strategy.
         */
        'default' => [
            'mimes' => ['image/jpeg', 'image/png', 'image/bmp', 'image/gif'],
            'storeage' => 'public',
            'directory' => '', // directory,
            'max_file_size' => '2m',
        ],

        // avatar extends default
        'avatar' => [
            'directory' => 'avatars',
        ],
    ],
];

// @uploader('file', ['strategy' => 'avatar', 'data' => [$product->images]])
