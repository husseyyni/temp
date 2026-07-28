<?php
/**
 * Truvista header — Çeviri Sepeti
 * Orta kısım: 'logo' CPT'den beslenen kesintisiz kayan logo şeridi
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="tv-site-header" id="tv-site-header">
    <div class="tv-wrap tv-nav">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="tv-logo" aria-label="Çeviri Sepeti">
            <span class="tv-logo-mark" aria-hidden="true">
                <svg viewBox="0 0 32 32" width="30" height="30" fill="none">
                    <circle cx="16" cy="16" r="15" fill="rgba(255,255,255,.15)"/>
                    <path d="M16 7c-4 1.5-6 4.5-6 8 0 3 2 5.5 6 6.5 0-3.5.7-6 3.5-9-2 .7-3.5 2-4.2 4.2-.7-2.8 0-5.6.7-9.7z" fill="currentColor"/>
                </svg>
            </span>
            <span class="tv-logo-text">Çeviri Sepeti</span>
        </a>

        <?php
        // ==== Orta: 'logo' CPT'den kayan şerit ====
        $header_logos = [];
        $hlq = new WP_Query([
            'post_type'      => 'logo',
            'post_status'    => 'publish',
            'posts_per_page' => -1,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
            'no_found_rows'  => true,
        ]);
        if ($hlq->have_posts()) {
            while ($hlq->have_posts()) {
                $hlq->the_post();
                if (!has_post_thumbnail()) continue;
                $header_logos[] = [
                    'img' => get_the_post_thumbnail_url(get_the_ID(), 'medium'),
                    'alt' => get_the_title(),
                ];
            }
            wp_reset_postdata();
        }
        ?>
        <?php if (!empty($header_logos)) : ?>
        <div class="tv-header-marquee" aria-label="Kurumsal müşterilerimiz">
            <div class="tv-header-marquee-track">
                <?php
                // İki kez basıyoruz ki kesintisiz döngü olsun
                for ($rep = 0; $rep < 2; $rep++) :
                    foreach ($header_logos as $lg) : ?>
                    <span class="tv-header-logo">
                        <img src="<?php echo esc_url($lg['img']); ?>" alt="<?php echo esc_attr($lg['alt']); ?>" loading="lazy">
                    </span>
                <?php endforeach;
                endfor; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="tv-nav-right">
            <a href="<?php echo esc_url(home_url('/subelerimiz/')); ?>" class="tv-btn tv-btn-header">Şubelerimiz</a>
        </div>
    </div>
</header>

<script>
(function(){
    var h=document.getElementById('tv-site-header');
    if(h){window.addEventListener('scroll',function(){if(window.scrollY>20)h.classList.add('scrolled');else h.classList.remove('scrolled');});}
})();
</script>
