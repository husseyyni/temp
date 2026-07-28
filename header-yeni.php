<?php
/**
 * Truvista header — Çeviri Sepeti
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

        <nav class="tv-nav-menu" id="tv-nav-menu" aria-label="Ana menü">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Anasayfa</a></li>
                <li><a href="<?php echo esc_url(home_url('/hakkimizda/')); ?>">Hakkımızda</a></li>
                <li><a href="<?php echo esc_url(home_url('/hizmetler/')); ?>">Hizmetler</a></li>
                <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a></li>
                <li><a href="<?php echo esc_url(home_url('/iletisim/')); ?>">İletişim</a></li>
            </ul>
        </nav>

        <div class="tv-nav-right">
            <a href="<?php echo esc_url(home_url('/fiyat-hesapla/')); ?>" class="tv-btn tv-btn-header">Fiyat Hesapla</a>
            <button class="tv-nav-toggle" id="tv-nav-toggle" aria-label="Menü" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>

<script>
(function(){
    var t=document.getElementById('tv-nav-toggle'),m=document.getElementById('tv-nav-menu');
    if(t&&m){t.addEventListener('click',function(){var o=m.classList.toggle('open');t.setAttribute('aria-expanded',o);});}
    var h=document.getElementById('tv-site-header');
    window.addEventListener('scroll',function(){if(window.scrollY>20)h.classList.add('scrolled');else h.classList.remove('scrolled');});
})();
</script>
