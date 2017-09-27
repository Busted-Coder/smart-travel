<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Edit Offer Info</h1>
		<form action="<?php echo site_url('index.php/offer/edit') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="hidden" name="o_id" value="<?php echo $info->o_id ?>">
					<div><b>Offer Title</b></div>
					<input name="name" type="text" placeholder="Offer Title" class="form-control" required
					value="<?php echo $info->name ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Offer Value</b></div>
					<input name="value" type="number" placeholder="Offer Value" class="form-control" required
					value="<?php echo $info->value ?>">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-success" value="Submit">
				</div>
			</div>
		</form>
	</div>
</div>