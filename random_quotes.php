<?php
// Array of quotes
$quotes = [
    "The journey of a thousand miles begins with a single step. - Lao Tzu"
,
     "In three words I can sum up everything I've learned about life: it goes on. - Robert Frost",
    "The only way to do great work is to love what you do. - Steve Jobs",
     "Believe you can and you're halfway there. - Theodore Roosevelt",
     "Happiness is not something ready-made. It comes from your own actions. - Dalai Lama",
];

// Get a random index
$randomIndex = array_rand($quotes);

// Return the random quote
echo $quotes[$randomIndex];
?>