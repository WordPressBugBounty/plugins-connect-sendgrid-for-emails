<div class="wrap clearfix" id="sendgrid-statistics-page">
  <div class="pull-left sendgrid-statistics-header">
    <h2 id="sendgrid-wordpress-statistics-header" class="sendgrid-statistics-header-toggle">Connect SendGrid for Emails - WordPress Statistics</h2>
    <h2 id="sendgrid-general-statistics-header" class="sendgrid-statistics-header-toggle" style="display: none;">Connect SendGrid for Emails - General Statistics</h2>
    <h2 id="sendgrid-category-statistics-header" class="sendgrid-statistics-header-toggle" style="display: none;">Connect SendGrid for Emails - Categories Statistics</h2>
    <?php if ( isset( $status ) and ( 'error' == $status ) ): ?>
      <div id="message" class="<?php echo esc_attr($status) ?>">
        <p>
          <strong><?php echo esc_html($message) ?></strong>
        </p>
      </div>
    <?php endif; ?>
    <a href="https://app.sendgrid.com/statistics" target="_blank" class="more-statistics">SendGrid Portal</a>
  </div>
  <div class="pull-right sendgrid-statistics-change-type">
    <select id="sendgrid-statistics-change-type">
      <option value="general">General statistics</option>
      <option value="wordpress" selected="selected">WordPress statistics</option>
      <?php $categories = Sendgrid_Tools::get_categories_array(); ?>
      <?php if ( is_array( $categories ) and count( $categories ) > 0 ): ?>
      <optgroup label="Categories:">
        <?php foreach ( $categories as $cateogry ): ?>
        <option value="<?php echo esc_attr($cateogry); ?>"><?php echo esc_html($cateogry); ?></option>
        <?php endforeach; ?>
      </optgroup>
      <?php endif; ?>
    </select>
  </div>

  <div id="dashboard-widgets-wrap" class="full-width">
    <div id="dashboard-widgets" class="metabox-holder columns-1">
      <div class="postbox-container">
        <div id="sendgrid_statistics_widget" class="postbox ">
          <h3 class="hndle"><span>SendGrid Statistics</span></h3>
          <div class="inside">
            <?php require plugin_dir_path( __FILE__ ) . '../view/partials/sendgrid_stats_widget.php'; ?>
          </div>
        </div>

        <?php
          require plugin_dir_path( __FILE__ ) . '../view/partials/sendgrid_stats_deliveries.php';
          require plugin_dir_path( __FILE__ ) . '../view/partials/sendgrid_stats_compliance.php';
          require plugin_dir_path( __FILE__ ) . '../view/partials/sendgrid_stats_engagement.php';
        ?>
      </div>
    </div>
  </div>
</div>