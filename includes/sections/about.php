<?php $about = get_sub_field ('about'); ?>
<section class="page-section bg-primary" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0"><?=$about['title']; ?></h2>
                <hr class="divider light my-4" />
                <p class="text-white-50 mb-4"><?=$about['content']; ?></p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="#<?=$about['button_link']; ?>"><?=$about['button_name']; ?></a>
            </div>
        </div>
    </div>
</section>
