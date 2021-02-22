<?php

$result = null;

function getResult($a, $b, $c)
{
    switch ($c) {
        case "plus":
            return $a + $b;
        case "minus":
            return $a - $b;
        case "multiply":
            return $a * $b;
        case "divide":
            return $a / $b;
        default:
            return null;
    }
}
if (isset($_POST['operator']) && isset($_POST['first']) && isset($_POST['second'])) {
    if (isset($_POST['submit'])) {

        $result = getResult($_POST['first'], $_POST['second'], $_POST['operator']);
    }
} else {
    $result = 'undefined';
}
?>

<form action="" method="post">
    <section>
        <h2>First number</h2>
        <input type="number" name="first">
    </section>
    <section>
        <h2>Second number</h2>
        <input type="number" name="second">
    </section>
    <section>
        <input name="operator" value="plus" type="radio">
        <span>+</span>
    </section>
    <section>
        <input name="operator" value="minus" type="radio">
        <span>-</span>
    </section>
    <section>
        <input name="operator" value="multiply" type="radio">
        <span>x</span>
    </section>
    <section>
        <input name="operator" value="divide" type="radio">
        <span>/</span>
    </section>
    <section>
        <input type="submit" value="submit" name='submit'>
    </section>
</form>
<h3>result: <?php echo $result; ?></h3>