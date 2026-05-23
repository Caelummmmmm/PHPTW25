<!DOCTYPE html>
<html>
<head>
    <title>Fruit Directory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Fruit Directory</h1>

<div class="container">

<?php

$fruits = array(

array(
"name"=>"Apple",
"image"=>"images/apple.jpg",
"description"=>"A sweet red fruit.",
"fact"=>"Rich in fiber and vitamins."
),

array(
"name"=>"Banana",
"image"=>"images/banana.jpg",
"description"=>"A yellow tropical fruit.",
"fact"=>"Good source of potassium."
),

array(
"name"=>"Cherry",
"image"=>"images/cherry.jpg",
"description"=>"A small red fruit.",
"fact"=>"Contains antioxidants."
),

array(
"name"=>"Grapes",
"image"=>"images/grapes.jpg",
"description"=>"Small juicy fruits.",
"fact"=>"Used in making wine."
),

array(
"name"=>"Mango",
"image"=>"images/mango.jpg",
"description"=>"National fruit of the Philippines.",
"fact"=>"Rich in Vitamin C."
),

array(
"name"=>"Orange",
"image"=>"images/orange.jpg",
"description"=>"A citrus fruit.",
"fact"=>"Boosts immune system."
),

array(
"name"=>"Papaya",
"image"=>"images/papaya.jpg",
"description"=>"Soft orange tropical fruit.",
"fact"=>"Good for digestion."
),

array(
"name"=>"Pineapple",
"image"=>"images/pineapple.jpg",
"description"=>"Tropical fruit with spiky skin.",
"fact"=>"Contains bromelain enzyme."
),

array(
"name"=>"Strawberry",
"image"=>"images/strawberry.jpg",
"description"=>"A sweet heart-shaped fruit.",
"fact"=>"Rich in antioxidants."
),

array(
"name"=>"Watermelon",
"image"=>"images/watermelon.jpg",
"description"=>"Large refreshing fruit.",
"fact"=>"Contains high water content."
)

);

foreach($fruits as $fruit)
{
    echo "
    <div class='card'>
        <img src='{$fruit['image']}' alt='Fruit'>
        <h2>{$fruit['name']}</h2>
        <p>{$fruit['description']}</p>
        <b>Fact:</b> {$fruit['fact']}
    </div>
    ";
}

?>

</div>

</body>
</html>