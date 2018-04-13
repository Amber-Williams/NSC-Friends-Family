

<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "NSC"
&& $pass == "research")
{
    include("secure.php");
}

else
{
    if(isset($_POST))
    {?>
		<center>
			<img src="images/Banner-FnF-v6.png" class="fnf-banner"/>

            <form method="POST" action="index.php">
            <span class="fnf-input-name">Username:</span><input class="fnf-input" type="text" name="user"></input><br/>
            <span class="fnf-input-name">Password: </span><input class="fnf-input" type="password" name="pass" ></input><br/>
            <input class="fnf-go-button" type="submit" name="submit" value="Go"></input>
			</form>
		</center>

		<style>
			.fnf-banner {
				width: 98%;
			}
			.fnf-go-button {
				border: 1px solid #A1D2E6;
				color:grey;
				border-radius: 5px;
				margin: 10px;
				background: none;
				font-size:1.2em;
				padding-left: 20px;
				padding-right:20px;
			}

			.fnf-input {
				border: 2px solid #A1D2E6;
				color:grey;
				border-radius: 5px;
				margin: 10px;
				background: none;
				font-size:1.2em;
			}
			.fnf-input-name{
				color:grey;
				font-size: 1em;
				font-family:arial;
			}


		</style>
    <?}
}

?>
