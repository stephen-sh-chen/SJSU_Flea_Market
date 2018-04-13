<div style="width:25%; float:left;">
			<div style="margin-left:auto; margin-right:auto;">
				<?php $this->_tpl_include('sidebar-' . ((isset($this->_rootref['CURRENT_PAGE'])) ? $this->_rootref['CURRENT_PAGE'] : '') . '.tpl'); ?>
			</div>
		</div>
		<div style="width:75%; float:right;">
			<div class="main-box">
				<h4 class="rounded-top rounded-bottom"><?php echo ((isset($this->_rootref['L_25_0009'])) ? $this->_rootref['L_25_0009'] : ((isset($MSG['25_0009'])) ? $MSG['25_0009'] : '{ L_25_0009 }')); ?>&nbsp;&gt;&gt;&nbsp;<?php echo ((isset($this->_rootref['L_30_0215'])) ? $this->_rootref['L_30_0215'] : ((isset($MSG['30_0215'])) ? $MSG['30_0215'] : '{ L_30_0215 }')); ?></h4>
				<form name="logo" action="" method="post" enctype="multipart/form-data">
					<div align="center">
						<table border="0" width="98%" cellpadding="0" cellspacing="5" class="blank">
							<tr>
								<td width="6%" align="left" valign="top"><?php echo ((isset($this->_rootref['L_531'])) ? $this->_rootref['L_531'] : ((isset($MSG['531'])) ? $MSG['531'] : '{ L_531 }')); ?></td>
								<td align="left" width="94%"><img src="<?php echo (isset($this->_rootref['IMAGEURL'])) ? $this->_rootref['IMAGEURL'] : ''; ?>"></td>
							</tr>
							<tr>
								<td width="119" align="left" valign="top" colspan="2"><?php echo ((isset($this->_rootref['L_602'])) ? $this->_rootref['L_602'] : ((isset($MSG['602'])) ? $MSG['602'] : '{ L_602 }')); ?><br><input type="file" name="logo" size="40"></td>
							</tr>
							<tr>
								<td width="12%" align="left" colspan="2">
									<input type="hidden" name="action" value="update">
									<input type="hidden" name="csrftoken" value="<?php echo (isset($this->_rootref['_CSRFTOKEN'])) ? $this->_rootref['_CSRFTOKEN'] : ''; ?>">
									<input type="submit" name="act" class="centre" value="<?php echo ((isset($this->_rootref['L_30_0215'])) ? $this->_rootref['L_30_0215'] : ((isset($MSG['30_0215'])) ? $MSG['30_0215'] : '{ L_30_0215 }')); ?>">
								</td>
							</tr>
						</table>
					</div>
				</form>
			</div>
</div>