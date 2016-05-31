<?php


?>
<div id="page-wrapper"><div id="page">

  <div id="header" class="<?php print $secondary_menu ? 'with-secondary-menu': 'without-secondary-menu'; ?>"><div class="section clearfix">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan"<?php if ($hide_site_name && $hide_site_slogan) { print ' class="element-invisible"'; } ?>>

        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
              <strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong>
            </div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan"<?php if ($hide_site_slogan) { print ' class="element-invisible"'; } ?>>
            <?php print $site_slogan; ?>
          </div>
        <?php endif; ?>

      </div> <!-- /#name-and-slogan -->
    <?php endif; ?>

    <?php print render($page['header']); ?>

   


  </div></div> <!-- /.section, /#header -->

  <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>

  <?php if ($page['featured']): ?>
    <div id="featured"><div class="section clearfix">
      <?php print render($page['featured']); ?>
    </div></div> <!-- /.section, /#featured -->
  <?php endif; ?>

  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">

    
   

<div class="frontpage-login-mid">
    <div class="block block-user" id="block-user-login">

    <h1>Demo Ticket login</h1>
  
  <div class="content">
    <form accept-charset="UTF-8" id="user-login-form" method="post" action="/?q=admin/workbench&amp;destination=admin/workbench"><div><div class="form-item form-type-textfield form-item-name">
  <label for="edit-name">Username <span title="This field is required." class="form-required">*</span></label>
 <input type="text" class="form-text required" maxlength="60" size="15" value="" name="name" id="edit-name">
</div>
<div class="form-item form-type-password form-item-pass">
  <label for="edit-pass">Password <span title="This field is required." class="form-required">*</span></label>
 <input type="password" class="form-text required" maxlength="128" size="15" name="pass" id="edit-pass">
</div>
<div class="item-list"><ul><li class="first last"><a title="Request new password via e-mail." href="/?q=user/password">Request new password</a></li>
</ul></div><input type="hidden" value="form-p2xagpUfGKt2_UUeA4ywnwSduZsy-NwdQ-Jqd6jT3no" name="form_build_id">
<input type="hidden" value="user_login_block" name="form_id">
<div id="edit-actions" class="form-actions form-wrapper"><input type="submit" class="form-submit" value="Log in" name="op" id="edit-submit"></div></div></form>  </div>
</div>
    
  </div>   <!-- /.section, /#content -->

   

  </div></div> <!-- /#main, /#main-wrapper -->

 

  <div id="footer-wrapper"><div class="section">

    <?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']): ?>
      <div id="footer-columns" class="clearfix">
        <?php print render($page['footer_firstcolumn']); ?>
        <?php print render($page['footer_secondcolumn']); ?>
        <?php print render($page['footer_thirdcolumn']); ?>
        <?php print render($page['footer_fourthcolumn']); ?>
      </div> <!-- /#footer-columns -->
    <?php endif; ?>

    <?php if ($page['footer']): ?>
      <div id="footer" class="clearfix">
        <?php print render($page['footer']); ?>
      </div> <!-- /#footer -->
    <?php endif; ?>

  </div></div> <!-- /.section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
