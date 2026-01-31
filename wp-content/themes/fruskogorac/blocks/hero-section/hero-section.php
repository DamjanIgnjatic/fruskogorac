<?php
/* 
* Block Name: Image
* Post Type: page, post
*/
?>
<?php if (isset($block['data']['previewImage'])): ?>
    <?php do_action('block_image', __FILE__); ?>
<?php else: ?>
    <?php
    // Include helpers
    include get_template_directory() . '/template-parts/base/block-helper.php';

    // Load values and assing defaults
    $title = get_field("title");
    $gallery_image = get_field("gallery_image");
    $gallery_link = get_field("gallery_link");
    ?>
    <section class="section section-hero block <?php echo $className; ?>"
        <?php if ($bgUrl): ?>
        style="background-image: url('<?php echo $bgUrl; ?>');"
        data-desktop-image="<?php echo $bgUrl; ?>"
        <?php endif; ?>
        <?php if ($mobileBgUrl): ?>
        data-mobile-image="<?php echo $mobileBgUrl; ?>"
        <?php endif; ?>>
        <div class="container">
            <div class="title">
                <?php if ($title) : ?>
                    <?php echo $title ?>
                <?php endif; ?>
            </div>



            <?php
            if ($gallery_link):
                $link_url = $gallery_link['url'];
                $link_title = $gallery_link['title'];
                $link_target = $gallery_link['target'] ? $gallery_link['target'] : '_self';
            ?>
                <a class="" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"
                    style="background-image: url('<?php echo $gallery_image["url"]; ?>');">
                    <?php echo esc_html($link_title); ?>
                    <svg width="49" height="15" viewBox="0 0 49 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 6.36377C0.447715 6.36377 0 6.81148 0 7.36377C0 7.91605 0.447715 8.36377 1 8.36377V6.36377ZM48.7071 8.07088C49.0976 7.68035 49.0976 7.04719 48.7071 6.65666L42.3431 0.292702C41.9526 -0.0978227 41.3195 -0.0978227 40.9289 0.292702C40.5384 0.683226 40.5384 1.31639 40.9289 1.70692L46.5858 7.36377L40.9289 13.0206C40.5384 13.4111 40.5384 14.0443 40.9289 14.4348C41.3195 14.8254 41.9526 14.8254 42.3431 14.4348L48.7071 8.07088ZM1 8.36377H48V6.36377H1V8.36377Z" fill="white" fill-opacity="0.5" />
                    </svg>
                </a>
            <?php endif; ?>

        </div>
        </div>
    </section>
<?php endif; ?>