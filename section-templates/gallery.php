<?php
global $meal_section_id;
$meal_section_meta        = get_post_meta( $meal_section_id, 'meal-section-gallery', true );
$meal_section             = get_post( $meal_section_id );
$meal_section_title       = $meal_section->post_title;
$meal_section_description = $meal_section->post_content;

?>
<div class="section pb-3 bg-white" id="<?php echo esc_attr( $meal_section->post_name ); ?>" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12 col-lg-8 section-heading">
                <h2 class="heading mb-5">
					          <!-- <?php echo esc_html( $meal_section_title ); ?> -->
                    <?php echo esc_html($meal_section_meta['gallery_section_title']) ?>
                </h2>
                    <!-- <?php echo apply_filters( 'the_content', $meal_section_description ); ?> -->
                    <?php echo esc_html($meal_section_meta['gallery_section_desc']) ?>
            </div>
        </div>
    </div>
</div> <!-- .section -->

<?php
$meal_gallery_items    = $meal_section_meta['portfolio'];
$meal_item_categories  = [];
$meal_number_of_images = $meal_section_meta['nimages'];
$meal_counter          = 0;
foreach ( $meal_gallery_items as $meal_gallery_item ) {
	if ( $meal_counter >= $meal_number_of_images ) {
		break;
	}
	$meal_gallery_item_categories = explode( ",", $meal_gallery_item['categories'] );
	foreach ( $meal_gallery_item_categories as $meal_gallery_item_category ) {
		$meal_gallery_item_category = trim( $meal_gallery_item_category );
		if ( ! in_array( $meal_gallery_item_category, $meal_item_categories ) ) {
			array_push( $meal_item_categories, $meal_gallery_item_category );
		}
	}
	$meal_counter ++;
}

?>

<div class="section bg-white pt-2 pb-2 text-center" data-aos="fade">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <ul class="portfolio-filter text-center">
                        <li class="active"><a href="#" data-filter="*"> <?php _e( 'All', 'meal' ) ?></a></li>
						<?php
						foreach ( $meal_item_categories as $meal_item_category ):
							?>
                            <li><a href="#"
                                   data-filter=".<?php echo esc_attr( $meal_item_category ); ?>"><?php echo esc_html( $meal_item_category ); ?></a>
                            </li>
                        <?php
                        endforeach;
                        ?>
                    </ul>
                </div>

	            <?php
	            wp_nonce_field( 'loadmorep', 'loadmorep' );
	            ?>
                <div class="portfolio-grid portfolio-gallery grid-4 gutter"
                     data-images="<?php echo esc_attr( $meal_number_of_images ); ?>"
                     data-sid = "<?php echo esc_attr($meal_section_id);?>"
                     data-ni = "<?php echo esc_attr($meal_number_of_images);?>"
                >


					<?php
					$meal_counter = 0;
					foreach ( $meal_gallery_items as $meal_gallery_item ):
						if ( $meal_counter >= $meal_number_of_images ) {
							break;
						}
						$meal_item_class            = str_replace( ",", " ", $meal_gallery_item['categories'] );
						$meal_item_image_id         = $meal_gallery_item['image'];
						$meal_item_thumbnail        = wp_get_attachment_image_src( $meal_item_image_id, 'medium' );
						$meal_item_large            = wp_get_attachment_image_src( $meal_item_image_id, 'large' );
						$meal_item_categories_array = explode( ",", $meal_gallery_item['categories'] );
						?>
                        <div class="portfolio-item <?php echo esc_attr( $meal_item_class ); ?>">
                            <a href="<?php echo esc_url( $meal_item_large[0] ); ?>"
                               class="portfolio-image popup-gallery">
                                <img src="<?php echo esc_url( $meal_item_thumbnail[0] ); ?>" alt=""/>
                                <div class="portfolio-hover-title">
                                    <div class="portfolio-content">
                                        <h4><?php echo esc_html( $meal_gallery_item['title'] ) ?></h4>
                                        <div class="portfolio-category">
											<?php
											foreach ( $meal_item_categories_array as $meal_item_category ):
												printf( "<span>%s</span>", trim( $meal_item_category ) );
											endforeach;
											?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                      $meal_counter ++;
                      endforeach;
                    ?>

                </div>
                <!-- <button id="loadmorepb"><?php _e( 'Load More', 'meal' ); ?></button> -->

            </div>
        </div>
    </div>
</div> <!-- .section -->
