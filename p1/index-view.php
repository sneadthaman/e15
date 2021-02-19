<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E15 Project 1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<style>
h1,
form {
    text-align: center;
    margin-top: 3.5rem;
}

.output {
    border: 3px dotted white;
    width: 50%;
    margin: 3rem auto;
    padding: 2rem;
    font-family: 'Courier', sans-serif;
    font-size: 2rem;
    background-color: #6A5B6E;
    color: white;
}

.output>div {
    margin: 1rem;
}
</style>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <h1>PHP String Processor</h1>

    <form method='POST' action='process.php'>
        <label for="stringIn">Enter a String</label>
        <input type="string" name="stringIn" id="stringIn">
        <button type="submit">Process</button>
    </form>

    <?php if (isset($stringIn)): ?>
    <div class="output">
        <div>
            String: <?=$stringIn ?>
        </div>

        <div>
            Is Palindrome: <?php if ($isPalindrome) { ?>
            True
            <?php } else { ?>
            False
            <?php } ?>
        </div>

        <div>
            Vowel Count: <?=$vowelCount?>
        </div>

        <?php endif ?>
    </div>

</body>

</html>