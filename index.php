<?php
get_header();
?>

<main>

    <?php include get_template_directory() . '/includes/section1.php'; ?>
    <?php include get_template_directory() . '/includes/section2.php'; ?>

    <?php
    if ( is_front_page() ) {
        include get_template_directory() . '/includes/section3.php';
    }
    ?>
</main>

<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<?php
get_footer();
?>
