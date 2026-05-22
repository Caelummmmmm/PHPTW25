<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Functions Output Matrix</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px; }
        table { width: 100%; border-collapse: collapse; background-color: #fff; margin: 20px auto; }
        th, td { border: 2px solid #7f7f7f; text-align: center; padding: 15px; vertical-align: middle; color: #000; }
        
        .main-header { font-size: 1.1rem; padding: 25px; font-weight: normal; }
        .sub-header { font-weight: normal; background-color: #ffffff; font-size: 0.95rem; }
        
        tr:nth-child(even) { background-color: #ffffff; }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th colspan="6" class="main-header">List of names</th>
        </tr>
        <tr>
            <th class="sub-header" style="width: 15%;">Name</th>
            <th class="sub-header" style="width: 17%;">Number of<br>characters</th>
            <th class="sub-header" style="width: 17%;">Uppercase first<br>character</th>
            <th class="sub-header" style="width: 17%;">Replace vowels<br>with @</th>
            <th class="sub-header" style="width: 18%;">Check position of<br>character "a"</th>
            <th class="sub-header" style="width: 16%;">Reverse<br>name</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
        $names = [
            "addison montgomery",
            "meredith grey", "derick shepherd", "cristina yang", "alex karev",
            "george o malley", "izzie stevens", "miranda bailey", "richard webber", "callie torres",
            "arizona robbins", "mark sloan", "lexie grey", "jackson avery", "april kepner",
            "owen hunt", "teddy altman", "jo wilson", "amelia grey", "andrew deluca"
        ];

        foreach ($names as $name) {
            $charCount = strlen($name);

            $uppercaseFirst = ucfirst($name);

            $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
            $replaceVowels = str_replace($vowels, '@', $name);

            $posA = stripos($name, 'a');
            $displayPos = ($posA === false) ? "-" : $posA;

            $reverseName = strrev($name);

            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$charCount</td>";
            echo "<td>$uppercaseFirst</td>";
            echo "<td>$replaceVowels</td>";
            echo "<td>$displayPos</td>";
            echo "<td>$reverseName</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>