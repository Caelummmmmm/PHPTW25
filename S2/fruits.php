<?php
// Define a multi-dimensional associative array for 10 fruits
$fruit_directory = [
"Apple" => [
"image" => "https://images.unsplash.com/photo-1560806887-1e4cd0b6cbd6?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8YXBwbGUlMjBmcnVpdHxlbnwwfHwwfHx8MA%3D%3Dw=150",
"description" => "A sweet, edible fruit produced by an apple tree.",
"facts" => "Apples are high in fiber and Vitamin C, and they can help support a healthy immune system."
],
"Banana" => [
"image" => "https://blog-images-1.pharmeasy.in/blog/production/wp-content/uploads/2021/01/30152155/shutterstock_518328943-1.jpg",
"description" => "Color: Yellow. An elongated, edible fruit produced by several kinds of large herbaceous flowering plants.",
"facts" => "Bananas are a healthful addition to a balanced diet, as they provide a range of vital nutrients and are a good source of fiber."
],
"Cherry" => [
"image" => "https://cdn.mos.cms.futurecdn.net/7YhkHg3GXCxCAc675GLpNb.jpg",
"description" => "A small, round stone fruit that is typically bright red to deep purple.",
"facts" => "Cherries are packed with antioxidants and anti-inflammatory compounds."
],
"Grapes" => [
"image" => "https://betabestproduce.com/wp-content/uploads/2022/04/4.jpg",
"description" => "A botanically classified berry that grows in clusters on woody vines.",
"facts" => "Grapes have been cultivated for thousands of years and are used to make wine, raisins, and juice."
],
"Kiwi" => [
"image" => "https://yourhealthmagazine.net/wp-content/uploads/2025/12/file-441.jpeg",
"description" => "An oval fruit with a dull greenish-brown skin and bright green or yellow flesh.",
"facts" => "Kiwi contains more Vitamin C than an equivalent amount of orange."
],
"Mango" => [
"image" => "https://www.paperandtea.com/cdn/shop/articles/Mango_6fb74c95-c9b0-4559-88e8-f542e6d6b18d.jpg?v=1769533193&width=1024",
"description" => "A juicy stone fruit produced from numerous species of tropical trees.",
"facts" => "Known as the 'king of fruits' in some parts of the world, mangoes are rich in Vitamin A."
],
"Orange" => [
"image" => "https://cdn.mos.cms.futurecdn.net/xCZ2VwHz6pDUHCSVvaQsDT-1200-80.jpg",
"description" => "A citrus fruit known for its vibrant orange color and sweet-tart flavor.",
"facts" => "Oranges are an excellent source of vitamin C and help protect cells from damage."
],
"Watermelon" => [
"image" => "https://greybears.org/wp-content/uploads/2017/05/watermelon.jpg",
"description" => "A large, juicy fruit with a green rind and sweet red or yellow flesh.",
"facts" => "Watermelons are hydrating and a good source of vitamins A and C."
],
"Pineapple" => [
"image" => "https://img.lb.wbmdstatic.com/vim/live/webmd/consumer_assets/site_images/article_thumbnails/slideshows/health_benefits_of_pineapple_slideshow/1800x1200_health_benefits_of_pineapple_slideshow.jpg",
"description" => "A tropical plant with an edible fruit consisting of coalesced berries.",
"facts" => "A pineapple is not a single fruit, but a cluster of hundreds of tiny individual fruitlets."
],
"Strawberry" => [
"image" => "https://clv.h-cdn.co/assets/15/22/2048x2048/square-1432664914-strawberry-facts1.jpg",
"description" => "A widely grown hybrid species of the genus Fragaria, known for its aroma and red color.",
"facts" => "Strawberries are the only fruit that wear their seeds on the outside."
]
];

ksort($fruit_directory);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Fruits Directory</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: #f9f9f9;
margin: 20px;
}
h2 {
text-align: center;
color: #333;
}
table {
width: 90%;
margin: 20px auto;
border-collapse: collapse;
background-color: #fff;
box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}
th, td {
border: 1px solid #dddddd;
padding: 12px;
text-align: left;
}
th {
background-color: #85c8e7;
color: white;
text-transform: uppercase;
}
tr:nth-child(even) {
background-color: #f2f2f2;
}
img {
border-radius: 8px;
object-fit: cover;
width: 100px;
height: 100px;
}
</style>
</head>
<body>

<h2>My Fruits</h2>
<table>
<thead>
<tr>
<th>Image</th>
<th>Name</th>
<th>Description</th>
<th>Facts</th>
</tr>
</thead>
<tbody>
<?php // Use a foreach loop to iterate through the fruits directory ?>
<?php foreach ($fruit_directory as $name => $details): ?>
<tr>
<td><img src="<?php echo $details['image']; ?>" alt="<?php echo $name; ?>"></td>
<td><strong><?php echo $name; ?></strong></td>
<td><?php echo $details['description']; ?></td>
<td><?php echo $details['facts']; ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>

</body>
</html>