<?php
// Define a multi-dimensional associative array for 10 fruits
$fruit_directory = [
    "Apple" => [
        "image" => "https://images.unsplash.com/photo-1560806887-1e4cd0b6cbd6?w=150",
        "description" => "A sweet, edible fruit produced by an apple tree.",
        "facts" => "Apples are high in fiber and Vitamin C, and they can help support a healthy immune system."
    ],
    "Banana" => [
        "image" => "https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?w=150",
        "description" => "Color: Yellow. An elongated, edible fruit produced by several kinds of large herbaceous flowering plants.",
        "facts" => "Bananas are a healthful addition to a balanced diet, as they provide a range of vital nutrients and are a good source of fiber."
    ],
    "Cherry" => [
        "image" => "https://images.unsplash.com/photo-1527661591475-527312dd65f5?w=150",
        "description" => "A small, round stone fruit that is typically bright red to deep purple.",
        "facts" => "Cherries are packed with antioxidants and anti-inflammatory compounds."
    ],
    "Grapes" => [
        "image" => "https://images.unsplash.com/photo-1537640538966-79f369143f8f?w=150",
        "description" => "A botanically classified berry that grows in clusters on woody vines.",
        "facts" => "Grapes have been cultivated for thousands of years and are used to make wine, raisins, and juice."
    ],
    "Kiwi" => [
        "image" => "https://images.unsplash.com/photo-1585059895316-1b33383a54bc?w=150",
        "description" => "An oval fruit with a dull greenish-brown skin and bright green or yellow flesh.",
        "facts" => "Kiwi contains more Vitamin C than an equivalent amount of orange."
    ],
    "Mango" => [
        "image" => "https://images.unsplash.com/photo-1553279768-865429fa0078?w=150",
        "description" => "A juicy stone fruit produced from numerous species of tropical trees.",
        "facts" => "Known as the 'king of fruits' in some parts of the world, mangoes are rich in Vitamin A."
    ],
    "Orange" => [
        "image" => "https://images.unsplash.com/photo-1547514701-42782101795e?w=150",
        "description" => "A citrus fruit known for its vibrant orange color and sweet-tart flavor.",
        "facts" => "Oranges are an excellent source of vitamin C and help protect cells from damage."
    ],
    "Papaya" => [
        "image" => "https://images.unsplash.com/photo-1525385794957-4519f9c2d199?w=150",
        "description" => "A soft, tropical fruit with an orange-colored flesh and numerous black seeds inside.",
        "facts" => "Papayas contain an enzyme called papain, which can break down tough protein chains in meat."
    ],
    "Pineapple" => [
        "image" => "https://images.unsplash.com/photo-1550258987-190a2d41a8ba?w=150",
        "description" => "A tropical plant with an edible fruit consisting of coalesced berries.",
        "facts" => "A pineapple is not a single fruit, but a cluster of hundreds of tiny individual fruitlets."
    ],
    "Strawberry" => [
        "image" => "https://images.unsplash.com/photo-1464965911861-746a04b4bca6?w=150",
        "description" => "A widely grown hybrid species of the genus Fragaria, known for its aroma and red color.",
        "facts" => "Strawberries are the only fruit that wear their seeds on the outside."
    ]
];

// Sort the directory alphabetically by its key (Fruit Name)
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
            background-color: #4CAF50;
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
