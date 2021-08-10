<?php

/**
 * Template Name: Landing Page
 */

?>

<?php
    get_header();
?>


    <?php
        // Get Section Dynamically
        $meal_current_page_id = get_the_ID();
        $meal_page_meta       = get_post_meta( $meal_current_page_id, 'meal-page-sections', true );
        if ( isset( $meal_page_meta['sections'] ) ):  // Custom Post Type ID [sections] in page.php
            foreach ( $meal_page_meta['sections'] as $meal_page_section ):
                $meal_section_id   = $meal_page_section['section'];  // New Section ID [section] in page.php
                $meal_section_meta = get_post_meta( $meal_section_id, 'meal-section-type', true );
                $meal_section_type = $meal_section_meta['type'];  // Section Meta ID[type] in section.php
                get_template_part( "section-templates/{$meal_section_type}" );
            endforeach;
        endif;
    ?>

        <div class="section bg-white" data-aos="fade-up">
            <div class="container">
                <div class="row section-heading justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h2 class="heading mb-3">Customer Reviews</h2>
                    </div>
                </div>
                <div class="row justify-content-center text-center" data-aos="fade-up">
                    <div class="col-md-8">
                        <div class="owl-carousel home-slider-loop-false">


                            <div class="item">
                                <blockquote class="testimonial">
                                    <p>&ldquo;A small river named Duden flows by their place and supplies it with the
                                        necessary regelialia. It is a paradisematic country, in which roasted parts of
                                        sentences fly into your mouth.&rdquo;</p>
                                    <div class="author">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/person_1.jpg" alt="Image placeholder" class="mb-3">
                                        <h4>Maxim Smith</h4>
                                        <p>CEO, Founder</p>
                                    </div>
                                </blockquote>
                            </div>
                            <div class="item">
                                <blockquote class="testimonial">
                                    <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts. Separated they live in
                                        Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                    <div class="author">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/person_2.jpg" alt="Image placeholder" class="mb-3">
                                        <h4>Geert Green</h4>
                                        <p>CEO, Founder</p>
                                    </div>
                                </blockquote>
                            </div>
                            <div class="item">
                                <blockquote class="testimonial">
                                    <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is
                                        an almost unorthographic life One day however a small line of blind text by the
                                        name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                                    <div class="author">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/person_3.jpg" alt="Image placeholder" class="mb-3">
                                        <h4>Dennis Roman</h4>
                                        <p>CEO, Founder</p>
                                    </div>
                                </blockquote>
                            </div>
                            <div class="item">
                                <blockquote class="testimonial">
                                    <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of
                                        bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text
                                        didn’t listen. She packed her seven versalia, put her initial into the belt and
                                        made herself on the way.&rdquo;</p>
                                    <div class="author">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/person_2.jpg" alt="Image placeholder" class="mb-3">
                                        <h4>Geert Green</h4>
                                        <p>CEO, Founder</p>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .section -->

        <div class="section" data-aos="fade-up" id="section-contact">
            <div class="container">
                <div class="row section-heading justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h2 class="heading mb-3">Get In Touch</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10 p-5 form-wrap">
                        <form action="#">
                            <div class="row mb-4">
                                <div class="form-group col-md-4">
                                    <label for="name" class="label">Name</label>
                                    <div class="form-field-icon-wrap">
                                        <span class="icon ion-android-person"></span>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email" class="label">Email</label>
                                    <div class="form-field-icon-wrap">
                                        <span class="icon ion-email"></span>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phone" class="label">Phone</label>
                                    <div class="form-field-icon-wrap">
                                        <span class="icon ion-android-call"></span>
                                        <input type="text" class="form-control" id="phone">
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="message" class="label">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10"
                                              class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <input type="submit" class="btn btn-primary btn-outline-primary btn-block"
                                           value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- .section -->

        <div class="map-wrap" id="map" data-aos="fade"></div>

<?php get_footer(); ?>



