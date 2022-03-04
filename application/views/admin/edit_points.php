<form method='post' action='/asakdk/edit_points/update/?id=<?php echo $id;?>'>
					 <div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Points</label>
					  <div class="col-sm-10">
						<input type="text" name="points" class="form-control" id="input-4" placeholder="Enter Points">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Comment</label>
					  <div class="col-sm-10">
						<input type="text" name="comment" class="form-control" id="input-4" placeholder="Enter Reason" required>
					  </div>
					</div>
					 <div class="form-group row">
					  <label for="input-1" class="col-sm-2 col-form-label"></label>
					  <div class="col-sm-10">
						<button type="submit" class="btn btn-primary shadow-primary px-5">Submit</button>
					  </div>
					</div>
</form>