<?php
$id = get_sub_field ('section_name');
$button = get_sub_field ('button');
?>
<section class="page-section bg-primary" id="<?= register($id);?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0"><?php the_sub_field('title');?></h2>
                <hr class="divider light my-4" />
                <p class="text-white-50 mb-4"><?php the_sub_field('content');?></p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="<?= register($button['url']) ;?>"><?= $button['title'];?></a>
            </div>
        </div>
    </div>
</section>
