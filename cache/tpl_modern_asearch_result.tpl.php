<div class="row">
	<div class="col-md-12">
		<legend>
			<?php echo ((isset($this->_rootref['L_464'])) ? $this->_rootref['L_464'] : ((isset($MSG['464'])) ? $MSG['464'] : '{ L_464 }')); ?>
		</legend>
<?php if ($this->_rootref['NUM_AUCTIONS'] > 0) {  $this->_tpl_include('browse.tpl'); } else { ?>
		<div class="alert alert-danger" role="alert">
			<?php echo ((isset($this->_rootref['L_198'])) ? $this->_rootref['L_198'] : ((isset($MSG['198'])) ? $MSG['198'] : '{ L_198 }')); ?>
		</div>
<?php } ?>
	</div>
</div>