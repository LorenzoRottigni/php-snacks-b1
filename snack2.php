<?php

    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];
    $keys = array_keys($posts);
    for($i=0;$i<count($keys);$i++){
        echo "<h3>Object index: $i</h3>";
        for($k=0;$k<count($posts[$keys[$i]]);$k++){
            echo "<h4>".$posts[$keys[$i]][$k]['title']."</h4>";
            echo "<h5>".$posts[$keys[$i]][$k]['author']."</h5>";
            echo "<h6>".$posts[$keys[$i]][$k]['text']."</h6>";
        }
        
    }


?>