<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
	<?php 
		$message = null;
		if(isset($_SESSION['message'])) {
			$message = $_SESSION['message'];
			unset($_SESSION['message']);
		}
	?>
	  <?php if(isset($message) && $message){ ?>
		<div class="alert alert-<?php if(strpos($message, 'Incorrect') !== false) { echo 'danger'; } else { echo 'success'; } ?>">
		<button type="button" class="close" data-dismiss="alert">×</button>
			<?php if(isset($message)) echo $message?>
		</div>
	  <?php }?>
	<h1> Hello From the View <?php if(isset($_SESSION['uID'])) echo $_SESSION['uID']; ?></h1>
  </div>
</div>
<?php include('elements/footer.php');?>
