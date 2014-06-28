<footer class="content-info container" role="contentinfo">
  <div class="row text-center">
    <div class="col-lg-12">
      <?php dynamic_sidebar('sidebar-footer'); ?>
      <p>&copy; 2012-<?php echo date('Y'); ?> <?php bloginfo('name'); ?>
      <br>Built with <a href="http://roots.io/starter-theme/">Roots</a> and <a href="http://wordpress.org/">WordPress</a>.
      <br>本网站基于Responsive设计,已做手机/iPad测试,如果有建议及浏览问题请联系我
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/email.png" width="135" height="21" alt="email" title="email">
      <!-- The source code of this theme is <a href="https://github.com/mclxly/wp-theme/tree/master/zwg2014">hosted on GitHub</a>. -->
      </p>
      <!-- <span class="octicon octicon-logo-github"></span> -->
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<!-- website analytics begin -->
<div class="hide">
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F4b6ba668b5e012c2628252368f56981c' type='text/javascript'%3E%3C/script%3E"));
</script>
<!--
<a href="http://www.beyondsecurity.com/vulnerability-scanner-verification/blog.linxiang.info"><img src="https://secure.beyondsecurity.com/verification-images/blog.linxiang.info/vulnerability-scanner-2.gif" alt="Website Security Test" border="0" /></a>
-->
</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-34671632-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- website analytics end -->
