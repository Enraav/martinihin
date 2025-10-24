<?php
$arr = [
    [
        'title' => 'Altair',
        'price' => 15000,
        'quantity' => 15
    ],
    [
        'title' => 'Vega',
        'price' => 20000,
        'quantity' => 10
    ],
    [
        'title' => 'Sirius',
        'price' => 5000,
        'quantity' => 20
    ],
    [
        'title' => 'Procyon',
        'price' => 12000,
        'quantity' => 8
    ],
    [
        'title' => 'Betelgeuse',
        'price' => 30000,
        'quantity' => 5
    ],
    [
        'title' => 'Rigel',
        'price' => 8000,
        'quantity' => 12
    ],
    [
        'title' => 'Deneb',
        'price' => 25000,
        'quantity' => 7
    ]
];

function storage($arr) {
    $result = [
        'quantityCards' => 0,
        'maxPrice' => 0,
        'minPrice' => 0,
        'allQuantity' => 0,
        'allSumm' => 0
    ];
    
    if (empty($arr)) {
        return $result;
    }
    
    $result['quantityCards'] = count($arr);
    
    $result['minPrice'] = $arr[0]['price'];
    $result['maxPrice'] = $arr[0]['price'];
    
    foreach ($arr as $item) {
        $result['allQuantity'] += $item['quantity'];
        
        $result['allSumm'] += $item['price'] * $item['quantity'];
        
        if ($item['price'] > $result['maxPrice']) {
            $result['maxPrice'] = $item['price'];
        }
        
        if ($item['price'] < $result['minPrice']) {
            $result['minPrice'] = $item['price'];
        }
    }
    
    return $result;
}

$result = storage($arr);

print_r($result);

?>