<?php

    //You have access to the shared/StoryViewModel.php
    
    //You can access everything from this variable:
    //uncomment to view structure in browser
    //debugit($storyViewModel);

    //$privacyDropdownValues
    //$storyQuestions

    //debugit($storyViewModel);
?>


<div class="container" style="padding-bottom: 50px; padding-top: 50px;">

    <div class="row">
        <div class="col-md-12">            
        
            <form action="<?php echo ((isset($storyViewModel->StoryId) && $storyViewModel->StoryId > 0) ? BASE_URL . "story/edit/" . $storyViewModel->StoryId : BASE_URL . "story/add" ) ?>" method="post" enctype="multipart/form-data">
                
                <input type="hidden" name="StoryId" id="StoryId" value="<?php echo $storyViewModel->StoryId; ?>">
                <input type="hidden" name="PictureId" id="PictureId" value="<?php echo $storyViewModel->PictureId; ?>">

                <?php if (isset($storyViewModel->Published) && $storyViewModel->Published == TRUE): ?>
                    <div class="alert alert-info alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong><?php echo gettext("Info!"); ?></strong> <?php echo gettext("Editing a published story sets it's status back to pending approval."); ?>
                    </div>
                <?php endif ?>

                <?php include(APP_DIR . 'views/shared/messages.php'); ?>         
                
                
                <input type="hidden" name="image_x" id="image_x" value="">
                <input type="hidden" name="image_y" id="image_y" value="">
                <input type="hidden" name="image_height" id="image_height" value="">
                <input type="hidden" name="image_width" id="image_width" value="">
                <div id="addImageDiv" class="img-rounded center-block" style="border-radius: 10px !important; position: relative; min-height:200px; border: 1px solid #E8E8E8; overflow: hidden; padding: 0; margin: 0;">
                    
                    <?php
                        //This checks to see if a picture exists for a story saved as a draft
                        if(isset($storyViewModel->PictureId) && $storyViewModel->PictureId > 0)
                        {
                            ?>
                                <img id="imgPreviewer" src="<?php echo image_get_path_basic($storyViewModel->UserId, $storyViewModel->PictureId, IMG_STORY, (IS_MOBILE ? IMG_MEDIUM : IMG_LARGE)); ?>" class="img-rounded img-responsive center-block" alt="" style="width:1200px; z-index: 10; " />
                            <?php
                        }
                        else
                        {
                            ?>
                                <img id="imgPreviewer" src="" class="img-rounded img-responsive center-block" alt="" style="width:1200px; z-index: 10; " />
                            <?php
                        }
                    ?>

                      <div class="form-group" style="position: absolute; z-index: 50; bottom:0; float: left;">   

                          <div class="fileUpload btn btn-default" style="float: left;">                     

                                <span><?php echo gettext("Add A Photo"); ?></span>
                                <input style="width:100%;" type="file" id="Images" name="Images" class="upload" placeholder="<?php echo gettext("Add an Image"); ?>" value="<?php //echo $storyViewModel->Image; ?>">
                          </div>
                      </div>

                      <div id="cropImage" class="btn btn-default" style="position: absolute; z-index: 50; bottom:0; float: left; margin: 25px; margin-left: 150px; display: none;"><?php echo gettext("Crop"); ?></div>
                </div>

                <div class="form-group" style="margin-top: 15px; margin-bottom: 0px;">
                    <!-- <label for="StoryTitle"><?php echo gettext("Title"); ?></label> -->
                    <input type="text" class="form-control" id="StoryTitle" name="StoryTitle" placeholder="<?php echo gettext("Title"); ?>" value="<?php echo $storyViewModel->StoryTitle; ?>">
                </div>            

                   
                <div id="mceFixedNav"></div>
                <div class="form-group">
                    <!-- <label for="Content"><?php echo gettext("Content"); ?></label> -->

                    <input type="hidden" id="tinymce_customCSS" value="<?php echo BASE_URL. "static/css/tinymce_customCSS.css"; ?>">
                    <textarea class="form-control tinyMCE" id="Content" name="Content"><?php echo $storyViewModel->Content; ?></textarea>
                </div>   
                <br />

                 <div class="form-group">
                   <!--  <label for="Tags[]"><?php echo gettext("Story Tags"); ?></label> -->

                    <select id="Tags" class="form-control multiSelectTag" name="Tags[]" multiple placeholder="Tag Your Story!">
                        <option value=""></option>
                        <?php 
                            if(is_array($storyViewModel->Tags) && count($storyViewModel->Tags) > 0)
                            {
                                foreach ($storyViewModel->Tags as $tag) {
                                    echo "<option value='$tag->id' selected=selected>"; 
                                        echo $tag->text;
                                    echo "</option>";
                                } 
                            }
                        ?>
                    </select>
                </div> 
                <br />    

                <div class="form-group">
                    <label for="StoryPrivacyType_StoryPrivacyTypeId"><?php echo gettext("Story Privacy"); ?></label>
                    <select class="form-control" name="StoryPrivacyType_StoryPrivacyTypeId" style="height:45px; font-size: 1.5em;">
                        <?php 
                            foreach ($privacyDropdownValues as $dropdownValue) {
                                echo "<option " . ($storyViewModel->StoryPrivacyType_StoryPrivacyTypeId == $dropdownValue->Value ? 'selected=selected' : "") . " value='" . $dropdownValue->Value . "'>"; 
                                    echo $dropdownValue->Name;
                                echo "</option>";
                            } 
                        ?>
                    </select>
                </div>                          
                    
                <br />
                <button type="submit" name="publish" class="btn btn-default"><?php echo gettext("Publish"); ?></button>
                <button type="submit" name="draft" class="btn btn-default"><?php echo gettext("Save Draft"); ?></button>
            </form>
        </div>
    </div>
</div>