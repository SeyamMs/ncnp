<?php

return [

    'production' => false,
    'baseUrl' => $baseUrl = 'http://localhost:8000',

    'title' => 'NCNP 2025',
    'description' => 'تحدي الابتكار للقطاع غير الربحي يهدف إلى تحفيز الابتكار واستقطاب حلول مبتكرة لتحسين تجربة ضيوف الرحمن وتعزيز استدامة المنظمات غير الربحية، مع إحداث أثر اجتماعي مستدام عبر مراحل مدروسة.',
    'keywords' => [
        'تحدي الابتكار',
        'لمنظمات القطاع غير الربحي ابتكر في خدمات ومنتجات ضيوف الرحمن',
        'المركز الوطني لتنمية القطاع غير الربحي',
        'NCNP 2025',
    ],

    'collections' => [
        'paths' => [
            'path' => 'paths',
        ]
    ],

    'asset' => fn($page, $source) => $baseUrl . str($source)->start('/assets/'),
    'route' => fn($page, $source) => $baseUrl . str($source)->start('/'),

];
