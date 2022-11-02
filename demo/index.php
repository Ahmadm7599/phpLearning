<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <h1><?php echo "Hello World2!"; ?></h1>
    <h1><?php print "Hello World2!"; ?></h1>
    <h1><?= "Hello World2!"; ?></h1>
    <?php
    $books =[
        [
            'title' => "book1",
            'releaseYear' => 1987,
            'author' => "ahmad"
        ],
        [
            'title' => "book2",
            'releaseYear' => 2000,
            'author' => "reza"
        ],
        [
            'title' => "book3",
            'releaseYear' => 1988,
            'author' => "ahad"
        ],
        [
            'title' => "book4",
            'releaseYear' => 2020,
            'author' => "ali"
        ],
    ];
    // 3 way for filterd an array

    // 1
    // lambda function : ananymouse function
    $filter = function($items , $key , $value)
    {
        $filteredItems = [];
        foreach ($items as $item) {
            if($item[$key]===$value){
                $filteredItems [] = $item;
            }
        }
        return $filteredItems;
    };
    $filter($books, 'releaseYear', 1988);

    // 2
    // use lambda fun 
    function filter ($items , $fn)
    {
        $filteredItems = [];
        foreach ($items as $item) {
            if($fn($item)){
                $filteredItems [] = $item;
            }
        }
        return $filteredItems;
    };
    filter($books, function ($book) {
        return $book['releaseYear'] <= 2000;
    });

    // 3
    //  use array_filter php function for filter an array
    foreach(array_filter($books ,fn($book) =>  $book['releaseYear'] <=2000) as $book):
     ?>


    <!-- result of filtering -->
    <li>
    <a href="<?= $book['author']?>">
        <?= $book['title']." (".$book['releaseYear'].") "."By ".$book['author']?>
    </a>
    </li>
    <?php endforeach;?>

</body>
</html>