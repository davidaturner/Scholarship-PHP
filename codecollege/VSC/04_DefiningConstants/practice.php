<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Defining Constants</title>
</head>
<body>
<?php

    define('MIN_VALUE', '0.0');   // RIGHT - Works OUTSIDE of a class definition.
    define('MAX_VALUE', '1.0');   // RIGHT - Works OUTSIDE of a class definition.

    const A_MIN_VALUE = 0.0;      //RIGHT - Works both INSIDE and OUTSIDE of a class definition.
    const A_MAX_VALUE = 1.0;      //RIGHT - Works both INSIDE and OUTSIDE of a class definition.

    class Constants
    {
        //define('MIN_VALUE', '0.0');  WRONG - Works OUTSIDE of a class definition.
        //define('MAX_VALUE', '1.0');  WRONG - Works OUTSIDE of a class definition.

        const MIN_VALUE = 0.0;      // RIGHT - Works INSIDE of a class definition.
        const MAX_VALUE = 1.0;      // RIGHT - Works INSIDE of a class definition.

        public static function getMinValue()
        {
            return self::MIN_VALUE;
        }

        public static function getMaxValue()
        {
            return self::MAX_VALUE;
        }
    }
?>

<?php 
    $min_value = MIN_VALUE; // String
    print($min_value);
    print("<br>");

    $max_value = A_MAX_VALUE;   // Number
    print($max_value);

?>
</body>
</html>