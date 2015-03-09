<div style="padding-left: 15px;" class="storyStatsContainer row">
    <div style="margin-right: -25px;" class="col-md-1">
        <a style="text-decoration: none;" class="StoryActionButtons" href="#comments">
            <span class="glyphicon glyphicon-comment"></span> 
        </a>
        <span class="totalCommentSpan"><?php echo $storyViewModel->totalComments; ?></span>
    </div>
    <div style="margin-right: -25px;" class="col-md-1">
        <a style="text-decoration: none;" data-request-type="<?php echo (isset($storyViewModel->Opinion) && $storyViewModel->Opinion == TRUE ? "0" : "1"); ?>" class="StoryRecommendButton <?php echo (isset($storyViewModel->Opinion) && $storyViewModel->Opinion == TRUE) ? "text-default" : "StoryActionButtons"; ?>" href="<?php echo BASE_URL . "story/recommendStory/" . $storyViewModel->StoryId . "/" . (isset($storyViewModel->Opinion) && $storyViewModel->Opinion == TRUE ? "0" : "1"); ?>">
            <span class="glyphicon glyphicon-thumbs-up"></span>
        </a>
        <span class="totalRecommendsSpan"><?php echo $storyViewModel->totalRecommends; ?></span>
    </div>
    <div class="col-md-1">
        <a style="text-decoration: none;" data-request-type="<?php echo (isset($storyViewModel->Opinion) && $storyViewModel->Opinion == FALSE ? "0" : "1"); ?>" class="StoryFlagButton <?php echo (isset($storyViewModel->Opinion) && $storyViewModel->Opinion == FALSE) ? "text-danger" : "StoryActionButtons"; ?>" href="<?php echo BASE_URL . "story/flagInappropriate/" . $storyViewModel->StoryId . "/" . (isset($storyViewModel->Opinion) && $storyViewModel->Opinion == FALSE ? "0" : "1"); ?>">
            <span class="glyphicon glyphicon-flag"></span> 
        </a>
        <span class="totalFlagsSpan"><?php echo $storyViewModel->totalFlags; ?></span>
    </div>

</div>