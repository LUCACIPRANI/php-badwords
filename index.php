<?php
$parag = 'Lorem ipsum dolor sit amet consectetur adipisicing elit ipsum. Porro aspernatur fuga eaque ipsum nesciunt, earum, natus commodi ipsum, cumque distinctio dicta? Asperiores assumenda praesentium commodi esse ipsum voluptatibus ad nam ut?';
$paragLng = strlen($parag);
$badWord = $_GET['badword'];
$newParag = str_replace('ipsum', ' ***', $parag);
?>

<style>
    body{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .container{
        width: 40%;
        margin: 2% auto;
        padding: 2% 10%;
        background-color: lightblue;
    }
    span{
        color: blue;
    }
</style>

<div class="container">
    <h1>Titolo paragrafo </h1>
    <p> <?php echo $parag ?> </p>
    <h3>Paragraph length is <?php echo $paragLng ?> words </h3>
    <h3> Badword is: <span> <?php echo $badWord ?> </span> </h3>

    <p> <?php echo $newParag ?> </p>
    <h3>Paragraph length is <?php echo $paragLng ?> words </h3>
</div>
