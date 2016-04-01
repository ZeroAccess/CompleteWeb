<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<?php

function IsPrime($n) {
    if($n == 1) {
        return false;
    }

    for($x=2; $x<$n; $x++)
    {
        if($n % $x ==0)
        {
            return false;
        }
    }
    return true;
}
?>
<div id="container">
    <div id="left">
        <form>
            <div class="input-group">
                <input type="number" class="form-control" placeholder="Is it prime?" name="inputNbr">
                <br />
                <input type="submit" class="btn btn-default btn-block" value="Check!">
            </div>
        </form>
    </div>
    <div id="right">
        Entered Number: <?php echo (!empty($_GET["inputNbr"]) ? $_GET["inputNbr"] : "") ?> <br>
        Result: <?php

                    if(!empty($_GET["inputNbr"])) {
                        if (isPrime($_GET["inputNbr"]) == false) {
                            echo "This is <strong>not</strong> a prime number";
                        } else {
                            echo "This is a prime number";
                        }
                    }
                ?>
    </div>
</div>
</body>
</html>


