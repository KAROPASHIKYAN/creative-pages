<section class="page-section" id="<?php the_sub_field('section_name'); ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="mt-0"><?php the_sub_field('title'); ?></h2>
                <hr class="divider my-4" />
                <p class="text-muted mb-5"><?php the_sub_field('content'); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                <div><?php the_sub_field('phone_number'); ?></div>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                <a class="d-block" href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a>
            </div>
        </div>
    </div>
</section>