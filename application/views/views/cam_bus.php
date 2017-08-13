<div class="row">
	<div class="col-sm-12">
		<h2>Cam List</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Model</th>
					<th>Action(Will be Live Soon !)</th>
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
					<tr>
				    	<?php }?>
				    	   <?php foreach($info as $p){
				    	   			if(!is_null($p['cam_id1'])){ ?> 
				    					<td> <?php echo $p['cam_id1'] ?></td>
										<td> <?php echo $p['model1'] ?></td>
										<td><form action="<?php  ?>" method="post" class="form-horizontal">
										<input type="hidden" name="cam_id" value="<?php echo $p['cam_id1'] ?>">
										<div class="form-group">
											<div class="col-sm-4">
												<input type="submit" class="btn btn-success" value="Get Live Visuals">
											</div>
										</div>
										</form></td>
										
				    </tr> <?php }} ?>
				<?php }
				else { ?>
					<tr>
						<?php echo count($info) ?>
						<td> <?php echo $info['bus_id'] ?></td>
						<td> <?php echo $info['regs_no'] ?></td>
						<td> <?php echo $info['seats'] ?> </td>
						<td> <?php echo $info['class'] ?> </td>
						<td> <?php echo $info['des'] ?> </td>
						<td> <a href="<?php echo site_url('index.php/bus/tview?id='.$info['tracker_id']) ?>" class="btn btn-info">View</a></td>
						<td> <a href="<?php echo site_url('index.php/bus/cview?id='.$info['cam_id']) ?>" class="btn btn-info">View</a></td>
						<td><a href="<?php echo site_url('index.php/bus/edit?id='.$info['bus_id']) ?>" class="btn btn-warning">Edit</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>