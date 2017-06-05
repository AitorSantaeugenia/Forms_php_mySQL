<?php
$id="";
	if(isset($_GET['id']) && $_GET['id'] > 0){
		$id = (int)$_GET['id'];
	} 
	
	//print_r($_SERVER);

?>
<div class="header">
			<form method="post" style="text-align:right; font-family:monospace";>
				<?php echo SELECTLANG; ?><select  name="idioma" width="173" style="width: 173px" id="idioma" onChange="javascript:document.location.href='<?php echo $_SERVER['PHP_SELF'];?>?idioma=' + this.value + '&id=<?php echo $id;?>' " />
										 <option value="es" <?php if(isset($_SESSION['idioma']) && $_SESSION['idioma'] == "es") echo "selected"; ?>><?php echo NOMIDIOMAUN; ?></option>
										 <option value="ca" <?php if(isset($_SESSION['idioma']) && $_SESSION['idioma'] == "ca") echo "selected"; ?> ><?php echo NOMIDIOMADOS; ?></option>
										 <option value="en" <?php if(isset($_SESSION['idioma']) && $_SESSION['idioma'] == "en") echo "selected"; ?> ><?php echo NOMIDIOMATRES; ?></option>
				</select><br/>
			</form>
</div>