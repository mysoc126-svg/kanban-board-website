<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form class="form-horizontal" method="POST" action="events/actions/eventEdit.php" onsubmit="return validaForm(this);">
				<div class="modal-header d-flex justify-content-between">
					<h4 class="modal-title" id="myModalLabel"><?php echo $l_event;?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>

				<div class="modal-body">
					<div class="form-group">
						<label for="title" class="col-sm-4 control-label"><?php echo $l_name;?></label>
						<div class="col-sm-12">
							<input type="text" name="title" class="form-control" id="title" placeholder="<?php echo $l_name;?>" required>
						</div>
					</div>

					<div class="form-group">
						<label for="description" class="col-sm-4 control-label"><?php echo $l_description;?></label>
						<div class="col-sm-12">
							<textarea type="text" name="description" class="form-control" id="description" placeholder="<?php echo $l_description;?>"></textarea>
						</div>
					</div>


					<div class="form-group">
						<label for="colour" class="col-sm-4 control-label"><?php echo $l_color;?></label>
						<div class="col-sm-12">
						<select name="colour" class="form-control" id="colour">
							<option style="color:#0275d8" value="#0275d8">&#9724; <?php echo $l_Blue;?></option>
							<option style="color:#5bc0de" value="#5bc0de">&#9724; <?php echo $l_Tile;?></option>
							<option style="color:#5cb85c" value="#5cb85c">&#9724; <?php echo $l_Green;?></option>						  
							<option style="color:#f0ad4e" value="#f0ad4e">&#9724; <?php echo $l_Orange;?></option>
							<option style="color:#d9534f" value="#d9534f">&#9724; <?php echo $l_Red;?></option>
							<option style="color:#292b2c" value="#292b2c">&#9724; <?php echo $l_Black;?></option>								  
							</select>
						</div>
				  </div>

					<div class="form-group">
						<label for="start_date" class="col-sm-4 control-label"><?php echo $l_start_date_add;?></label>
						<div class="col-sm-12">
						<input type="text" name="start_date" class="form-control" id="start_date" required>
						</div>
					</div>

					<div class="form-group">
						<label for="end_date" class="col-sm-4 control-label"><?php echo $l_end_date_add;?></label>
						<div class="col-sm-12">
						<input type="text" name="end_date" class="form-control" id="end_date" required>
						</div>
					</div>
						
					<!-- Delete the event -->
					<div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-12">
							<div class="checkbox">
								<label class="text-danger"><input type="checkbox" class="mr-2" name="delete"><?php echo $l_delete;?></label>
							</div>
						</div>
					</div>
					
					<input type="hidden" name="id_event" class="form-control" id="id_event">
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $l_close;?></button>
					<button type="submit" class="btn btn-primary"><?php echo $l_save;?></button>
				</div>
			</form>
		</div>
	</div>
</div>