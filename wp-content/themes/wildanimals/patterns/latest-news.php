<?php
/**
 * Title: Latest News
 * Slug: wildanimals/latest-news
 * Categories: wildanimals, latest-news
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"width":"2px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"25px","right":"25px"}}},"borderColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-primary-border-color" style="border-width:2px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} -->
<h4 class="wp-block-heading has-primary-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('Visiting Our Blog','wildanimals'); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","align":"wide","fontSize":"section-title"} -->
<h2 class="wp-block-heading alignwide has-text-align-center has-section-title-font-size"><?php esc_html_e('Daily Updated Latest Articles Directly From The Blog','wildanimals'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":3,"query":{"perPage":3,"pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|secondary","width":"6px"},"top":{},"right":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:6px"><!-- wp:group {"className":"pos-relative","layout":{"type":"constrained"}} -->
<div class="wp-block-group pos-relative"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"post-category","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group post-category" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|30"}}},"backgroundColor":"secondary","textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"news-thumb-wrap"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary","className":"post-date","layout":{"type":"constrained"}} -->
<div class="wp-block-group post-date has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"textColor":"white"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"50px","right":"25px","bottom":"30px","left":"25px"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="margin-top:0px;padding-top:50px;padding-right:25px;padding-bottom:30px;padding-left:25px"><!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.5"}},"fontSize":"regular"} /-->

<!-- wp:post-excerpt {"textAlign":"center","moreText":"","showMoreOnNewLine":false,"excerptLength":18} /--></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"width":100,"style":{"border":{"radius":"0px"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" style="border-radius:0px"><?php esc_html_e('Read More','wildanimals'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('There is no post found','wildanimals'); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->