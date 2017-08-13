	<?php echo $error;?>

	<?php echo form_open_multipart('image/do_upload', array('class' => 'form-inline'));?>
	 <div class="form-group">
	 	<div class='col-sm-3'>
			<input type="file" name="userfile" size="20" class="form-control" />
	 	</div>
	 	<div class='col-sm-3 col-sm-offset-6'>
			<input type="submit" value="upload" class='btn btn-primary'/>
	 	</div>
	  </div>
	</form>

	<div class='row'>
		<div class='col-sm-12'>
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>File</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($images as $image ) {
					?>
						<tr>
							<th><?php echo $image ?></th>
							<th>
								<img src="<?php echo base_url('assets/uploads/'.$image) ?>" width="100" height="100">
							</th>
						</tr>
					<?php
				} ?>
				</tbody>
			</table>
		</div>
	</div>
