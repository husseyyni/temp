<?php
/*
 * Template Name: Anasayfa
 * Template Post Type: page
 */
get_header();
?>

    <main>
        <!-- ============================ HERO ============================ -->
        <section class="hero" aria-labelledby="hero-heading">
            <div class="hero-bg" aria-hidden="true">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/eylulceviri-ofis3.jpg" alt="">
                <div class="hero-overlay"></div>
            </div>

            <div class="container hero-inner">
                <div class="hero-content">
                    <h1 id="hero-heading" class="hero-title">
                        <?php echo esc_html(ec_opt('hero_title1', 'Güvenilir Çeviri ve')); ?><br>
                        <?php echo esc_html(ec_opt('hero_title2', 'Akıllı')); ?> <span class="title-accent"><?php echo esc_html(ec_opt('hero_title_accent', 'Teknoloji')); ?></span>
                    </h1>

                    <p class="hero-desc">
                        <?php echo esc_html(ec_opt('hero_desc', "1991'den bu yana 30+ yıllık tecrübemiz, 250+ kadrolu uzmanımız ve 120'den fazla dildeki hizmet ağımızla profesyonel tercüme çözümleri sunuyoruz.")); ?>
                    </p>

                    <a href="<?php echo esc_url(home_url('/hizmetler/')); ?>" class="btn btn-find">
                        Tüm Hizmetleri Gör
                        <span class="find-arrow" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </span>
                    </a>
                    <a href="<?php echo esc_url(home_url('/teklif-al/')); ?>" class="btn btn-find desktop-only">
                        Teklif Al
                        <span class="apply-arrow" aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- ============================ 3 ADIM SÜRECİ ============================ -->
        <div class="container process-cards-wrap">
            <div class="process-cards">

                <!-- Adım 1: Dosya Yükle -->
                <div class="process-card process-card--upload">
                    <span class="process-step-badge" aria-hidden="true">1</span>
                    <div class="process-card__body">
                        <div class="process-card__header">
                            <span class="process-card__icon" aria-hidden="true">
                                <svg viewBox="0 0 32 32" width="24" height="24" fill="none" stroke="#0e5c4a" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 28H8a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h9l7 7v15a2 2 0 0 1-2 2z"/><path d="M17 4v7h7"/><polyline points="16 14 16 22"/><polyline points="13 19 16 22 19 19"/></svg>
                            </span>
                            <h2 class="process-card__title"><?php echo esc_html(ec_opt('step1_title', 'Dosya Yükle')); ?></h2>
                        </div>
                        <div class="hero-drop-zone" id="hero-drop-zone" role="button" tabindex="0"
                             aria-label="Dosya yüklemek için tıklayın veya sürükleyin">
                            <input type="file" id="hero-file-input"
                                   accept=".docx,.xlsx,.pptx,.pdf,.txt,.jpg,.jpeg,.png,.odt,.rtf"
                                   class="hero-file-hidden" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="hero-drop-icon" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
                            <p class="hero-drop-text">Tıkla veya sürükle &amp; bırak</p>
                            <span id="hero-spinner" class="hero-spinner" hidden aria-label="Yükleniyor"></span>
                        </div>
                        <p class="hero-file-status" id="hero-file-status" hidden></p>
                        <p class="process-card__hint"><?php echo esc_html(ec_opt('step1_hint', '.docx .pdf .xlsx .jpg ve 50+ format · Maks. 100 MB')); ?></p>
                    </div>
                </div>

                <!-- Adım 2: Fiyat & Teslimat -->
                <div class="process-card">
                    <span class="process-step-badge" aria-hidden="true">2</span>
                    <div class="process-card__body">
                        <div class="process-card__header">
                            <span class="process-card__icon" aria-hidden="true">
                                <span style="font-size:20px; font-weight:700; color:#0e5c4a; line-height:1;">₺</span>
                            </span>
                            <h2 class="process-card__title"><?php echo esc_html(ec_opt('step2_title', 'Fiyat & Teslimat')); ?></h2>
                        </div>
                        <ul class="process-card__list">
                            <li>
                                <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#0e5c4a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                                <?php echo esc_html(ec_opt('step2_li1', 'Anlık otomatik fiyat hesabı')); ?>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#0e5c4a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                                <?php echo esc_html(ec_opt('step2_li2', 'Standart, ekspres veya acil teslimat')); ?>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="#0e5c4a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                                <?php echo esc_html(ec_opt('step2_li3', '120+ dil, her uzmanlık alanı')); ?>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Adım 3: Çeviriyi Başlat -->
                <div class="process-card process-card--cta">
                    <span class="process-step-badge" aria-hidden="true">3</span>
                    <div class="process-card__body">
                        <div class="process-card__header">
                            <span class="process-card__icon" aria-hidden="true">
                                <svg viewBox="0 0 32 32" width="24" height="24" fill="none" stroke="#0e5c4a" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="16" r="12"/><polyline points="14 12 20 16 14 20"/></svg>
                            </span>
                            <h2 class="process-card__title"><?php echo esc_html(ec_opt('step3_title', 'Çeviriyi Başlat')); ?></h2>
                        </div>
                        <p class="process-card__desc"><?php echo esc_html(ec_opt('step3_desc', 'Teklifi onaylayın, uzman tercümanımız hemen çalışmaya başlasın.')); ?></p>
                    </div>
                </div>

            </div>
        </div>

        <!-- ============================ HAKKIMIZDA ============================ -->
        <section class="about" id="hakkimizda" aria-labelledby="about-heading">
            <span class="about-deco about-deco-scribble" aria-hidden="true">
                <svg viewBox="0 0 60 60" width="60" height="60" fill="none" stroke="#0e5c4a" stroke-width="2" stroke-linecap="round" opacity="0.7">
                    <path d="M8 12 L14 8"/><path d="M20 18 L26 14"/><path d="M14 24 L20 20"/><path d="M30 10 L36 6"/><path d="M40 22 L46 18"/><path d="M50 14 L56 10"/><path d="M22 32 L28 28"/><path d="M36 36 L42 32"/><path d="M48 30 L54 26"/><path d="M10 38 L16 34"/><path d="M28 44 L34 40"/><path d="M44 46 L50 42"/>
                </svg>
            </span>
            <span class="about-deco about-deco-blob" aria-hidden="true"></span>

            <div class="container about-inner">
                <div class="about-media">
                    <figure class="about-image-main">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/eylulceviri-dikey-ofis.jpg" alt="Çeviri Sepeti ofisi" loading="lazy">
                    </figure>
                </div>

                <div class="about-content">
                    <span class="about-tag">
                        <span class="about-tag-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                        </span>
                        <?php echo esc_html(ec_opt('about_tag', 'Hakkımızda')); ?>
                    </span>

                    <h2 id="about-heading" class="about-title">
                        <?php echo nl2br(esc_html(ec_opt('about_title', "1991'den Bu Yana\nTürkiye'nin Lider\nÇeviri Markası"))); ?>
                    </h2>

                    <p class="about-desc">
                        <?php echo wp_kses_post(ec_opt('about_desc', 'Çeviri Sepeti, Cihan Kılıç Aydın tarafından 1991 yılında kurulan, çeviri sektörünün en köklü ve geniş kadrolu bürolarından biridir. Hukuk, finans, teknik, medikal ve resmi belge çevirilerinde uzman ekibimizle kalite ve gizliliği bir arada sunuyoruz.')); ?>
                    </p>

                    <ul class="about-features">
                        <li>
                            <span class="af-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.5" fill="currentColor"/></svg>
                            </span>
                            <span class="af-text">
                                <strong><?php echo esc_html(ec_opt('about_vision_strong', 'Vizyonumuz')); ?></strong>
                                <small><?php echo esc_html(ec_opt('about_vision_small', 'Referans çeviri markası')); ?></small>
                            </span>
                        </li>
                        <li>
                            <span class="af-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                            </span>
                            <span class="af-text">
                                <strong><?php echo esc_html(ec_opt('about_mission_strong', 'Misyonumuz')); ?></strong>
                                <small><?php echo esc_html(ec_opt('about_mission_small', 'Dil engellerini ortadan kaldırmak')); ?></small>
                            </span>
                        </li>
                    </ul>

                    <a href="<?php echo esc_url(home_url('/hakkimizda/')); ?>" class="btn btn-program">
                        <?php echo esc_html(ec_opt('about_btn', 'Daha Fazla')); ?>
                        <span class="prog-arrow" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <!-- ============================ HİZMETLER ============================ -->
        <section class="services" id="hizmetler" aria-labelledby="services-heading">
            <div class="container services-head">
                <span class="services-tag">
                    <span class="services-tag-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7h18M3 12h18M3 17h18"/></svg>
                    </span>
                    <?php echo esc_html(ec_opt('services_tag', 'Hizmetlerimiz')); ?>
                </span>

                <h2 id="services-heading" class="services-title">
                    <?php echo esc_html(ec_opt('services_h2_pre', '120+ Dilde')); ?> <span class="services-title-accent"><?php echo esc_html(ec_opt('services_h2_acc', 'Profesyonel')); ?></span><br>
                    <?php echo esc_html(ec_opt('services_h2_post', 'Çeviri Çözümleri')); ?>
                </h2>

                <p class="services-desc">
                    <?php echo wp_kses_post(ec_opt('services_desc', 'Yazılı belgelerden simultane konferans çevirisine, yeminli tercümeden web yerelleştirmeye kadar her ihtiyacınıza özel hizmet sunuyoruz. 150+ kadrolu, 400+ freelance tercümanımızla.')); ?>
                </p>
            </div>

            <?php
            // Önce öne çıkan hizmetleri çek, sıra numarasına göre sırala
            $featured_query = new WP_Query([
                'post_type'      => 'hizmet',
                'post_status'    => 'publish',
                'posts_per_page' => -1,
                'meta_query'     => [[
                    'key'     => '_hizmet_one_cikan',
                    'value'   => '1',
                    'compare' => '=',
                ]],
                'meta_key'  => '_hizmet_sira',
                'orderby'   => 'meta_value_num',
                'order'     => 'ASC',
            ]);

            // Ardından öne çıkarılmamış hizmetleri çek
            $normal_query = new WP_Query([
                'post_type'      => 'hizmet',
                'post_status'    => 'publish',
                'posts_per_page' => -1,
                'meta_query'     => [
                    'relation' => 'OR',
                    [
                        'key'     => '_hizmet_one_cikan',
                        'value'   => '1',
                        'compare' => '!=',
                    ],
                    [
                        'key'     => '_hizmet_one_cikan',
                        'compare' => 'NOT EXISTS',
                    ],
                ],
                'meta_key'  => '_hizmet_sira',
                'orderby'   => 'meta_value_num',
                'order'     => 'ASC',
            ]);

            // Öne çıkanlar önde olacak şekilde birleştir, max 6 göster
            $hizmet_posts = array_slice(
                array_merge($featured_query->posts, $normal_query->posts),
                0,
                6
            );
            wp_reset_postdata();
            ?>

            <div class="container">
                <ul class="service-grid" aria-label="Sunduğumuz hizmetler">
                    <?php if ( ! empty($hizmet_posts) ) : ?>
                        <?php foreach ( $hizmet_posts as $hizmet ) :
                            $hid          = $hizmet->ID;
                            $manset       = get_post_meta($hid, '_hizmet_manset_baslik', true);
                            $title        = $manset ?: get_the_title($hid);
                            $aciklama     = get_post_meta($hid, '_hizmet_kisa_aciklama', true);
                            $text       = $aciklama ?: wp_trim_words(get_post_field('post_excerpt', $hid), 30, '…');
                            $cta_link   = get_post_meta($hid, '_hizmet_cta_link', true) ?: get_permalink($hid);
                            $cta_metin  = get_post_meta($hid, '_hizmet_cta_metin', true) ?: 'Detaylı Bilgi';
                            $ikon_svg   = get_post_meta($hid, '_hizmet_ikon_svg', true);
                            $one_cikan  = get_post_meta($hid, '_hizmet_one_cikan', true) === '1';
                        ?>
                        <li class="service-item<?php echo $one_cikan ? ' service-item--featured' : ''; ?>">
                            <?php if ( has_post_thumbnail($hid) ) : ?>
                            <figure class="service-thumb">
                                <?php echo get_the_post_thumbnail($hid, 'medium', ['loading' => 'lazy', 'alt' => esc_attr($title)]); ?>
                            </figure>
                            <?php elseif ( $ikon_svg ) : ?>
                            <figure class="service-thumb service-thumb--icon">
                                <span class="service-icon" aria-hidden="true">
                                    <?php echo wp_kses($ikon_svg, eylulceviri_allowed_svg_tags()); ?>
                                </span>
                            </figure>
                            <?php endif; ?>
                            <div class="service-body">
                                <?php if ( $one_cikan ) : ?>
                                <span class="service-badge">Öne Çıkan</span>
                                <?php endif; ?>
                                <h3 class="service-name"><?php echo esc_html($title); ?></h3>
                                <?php if ( $text ) : ?>
                                <p class="service-text"><?php echo wp_kses_post($text); ?></p>
                                <?php endif; ?>
                                <a href="<?php echo esc_url($cta_link); ?>" class="service-link">
                                    <?php echo esc_html($cta_metin); ?>
                                    <span aria-hidden="true">
                                        <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                    </span>
                                </a>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <!-- Henüz hizmet eklenmemiş; WordPress Yönetici > Hizmetler menüsünden ekleyin. -->
                    <?php endif; ?>
                </ul>

                <?php
                $btn_text = ec_opt('services_btn_text', 'Hizmetleri Gör');
                $btn_url  = ec_opt('services_btn_url', home_url('/hizmetler/'));
                if ( $btn_text ) :
                ?>
                <div class="services-cta-wrap">
                    <a href="<?php echo esc_url($btn_url); ?>" class="btn btn-services-cta">
                        <?php echo esc_html($btn_text); ?>
                        <span class="services-cta-arrow" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </span>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- ============================ NEDEN EYLÜL ÇEVİRİ ============================ -->
        <section class="tuition" aria-labelledby="why-heading">
            <span class="tuition-deco-dots-tr" aria-hidden="true">
                <svg viewBox="0 0 120 120" width="120" height="120" fill="none" stroke="#0e5c4a" stroke-width="1.4" opacity="0.35">
                    <circle cx="60" cy="60" r="58"/>
                    <circle cx="60" cy="60" r="48" stroke-dasharray="2 6"/>
                    <circle cx="60" cy="60" r="38" stroke-dasharray="1 5"/>
                    <circle cx="60" cy="60" r="28"/>
                </svg>
            </span>
            <div class="container tuition-inner">
                <div class="tuition-intro">
                    <span class="tuition-tag">
                        <span class="tuition-tag-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 L15 9 L22 9 L17 14 L19 22 L12 18 L5 22 L7 14 L2 9 L9 9 Z"/></svg>
                        </span>
                        <?php echo esc_html(ec_opt('why_tag', 'Neden Biz?')); ?>
                    </span>

                    <h2 id="why-heading" class="tuition-title">
                        <?php echo esc_html(ec_opt('why_title1', 'Çeviride Kalite, Hız ve')); ?><br>
                        <?php echo esc_html(ec_opt('why_title2', 'Güven Bir Arada')); ?>
                    </h2>

                    <p class="tuition-desc">
                        <?php echo wp_kses_post(ec_opt('why_desc', '30+ yıllık tecrübemiz, 150 kadrolu uzman ve 400+ freelance tercümanımızla her sektöre özel çözüm üretiyoruz. Belgeniz ister acil, ister uzmanlık gerektirsin — biz hazırız.')); ?>
                    </p>

                    <a href="<?php echo esc_url(home_url('/teklif-al/')); ?>" class="btn btn-plans">
                        <?php echo esc_html(ec_opt('why_btn', 'Hemen Teklif Al')); ?>
                        <span class="plans-arrow" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </span>
                    </a>
                </div>

                <div class="tuition-panel">
                    <div class="tuition-col">
                        <h3 class="tuition-col-title"><?php echo esc_html(ec_opt('why_col1_h3', '7/24 Acil Tercüme')); ?></h3>

                        <h4 class="tuition-sub"><?php echo esc_html(ec_opt('why_col1_sub1', 'Zamanla Yarışın')); ?></h4>
                        <ul class="tuition-list">
                            <li>
                                <span class="tl-check" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                </span>
                                <?php echo esc_html(ec_opt('why_col1_li1', '7 gün 24 saat erişilebilir destek')); ?>
                            </li>
                            <li>
                                <span class="tl-check" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                </span>
                                <?php echo esc_html(ec_opt('why_col1_li2', 'Yeminli & teknik belgelerde hızlı çözüm')); ?>
                            </li>
                        </ul>

                        <h4 class="tuition-sub"><?php echo esc_html(ec_opt('why_col1_sub2', 'Garantili Sonuç')); ?></h4>
                        <ul class="tuition-list">
                            <li>
                                <span class="tl-check" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                </span>
                                <?php echo esc_html(ec_opt('why_col1_li3', 'Gizlilik ve hatasızlık garantisi')); ?>
                            </li>
                            <li>
                                <span class="tl-check" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                </span>
                                <?php echo esc_html(ec_opt('why_col1_li4', 'Zamanında teslim taahhüdü')); ?>
                            </li>
                        </ul>
                    </div>

                    <div class="tuition-col">
                        <h3 class="tuition-col-title"><?php echo esc_html(ec_opt('why_col2_h3', 'Teknolojik Altyapı')); ?></h3>

                        <h4 class="tuition-sub"><?php echo esc_html(ec_opt('why_col2_sub1', 'CAT Tools & Terim Bankası')); ?></h4>
                        <ul class="tuition-list">
                            <li>
                                <span class="tl-check" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                </span>
                                <?php echo esc_html(ec_opt('why_col2_li1', 'Tutarlı çeviri süreçleri')); ?>
                            </li>
                            <li>
                                <span class="tl-check" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                </span>
                                <?php echo esc_html(ec_opt('why_col2_li2', 'AI destekli kalite kontrol')); ?>
                            </li>
                        </ul>

                        <h4 class="tuition-sub"><?php echo esc_html(ec_opt('why_col2_sub2', 'Online Proje Takibi')); ?></h4>
                        <ul class="tuition-list">
                            <li>
                                <span class="tl-check" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                </span>
                                <?php echo esc_html(ec_opt('why_col2_li3', 'Proje yöneticisi ile anlık iletişim')); ?>
                            </li>
                            <li>
                                <span class="tl-check" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                </span>
                                <?php echo esc_html(ec_opt('why_col2_li4', 'Adım adım süreç şeffaflığı')); ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================ MÜŞTERİ YORUMLARI ============================ -->
        <section class="reviews" aria-labelledby="reviews-heading">
            <div class="container reviews-head">
                <span class="reviews-tag">
                    <span class="reviews-tag-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    </span>
                    <?php echo esc_html(ec_opt('reviews_tag', 'Müşteri Yorumları')); ?>
                </span>
                <h2 id="reviews-heading" class="reviews-title">
                    <?php echo esc_html(ec_opt('reviews_title1', 'Bizimle Çalışan')); ?> <span class="reviews-accent"><?php echo esc_html(ec_opt('reviews_title_acc', 'Müşterilerimiz')); ?></span>
                </h2>
                <p class="reviews-desc">
                    <?php echo wp_kses_post(ec_opt('reviews_desc', '30+ yıllık tecrübemizle Türkiye\'nin önde gelen markalarına çeviri ve danışmanlık hizmeti sunuyoruz.')); ?>
                </p>
            </div>

            <div class="container">
                <div class="rsl-wrap">

                    <!-- Önceki butonu -->
                    <button class="rsl-btn rsl-btn--prev" id="rsl-prev" aria-label="Önceki yorumlar">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
                    </button>

                    <!-- Slider alanı -->
                    <div class="rsl-viewport" id="rsl-viewport">
                        <ul class="rsl-track" id="rsl-track">

                            <?php
                            $reviews_default = json_encode([
                                [
                                    'avatar' => 'https://randomuser.me/api/portraits/women/44.jpg',
                                    'name'   => 'Kate Davis',
                                    'role'   => 'Dış Ticaret Müdürü',
                                    'stars'  => 5,
                                    'text'   => '"Teknik belgelerimiz farklı dillere sorunsuz aktarıldı. Süreç çok profesyoneldi ve teslimat zamanında oldu."',
                                ],
                                [
                                    'avatar' => 'https://randomuser.me/api/portraits/men/32.jpg',
                                    'name'   => 'Martin Kazlauskas',
                                    'role'   => 'Pazarlama Direktörü',
                                    'stars'  => 5,
                                    'text'   => '"Web sitemizin çeviri süreci hızlı ve SEO uyumlu tamamlandı. Kültürel adaptasyon mükemmeldi."',
                                ],
                                [
                                    'avatar' => 'https://randomuser.me/api/portraits/men/36.jpg',
                                    'name'   => 'Sanjay Sharma',
                                    'role'   => 'İK Uzmanı',
                                    'stars'  => 5,
                                    'text'   => '"Yeminli çeviri için en doğru adres. Belgelerimiz eksiksiz teslim edildi, vize sürecimiz çok kolaylaştı."',
                                ],
                                [
                                    'avatar' => 'https://randomuser.me/api/portraits/women/68.jpg',
                                    'name'   => 'Tawanna Afumba',
                                    'role'   => 'Kurumsal İletişim Uzmanı',
                                    'stars'  => 5,
                                    'text'   => '"Kurumsal sunumlarımızın çevirisinde format ve tasarım birebir korundu. Masaüstü yayıncılık harika."',
                                ],
                                [
                                    'avatar' => 'https://randomuser.me/api/portraits/men/22.jpg',
                                    'name'   => 'Larry King',
                                    'role'   => 'Proje Yöneticisi',
                                    'stars'  => 5,
                                    'text'   => '"Simultane çeviri hizmetleri toplantılarımızı çok kolaylaştırdı. Ekip profesyonel ve deneyimli."',
                                ],
                                [
                                    'avatar' => 'https://randomuser.me/api/portraits/women/90.jpg',
                                    'name'   => 'Fatima Mohamed',
                                    'role'   => 'Finans Direktörü',
                                    'stars'  => 5,
                                    'text'   => '"Finansal rapor çevirilerinde terim tutarlılığı çok önemli. Çeviri Sepeti bu konuda mükemmel bir iş çıkarıyor."',
                                ],
                            ]);
                            $reviews = json_decode(ec_opt('reviews_json', $reviews_default), true) ?: [];
                            foreach ($reviews as $r) :
                                $stars_label = intval($r['stars']) . ' yıldız';
                                $stars_html  = str_repeat('★', intval($r['stars']));
                            ?>
                            <li class="rsl-card">
                                <div class="rsl-avatar">
                                    <img src="<?php echo esc_url($r['avatar']); ?>" alt="<?php echo esc_attr($r['name']); ?>" loading="lazy">
                                </div>
                                <strong class="rsl-name"><?php echo esc_html($r['name']); ?></strong>
                                <span class="rsl-role"><?php echo esc_html($r['role']); ?></span>
                                <div class="rsl-stars" aria-label="<?php echo esc_attr($stars_label); ?>"><?php echo esc_html($stars_html); ?></div>
                                <p class="rsl-text"><?php echo esc_html($r['text']); ?></p>
                            </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>

                    <!-- Sonraki butonu -->
                    <button class="rsl-btn rsl-btn--next" id="rsl-next" aria-label="Sonraki yorumlar">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                    </button>

                </div>

                <!-- Nokta navigasyon -->
                <div class="rsl-dots" id="rsl-dots" role="tablist" aria-label="Yorum sayfaları"></div>
            </div>
        </section>

        <!-- ============================ DİL BAYRAKLARI ============================ -->
        <section class="flag-marquee" aria-label="Hizmet dillerimiz">
            <div class="container flag-marquee__head">
                <span class="flag-marquee__tag">
                    <span class="flag-marquee__tag-line" aria-hidden="true"></span>
                    Hizmet Dillerimiz
                    <span class="flag-marquee__tag-line" aria-hidden="true"></span>
                </span>
                <h2 class="flag-marquee__title">120+ Dilde Profesyonel Çeviri</h2>
                <p class="flag-marquee__desc">Dünya dillerinin tamamında uzman mütercim kadromuzla hizmet veriyoruz.</p>
            </div>

            <?php
            // Satır 1 → soldan sağa
            $row1 = [
                ['🇬🇧','İngilizce'], ['🇩🇪','Almanca'], ['🇫🇷','Fransızca'], ['🇸🇦','Arapça'],
                ['🇷🇺','Rusça'], ['🇨🇳','Çince'], ['🇯🇵','Japonca'], ['🇪🇸','İspanyolca'],
                ['🇮🇹','İtalyanca'], ['🇵🇹','Portekizce'], ['🇰🇷','Korece'], ['🇹🇷','Türkçe'],
            ];
            // Satır 2 → sağdan sola
            $row2 = [
                ['🇳🇱','Flemenkçe'], ['🇵🇱','Lehçe'], ['🇬🇷','Yunanca'], ['🇦🇿','Azerice'],
                ['🇺🇦','Ukraynaca'], ['🇮🇷','Farsça'], ['🇮🇱','İbranice'], ['🇸🇪','İsveççe'],
                ['🇳🇴','Norveççe'], ['🇩🇰','Danca'], ['🇷🇴','Romence'], ['🇧🇬','Bulgarca'],
            ];
            // Satır 3 → soldan sağa
            $row3 = [
                ['🇫🇮','Fince'], ['🇭🇺','Macarca'], ['🇨🇿','Çekçe'], ['🇷🇸','Sırpça'],
                ['🇭🇷','Hırvatça'], ['🇹🇭','Tayca'], ['🇻🇳','Vietnamca'], ['🇮🇳','Hintçe'],
                ['🇬🇪','Gürcüce'], ['🇲🇰','Makedonca'], ['🇸🇰','Slovakça'], ['🇱🇹','Litvanyaca'],
            ];

            function flag_row($items, $dir) {
                $html = '<div class="flag-row flag-row--' . $dir . '"><div class="flag-track">';
                // 2 kopya → sonsuz loop
                for ($i = 0; $i < 2; $i++) {
                    foreach ($items as $item) {
                        $html .= '<span class="flag-badge">'
                               . '<span class="flag-emoji" aria-hidden="true">' . $item[0] . '</span>'
                               . '<span class="flag-name">' . $item[1] . '</span>'
                               . '</span>';
                    }
                }
                $html .= '</div></div>';
                return $html;
            }
            echo flag_row($row1, 'ltr');
            echo flag_row($row2, 'rtl');
            echo flag_row($row3, 'ltr');
            ?>
        </section>

        <!-- ============================ KURUMSAL MÜŞTERİLERİMİZ ============================ -->
        <section class="partners" aria-labelledby="partners-heading">
            <div class="container partners-inner">
                <div class="partners-intro">
                    <span class="p-tag">
                        <span class="p-tag-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </span>
                        Kurumsal Müşterilerimiz
                    </span>

                    <h2 id="partners-heading" class="p-title">
                        Türkiye'nin lider markaları<br>
                        Çeviri Sepeti'ye güveniyor
                    </h2>

                    <a href="<?php echo esc_url(home_url('/fiyat-hesapla/')); ?>" class="btn btn-start">
                        Sizde Aramıza Katılın
                        <span class="start-arrow" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </span>
                    </a>
                </div>

                <div class="partners-media">
                    <span class="p-deco-circle" aria-hidden="true"></span>
                    <span class="p-deco-dots" aria-hidden="true">
                        <svg viewBox="0 0 90 90" width="90" height="90"><g fill="#0e5c4a" opacity="0.45"><circle cx="6" cy="6" r="2"/><circle cx="18" cy="6" r="2"/><circle cx="30" cy="6" r="2"/><circle cx="42" cy="6" r="2"/><circle cx="54" cy="6" r="2"/><circle cx="66" cy="6" r="2"/><circle cx="78" cy="6" r="2"/><circle cx="6" cy="18" r="2"/><circle cx="18" cy="18" r="2"/><circle cx="30" cy="18" r="2"/><circle cx="42" cy="18" r="2"/><circle cx="54" cy="18" r="2"/><circle cx="66" cy="18" r="2"/><circle cx="78" cy="18" r="2"/><circle cx="6" cy="30" r="2"/><circle cx="18" cy="30" r="2"/><circle cx="30" cy="30" r="2"/><circle cx="42" cy="30" r="2"/><circle cx="54" cy="30" r="2"/><circle cx="66" cy="30" r="2"/><circle cx="6" cy="42" r="2"/><circle cx="18" cy="42" r="2"/><circle cx="30" cy="42" r="2"/><circle cx="42" cy="42" r="2"/><circle cx="54" cy="42" r="2"/><circle cx="6" cy="54" r="2"/><circle cx="18" cy="54" r="2"/><circle cx="30" cy="54" r="2"/><circle cx="42" cy="54" r="2"/><circle cx="6" cy="66" r="2"/><circle cx="18" cy="66" r="2"/><circle cx="30" cy="66" r="2"/></g></svg>
                    </span>

                    <?php
                    // Logoları topla
                    $logo_items = [];
                    $logo_query = new WP_Query([
                        'post_type'      => 'logo',
                        'post_status'    => 'publish',
                        'posts_per_page' => -1,
                        'orderby'        => 'menu_order',
                        'order'          => 'ASC',
                        'no_found_rows'  => true,
                    ]);
                    if ($logo_query->have_posts()) {
                        while ($logo_query->have_posts()) {
                            $logo_query->the_post();
                            if (!has_post_thumbnail()) continue;
                            $logo_items[] = get_the_ID();
                        }
                        wp_reset_postdata();
                    }

                    // Görünümde her sayfada 6 logo — ok ile sayfalar arası kayar
                    $per_page   = 6;
                    $logo_pages = !empty($logo_items) ? array_chunk($logo_items, $per_page) : [];
                    ?>

                    <?php if (!empty($logo_pages)) : ?>
                    <div class="p-logos-wrap">
                        <div class="p-logos-viewport" id="p-logos-viewport" aria-label="Çalıştığımız markalar">
                            <div class="p-logos-track" id="p-logos-track">
                                <?php foreach ($logo_pages as $page) : ?>
                                <ul class="p-logos-page">
                                    <?php foreach ($page as $logo_id) : ?>
                                    <li class="p-logo">
                                        <?php echo get_the_post_thumbnail($logo_id, 'medium', [
                                            'alt'     => esc_attr(get_the_title($logo_id)),
                                            'loading' => 'lazy',
                                            'class'   => 'p-logo-img',
                                        ]); ?>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <?php if (count($logo_pages) > 1) : ?>
                        <button type="button" class="p-logos-next" id="p-logos-next" aria-label="Diğer logoları göster">
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </button>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <!-- ============================ BLOG ============================ -->
        <section class="blog" id="blog" aria-labelledby="blog-heading">
            <span class="blog-deco-sun" aria-hidden="true"></span>
            <span class="blog-deco-confetti" aria-hidden="true">
                <svg viewBox="0 0 140 100" width="140" height="100" fill="none" stroke="#ffc107" stroke-width="3" stroke-linecap="round" opacity="0.85">
                    <line x1="10" y1="18" x2="18" y2="14"/>
                    <line x1="28" y1="8" x2="36" y2="4"/>
                    <line x1="46" y1="20" x2="54" y2="16"/>
                    <line x1="68" y1="6" x2="76" y2="2"/>
                    <line x1="90" y1="14" x2="98" y2="10"/>
                    <line x1="22" y1="32" x2="30" y2="28"/>
                    <line x1="48" y1="40" x2="56" y2="36"/>
                    <line x1="74" y1="30" x2="82" y2="26"/>
                    <line x1="100" y1="38" x2="108" y2="34"/>
                    <line x1="14" y1="52" x2="22" y2="48"/>
                    <line x1="40" y1="60" x2="48" y2="56"/>
                    <line x1="66" y1="52" x2="74" y2="48"/>
                    <line x1="92" y1="62" x2="100" y2="58"/>
                    <line x1="118" y1="50" x2="126" y2="46"/>
                    <line x1="28" y1="78" x2="36" y2="74"/>
                    <line x1="58" y1="84" x2="66" y2="80"/>
                    <line x1="86" y1="78" x2="94" y2="74"/>
                </svg>
            </span>

            <div class="container blog-head">
                <span class="blog-tag">
                    <span class="blog-tag-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 22V4a2 2 0 0 1 2-2h11l5 5v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2z"/><polyline points="17 2 17 7 22 7"/><line x1="8" y1="13" x2="16" y2="13"/><line x1="8" y1="17" x2="13" y2="17"/></svg>
                    </span>
                    <?php echo esc_html(ec_opt('blog_tag', 'Blog & Haberler')); ?>
                </span>

                <h2 id="blog-heading" class="blog-title">
                    <?php echo esc_html(ec_opt('blog_title1', 'Çeviri Dünyasından')); ?><br>
                    <?php echo esc_html(ec_opt('blog_title2', 'Güncel İçerikler')); ?>
                </h2>
            </div>

            <?php
            $blog_query = new WP_Query([
                'post_type'      => 'post',
                'post_status'    => 'publish',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ]);
            $svg_cal    = '<svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>';
            $svg_user   = '<svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21v-1a6 6 0 0 1 6-6h4a6 6 0 0 1 6 6v1"/></svg>';
            $svg_arrow  = '<svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>';
            $fallback_imgs = [
                get_template_directory_uri() . '/images/blog-1.jpg',
                get_template_directory_uri() . '/images/blog-2.jpg',
                get_template_directory_uri() . '/images/blog-3.jpg',
            ];
            ?>
            <div class="container">
                <ul class="blog-grid" aria-label="Son blog yazıları">
                    <?php if ( $blog_query->have_posts() ) :
                        $i = 0;
                        while ( $blog_query->have_posts() ) : $blog_query->the_post();
                            $permalink  = get_permalink();
                            $title      = get_the_title();
                            $date       = get_the_date('d M Y');
                            $author     = get_the_author();
                            $thumb_url  = get_the_post_thumbnail_url( null, 'medium_large' );
                            if ( ! $thumb_url ) {
                                $thumb_url = $fallback_imgs[ $i % 3 ];
                            }
                    ?>
                    <li class="blog-card">
                        <a href="<?php echo esc_url( $permalink ); ?>" class="blog-thumb">
                            <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php echo esc_attr( $title ); ?>" loading="lazy">
                        </a>
                        <div class="blog-body">
                            <ul class="blog-meta" aria-label="Yazı bilgileri">
                                <li>
                                    <span class="bm-icon" aria-hidden="true"><?php echo $svg_cal; ?></span>
                                    <?php echo esc_html( $date ); ?>
                                </li>
                                <li>
                                    <span class="bm-icon" aria-hidden="true"><?php echo $svg_user; ?></span>
                                    <?php echo esc_html( $author ); ?>
                                </li>
                            </ul>
                            <h3 class="blog-name">
                                <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
                            </h3>
                            <a href="<?php echo esc_url( $permalink ); ?>" class="blog-link">
                                Devamını Oku
                                <span aria-hidden="true"><?php echo $svg_arrow; ?></span>
                            </a>
                        </div>
                    </li>
                    <?php $i++; endwhile; wp_reset_postdata();
                    else : ?>
                    <li class="blog-card" style="grid-column:1/-1;text-align:center;padding:40px;color:var(--color-muted)">
                        Henüz blog yazısı eklenmemiş.
                    </li>
                    <?php endif; ?>
                </ul>

                <div class="blog-cta-wrap">
                    <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="btn btn-blog-cta">
                        Tüm Yazılar
                        <span class="blog-cta-arrow" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <!-- ============================ SIKÇA SORULAN SORULAR (FAQ) ============================ -->
        <section class="faq" id="sss" aria-labelledby="faq-heading">
            <span class="faq-deco-dots" aria-hidden="true">
                <svg viewBox="0 0 100 160" width="100" height="160"><g fill="#0e5c4a" opacity="0.45"><circle cx="8" cy="8" r="2.4"/><circle cx="24" cy="8" r="2.4"/><circle cx="40" cy="8" r="2.4"/><circle cx="56" cy="8" r="2.4"/><circle cx="72" cy="8" r="2.4"/><circle cx="8" cy="24" r="2.4"/><circle cx="24" cy="24" r="2.4"/><circle cx="40" cy="24" r="2.4"/><circle cx="56" cy="24" r="2.4"/><circle cx="72" cy="24" r="2.4"/><circle cx="8" cy="40" r="2.4"/><circle cx="24" cy="40" r="2.4"/><circle cx="40" cy="40" r="2.4"/><circle cx="56" cy="40" r="2.4"/><circle cx="8" cy="56" r="2.4"/><circle cx="24" cy="56" r="2.4"/><circle cx="40" cy="56" r="2.4"/><circle cx="8" cy="72" r="2.4"/><circle cx="24" cy="72" r="2.4"/><circle cx="8" cy="88" r="2.4"/><circle cx="24" cy="88" r="2.4"/><circle cx="8" cy="104" r="2.4"/><circle cx="8" cy="120" r="2.4"/><circle cx="8" cy="136" r="2.4"/></g></svg>
            </span>
            <span class="faq-deco-circle" aria-hidden="true"></span>

            <div class="container faq-head">
                <span class="faq-tag">
                    <span class="faq-tag-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                    </span>
                    <?php echo esc_html(ec_opt('faq_tag', 'Sıkça Sorulan Sorular')); ?>
                </span>

                <h2 id="faq-heading" class="faq-title">
                    <?php echo wp_kses_post(ec_opt('faq_title', 'Aklınızdaki Sorulara<br><span class="faq-title-accent">Hızlı Cevaplar</span>')); ?>
                </h2>

                <p class="faq-desc">
                    Çeviri süreçleri, fiyatlandırma, teslimat ve yeminli çeviri hakkında en çok merak edilen konuları sizin için derledik.
                </p>
            </div>

            <div class="container">
                <?php
                $faqs_default = json_encode([
                    [
                        'icon'     => 'chat',
                        'question' => 'Yeminli çeviri ile noter onaylı çeviri arasındaki fark nedir?',
                        'answer'   => 'Yeminli çeviri, adliyeye bağlı yeminli tercüman tarafından yapılan ve tercümanın imza ve mührü taşıyan resmi bir çeviridir. Noter onaylı çeviri ise yeminli tercümanın imzaladığı belgenin noter tarafından tasdik edilmesidir. Vize başvuruları, diploma denkliği ve resmi evraklar için noter onaylı çeviri gerekebilir.',
                    ],
                    [
                        'icon'     => 'clock',
                        'question' => 'Bir çeviri projesi ne kadar sürede tamamlanır?',
                        'answer'   => 'Süre, belgenin uzunluğu, dil çifti ve alan uzmanlığına göre değişir. Standart bir sayfa (250 kelime) ortalama 1-2 iş gününde teslim edilir. Acil projeler için 7/24 ekibimizle aynı gün teslimat imkanı sunuyoruz. Proje başlangıcında kesin teslim tarihi bildirilir.',
                    ],
                    [
                        'icon'     => 'layers',
                        'question' => 'Hangi dillerde çeviri hizmeti sunuyorsunuz?',
                        'answer'   => '120\'den fazla dilde yazılı ve sözlü çeviri hizmeti sunuyoruz. En çok talep gören diller arasında İngilizce, Almanca, Fransızca, Arapça, Rusça, Çince, Japonca, İspanyolca ve İtalyanca yer alıyor. Nadir dil çiftleri için de geniş freelance ağımızla destek sağlıyoruz.',
                    ],
                    [
                        'icon'     => 'lock',
                        'question' => 'Belgelerimizin gizliliği nasıl sağlanıyor?',
                        'answer'   => 'Tüm projelerde KVKK ve GDPR uyumlu gizlilik protokolleri uyguluyoruz. Tercümanlarımız gizlilik sözleşmesi imzalar, dosya transferleri şifreli kanallar üzerinden yapılır ve proje tamamlandıktan sonra belgeleriniz güvenli bir şekilde arşivlenir veya imha edilir.',
                    ],
                    [
                        'icon'     => 'money',
                        'question' => 'Çeviri fiyatları nasıl belirlenir?',
                        'answer'   => 'Fiyatlandırma; kelime sayısı, dil çifti, alan uzmanlığı (hukuk, tıp, teknik vb.) ve teslimat süresine göre yapılır. Standart çeviri sayfa başına, sözlü çeviri saat/gün bazında, yeminli çeviri ise belge bazında fiyatlandırılır. Detaylı teklif için belgenizi ücretsiz inceleyebiliriz.',
                    ],
                    [
                        'icon'     => 'people',
                        'question' => 'Simultane çeviri için kaç tercüman gerekir?',
                        'answer'   => 'Simultane çeviri yüksek konsantrasyon gerektirdiğinden, tercümanlar 20-30 dakikalık dilimler halinde çalışır. Bu nedenle tek dil çifti için minimum 2 tercüman önerilir. Çok dilli organizasyonlarda ve uzun süreli etkinliklerde ekip sayısı buna göre artırılır.',
                    ],
                ]);

                $icon_svgs = [
                    'chat'   => '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>',
                    'clock'  => '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
                    'layers' => '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>',
                    'lock'   => '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>',
                    'money'  => '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
                    'people' => '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
                ];
                $default_icon_svg = '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>';

                $faqs = json_decode(ec_opt('faq_json', $faqs_default), true) ?: [];

                // Split into two columns
                $col1 = array_slice($faqs, 0, (int) ceil(count($faqs) / 2));
                $col2 = array_slice($faqs, (int) ceil(count($faqs) / 2));

                $faq_index = 1;
                ?>
                <div class="faq-grid">
                    <?php foreach ([$col1, $col2] as $col_items) : ?>
                    <div class="faq-col">
                        <?php foreach ($col_items as $faq) :
                            $faq_id  = 'faq-' . $faq_index;
                            $icon_key = isset($faq['icon']) ? $faq['icon'] : '';
                            $icon_svg = isset($icon_svgs[$icon_key]) ? $icon_svgs[$icon_key] : $default_icon_svg;
                        ?>
                        <div class="faq-item">
                            <button class="faq-question" aria-expanded="false" aria-controls="<?php echo esc_attr($faq_id); ?>">
                                <span class="faq-q-icon" aria-hidden="true">
                                    <?php echo $icon_svg; ?>
                                </span>
                                <span class="faq-q-text"><?php echo esc_html($faq['question']); ?></span>
                                <span class="faq-q-toggle" aria-hidden="true">
                                    <svg class="faq-icon-plus" viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                                    <svg class="faq-icon-minus" viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/></svg>
                                </span>
                            </button>
                            <div class="faq-answer" id="<?php echo esc_attr($faq_id); ?>" hidden>
                                <p><?php echo wp_kses_post($faq['answer']); ?></p>
                            </div>
                        </div>
                        <?php $faq_index++; endforeach; ?>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="faq-cta">
                    <p class="faq-cta-text">Cevabını bulamadığınız bir sorunuz mu var?</p>
                    <a href="<?php echo esc_url(home_url('/teklif-al/')); ?>" class="btn btn-faq-cta">
                        Bize Ulaşın
                        <span class="faq-cta-arrow" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </span>
                    </a>
                </div>
            </div>
        </section>
		
