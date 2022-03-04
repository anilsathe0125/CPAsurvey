<form id="social_form" method="post" action="/asakdk/update_social"  enctype="multipart/form-data">
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">NETWORK</label>
                            </div>
                                <select id="social" name="network" class="custom-select" id="inputGroupSelect01">
                                <option <?php if($social[0]->so_network=='facebook') echo 'selected';?> value="facebook">Facebook</option>
                                <option <?php if($social[0]->so_network=='twitter') echo 'selected';?> value="twitter">Twitter</option>
                                <option <?php if($social[0]->so_network=='youtube') echo 'selected';?> value="youtube">Youtube</option>
                                <option <?php if($social[0]->so_network=='instagram') echo 'selected';?> value="instagram">Instagram</option>
                                </select>
                            </div>
							<div class="form-group">
								<label for="input-1">Social Network Link</label>
								<input type="text" name="social_link" class="form-control" id="link" value="<?php echo $social[0]->so_link;?>">
							</div>
							<div class="form-group">
								<label for="input-1">Offer Points</label>
								<input type="text" name="social_points" class="form-control" id="points" value="<?php echo $social[0]->so_points;?>">
								<input type="text" name="social_id" class="form-control" id="social_id" value="<?php echo $social[0]->soid;?>" hidden>
							</div>
							<div class="form-group">
								<button type="submit" onclick="saveSocial()" class="btn btn-primary shadow-primary px-5">Save</button>
							</div>
</form>