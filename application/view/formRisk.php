<div id="emailform" class="block">
	<!-- Form Validation Example Title -->
	<div class="block-title">
		<h2><strong>Risk Information</strong></h2>
	</div>
	<!-- END Form Validation Example Title -->
	<!-- Form Validation Example Content -->
	<form class="form-horizontal" method="post" action="" id="emailform-validation" novalidate="novalidate">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<div class="col-md-12">
						<div class="input-group">
							<input type="hidden" value="<?php echo $settingFor->id ?>" name="val_id" id="val_id">
							<span class="input-group-addon"><i class="fa fa-shield"></i></span>
							<input type="text" placeholder="Please enter the name" class="form-control input-lg" name="val_name" id="val_name" value="<?php if(count($settingFor)>0){ echo $settingFor->name;}?>">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<div class="col-md-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-comments"></i></span>
							<textarea type="text" rows="7" placeholder="Please enter the Description" class="form-control input-lg" name="val_description" id="val_description" value=""><?php if(count($settingFor)>0){ echo $settingFor->description;}?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<div class="col-md-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="gi gi-parents"></i></span>
							<select class="form-control input-lg" placeholder="Select a Category" id ="val_category" name="val_category" style="padding-top:12px;opacity:0.8">
								<option value="" disabled selected style='display:none;' >Select a Category</option>
								<?php foreach($categories2 as $category){								
									/*** create the options ***/
									echo '<option value="'.$category->id.'"';
									if(count($settingFor)>0 && $category->id == $settingFor->category)	{
										echo ' selected';
									}
									echo '>'. $category->name . '</option>'."\n";
								}
								?>
							</select>
						</div>
					</div>
				</div>			
			</div>			
		</div>
		<div class="form-group form-actions">
			<div class="col-md-8 col-md-offset-4">
				<input type="hidden" value="risk" name="val_form" id="val_form">
				<input type="hidden" value="<?php if(count($settingFor)>0){ echo $settingFor->id;}?>" name="val_id" id="val_id">
				<button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-arrow-right"></i> Submit</button>
				<button class="btn btn-sm btn-warning" type="reset"><i class="fa fa-repeat"></i> Reset</button>
			</div>
		</div>
		</form>
	<!-- END Form Validation Example Content -->
</div>