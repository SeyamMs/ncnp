<?php

return [

    'production' => true,
    'baseUrl' => $baseUrl = 'https://seyamms.github.io/ncnp',
    'asset' => fn($page, $source) => $baseUrl . str($source)->start('/assets/'),

];
