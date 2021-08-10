<?php
get_header();

$section_id = 6;
get_template_part( "section-templates/banner" );

?>
    <div class="main-wrap" id="section-home">
        <div <?php post_class('single-post') ?>>
            <div class="container">
                <div class="row post-body">
                    <div class="col-md-12">
                        <h1><?php the_title(); ?></h1>
                        <?php
                          the_content();
                        ?>
                    </div>
                </div>
            </div>
            <?php
            if(comments_open()){
                comments_template();
            }
            ?>
        </div>

    </div>
<?php
get_footer();
?>
