<!DOCTYPE html>
<html lang="en">
	
<head>
	<?php $title= "Calendar"; ?>
	<?php require 'head.php'; ?>

	<!-- FullCalendar -->
	<link href='css/fullcalendar.css' rel='stylesheet' />
</head>

<body  class="bg">
<header class="m-0 p-0">
	<nav class="navbar navbar-expand-lg pt-3 text-dark">
		<div class="menu container">
			<a href="index.php" class="navbar-brand">
			<!-- Logo Image -->
			<img src="img/logo.png" width="45" alt="Kalendar" class="d-inline-block align-middle mr-2">
			<!-- Logo Text -->
			<span class="logo_text align-middle"><?php echo $l_title;?></span>
			</a>
            
			<button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
			<div id="navbarSupportedContent" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
                    <li><a href="content.php" class="btn text-primary mr-2"><i class="fas fa-home pr-2"></i><?php echo $l_home;?></a></li>	
					<li><a href="logout.php" class="btn text-primary mr-2"><?php echo $l_exit;?></a></li>
					<?php if ($_SESSION["lang"] == 'en'){
						echo '<li><a class="btn text-primary mr-2" href="change.php?lang=ru">ru</a></li>';
						} elseif ($_COOKIE["lang"] == 'en'){
						echo '<li><a class="btn text-primary mr-2" href="change.php?lang=ru">ru</a></li>';
						} else {
						echo '<li><a class="btn text-primary mr-2" href="change.php?lang=en">en</a></li>';
						}
					?>
				</ul>
			</div>
		</div>
	</nav>
</header>

<!-- Page Content -->
<div class="container bg-light text-dark rounded mt-4">
	<div class="row m-0 p-0">
		<div class="col-lg-12 text-center">
			<p class="lead"></p>
			<div id="calendar" class="col-centered mb-4">
			</div>
		</div>
	</div>


<!-- MODALS -->
<script type="text/javascript" class="d-print-none">
	function validaForm(erro) {
		if(erro.inicio.value>erro.termino.value){
			alert('The start date has to be before the end date.');
			return false;
		}else if(erro.inicio.value==erro.termino.value){
			alert('Start time and end time has to be defined');
			return false;
		}
	}
</script>

<?php include ('events/modals/modalAdd.php'); ?>
<?php include ('events/modals/modalEdit.php'); ?>
</div>
<div class="row m-0 p-0">
	<div class="col sm-3 d-flex justify-content-center d-print-none">
		<button onclick="javascript:window.print()" class="btn btn-primary m-4 hiddenprint"><?php echo $l_print;?></button>   
	</div>
</div>
<!-- -------------------------- FOOTER --------------------------- -->
<?php require 'footer.php'; ?>


	<!-- jQuery  -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<!-- FullCalendar -->
	<script src='js/moment.min.js'></script>
	<script src='js/fullcalendar.min.js'></script>
	<script src='js/locale/<?php echo $lang?>.js'></script>
	<?php include ('calendar2.php'); ?>

</body>
</html>