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
					<div><b>Class Validity</b></div>
					<select required name="class" class="form-control">
						<option>Select Class</option>
						<option <?php echo $info->class =='Gold Luxury' ? 'selected':'' ?>>Gold Luxury</option>
						<option <?php echo $info->class =='Royal Luxury-I' ? 'selected':'' ?>>Royal Luxury-I</option>
						<option <?php echo $info->class =='Royal Luxury-II' ? 'selected':'' ?>>Royal Luxury-II</option>
						<option <?php echo $info->class =='Gold Luxury, Royal Luxury-I' ? 'selected':'' ?>>Gold Luxury, Royal Luxury-I</option>
						<option <?php echo $info->class =='Gold Luxury, Royal Luxury-II' ? 'selected':'' ?>>Gold Luxury, Royal Luxury-II</option>
						<option <?php echo $info->class =='Royal Luxury-I, Royal Luxury-II' ? 'selected':'' ?>>Royal Luxury-I, Royal Luxury-II</option>
						<option <?php echo $info->class =='All Classes' ? 'selected':'' ?>>All Classes</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Time Validity</b></div>
					<select required name="validity" class="form-control">
						<option>Select Class</option>
						<option <?php echo $info->validity =='Once' ? 'selected':'' ?>>Once</option>
						<option <?php echo $info->validity =='Lifetime' ? 'selected':'' ?>>Lifetime</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b># of Seats Required</b></div>
					<input name="seat" type="number" placeholder="# of Seats" class="form-control" required
					value="<?php echo $info->seat ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
				<div><b>Discription</b></div>
					<textarea name="disc" class="form-control" required cols="40" rows="10" placeholder="Discription"><?php echo $info->disc ?></textarea>
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