<?php
$phone = get_sub_field('phone_number');
$email = get_sub_field('email');
$id = get_sub_field('section_name');
?>
<section class="page-section" id="<?= register($id); ?>">
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
                <?php if (!empty($phone)):?>
                    <div><?= $phone; ?></div>
                <?php endif; ?>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                <?php if (!empty($email)): ?>
                    <a class="d-block" href="mailto:<?= $email; ?>"><?= $email; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>