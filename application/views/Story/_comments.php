<?php

	//debugit($comment);
?>


  <!-- First Comment -->
<article class="row">
	<div class="col-md-2 col-sm-2 hidden-md hidden-xs">
		<figure class="thumbnail">
			<img class="img-responsive" style="height: 150px;" src="<?php echo image_get_path_basic($comment->User_UserId, 0, 1, IMG_SMALL); ?>" />
		</figure>
	</div>
	<div class="col-md-10 col-sm-10">
		<div class="panel panel-default arrow left">
			<div class="panel-body">
				<div style="min-height: 82px;" class="comment-post">
					<div class="row">
						<div class="col-md-9" style="padding:10px; padding-left:20px; font-size: 1.2em;">
							<?php echo $comment->Content; ?>
						</div>
						<div class="col-md-3 hidden-md hidden-xs" style="position: absolute; bottom: 0; right: 0; padding: 25px;  padding-bottom: 30px;">
								
							<span style="padding-right: 5px;" class="glyphicon glyphicon-time"></span>	<strong><?php echo date("m-d-Y", strtotime($comment->DateCreated)); ?></strong>
							
							<br />
							<span style="padding-right: 5px;" class="glyphicon glyphicon-user"></span>  <strong><?php echo $comment->FirstName . " " . $comment->LastName; ?></strong>

							<br />
							<span style="padding-right: 5px;" class="glyphicon glyphicon-flag"></span>  <strong><?php echo gettext("Flag"); ?></strong>
						</div>
					</div>
					<div class="row hidden-lg">
						
						<hr />
						<div class="col-md-12" style="bottom: 0; right: 0; padding: 25px;  padding-bottom: 30px;">
							
							<span style="padding-right: 5px;" class="glyphicon glyphicon-time"></span>	<strong><?php echo date("m-d-Y", strtotime($comment->DateCreated)); ?></strong>
							
							<br />
							<span style="padding-right: 5px;" class="glyphicon glyphicon-user"></span>  <strong><?php echo $comment->FirstName . " " . $comment->LastName; ?></strong>

							<br />
							<span style="padding-right: 5px;" class="glyphicon glyphicon-flag"></span>  <strong><?php echo gettext("Flag"); ?></strong>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</article>
