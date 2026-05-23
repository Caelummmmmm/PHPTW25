<?php
// Define a multi-dimensional associative array for 10 fruits [cite: 15, 73]
$fruit_directory = [
    "Apple" => [
        "image" => "https://images.unsplash.com/photo-1560806887-1e4cd0b6cbd6?w=400",
        "description" => "A sweet, edible fruit produced by an apple tree.",
        "facts" => "Apples are high in fiber and Vitamin C, and they can help support a healthy immune system."
    ],
    "Banana" => [
        "image" => "https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?w=400",
        "description" => "Color: Yellow. An elongated, edible fruit produced by several kinds of large herbaceous flowering plants.",
        "facts" => "Bananas are a healthful addition to a balanced diet, as they provide a range of vital nutrients and are a good source of fiber. [cite: 75]"
    ],
    "Cherry" => [
        "image" => "https://images.unsplash.com/photo-1527661591475-527312dd65f5?w=400",
        "description" => "A small, round stone fruit that is typically bright red to deep purple.",
        "facts" => "Cherries are packed with antioxidants and anti-inflammatory compounds."
    ],
    "Grapes" => [
        "image" => "https://images.unsplash.com/photo-1537640538966-79f369143f8f?w=400",
        "description" => "A botanically classified berry that grows in clusters on woody vines.",
        "facts" => "Grapes have been cultivated for thousands of years and are used to make wine, raisins, and juice."
    ],
    "Kiwi" => [
        "image" => "https://images.unsplash.com/photo-1585059895316-1b33383a54bc?w=400",
        "description" => "An oval fruit with a dull greenish-brown skin and bright green or yellow flesh.",
        "facts" => "Kiwi contains more Vitamin C than an equivalent amount of orange."
    ],
    "Mango" => [
        "image" => "https://images.unsplash.com/photo-1553279768-865429fa0078?w=400",
        "description" => "A juicy stone fruit produced from numerous species of tropical trees.",
        "facts" => "Known as the 'king of fruits' in some parts of the world, mangoes are rich in Vitamin A."
    ],
    "Orange" => [
        "image" => "https://images.unsplash.com/photo-1547514701-42782101795e?w=400",
        "description" => "A citrus fruit known for its vibrant orange color and sweet-tart flavor.",
        "facts" => "Oranges are an excellent source of vitamin C and help protect cells from damage."
    ],
    "Papaya" => [
        "image" => "https://images.unsplash.com/photo-1525385794957-4519f9c2d199?w=400",
        "description" => "A soft, tropical fruit with an orange-colored flesh and numerous black seeds inside.",
        "facts" => "Papayas contain an enzyme called papain, which can break down tough protein chains in meat."
    ],
    "Pineapple" => [
        "image" => "https://images.unsplash.com/photo-1550258987-190a2d41a8ba?w=400",
        "description" => "A tropical plant with an edible fruit consisting of coalesced berries.",
        "facts" => "A pineapple is not a single fruit, but a cluster of hundreds of tiny individual fruitlets."
    ],
    "Strawberry" => [
        "image" => "https://images.unsplash.com/photo-1464965911861-746a04b4bca6?w=400",
        "description" => "A widely grown hybrid species of the genus Fragaria, known for its aroma and red color.",
        "facts" => "Strawberries are the only fruit that wear their seeds on the outside."
    ]
];

// Sort the directory alphabetically by its key (Fruit Name) [cite: 73]
ksort($fruit_directory);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Fruits Directory</title>
    <style>
        /* Setup modern typography and background tints */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 40px 20px;
            color: #333;
        }

        h2 {
            text-align: center;
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 40px;
            font-weight: 600;
            letter-spacing: -0.5px;
        }

        /* Essential CSS Grid: Creates clean layout dynamically without complex code  */
        .fruit-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Elegant card properties */
        .fruit-card {
            background-color: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        /* Subtle lift animation when hovering */
        .fruit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        /* Card Image scaling */
        .fruit-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        /* Text content layout padding inside card */
        .fruit-info {
            padding: 20px;
        }

        .fruit-name {
            font-size: 1.4rem;
            color: #2c3e50;
            margin: 0 0 10px 0;
            font-weight: 600;
        }

        .fruit-desc {
            font-size: 0.95rem;
            color: #7f8c8d;
            line-height: 1.5;
            margin-bottom: 15px;
            min-height: 45px; /* Keeps cards aligned even if description text length varies */
        }

        /* Dedicated subtle badge layout for facts box styling */
        .fruit-facts {
            background-color: #f9fbfb;
            border-left: 4px solid #2ecc71;
            padding: 10px 12px;
            font-size: 0.85rem;
            color: #27ae60;
            border-radius: 4px;
            margin: 0;
        }
    </style>
</head>
<body>

    <h2>My Fruits Directory</h2> [cite: 73]

    <div class="fruit-grid">
        [cite_start]<?php // Use simple foreach structure to iterate through sorted elements[cite: 14, 73]?>
        <?php foreach ($fruit_directory as $name => $details): ?>
            <div class="fruit-card">
                [cite_start]<img src="<?php echo $details['image']; ?>" alt="<?php echo $name; ?>"> [cite: 73]
                <div class="fruit-info">
                    <h3 class="fruit-name"><?php echo $name; [cite_start]?></h3> [cite: 73]
                    <p class="fruit-desc"><?php echo $details['description']; [cite_start]?></p> [cite: 73]
                    <p class="fruit-facts">
                        <strong>Fact:</strong> <?php echo $details['facts']; [cite_start]?> [cite: 73]
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>
