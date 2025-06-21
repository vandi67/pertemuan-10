<?php

// Bagian 1: Favorit Film
$movie = "The Matrix";
$old_favorite = $movie;

echo "I'm a fickle person, my favorite movie used to be $movie.";

$movie = "Dunkirk";

echo "\nBut now my favorite is $movie.";
echo "\nBut I'll always have a special place in my heart for $old_favorite.";

// Garis pemisah
echo "\n\n---------------------------\n";

// Bagian 2: String Assignment Operator
echo "I'm going on a picnic!";

$sentence = "\nI'm going on a picnic, and I'm taking apples";

echo $sentence;

$sentence .= ", bananas";
echo $sentence;

$sentence .= ", carrots";
echo $sentence;
?>