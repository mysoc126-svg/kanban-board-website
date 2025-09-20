
<?php
if (isset($_SESSION['user'])) {
} else {
	header('Location: login.php');
	die();
}
?>
<!-- --------------------------------------- NEW TASK MODAL ------------------------------------------------------ -->
<div id="new-task-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="lead text-primary" ><?php echo $l_new_task;?></h3>
                <a class="close text-dark btn" data-dismiss="modal">×</a>
            </div>
            <form name="task_todo" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" role="form">
                <div class="modal-body">
                    <label class="text-dark"><?php echo $l_status; ?><span class="text-danger pl-1">*</span></label>
                    <div class="form-group d-flex justify-content-around">                    
                        <div class="form-check">                        
                            <input class="form-check-input btn" type="radio" name="task_status" id="task_status_1" value="1" checked>
                            <label class="form-check-label" for="task_status_1">
                                <?php echo $l_new; ?>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input btn" type="radio" name="task_status" id="task_status_2" value="2">
                            <label class="form-check-label" for="task_status_2">
                                <?php echo $l_inwork; ?>
                            </label>
                        </div>
                        <div class="form-check" >
                            <input class="form-check-input btn" type="radio" name="task_status" id="task_status_3" value="3">
                            <label class="form-check-label" for="task_status_3">
                                <?php echo $l_complete; ?>
                            </label>
                        </div>
                    </div>				
                    <div class="form-group">
                        <label class="text-dark" for="task_name"><?php echo $l_name_task;?><span class="text-danger pl-1">*</span></label>
                        <input class="form-control" type="text" name="task_name" required>
                    </div>
                    <div class="form-group">
                        <label class="text-dark" for="task_description"><?php echo $l_description;?></label>
                        <textarea class="form-control" type="text" name="task_description"></textarea>
                    </div>
					<div class="form-group">
						<label for="task_colour" class="text-dark"><?php echo $l_priority;?></label>
						<select name="task_colour" class="form-control">
							<option value=""></option>
							<option style="color:#5cb85c" value="#5cb85c">&#9724; <?php echo $l_low;?></option>						  
							<option style="color:#f0ad4e" value="#f0ad4e">&#9724; <?php echo $l_medium;?></option>
							<option style="color:#d9534f" value="#d9534f">&#9724; <?php echo $l_hard;?></option>													  
						</select>
				    </div>         
					<div class="form-group d-flex justify-content-between mt-2">					
						<div class="col-12 m-0 p-1">  
                            <label class="text-dark"><?php echo $l_term;?></label>
                            <input type="date" class="form-control" runat="server" name="deadline" min="<?php echo date('Y-m-d'); ?>" required data-date-format="yyyy-mm-dd"/>
			            </div>  
					 </div> 
					<div class="form-group">
                        <input hidden id="id_task_project" name="id_task_project" value=<?php echo $id_project_for_task; ?> >
                    </div>
                    <div class="form-group">
                        <input hidden id="id_user" name="id_user" value=<?php echo $_SESSION['id_user']; ?> >
                    </div>						
                </div>
                <div class="modal-footer">					
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $l_close;?></button>
                    <button type="submit" class="btn btn-primary"><?php echo $l_create;?></button>
                </div>
            </form>
        </div>
    </div>
</div>
