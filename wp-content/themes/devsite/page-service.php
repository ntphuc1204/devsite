<?php
/**
 * Template Name: Service
 */

add_action('wp_enqueue_scripts', function() {
    devsite_enqueue_page_css(['page_service.css']);
});

$service_cards = get_field('service-card'); // ← LẤY DỮ LIỆU ACF
echo '<pre>';
print_r($service_cards);
echo '</pre>';
get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/page_service.css">

<div class="page-service">
    <div class="service-banner">
        <div class="service-banner__content">
            <div class="service-banner__content-title">
                Vulputate quisque ultricies netus nisl nunc aliquam.
            </div>
            <div class="service-banner__content-desc">
                Ultrices quisque platea risus posuere nec et vulputate. Massa arcu turpis non augue. 
                Urna risus scelerisque <br> molestie pulvinar augue id tortor vitae turpis.
            </div>
        </div>

        <div class="service-banner__list">
            <?php if (!empty($service_cards)) : ?>
                <?php foreach ($service_cards as $card): 
                    
                    // xử lý icon
                    $icon_url = '';
                    if (is_array($card['logo'])) {
                        $icon_url = $card['logo']['url'];
                    } else {
                        $icon_url = $card['logo'];
                    }
                ?>
                    <div class="service-banner__card">
                        <div class="service-banner__card-content">
                            <div class="card-content__header">
                                <div class="card-content__logo">
                                    <img src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($card['title']); ?>">
                                </div>
                                <div class="card-content__title">
                                    <?php echo esc_html($card['title']); ?>
                                </div>
                            </div>

                            <div class="card-content__desc">
                                <?php echo esc_html($card['desc']); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>
</div>
