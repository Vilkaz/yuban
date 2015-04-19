<?php
	//print_r($_REQUEST);
	$array = $_REQUEST;
	print_r($array);
    if ((array_key_exists("name", $array)) and (array_key_exists("pass", $array))) {
        echo 'Daten erhalten';
        echo "<script> alert('username war $array[name] password war $array[pass]'); </script>";

} else {
	echo '
	$script
	in dem Request-String sind weder nutzername noch password,
	<form action="" id="myForm" method="post">
		Name: <input type="text" name="name" />             <br />
		Passwort: <input type="text" name="pass" />         <br />
		<input type ="submit" value="senden" onClick="sendForm(\'myForm\',\'login2.php\',\'content\');" />
	</form>;
<button onClick="sendForm(\'myForm\',\'login2.php\',\'content\');">test </button>';
}
?>