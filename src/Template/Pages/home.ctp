<?php
    // $this->Html->script('pages.home.js', false);
?>
<div class="col-md-3">
    left content here
    <?php //= $this->element('tags/weekly_schedule', array(), array('cache'=>'1 day')) ?>
</div>
<div class="col-md-6">
    center content here
    <?php
    /*
    =
        $this->element('blogs/list',
            array('hide_paging_controls'=>true),
            array(
                'cache'=>array(
                    'config'=>'long_term',
                    'key'=>'homepage_blogs',
                    'group'=>'blogs'
                )
            )
        );
    */
    ?>
</div>
<div class="col-md-3">
    right content
    <?php // = $this->element('meetings/next_meeting', array(), array('cache'=>'1 day')) ?>
</div>
<div class="clearfix"></div>
