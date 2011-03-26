<?php /* Fusion/digitalnature */ ?>

  </div>
  <!-- /side wrap -->
 </div>
 <!-- /mid column wrap -->
</div>
<!-- /main wrapper -->

<!-- clear main & sidebar sections -->
<div class="clearcontent"></div>
<!-- /clear main & sidebar sections -->

 <?php
  // check if we have widgets
  if (is_sidebar_active('sidebar-3')){ ?>
  <!-- footer widgets -->
  <ul id="footer-widgets" class="widgetcount-<?php  $sidebars_widgets = wp_get_sidebars_widgets(); $wcount=count($sidebars_widgets['sidebar-3']); print $wcount;  ?>">
  <?php
   if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer')) : else : ?>
  <?php endif; ?>
  </ul>
  <div class="clear"></div>
  <!-- /footer widgets -->
 <?php } ?>

<!-- footer -->
 <div id="footer">

   <?php if(get_option('fusion_footer')<>'') { ?>
   <div class="add-content">
    <?php print get_option('fusion_footer'); ?>
   </div>
   <?php } ?>

   <p>
   <a class="rss" href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)','fusion'); ?></a> <?php _e('and','fusion');?> <a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)','fusion'); ?></a> <a href="javascript:void(0);" id="toplink">^</a>
   </p>
 </div>
 <!-- /footer -->
  <?php if((get_option('fusion_controls')<>'no') && (get_option('fusion_jquery')<>'no')) { ?>
 <div id="layoutcontrol">
   <a href="javascript:void(0);" class="setFont" title="<?php _e('Increase/Decrease text size','fusion'); ?>"><span>SetTextSize</span></a>
   <a href="javascript:void(0);" class="setLiquid" title="<?php _e('Switch between full and fixed width','fusion'); ?>"><span>SetPageWidth</span></a>
 </div>
 <?php } ?>
</div>
<!-- /page -->

</div>
</div>
<!-- /page wrappers -->


<?php wp_footer(); ?>
</body>
</html>
