<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    function area($b, $h)
    {
        return ($b * $h);
    }

    function perimeter($b, $h)
    {
        return 2 * ($b + $h);
    }

    function interchange(&$b, &$h)
    {
        $vase = $b;
        $b = $h;
        $h = $vase;
    }

    $b = 2;
    $h = 3;

    echo " <div> Area ", area($b, $h);
    echo " <div> Perimeter ", perimeter($b, $h);
    interchange($b, $h);
    echo " <div> Now the height is ", $h, " and the base is ", $b;

    ?>

</body>

</html>
