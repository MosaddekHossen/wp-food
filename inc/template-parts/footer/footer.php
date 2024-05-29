<?php if (is_active_sidebar('footer-sidebar-1') or is_active_sidebar('footer-sidebar-2') or is_active_sidebar('footer-sidebar-3')) : ?>
    <!-- page footer  -->
    <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">
            <div class="col-sm-4">
                <?php dynamic_sidebar('footer-sidebar-1'); ?>
            </div>
            <div class="col-sm-4">
                <?php dynamic_sidebar('footer-sidebar-2'); ?>
            </div>
            <div class="col-sm-4">
                <?php dynamic_sidebar('footer-sidebar-3'); ?>
            </div>
        </div>
    </div>
    <!-- end of page footer -->
<?php endif; ?>

<div class="bg-dark text-light text-center border-top wow fadeIn">
    <p class="mb-0 py-3 text-muted small"><?php food_copyright_option(); ?></a></p>
</div>