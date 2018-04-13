<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo (isset($this->_rootref['SITEURL'])) ? $this->_rootref['SITEURL'] : ''; ?>/themes/<?php echo (isset($this->_rootref['THEME'])) ? $this->_rootref['THEME'] : ''; ?>/style.css" />
</head>
<body style="margin:0;">
<div style="width:400px; padding:40px;" class="centre">
	<div class="plain-box" style="text-align:center; padding: 10px; font-size: 1.4em;">
	<form action="" method="post">
	<input type="hidden" name="csrftoken" value="<?php echo (isset($this->_rootref['_CSRFTOKEN'])) ? $this->_rootref['_CSRFTOKEN'] : ''; ?>">
		<p><?php echo (isset($this->_rootref['MESSAGE'])) ? $this->_rootref['MESSAGE'] : ''; ?></p>
		<div class="break">&nbsp;</div>
<?php if ($this->_rootref['TYPE'] == (1)) {  ?>
		<input type="hidden" name="id" value="<?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?>">
		<button type="submit" name="action" value="Yes"><?php echo ((isset($this->_rootref['L_030'])) ? $this->_rootref['L_030'] : ((isset($MSG['030'])) ? $MSG['030'] : '{ L_030 }')); ?></button>
		<button type="submit" name="action" value="No"><?php echo ((isset($this->_rootref['L_029'])) ? $this->_rootref['L_029'] : ((isset($MSG['029'])) ? $MSG['029'] : '{ L_029 }')); ?></button>
<?php } else if ($this->_rootref['TYPE'] == (2)) {  ?>
		<input type="hidden" name="id" value="<?php echo (isset($this->_rootref['ID'])) ? $this->_rootref['ID'] : ''; ?>">
		<input type="hidden" name="user" value="<?php echo (isset($this->_rootref['USERID'])) ? $this->_rootref['USERID'] : ''; ?>">
		<button type="submit" name="action" value="Yes"><?php echo ((isset($this->_rootref['L_030'])) ? $this->_rootref['L_030'] : ((isset($MSG['030'])) ? $MSG['030'] : '{ L_030 }')); ?></button>
		<button type="submit" name="action" value="No"><?php echo ((isset($this->_rootref['L_029'])) ? $this->_rootref['L_029'] : ((isset($MSG['029'])) ? $MSG['029'] : '{ L_029 }')); ?></button>
<?php } ?>
	</form>
	</div>
</div>
<div>