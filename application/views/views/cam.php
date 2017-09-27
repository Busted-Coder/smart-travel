<div class="row">
	<div class="col-sm-12">
		<h2>Cam List</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<a class="btn btn-primary">Total Records : <?php echo count($info); ?></a>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Model</th>
					<th style= "color: red;">Action(Will be Live Soon !)</th>
				</tr>
			</thead>
			<tbody>
			<?php if (count($info) >= 1) {
				foreach ($info as $p) {?>
					<tr>
						<td> <?php echo $p['cam_id'] ?></td>
						<td> <?php echo $p['model'] ?></td>
						<td><form action="<?php  ?>" method="post" class="form-horizontal">
						<input type="hidden" name="cam_id" value="<?php echo $p['cam_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-success" value="Get Live Visuals">
							</div>
						</div>
						</form>
						</td>
					</tr>
				<?php }}
				else { ?>
					<tr>
						<td> <?php echo "No Data Found !!!"; ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>