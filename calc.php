<html>
<body>
<form action="calc.php" method="GET">
<input type="text" name="arg1" value="<?php htmlspecialchars($_GET['arg1']) ?>">
<input type="text" name="arg2" value="<?php htmlspecialchars($_GET['arg2']) ?>">
<input type="submit" name="add" value="Сумма">
<input type="submit" name="sub" value="Разность">
</form>
<?php
	
	 function calc ($arg1, $arg2, $action) {
	if($action=="add") {
		return intval($arg1)+intval($arg2);
	} else if($action=="sub") {
		return intval($arg1)-intval($arg2);
	}
}
if (isset($_GET['arg1'])&& isset($_GET['arg2'])) { 
	if (isset($_GET['add'])){
		$action='add';
	} else if(isset($_GET['sub'])) {
		$action='sub';
	} ?>
	<div>
		Результат: <?=calc($_GET['arg1'], $_GET['arg2'], $action) ?>
	</div> <?php		
} ?>
</body>
</html>