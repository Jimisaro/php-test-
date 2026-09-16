<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<body>
    <h1>
        <?php 
        echo  "Recommended books to read";
        ?>
        </h1>
        
            
    
       <?= $books = [
        [
            'title' => 'THE RICH DAD AND THE POOR DAD',
            'author' => 'ROBERT T. KIYOSAKI',
            'year' => '1997',
            'PURCHASE URL' => 'https://www.amazon.com/Rich-Dad-Poor-Teach-Middle/dp/1612680194',
        ],
        [
            'title' => 'THE 7 HABITS OF HIGHLY EFFECTIVE PEOPLE',
            'author' => 'STEPHEN R. COVEY',
            'year' => '1989',
            'PURCHASE URL' => 'https://www.amazon.com/Habits-Highly-Effective-People-Powerful/dp/0743269519',
        ],
        [
            'title' => 'THE POWER OF HABIT',
            'author' => 'CHARLES DUHIGG',
            'year' => '2012',
            'PURCHASE URL' => 'https://www.amazon.com/Power-Habit-What-Life-Business/dp/081298160X',
        ],
        [
            'title' => 'THE 4-HOUR WORK WEEK',
            'author' => 'TIMOTHY FERRISS',
            'year' => '2007',
            'PURCHASE URL' => 'https://www.amazon.com/4-Hour-Workweek-Escape-Live-Anywhere/dp/0307465357',
        ]
       ]; 
       // function to filter books by author
       //example  on how to define a function in php and filter by function
       function filterebyauthor($books, $author){
        $filteredbooks = [];
            foreach ($books as $book){
                if ($book['author'] == 'ROBERT T. KIYOSAKI'){
                    echo "<li><a href='{$book['PURCHASE URL']}'>{$book['title']}</a> by {$book['author']} ({$book['year']})</li>";
                    $filteredbooks[] = $book;
                }
            }
        return $filteredbooks;
        }   
       ?>
    <ul>
        <?php foreach (filterebyauthor($books, 'ROBERT T. KIYOSAKI') as $boook):?>
            
        
        <?php endforeach; ?>    
    </ul>
</body>
</html>