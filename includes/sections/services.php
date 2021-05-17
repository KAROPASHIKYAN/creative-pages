<section class="page-section" id="<?php the_sub_field('section_name');?>">
    <div class="container">
        <h2 class="text-center mt-0"><?php the_sub_field('title'); ?></h2>
        <hr class="divider my-4" />
        <div class="row">
            <?php $rows = get_sub_field('rows'); ?>
            <?php if (!empty($rows)): ?>
                <?php foreach ($rows as $row): ?>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x <?= $row['icon'];?> text-primary mb-4"></i>
                            <h3 class="h4 mb-2"><?= $row['title'];?></h3>
                            <p class="text-muted mb-0"><?= $row['content'];?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>