
<?php
	 debugit($storyQuestionViewModel);
	// debugit($userViewModel);
	// debugit($aprovalViewModel);
?>
<div class="container" style="margin-top:100px;">

	<h2>Edit a Story Question</h2>

    <div class="row">
		
		<div class="col-md-6">
			<form action="<?php echo BASE_URL . "admin/storyquestionedit/" . $storyQuestionViewModel->QuestionId; ?>" 
				method="post" id="loginForm">

				<input type="hidden" name="AnswerId" value="<?php echo $storyQuestionViewModel->QuestionId; ?>">

	            <?php include(APP_DIR . 'views/shared/messages.php'); ?>

	            <div class="form-group">
	                <label for="Content"><?php echo gettext("English Version"); ?></label>
	                <textarea class="form-control" id="NameE" name="NameE"><?php echo $storyQuestionViewModel->NameE; ?></textarea>

	            </div>
	            <div class="form-group">
	                <label for="Content"><?php echo gettext("French Version"); ?></label>
	                <textarea class="form-control" id="NameE" name="NameF"><?php echo $storyQuestionViewModel->NameF; ?></textarea>

	            </div>	            
	            <button type="submit" class="btn btn-default"><?php echo gettext("Update"); ?></button>
	        </form>

        </div>
    </div>
</div>