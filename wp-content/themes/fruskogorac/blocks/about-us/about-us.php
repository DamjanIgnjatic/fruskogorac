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
    $title = get_field('title') ?: false;
    ?>
    <section class="section section-about-us block <?php echo $className; ?>"
        <?php if ($bgUrl): ?>
        style="background-image: url('<?php echo $bgUrl; ?>');"
        data-desktop-image="<?php echo $bgUrl; ?>"
        <?php endif; ?>
        <?php if ($mobileBgUrl): ?>
        data-mobile-image="<?php echo $mobileBgUrl; ?>"
        <?php endif; ?>>
        <div class="container">
            <div class="arta section-about-us--wrapper">
                <div>
                    <div class="section-about-us--wrapper-title">
                        <span class="subheading">arta</span>
                        <h2>About us</h2>
                    </div>
                    <p>Always ask for the number of tickets
                        you paid for. the ticket is valid proof of your
                        entry into the mountain beuau area
                    </p>
                    <a href="" class="right-nav"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <foreignObject x="-24" y="-24" width="80" height="80">
                                <div xmlns="http://www.w3.org/1999/xhtml" style="backdrop-filter:blur(12px);clip-path:url(#bgblur_0_2_769_clip_path);height:100%;width:100%"></div>
                            </foreignObject>
                            <g data-figma-bg-blur-radius="24">
                                <rect width="32" height="32" rx="8" fill="white" />
                                <g clip-path="url(#clip1_2_769)">
                                    <path d="M13.9999 22.6663C14.3681 22.6663 14.6666 22.3679 14.6666 21.9997C14.6666 21.6315 14.3681 21.333 13.9999 21.333C13.6317 21.333 13.3333 21.6315 13.3333 21.9997C13.3333 22.3679 13.6317 22.6663 13.9999 22.6663Z" stroke="#020E20" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M21.3334 22.6663C21.7016 22.6663 22.0001 22.3679 22.0001 21.9997C22.0001 21.6315 21.7016 21.333 21.3334 21.333C20.9652 21.333 20.6667 21.6315 20.6667 21.9997C20.6667 22.3679 20.9652 22.6663 21.3334 22.6663Z" stroke="#020E20" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.66675 8.66699H11.3334L13.1201 17.5937C13.181 17.9006 13.348 18.1763 13.5918 18.3725C13.8355 18.5688 14.1405 18.673 14.4534 18.667H20.9334C21.2463 18.673 21.5513 18.5688 21.7951 18.3725C22.0388 18.1763 22.2058 17.9006 22.2667 17.5937L23.3334 12.0003H12.0001" stroke="#020E20" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </g>
                            <defs>
                                <clipPath id="bgblur_0_2_769_clip_path" transform="translate(24 24)">
                                    <rect width="32" height="32" rx="8" />
                                </clipPath>
                                <clipPath id="clip1_2_769">
                                    <rect width="16" height="16" fill="white" transform="translate(8 8)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span>About</span></a>
                </div>
            </div>

        </div>
    </section>
<?php endif; ?>