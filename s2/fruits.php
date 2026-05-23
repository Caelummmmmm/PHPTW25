<?php
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Fruits Directory</title>
    <style>
        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f3f7f9;
            margin: 0;
            padding: 40px 20px;
            color: #3e4a5b;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            font-size: 2.4rem;
            font-weight: 600;
            margin-bottom: 40px;
            letter-spacing: -0.5px;
        }

        .fruit-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .fruit-card {
            background-color: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.03);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .fruit-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 35px rgba(133, 200, 231, 0.2);
        }

        .image-wrapper {
            width: 100%;
            height: 220px;
            overflow: hidden;
            background-color: #eef2f5;
        }

        .fruit-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .fruit-card:hover img {
            transform: scale(1.05);
        }

        .card-content {
            padding: 24px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .fruit-name {
            font-size: 1.5rem;
            color: #1e2d3b;
            margin: 0 0 12px 0;
            font-weight: 600;
        }

        .fruit-description {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #64748b;
            margin-bottom: 20px;
            flex-grow: 1; 
        }

        .fact-box {
            background-color: #f0f7fb; 
            border-left: 4px solid #85e7d7; 
            padding: 12px 16px;
            border-radius: 0 12px 12px 0;
            margin: 0;
        }

        .fact-box strong {
            color: #3ab06b;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: block;
            margin-bottom: 4px;
        }

        .fact-box p {
            margin: 0;
            font-size: 0.9rem;
            color: #4b6947;
            line-height: 1.5;
        }
    </style>
</head>
<body>

    <h2>My Fruits Directory</h2>

    <div class="fruit-grid">
        <?php // Keep your exact, clean foreach statement logic intact ?>
        <?php foreach ($fruit_directory as $name => $details): ?>
            <div class="fruit-card">
                <div class="image-wrapper">
                    <img src="<?php echo $details['image']; ?>" alt="<?php echo $name; ?>">
                </div>
                <div class="card-content">
                    <h3 class="fruit-name"><?php echo $name; ?></h3>
                    <p class="fruit-description"><?php echo $details['description']; ?></p>
                    <div class="fact-box">
                        <strong>Quick Fact</strong>
                        <p><?php echo $details['facts']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>