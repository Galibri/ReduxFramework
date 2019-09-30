<?php
    /**
     * The template for the header sticky bar.
     * Override this template by specifying the path where it is stored (templates_path) in your Redux config.
     *
     * @author        Redux Framework
     * @package       ReduxFramework/Templates
     * @version:      3.6.10
     */
?>
<div id="redux-sticky">
    <div id="info_bar">
        
        <div class="clear"></div>
    </div>

    <!-- Notification bar -->
    <div id="redux_notification_bar">
        <?php $this->notification_bar(); ?>
    </div>


</div>