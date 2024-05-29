<?php if (is_active_sidebar('footer-sidebar-1') or is_active_sidebar('footer-sidebar-2') or is_active_sidebar('footer-sidebar-3')) : ?>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <?php dynamic_sidebar('footer-sidebar-1'); ?>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar('footer-sidebar-2'); ?>
                </div>
                <div class="col-md-3">
                    <?php dynamic_sidebar('footer-sidebar-3'); ?>
                </div>
            </div>
        </div>
    </footer>
<?php endif; ?>

<div class="sub-footer">
    <?php // venue_copyright_option(); ?>
</div>