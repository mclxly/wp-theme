<footer class="content-info container" role="contentinfo">
  <div class="row text-center">
    <div class="col-lg-12">
      <?php dynamic_sidebar('sidebar-footer'); ?>
      <p>&copy; 2012-<?php echo date('Y'); ?> <?php bloginfo('name'); ?>
      <br>Built with <a href="http://roots.io/starter-theme/">Roots</a> and <a href="http://wordpress.org/">WordPress</a>. 
      <br>本网站基于Responsive设计,已做手机/iPad测试,如果建议及浏览问题请联系我
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/email.png" width="135" height="21" alt="email" title="email">
      <!-- The source code of this theme is <a href="https://github.com/mclxly/wp-theme/tree/master/zwg2014">hosted on GitHub</a>. -->
      </p>
      <!-- <span class="octicon octicon-logo-github"></span> -->
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
