
<?php
if (isset($_SESSION['user'])) {
} else {
	header('Location: login.php');
	die();
}
 ?>
<!-- --------------------------------------- DELETE PROJECT MODAL ------------------------------------------------------ -->
<div id="project-delete-<?php echo $i; ?>" class="col-sm modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="lead text-primary" ><?php echo $l_sure;?></h3>
                <a class="close text-dark btn" data-dismiss="modal">×</a>
            </div>
            <form name="project" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" role="form">
                <div class="modal-body">
                    <p class="text-dark"><?php echo $l_del_project;?><i class="text-primary"><?php echo $p['project_name']; ?> </i> ?</p>
                    <p class="text-dark"><?php echo $l_recover;?></p>
               
                    <div class="form-group">
                        <input hidden type="int" name="id_project" value="<?php echo $p['id_project']; ?>">
                    </div>					
                </div>
                <div class="modal-footer">					
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $l_close;?></button>
                    <button type="submit" class="btn btn-danger"><?php echo $l_delete;?></button>
                </div>
            </form>
        </div>
    </div>
</div>
