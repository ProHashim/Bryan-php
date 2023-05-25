<!-- PHP TAGS -->
<!-- opening and closing tags -->


<?= 'this will print' ?>
<br>
<br>

<?= "This will also print" ?>


<!-- Escaping FROM HTML -->

<?= "This will be shown" ?>

<h2>
    THis wont be parsed by PHP
</h2>


<!-- Advanced Escaping using conditions -->

<?php
if (1 == 1) : ?>
    <h1>
        Show that 1 = 1
    </h1>

<?php else : ?>
    <!-- <h3>Show this if 1!=1</h3> -->
<?php endif; ?>

<?php

$ar = 45;

echo "Some text";
print("Some text");
print "Some text";
print $ar;
?>


<!-- comments -->
<?php
// single line comment
# single line comment
/*
multi line comment
*/
?>