<!-- ============================ BASINDA BİZ SLIDER ============================ -->
        <section class="ec-anasayfa-basin" aria-labelledby="basin-slider-heading">
          <style>
            .ec-anasayfa-basin {
              padding: 40px 0 0px;
              background: #fff;
              overflow: hidden;
            }
            .ec-anasayfa-basin .basin-head {
              text-align: center;
              margin-bottom: 40px;
            }
            .ec-anasayfa-basin .basin-tag {
              display: inline-flex;
              align-items: center;
              gap: 6px;
              background: rgba(14,92,74,0.08);
              color: #0e5c4a;
              font-size: 13px;
              font-weight: 600;
              padding: 6px 14px;
              border-radius: 20px;
              margin-bottom: 16px;
            }
            .ec-anasayfa-basin .basin-heading {
              font-size: 32px;
              font-weight: 800;
              color: #0e5c4a;
              margin: 0 0 10px;
            }
            .ec-anasayfa-basin .basin-desc {
              color: #5a8a78;
              font-size: 15px;
              margin: 0;
            }
            .ec-basin-slider-wrap {
              position: relative;
            }
            .ec-basin-viewport {
              overflow: hidden;
              width: 100%;
            }
            .ec-basin-track {
              display: flex;
              gap: 20px;
              will-change: transform;
            }
            .ec-basin-slide {
              flex: 0 0 calc((100% - 60px) / 4);
              min-width: 0;
              background: #fff;
              border-radius: 16px;
              border: 1px solid rgba(14,92,74,0.08);
              box-shadow: 0 8px 24px rgba(14,92,74,0.06);
              overflow: hidden;
              cursor: pointer;
              transition: box-shadow 0.3s ease, transform 0.3s ease;
            }
            .ec-basin-slide:hover {
              transform: translateY(-6px);
              box-shadow: 0 16px 40px rgba(14,92,74,0.12);
            }
            .ec-basin-slide-img {
              width: 100%;
              aspect-ratio: 9 / 16;
              overflow: hidden;
              position: relative;
            }
            .ec-basin-slide-img img {
              width: 100%;
              height: 100%;
              object-fit: cover;
              transition: transform 0.4s ease;
              display: block;
            }
            .ec-basin-slide:hover .ec-basin-slide-img img {
              transform: scale(1.05);
            }
            .ec-basin-slide-overlay {
              position: absolute;
              inset: 0;
              background: linear-gradient(to bottom, rgba(14,92,74,0.18) 0%, rgba(14,92,74,0.02) 50%, transparent 100%);
              z-index: 1;
              pointer-events: none;
            }
            .ec-basin-slide-link {
              position: absolute;
              top: 10px; right: 10px;
              background: rgba(14,92,74,0.75);
              width: 32px; height: 32px;
              border-radius: 50%;
              display: flex; align-items: center; justify-content: center;
              z-index: 2;
              transition: background 0.3s;
              text-decoration: none;
            }
            .ec-basin-slide-link:hover { background: #a8915a; }
            .ec-basin-slide-link svg { width: 13px; height: 13px; fill: #fff; }
            .ec-basin-btn {
              position: absolute;
              top: 50%; transform: translateY(-50%);
              background: #0e5c4a; border: none; color: #fff;
              width: 44px; height: 44px; border-radius: 50%;
              display: flex; align-items: center; justify-content: center;
              cursor: pointer; z-index: 5;
              transition: background 0.2s, transform 0.2s;
              box-shadow: 0 4px 16px rgba(14,92,74,0.2);
            }
            .ec-basin-btn:hover { background: #a8915a; transform: translateY(-50%) scale(1.08); }
            .ec-basin-btn-prev { left: -22px; }
            .ec-basin-btn-next { right: -22px; }
            .ec-basin-cta { text-align: center; margin-top: 36px; }

            #ec-ana-lightbox {
              display: none; position: fixed; inset: 0;
              background: rgba(0,0,0,0.88); z-index: 99999;
              align-items: center; justify-content: center;
            }
            #ec-ana-lightbox.active { display: flex; }
            #ec-ana-lb-img {
              max-height: 90vh; max-width: 80vw;
              object-fit: contain; border-radius: 8px;
              box-shadow: 0 24px 80px rgba(0,0,0,0.5); display: block;
            }
            .ec-ana-lb-close {
              position: fixed; top: 20px; right: 24px;
              background: none; border: none; color: #fff;
              font-size: 36px; cursor: pointer; opacity: 0.8;
              transition: opacity 0.2s; z-index: 100000;
            }
            .ec-ana-lb-close:hover { opacity: 1; }
            .ec-ana-lb-arrow {
              position: fixed; top: 50%; transform: translateY(-50%);
              background: rgba(255,255,255,0.12); border: none; color: #fff;
              font-size: 28px; width: 52px; height: 52px; border-radius: 50%;
              display: flex; align-items: center; justify-content: center;
              cursor: pointer; transition: background 0.2s; z-index: 100000;
            }
            .ec-ana-lb-arrow:hover { background: rgba(255,255,255,0.25); }
            .ec-ana-lb-prev { left: 20px; }
            .ec-ana-lb-next { right: 20px; }
            .ec-ana-lb-link {
              position: fixed; bottom: 24px; left: 50%; transform: translateX(-50%);
              background: #0e5c4a; color: #fff; text-decoration: none;
              padding: 10px 24px; border-radius: 8px; font-size: 14px; font-weight: 600;
              z-index: 100000; display: none;
            }
            .ec-ana-lb-link.has-link { display: block; }
            .ec-ana-lb-link:hover { background: #a8915a; color: #fff; }
            .ec-ana-lb-counter {
              position: fixed; bottom: 24px; right: 24px;
              color: rgba(255,255,255,0.5); font-size: 13px; z-index: 100000;
            }
            @media (max-width: 900px) {
              .ec-basin-slide { flex: 0 0 calc((100% - 20px) / 2); }
              .ec-basin-btn-prev { left: -10px; }
              .ec-basin-btn-next { right: -10px; }
            }
           @media (max-width: 768px) {
  .ec-anasayfa-basin { padding: 40px 0 30px; }
  .ec-anasayfa-basin .basin-heading { font-size: 24px; }
  .ec-anasayfa-basin .basin-desc { font-size: 13px; }
  .ec-basin-slide { flex: 0 0 100% !important; width: 100% !important; }
  .ec-basin-btn-prev { left: -8px; }
  .ec-basin-btn-next { right: -8px; }
  .ec-basin-btn { width: 36px; height: 36px; }
}
          </style>

          <div class="container">
            <div class="basin-head">
              
              <h2 id="basin-slider-heading" class="basin-heading">Basında Biz</h2>
              <p class="basin-desc">Çeviri Sepeti hakkında medyada yer alan haberler</p>
            </div>

            <div class="ec-basin-slider-wrap">
              <button class="ec-basin-btn ec-basin-btn-prev" id="ec-ana-prev" aria-label="Önceki">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
              </button>

              <div class="ec-basin-viewport">
                <div class="ec-basin-track" id="ec-ana-track">
                  <?php
                  $args = array(
                      'post_type'      => 'basin',
                      'posts_per_page' => -1,
                      'orderby'        => 'menu_order date',
                      'order'          => 'DESC',
                  );
                  if ( function_exists('pll_current_language') ) $args['lang'] = '';
                  $q = new WP_Query($args);
                  if ( $q->have_posts() ) :
                    while ( $q->have_posts() ) : $q->the_post();
                      $img  = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . '/images/placeholder.jpg';
                      $link = get_post_meta(get_the_ID(), '_medical_basin_link', true);
                  ?>
                  <div class="ec-basin-slide"
                       data-img="<?php echo esc_url($img); ?>"
                       data-link="<?php echo esc_url($link); ?>"
                       data-title="<?php the_title_attribute(); ?>">
                    <div class="ec-basin-slide-img">
                      <div class="ec-basin-slide-overlay"></div>
                      <img src="<?php echo esc_url($img); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
                      <?php if ($link) : ?>
                      <a href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener noreferrer"
                         class="ec-basin-slide-link" onclick="event.stopPropagation();" title="Habere git">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z"/></svg>
                      </a>
                      <?php endif; ?>
                    </div>
                  </div>
                  <?php endwhile; wp_reset_postdata();
                  else :
                    echo '<p style="color:#5a8a78;padding:20px;">Henüz haber eklenmemiş.</p>';
                  endif; ?>
                </div>
              </div>

              <button class="ec-basin-btn ec-basin-btn-next" id="ec-ana-next" aria-label="Sonraki">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
              </button>
            </div>

            <div class="ec-basin-cta">
              <a href="<?php echo esc_url(home_url('/basin/')); ?>" class="btn btn-blog-cta">
                Tümünü Gör
                <span aria-hidden="true">
                  <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </span>
              </a>
            </div>
          </div>
        </section>

        <!-- Lightbox -->
        <div id="ec-ana-lightbox" role="dialog" aria-modal="true" aria-label="Görsel büyütme">
          <button class="ec-ana-lb-close" id="ec-ana-lb-close">&times;</button>
          <button class="ec-ana-lb-arrow ec-ana-lb-prev" id="ec-ana-lb-prev">&#8249;</button>
          <img id="ec-ana-lb-img" src="" alt="">
          <button class="ec-ana-lb-arrow ec-ana-lb-next" id="ec-ana-lb-next">&#8250;</button>
          <a href="#" id="ec-ana-lb-link" class="ec-ana-lb-link" target="_blank" rel="noopener noreferrer">Habere Git →</a>
          <span class="ec-ana-lb-counter" id="ec-ana-lb-counter"></span>
        </div>

        <script>
        (function(){
          const track    = document.getElementById('ec-ana-track');
          if (!track) return;
          const viewport = track.parentElement;

          // Orijinal slide'ları al
          const origSlides = Array.from(track.querySelectorAll('.ec-basin-slide'));
          if (!origSlides.length) return;

          // Sonsuz döngü için klonları ekle (başa ve sona)
          origSlides.forEach(function(s){ track.appendChild(s.cloneNode(true)); });
          origSlides.forEach(function(s){ track.appendChild(s.cloneNode(true)); });

          // Tüm slide'lar (orijinal + klonlar)
          const allSlides = Array.from(track.querySelectorAll('.ec-basin-slide'));
          const total     = origSlides.length;
          const gap       = 20;
          let current     = 0;
          let autoTimer;
          let isTransitioning = false;

         function getPerView() {
  return window.innerWidth <= 768 ? 1 : window.innerWidth <= 900 ? 2 : 4;
}

          function getSlideWidth() {
  const pv = getPerView();
  if (pv === 1) return viewport.offsetWidth - 2;
  return (viewport.offsetWidth - gap * (pv - 1)) / pv;
}

          function setPosition(index, animate) {
            const sw = getSlideWidth();
            if (animate) {
              track.style.transition = 'transform 0.5s cubic-bezier(0.165, 0.84, 0.44, 1)';
            } else {
              track.style.transition = 'none';
            }
            track.style.transform = 'translateX(-' + (index * (sw + gap)) + 'px)';
          }

          function goTo(index, animate) {
            current = index;
            setPosition(current, animate !== false);
          }

          // Transition bitti mi kontrol et — sonsuz döngü için sıfırla
          track.addEventListener('transitionend', function(){
            if (current >= total * 2) {
              goTo(current - total * 2, false);
            } else if (current < 0) {
              goTo(current + total * 2, false);
            }
            isTransitioning = false;
          });

          function next() {
            if (isTransitioning) return;
            isTransitioning = true;
            goTo(current + 1, true);
          }
          function prev() {
            if (isTransitioning) return;
            isTransitioning = true;
            goTo(current - 1, true);
          }

          document.getElementById('ec-ana-next').addEventListener('click', function(){ next(); resetAuto(); });
          document.getElementById('ec-ana-prev').addEventListener('click', function(){ prev(); resetAuto(); });

          function startAuto() { autoTimer = setInterval(next, 2000); }
          function resetAuto() { clearInterval(autoTimer); startAuto(); }

          window.addEventListener('resize', function(){ setPosition(current, false); });

          // Başlangıç
          setPosition(0, false);
          startAuto();

          /* ── Lightbox ── */
          const lb      = document.getElementById('ec-ana-lightbox');
          const lbImg   = document.getElementById('ec-ana-lb-img');
          const lbLink  = document.getElementById('ec-ana-lb-link');
          const lbCount = document.getElementById('ec-ana-lb-counter');
          let lbCurrent = 0;

          function lbOpen(i) {
            lbCurrent = ((i % total) + total) % total;
            const s = origSlides[lbCurrent];
            lbImg.src = s.dataset.img;
            lbImg.alt = s.dataset.title || '';
            if (s.dataset.link) {
              lbLink.href = s.dataset.link;
              lbLink.classList.add('has-link');
            } else {
              lbLink.classList.remove('has-link');
            }
            lbCount.textContent = (lbCurrent + 1) + ' / ' + total;
            lb.classList.add('active');
            document.body.style.overflow = 'hidden';
            clearInterval(autoTimer);
          }
          function lbClose() {
            lb.classList.remove('active');
            document.body.style.overflow = '';
            lbImg.src = '';
            startAuto();
          }
          function lbPrev() { lbOpen(lbCurrent - 1); }
          function lbNext() { lbOpen(lbCurrent + 1); }

          // Tüm slide'lara (klonlar dahil) tıklama ekle
          allSlides.forEach(function(s, i){
            s.addEventListener('click', function(){ lbOpen(i); });
          });

          document.getElementById('ec-ana-lb-close').addEventListener('click', lbClose);
          document.getElementById('ec-ana-lb-prev').addEventListener('click', lbPrev);
          document.getElementById('ec-ana-lb-next').addEventListener('click', lbNext);
          lb.addEventListener('click', function(e){ if (e.target === lb) lbClose(); });
          document.addEventListener('keydown', function(e){
            if (!lb.classList.contains('active')) return;
            if (e.key === 'Escape') lbClose();
            if (e.key === 'ArrowLeft') lbPrev();
            if (e.key === 'ArrowRight') lbNext();
          });
        })();
        </script>

        <!-- ============================ İLETİŞİM ============================ -->
        <section class="contact" id="iletisim" aria-labelledby="contact-heading">
            <span class="contact-deco-dots" aria-hidden="true">
                <svg viewBox="0 0 100 160" width="100" height="160"><g fill="#0e5c4a" opacity="0.2"><circle cx="8" cy="8" r="2.4"/><circle cx="24" cy="8" r="2.4"/><circle cx="40" cy="8" r="2.4"/><circle cx="56" cy="8" r="2.4"/><circle cx="72" cy="8" r="2.4"/><circle cx="8" cy="24" r="2.4"/><circle cx="24" cy="24" r="2.4"/><circle cx="40" cy="24" r="2.4"/><circle cx="56" cy="24" r="2.4"/><circle cx="72" cy="24" r="2.4"/><circle cx="8" cy="40" r="2.4"/><circle cx="24" cy="40" r="2.4"/><circle cx="40" cy="40" r="2.4"/><circle cx="56" cy="40" r="2.4"/><circle cx="8" cy="56" r="2.4"/><circle cx="24" cy="56" r="2.4"/><circle cx="40" cy="56" r="2.4"/><circle cx="8" cy="72" r="2.4"/><circle cx="24" cy="72" r="2.4"/><circle cx="8" cy="88" r="2.4"/><circle cx="24" cy="88" r="2.4"/><circle cx="8" cy="104" r="2.4"/><circle cx="8" cy="120" r="2.4"/><circle cx="8" cy="136" r="2.4"/></g></svg>
            </span>
            <span class="contact-deco-circle" aria-hidden="true"></span>

            <div class="container contact-inner">
                <div class="contact-info">
                    <span class="contact-tag">
                        <span class="contact-tag-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.37 1.9.72 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.35 1.85.59 2.81.72A2 2 0 0 1 22 16.92z"/></svg>
                        </span>
                        <?php echo esc_html(ec_opt('contact_tag', 'İletişim')); ?>
                    </span>

                    <h2 id="contact-heading" class="contact-title">
                        <?php echo esc_html(ec_opt('contact_title1', 'Bizimle')); ?><br>
                        <span class="contact-accent"><?php echo esc_html(ec_opt('contact_title_acc', 'İletişime Geçin')); ?></span>
                    </h2>

                    <p class="contact-desc">
                        <?php echo wp_kses_post(ec_opt('contact_desc', 'Çeviri ihtiyaçlarınız için bize ulaşın. Uzman ekibimiz size en kısa sürede dönüş yapacaktır.')); ?>
                    </p>

                    <ul class="contact-details">
                        <?php $phone = ec_opt('contact_phone', '0850 532 1990'); if ( $phone ) : ?>
                        <li>
                            <span class="cd-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.37 1.9.72 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.35 1.85.59 2.81.72A2 2 0 0 1 22 16.92z"/></svg>
                            </span>
                            <div class="cd-text">
                                <strong><?php echo esc_html(ec_opt('contact_label_phone', 'Telefon')); ?></strong>
                                <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $phone)); ?>"><?php echo esc_html($phone); ?></a>
                            </div>
                        </li>
                        <?php endif; ?>
                        <?php $email = ec_opt('contact_email', 'info@eylulceviri.com'); if ( $email ) : ?>
                        <li>
                            <span class="cd-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </span>
                            <div class="cd-text">
                                <strong><?php echo esc_html(ec_opt('contact_label_email', 'E-posta')); ?></strong>
                                <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
                            </div>
                        </li>
                        <?php endif; ?>
                        <?php $address = ec_opt('contact_address', "Koşuyolu Mah. Lambacı Sok.\nAteşoğlu Apt. A Blok No 1/5\nKadıköy / İstanbul"); if ( $address ) : ?>
                        <li>
                            <span class="cd-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </span>
                            <div class="cd-text">
                                <strong><?php echo esc_html(ec_opt('contact_label_address', 'Adres')); ?></strong>
                                <span><?php echo nl2br(esc_html($address)); ?></span>
                            </div>
                        </li>
                        <?php endif; ?>
                        <?php $hours = ec_opt('contact_hours', ''); if ( $hours ) : ?>
                        <li>
                            <span class="cd-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            </span>
                            <div class="cd-text">
                                <strong><?php echo esc_html(ec_opt('contact_label_hours', 'Çalışma Saatleri')); ?></strong>
                                <span><?php echo esc_html($hours); ?></span>
                            </div>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>

                <div class="contact-form-wrap">
                    <div id="anasayfa-form-msg" role="alert" aria-live="polite" hidden></div>
                    <form class="contact-form" aria-label="İletişim formu" novalidate data-kaynak="anasayfa" data-msg-id="anasayfa-form-msg">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contact-name">Ad Soyad</label>
                                <input type="text" id="contact-name" name="name" placeholder="Adınız ve soyadınız" required>
                            </div>
                            <div class="form-group">
                                <label for="contact-email">E-posta</label>
                                <input type="email" id="contact-email" name="email" placeholder="E-posta adresiniz" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contact-phone">Telefon</label>
                                <input type="tel" id="contact-phone" name="phone" placeholder="Telefon numaranız">
                            </div>
                            <div class="form-group">
                                <label for="contact-service">Hizmet Türü</label>
                                <select id="contact-service" name="service">
                                    <option value="" selected>Hizmet seçin</option>
                                    <option value="yazili">Yazılı Çeviri</option>
                                    <option value="sozlu">Sözlü Çeviri</option>
                                    <option value="yeminli">Yeminli Çeviri</option>
                                    <option value="web">Web Sitesi Çevirisi</option>
                                    <option value="diger">Diğer</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-message">Mesajınız</label>
                            <textarea id="contact-message" name="message" rows="5" placeholder="Çeviri ihtiyacınız hakkında kısa bilgi verin..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-contact">
                            Gönder
                            <span class="contact-arrow" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?>
