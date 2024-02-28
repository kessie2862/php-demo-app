<?php

$books = [
  [
      'name' => 'Rich Dad Poor Dad',
      'author' => 'Robert Kiyosaki',
      'releaseYear' => 2011,
      'purchaseUrl' => 'www.rdpd.com'
  ],
  [
      'name' => 'Ego Is The Enemy',
      'author' => 'Ryan Holiday',
      'releaseYear' => 2000,
      'purchaseUrl' => 'www.eite.com'
  ],
  [
      'name' => 'In The Chest Of A Woman.',
      'author' => 'Ryan Holiday',
      'releaseYear' => 2009,
      'purchaseUrl' => 'www.itcoaw.com'
  ],
];

// THIS FUNCTION IS REPLACED BY PHP's array_filter BELOW.
// function filter($items, $fn) {
//     $filteredItems = [];

//     foreach($items as $item) {
//         if($fn($item)){
//             $filteredItems[] = $item;
//         }
//     }

//     return $filteredItems;
// }

$filteredBooks = array_filter($books, function ($book) {
    return $book['author'] === 'Robert Kiyosaki';
});

require 'contact.view.php';
