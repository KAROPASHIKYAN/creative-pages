<div id="<?php the_sub_field('section_name'); ?>">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <?php $rows = get_sub_field('rows'); ?>
            <?php if (!empty($rows)): ?>
                <?php foreach ($rows as $key => $row): ?>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="<?= $row['img_fullsize']['url'] ;?>">
                            <img class="img-fluid" src="<?= $row['img_thumbnails']['url'] ;?>" alt="..." />
                            <div class="portfolio-box-caption <?= $key == 5 ? 'p-3': '' ;?>">
                                <div class="project-category text-white-50"><?= $row['category']; ?></div>
                                <div class="project-name"><?= $row['project_name']; ?></div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>