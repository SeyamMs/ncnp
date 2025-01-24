<?php

return [

    'production' => true,
    'baseUrl' => $baseUrl = 'https://electrathon-sera.com',
    'asset' => fn($page, $source) => $baseUrl . str($source)->start('/assets/'),

];
