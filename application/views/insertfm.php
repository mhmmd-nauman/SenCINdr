<?php echo validation_errors(); ?>

<?php echo form_open('views/create') ?>

	<label for="name">NAME</label>
	<input type="input" name="name" /><br />
<label for=id>id</label>
	<input type="input" name="id" /><br />
	<label for="text">class</label>
        
	<textarea name="text"></textarea><br />

	<input type="submit" name="submit" value="Create news item" />

</form>
