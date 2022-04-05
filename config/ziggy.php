<?php

// return [
//     'only' => [
//         'shipment-login',
//         'getPortCode',
//         'getState',
//         'checkAirwayBill',
//         'saveStep1',
//         'getProfile1',
//         'saveStep2',
//         'getProfile2',
//         'saveStep3',
//         'getProfile3',
//         'testEndPoint'
//     ],
// ];

return [
    'groups' => [
        'shipment' => [
            'shipment-login',
            'getPortCode',
            'getState',
            'checkAirwayBill',
            'saveStep1',
            'getProfile1',
            'saveStep2',
            'getProfile2',
            'saveStep3',
            'getProfile3',
            'setFinal',
            'saveStep4',
            'getProfile4',
            'api-v1-create',
            'saveProduct',
            'getProductAdded',
            'delProductAdded',
            'updateProductAdded'
        ],
        'system' => [
            'testEndPoint',
            'checkTicketStatusPost'
        ],
    ],
];
