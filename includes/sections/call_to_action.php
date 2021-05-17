<section class="page-section bg-dark text-white">
    <div class="container text-center">
        <h2 class="mb-4"><?php the_sub_field('title'); ?></h2>
        <?php $link = get_sub_field('link'); ?>
        <?php if (!empty($link)): ;?>
            <a class="btn btn-light btn-xl" href="<?= $link['url']; ?>"><?= $link['title']; ?></a>
        <?php endif; ?>
    </div>
</section>