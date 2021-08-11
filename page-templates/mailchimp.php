<?php
/**
 * Template Name: Mailchimp
 */
?>
<?php

get_header();

$section_id = 6;
get_template_part( "section-templates/banner" );
the_post();
?>
<div class="main-wrap" id="section-home">
    <div <?php post_class( 'single-post' ) ?>>
        <div class="container">
            <div class="row post-body">
                <div class="col-md-12">
                    <h1><?php the_title(); ?></h1>
					<?php
					the_content();
					?>
                </div>

                <div class="col-md-12">
                    <!-- section start-->
                    <section class="section-gap">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-10">
                                    <!-- Begin MailChimp Signup Form -->

                                    <div id="mc_embed_signup">
                                      <!-- Change with Mailchimp Given Link -->
                                        <form action="https://leevio.us1.list-manage.com/subscribe/post?u=f52c65a38b2628333621f8fc4&id=36b62e2dcc"
                                              method="post" id="mc-embedded-subscribe-form"
                                              name="mc-embedded-subscribe-form" class="validate" target="_blank"
                                              novalidate>
                                            <div id="mc_embed_signup_scroll">
                                                <h2>Subscribe to our mailing list</h2>
                                                <div class="indicates-required"><span class="asterisk">*</span>
                                                    indicates required
                                                </div>
                                                <div class="mc-field-group">
                                                    <label for="mce-EMAIL">Email Address <span class="asterisk">*</span>
                                                    </label>
                                                    <input type="email" value="" name="EMAIL" class="required email"
                                                           id="mce-EMAIL">
                                                </div>
                                                <div class="mc-field-group">
                                                    <label for="mce-FNAME">First Name </label>
                                                    <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                                                </div>
                                                <div class="mc-field-group">
                                                    <label for="mce-LNAME">Last Name </label>
                                                    <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                                                </div>
                                                <div id="mce-responses" class="clear">
                                                    <div class="response" id="mce-error-response"
                                                         style="display:none"></div>
                                                    <div class="response" id="mce-success-response"
                                                         style="display:none"></div>
                                                </div>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                                    <input type="text" name="b_f52c65a38b2628333621f8fc4_36b62e2dcc"
                                                           tabindex="-1" value=""></div>
                                                <div class="clear"><input type="submit" value="Subscribe"
                                                                          name="subscribe" id="mc-embedded-subscribe"
                                                                          class="button"></div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- section end-->
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>
