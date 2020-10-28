<div class="col-md-6">

					 <select name="services[]" id="service" multiple="multiple">
      				<?php foreach ($services as $key): ?>
					<option value="<?php echo $key->id ?>"<?php if(in_array($key->title,$branchservicesArray)) { echo "selected" ; }?>><?php echo $key->title?></option>
     				 <?php endforeach;  ?>
      
     				</select>
						</div>