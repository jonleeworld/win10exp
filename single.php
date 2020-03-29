<?php
get_header();
the_post();
$cat = get_the_category();
$catid = $cat[0]->cat_ID;
?>
    <div class="layui-row content">
        <div class="layui-col-md2 sidebar <?php get_self_adaption_css() ?>">
            <?php get_sidebar(); ?>
        </div>
        <div class="layui-col-md10 post-content">
            <div class="post-content-content">
                <?php
                    $getunix = get_post_modified_time('U')-2880;
                    $days_old = (((time() - $getunix)/86400));
                    $daynum = floor($days_old);
                    if ($days_old > 60) {
                        echo '<div class="old-message">提醒：本文最后更新于 <a><strong>' . $daynum . '</strong></a> 天前，其中某些信息可能已经过时，请谨慎使用！</div><div class="expired-message">你似乎正在查看一篇很久远的文章。<br>为了你这样的访客，我特地保留了我的历史博文。不要笑话过去的我，用温柔的目光看下去吧。</div>';
                    }
                //注意$days_old这个参数单位是天，根据自己需要修改
                ?>
                <?php the_content(); ?>
            </div>
            <div class="post-content-comments">
                <?php
                comments_template();
                ?>
            </div>
        </div>
    </div>
</div>

</body>
<?php get_footer() ?>
<?php wp_footer(); ?>
</html>