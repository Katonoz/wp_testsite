<?php get_header(); ?>

<section>

    <?php 
    if(have_posts()) :  //投稿記事があるかないか
        while (have_posts()) : //投稿記事があれば、処理を繰り返す（下の条件を満たせば繰り返す）
            the_post();   //投稿記事の情報を取得する
    ?>

    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>

     <?php 
        endwhile;
    endif;
    ?>
</section>

<?php get_footer(); ?>