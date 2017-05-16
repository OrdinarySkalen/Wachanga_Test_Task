    <!DOCTYPE html>
    <html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .content {
                text-align: left;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <form action="Index.php" method="POST">
                Balls in user's basket: <input type="number" name="userBasketCount" value=100 /><br><br>
                Count of baskets: <input type="number" name="basketCount" value=30 /><br><br>
                <input type="submit" value="Try again">

                <div><br>
                    <?php
                    print "User Basket: ";
                    foreach ($userBasket as $value)
                    {
                        print "$value, ";
                    }
                    print "<br>";
                    for ($i=1; $i<count($baskets);$i++)
                        {
                            print "<br>Basket #$i: ";
                            foreach ($baskets[$i] as $value)
                            {
                                print "$value, ";
                            }
                        }
                    print "<br><br>Contained in User's basket: $taskB";
                    print "<br>Have only one element from User basket: $taskC";
                    ?>


                </div>
            </form>
        </div>
    </body>
    </html>