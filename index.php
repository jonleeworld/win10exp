<?php
include_once 'inc/obj.php';
get_header();

?>
    <div class="layui-row content">
        <div class="layui-col-md2 sidebar <?php get_self_adaption_css() ?>">
            <?php get_sidebar(); ?>
        </div>
        <div class="layui-col-md10 postlist">
            <?php default_post(); ?>
        </div>
        <div class="posts-nav">
            <?php posts_nav_link(' - '); ?>
        </div>
    </div>

</div>

</body>
<?php get_footer() ?>
<?php wp_footer(); ?>
</html>