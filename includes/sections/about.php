<?php $about = get_sub_field ('about'); ?>
<section class="page-section bg-primary" id="<?php the_sub_field('section_name');?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0"><?php the_sub_field('title');?></h2>
                <hr class="divider light my-4" />
                <p class="text-white-50 mb-4"><?php the_sub_field('content');?></p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="#<?php the_sub_field('button_link');?>"><?php the_sub_field('button_name');?></a>
            </div>
        </div>
    </div>
</section>
