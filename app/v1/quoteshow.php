<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QuoteShower 1.0</title>
        <style>

            body {
                font-family: sans-serif;
                text-align: center;
                background-color: #333333;
                color: white;
            }

            #page-wrap {
                position: relative;
                top: 150px;
            }

        </style>
    </head>
    <body>
        <div id="page-wrap">
            <h1>Quote of the moment</h1>
            <blockquote>
            <?php

                $quotes = array();
                $quotes[] = 'I\'m Mary Poppins, y\'all!';
                $quotes[] = 'I am Groot.';
                $quotes[] = 'Dance-off, bro. Me and you.';
                $quotes[] = 'I like your knife, I\'m keeping it.';

                $index = rand(0, sizeof($quotes) - 1);

                echo $quotes[$index];

            ?>
            </blockquote>
        <div>
    </body>
</html>
