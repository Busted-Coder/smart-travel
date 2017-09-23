<div class="row">
	<div class="col-sm-12">
		<h2>User's Technical Info</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<!-- <a class="btn btn-primary">Total Records : <?php echo count($info); ?></a> -->
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<table class="table">
			<thead>
				<tr>
					<th>NAME</th>
					<th>KMs Travelled</th>
					<th>Is_valued</th>
					<th>Role</th>
					<th>Tickets</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($info as $p) {?>
					<tr>
						<td> <?php echo $p->fname." ".$p->lname ?></td>
						<td> <?php echo $p->km ?> </td>
						<td> <?php  if($p->is_valued == 1){ echo "YES";}else{echo "NO";} ?> </td>
						</form></td>
						<td><form action="<?php echo site_url('index.php/role/spec') ?>" method="post" class="form-horizontal">
						<input type="hidden" name="role_id" value="<?php echo $p->role_id ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-info" value="View Role">
							</div>
						</div>
						</form></td>
						<td><form action="<?php echo site_url('index.php/ticket/user') ?>" method="post" class="form-horizontal">
						<input type="hidden" name="user_id" value="<?php echo $p->user_id ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-info" value="View Tickets">
							</div>
						</div>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</div>