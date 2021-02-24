<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Casino royale - guessing game</title>
    <link rel="stylesheet" href="style.css">
</head> 
<body>  

<?php require_once 'classes/rock-paper-scissorGame.php'; ?>

<div class="container">

    <div class="fightbutton">
        <button class="fight!">Fight!</button>
    </div>

<!-- <div class="resetButton">
    <form action="" method= "post">
        <input type="submit" name='reset' value="reset"> 
    </form>
</div> -->

<div class="playerField">
    <h1>pick a type:</h1>
    <form method="post" action="">
        <select name="type">
        <option value="grass">grass	</option>
        <option value="water">water	</option>
        <option value="fire">fire	</option>
    <input type="submit">
</div>

<div class="battleField">
qwe
</div>
<div class="opponentField">
qwe
</div>

<div class="scoreboard">        
    <label for="count"> Score: <?php echo $_SESSION['count']; ?></label>
</div>

</div>


<div class='container'>

 
    <div class='playerSet'>
        <div class=''>

        </div>
    </div>

    <div class='opponentSet'>

    </div>

    <div class='scoreboard'>
    
    </div>
    
    <div class='outcome'>

    </div>
</div>






	

</form>

</body>
</html>

<!-- -->