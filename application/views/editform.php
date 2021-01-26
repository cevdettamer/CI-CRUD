<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>CodeIgniter CRUD</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">CodeIgniter CRUD</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Edit Form
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Geri</a></span>
			</h3>
			<hr>
			<?php extract($user); ?>
			<form method="POST" action="<?php echo base_url(); ?>index.php/users/update/<?php echo $id; ?>">
				<div class="form-group">
					<label>Ad Soyad:</label>
					<input type="text" class="form-control" value="<?php echo $username; ?>" name="username">
				</div>
				<div class="form-group">
					<label>Şehir:</label>
					<input type="text" class="form-control" value="<?php echo $city; ?>" name="city">
				</div>
				<div class="form-group">
					<label>E-mail:</label>
					<input type="text" class="form-control" value="<?php echo $email; ?>" name="email">
				</div>
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Güncelle</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>