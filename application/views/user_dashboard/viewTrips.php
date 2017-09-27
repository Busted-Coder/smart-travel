<section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
	<div data-speed="0.2" data-type="media" data-url="<?php echo PATH; ?>images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
	<div data-speed="0" data-type="html" class="rd-parallax-layer">
		<div class="bg-primary-chathams-blue-reverse">
			<div class="shell section-top-57 section-bottom-30 section-md-top-210 section-lg-top-260">
				<div class="veil reveal-md-block">
					<h1 class="text-bold">View Trips</h1>
				</div>
				<ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
					<li><a href="index.html" class="text-white">Home</a>
					</li>
					<li><a href="destinations.html" class="text-white">View Trips</a>
					</li>
					<li>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section> 
</header>

<html>
<main class="page-content">
	<!-- Where Will You Go?-->
	<section class="section-90 section-md-111 text-left bg-zircon">
		<div class="shell">
			<div class="range range-xs-center">
				<div class="col-md-12">
					<table class="table  table-hover" style="background-color: white; border-radius: 6px; margin-top: 10px;">
						<thead>
							<th style="font-size:18px;"> Source </th>
							<th style="font-size:18px;"> Destination </th>
							<th style="font-size:18px;"> Date </th>
							<th style="font-size:18px;"> Fare</th>
						

						</thead>
						<tbody>
							<?php foreach($trips as $a){ ?>
							<tr>

								<td>
									<?=$a['source']?>
								</td>

								<td>
									<?=$a['destination']?>
								</td>
								
							   <td>
							   	<?= date('Y-m-d', strtotime($a['bus_time']))?>
							   </td>

								<td>
									<?=$a['fare']?>
								</td>

								
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div> 
		</div>
	</section>
</main>
</html>