<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<body>
    <ul>
         <?php foreach ($filteredbooks as $book): ?>
            <li>
                <a href =<?php echo $book['PURCHASE URL']; ?>">
                    <?php echo $book['title']; ?> (<?php echo $book['year']; ?>) - by <?php echo $book['author']; ?>
                </a>
            </li>
   
        <?php endforeach; ?>  
    </ul>
    
</body>
</html>