<?php
/*
 * Template Name: Şubelerimiz
 * Template Post Type: page
 */
get_header();

$koordinatlar = [
    45 => ['lat' => 41.0052, 'lng' => 29.0326],
    46 => ['lat' => 41.0789, 'lng' => 29.0103],
    47 => ['lat' => 40.9917, 'lng' => 29.0248],
    48 => ['lat' => 40.9919, 'lng' => 29.1010],
    49 => ['lat' => 41.0309, 'lng' => 29.1118],
    50 => ['lat' => 39.8973, 'lng' => 32.8714],
    51 => ['lat' => 38.4530, 'lng' => 27.1783],
    52 => ['lat' => 51.7356, 'lng' =>  0.4685],
];

$ofisler = get_posts([
    'post_type'      => 'bayilik',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'meta_key'       => '_bayilik_sira',
    'orderby'        => 'meta_value_num',
    'order'          => 'ASC',
]);

$filtreler = [];
$subeler   = [];

foreach ($ofisler as $i => $ofis) {
    $oid      = $ofis->ID;
    $etiketler = get_the_terms($oid, 'post_tag');
    $slugler  = [];
    $sehir    = '';
    if ($etiketler && !is_wp_error($etiketler)) {
        foreach ($etiketler as $et) {
            $slugler[] = $et->slug;
            if (!$sehir) $sehir = $et->name;
            if (!isset($filtreler[$et->slug])) $filtreler[$et->slug] = $et->name;
        }
    }
    if (!$sehir) $sehir = get_post_meta($oid, '_bayilik_il', true);

    $subeler[] = [
        'id'      => $oid,
        'title'   => get_the_title($oid),
        'sehir'   => $sehir,
        'slugler' => $slugler,
        'adres'   => get_post_meta($oid, '_bayilik_adres', true),
        'tel'     => get_post_meta($oid, '_bayilik_telefon', true),
        'email'   => get_post_meta($oid, '_bayilik_email', true),
        'saat'    => get_post_meta($oid, '_bayilik_calisma_saatleri', true),
        'harita'  => get_post_meta($oid, '_bayilik_harita_url', true),
        'merkez'  => ($i === 0),
        'uk'      => in_array('uk', $slugler, true),
        'lat'     => isset($koordinatlar[$oid]) ? $koordinatlar[$oid]['lat'] : 0,
        'lng'     => isset($koordinatlar[$oid]) ? $koordinatlar[$oid]['lng'] : 0,
    ];
}
?>

<!-- ===== HERO ===== -->
<section class="sb-hero">
    <div class="sb-hero__inner">
        <div class="sb-hero__left">
            <nav class="sb-hero__breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Anasayfa</a>
                <span>›</span>
                <span>Şubelerimiz</span>
            </nav>
            <h1 class="sb-hero__title">Şubelerimiz</h1>
            <p class="sb-hero__desc">İstanbul, Ankara, İzmir ve Birleşik Krallık ofislerimizle size en yakın noktadan hizmet veriyoruz.</p>
        </div>
        <div class="sb-hero__stats">
            <div class="sb-hero__stat">
                <span class="sb-hero__stat-num"><?php echo count($subeler); ?></span>
                <span class="sb-hero__stat-label">Ofis</span>
            </div>
            <div class="sb-hero__stat">
                <span class="sb-hero__stat-num">4</span>
                <span class="sb-hero__stat-label">Şehir</span>
            </div>
            <div class="sb-hero__stat">
                <span class="sb-hero__stat-num">7/24</span>
                <span class="sb-hero__stat-label">Hizmet</span>
            </div>
        </div>
    </div>
</section>

<!-- ===== ANA İÇERİK ===== -->
<main class="sb-main">
    <div class="sb-wrap">

        <!-- Filtre -->
        <div class="sb-filter">
            <button class="sb-filter__btn is-active" data-sehir="all">Tümü</button>
            <?php foreach ($filtreler as $slug => $isim) : ?>
                <button class="sb-filter__btn" data-sehir="<?php echo esc_attr($slug); ?>"><?php echo esc_html($isim); ?></button>
            <?php endforeach; ?>
        </div>

        <!-- Harita + Liste -->
        <div class="sb-layout">
            <div class="sb-layout__map">
                <div id="sb-harita"></div>
            </div>
            <div class="sb-layout__list" id="sb-list">
                <?php foreach ($subeler as $s) : ?>
                <div class="sb-card<?php echo $s['merkez'] ? ' sb-card--merkez' : ''; ?><?php echo $s['uk'] ? ' sb-card--uk' : ''; ?>"
                     data-id="<?php echo $s['id']; ?>"
                     data-lat="<?php echo $s['lat']; ?>"
                     data-lng="<?php echo $s['lng']; ?>"
                     data-sehir="<?php echo esc_attr(implode(' ', $s['slugler'])); ?>"
                     tabindex="0" role="button"
                     aria-label="<?php echo esc_attr($s['title']); ?>">
                    <div class="sb-card__head">
                        <span class="sb-card__city"><?php echo esc_html($s['sehir']); ?></span>
                        <?php if ($s['merkez']) : ?><span class="sb-card__badge">Merkez</span><?php endif; ?>
                        <?php if ($s['uk']) : ?><span class="sb-card__badge sb-card__badge--uk">UK</span><?php endif; ?>
                    </div>
                    <h3 class="sb-card__name"><?php echo esc_html($s['title']); ?></h3>
                    <?php if ($s['adres']) : ?>
                    <p class="sb-card__row">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <?php echo esc_html($s['adres']); ?>
                    </p>
                    <?php endif; ?>
                    <?php if ($s['tel']) : ?>
                    <p class="sb-card__row">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.21 12.9a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.11 2h3a2 2 0 0 1 2 1.72c.13.96.37 1.9.72 2.81a2 2 0 0 1-.45 2.11L7.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.35 1.85.59 2.81.72A2 2 0 0 1 22 16.92z"/></svg>
                        <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $s['tel'])); ?>"><?php echo esc_html($s['tel']); ?></a>
                    </p>
                    <?php endif; ?>
                    <?php if ($s['email']) : ?>
                    <p class="sb-card__row">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        <a href="mailto:<?php echo esc_attr($s['email']); ?>"><?php echo esc_html($s['email']); ?></a>
                    </p>
                    <?php endif; ?>
                    <?php if ($s['saat']) : ?>
                    <p class="sb-card__row">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        <?php echo esc_html($s['saat']); ?>
                    </p>
                    <?php endif; ?>
                    <?php if ($s['harita']) : ?>
                    <a href="<?php echo esc_url($s['harita']); ?>" target="_blank" rel="noopener noreferrer" class="sb-card__link">
                        Haritada Gör
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div><!-- /.sb-wrap -->
</main>

<!-- ===== CTA ===== -->
<section class="sb-cta">
    <div class="sb-cta__inner">
        <div>
            <h2 class="sb-cta__title">Size En Yakın Şubemizden Hemen Teklif Alın</h2>
            <p class="sb-cta__desc">7/24 destek hattımız ve online teklif sistemimizle her yerden hizmetinizdeyiz.</p>
        </div>
        <a href="<?php echo esc_url(home_url('/teklif-al/')); ?>" class="sb-cta__btn">
            Hemen Teklif Al
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
    </div>
</section>

<!-- Leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
(function(){
    var subeler = <?php echo json_encode(array_values($subeler), JSON_UNESCAPED_UNICODE); ?>;

    var trSubeler = subeler.filter(function(s){ return !s.uk; });
    var centerLat = 39.5, centerLng = 32.0, zoom = 6;
    if (trSubeler.length) {
        var lats = trSubeler.map(function(s){ return s.lat; });
        var lngs = trSubeler.map(function(s){ return s.lng; });
        centerLat = (Math.min.apply(null,lats) + Math.max.apply(null,lats)) / 2;
        centerLng = (Math.min.apply(null,lngs) + Math.max.apply(null,lngs)) / 2;
    }

    var map = L.map('sb-harita', { zoomControl: true, scrollWheelZoom: false })
               .setView([centerLat, centerLng], zoom);

    L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> &copy; <a href="https://carto.com/">CARTO</a>',
        maxZoom: 19
    }).addTo(map);

    function makeIcon(active) {
        return L.divIcon({
            className: '',
            html: '<div class="sb-pin' + (active ? ' sb-pin--active' : '') + '"></div>',
            iconSize: [16, 16], iconAnchor: [8, 8], popupAnchor: [0, -12]
        });
    }

    var markers = {}, activeId = null;

    subeler.forEach(function(s) {
        if (!s.lat || !s.lng) return;
        var m = L.marker([s.lat, s.lng], { icon: makeIcon(false) }).addTo(map);
        var popup = '<div class="sb-popup"><strong>' + s.title + '</strong>';
        if (s.adres) popup += '<br>' + s.adres;
        if (s.tel)   popup += '<br><a href="tel:' + s.tel.replace(/\s/g,'') + '">' + s.tel + '</a>';
        popup += '</div>';
        m.bindPopup(popup, { maxWidth: 240 });
        m.on('click', function(){ activate(s.id); });
        markers[s.id] = m;
    });

    function activate(id) {
        if (activeId && markers[activeId]) markers[activeId].setIcon(makeIcon(false));
        document.querySelectorAll('.sb-card').forEach(function(el){ el.classList.remove('is-active'); });
        activeId = id;
        if (markers[id]) { markers[id].setIcon(makeIcon(true)); markers[id].openPopup(); }
        var card = document.querySelector('.sb-card[data-id="' + id + '"]');
        if (card) { card.classList.add('is-active'); card.scrollIntoView({ behavior:'smooth', block:'nearest' }); }
    }

    document.querySelectorAll('.sb-card').forEach(function(card) {
        function go() {
            var id = parseInt(card.dataset.id);
            activate(id);
            map.flyTo([parseFloat(card.dataset.lat), parseFloat(card.dataset.lng)], 14, { duration: 1 });
        }
        card.addEventListener('click', go);
        card.addEventListener('keydown', function(e){ if (e.key==='Enter'||e.key===' '){ e.preventDefault(); go(); }});
    });

    if (subeler.length) activate(subeler[0].id);

    document.querySelectorAll('.sb-filter__btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.sb-filter__btn').forEach(function(b){ b.classList.remove('is-active'); });
            btn.classList.add('is-active');
            var sehir = btn.dataset.sehir;
            document.querySelectorAll('.sb-card').forEach(function(card) {
                if (sehir === 'all') {
                    card.style.display = '';
                } else {
                    var slugs = card.dataset.sehir ? card.dataset.sehir.split(' ') : [];
                    card.style.display = slugs.indexOf(sehir) > -1 ? '' : 'none';
                }
            });
        });
    });
})();
</script>

<!-- CSS -->
<style>
/* ===== HERO ===== */
.sb-hero {
    background: linear-gradient(135deg, #74826A 0%, #74826A 40%, #93A182 65%, #C2D0B0 85%, #DCE9CD 100%);
    padding: 56px 0 52px;
    font-family: 'Manrope', sans-serif;
}
.sb-hero__inner {
    max-width: 1340px;
    margin: 0 auto;
    padding: 0 48px;
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 40px;
}
.sb-hero__breadcrumb {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 13px;
    color: rgba(255,255,255,.7);
    margin-bottom: 20px;
}
.sb-hero__breadcrumb a { color: rgba(255,255,255,.7); text-decoration: none; }
.sb-hero__breadcrumb a:hover { color: #fff; }
.sb-hero__breadcrumb span { color: rgba(255,255,255,.5); }
.sb-hero__title {
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 800;
    color: #fff;
    letter-spacing: -.03em;
    line-height: 1.1;
    margin: 0 0 16px;
}
.sb-hero__desc {
    font-size: 16px;
    color: rgba(255,255,255,.8);
    line-height: 1.65;
    margin: 0;
    max-width: 420px;
}
.sb-hero__stats {
    display: flex;
    gap: 40px;
    flex-shrink: 0;
}
.sb-hero__stat {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 4px;
}
.sb-hero__stat-num {
    font-size: 2rem;
    font-weight: 800;
    color: #fff;
    letter-spacing: -.03em;
    line-height: 1;
}
.sb-hero__stat-label {
    font-size: 12px;
    font-weight: 600;
    color: rgba(255,255,255,.65);
    text-transform: uppercase;
    letter-spacing: .06em;
}

/* ===== ANA ===== */
.sb-main {
    background: #F3F4EF;
    padding: 48px 0 64px;
    font-family: 'Manrope', sans-serif;
}
.sb-wrap {
    max-width: 1340px;
    margin: 0 auto;
    padding: 0 48px;
}

/* ===== FİLTRE ===== */
.sb-filter {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 28px;
}
.sb-filter__btn {
    padding: 9px 22px;
    border-radius: 999px;
    border: 1.5px solid #D6D9CF;
    background: #fff;
    color: #6A6E60;
    font-family: 'Manrope', sans-serif;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: all .18s;
    line-height: 1;
}
.sb-filter__btn:hover { border-color: #77846A; color: #3f4a37; }
.sb-filter__btn.is-active { background: #3f4a37; border-color: #3f4a37; color: #fff; }

/* ===== LAYOUT ===== */
.sb-layout {
    display: grid;
    grid-template-columns: 1fr 380px;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid #e2e5dd;
    min-height: 520px;
}
.sb-layout__map { position: relative; }
#sb-harita {
    width: 100%;
    height: 100%;
    min-height: 520px;
    background: #eef0eb;
}
.sb-layout__list {
    background: #fff;
    overflow-y: auto;
    max-height: 520px;
    border-left: 1px solid #e2e5dd;
}

/* ===== KART ===== */
.sb-card {
    padding: 18px 22px;
    border-bottom: 1px solid #f0f1ed;
    cursor: pointer;
    transition: background .15s;
    outline: none;
    font-family: 'Manrope', sans-serif;
}
.sb-card:last-child { border-bottom: none; }
.sb-card:hover { background: #f7f8f5; }
.sb-card.is-active { background: #f3f4ef; border-left: 3px solid #77846A; padding-left: 19px; }
.sb-card__head {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 5px;
}
.sb-card__city {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
    color: #77846A;
}
.sb-card__badge {
    font-size: 10px;
    font-weight: 700;
    padding: 2px 8px;
    border-radius: 999px;
    background: #3f4a37;
    color: #fff;
    letter-spacing: .04em;
}
.sb-card__badge--uk { background: #4a5568; }
.sb-card__name {
    font-size: 15px;
    font-weight: 700;
    color: #1a1a1a;
    margin: 0 0 8px;
    line-height: 1.3;
}
.sb-card__row {
    display: flex;
    align-items: flex-start;
    gap: 7px;
    font-size: 12.5px;
    color: #5a6352;
    margin: 0 0 5px;
    line-height: 1.45;
}
.sb-card__row svg { flex-shrink: 0; margin-top: 2px; color: #aab99a; }
.sb-card__row a { color: #5a6352; text-decoration: none; }
.sb-card__row a:hover { color: #77846A; text-decoration: underline; }
.sb-card__link {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-size: 12px;
    font-weight: 700;
    color: #77846A;
    text-decoration: none;
    margin-top: 8px;
}
.sb-card__link:hover { color: #3f4a37; }

/* ===== PIN ===== */
.sb-pin {
    width: 14px; height: 14px;
    border-radius: 50%;
    background: #77846A;
    border: 2.5px solid #fff;
    box-shadow: 0 1px 4px rgba(0,0,0,.25);
    transition: transform .18s, background .18s;
}
.sb-pin--active {
    width: 20px; height: 20px;
    background: #3f4a37;
    border: 3px solid #fff;
    box-shadow: 0 2px 8px rgba(0,0,0,.35);
    margin-left: -3px; margin-top: -3px;
}

/* ===== POPUP ===== */
.sb-popup { font-family: 'Manrope', sans-serif; font-size: 13px; color: #2d3328; line-height: 1.5; }
.sb-popup strong { display: block; font-size: 14px; margin-bottom: 3px; color: #3f4a37; }
.sb-popup a { color: #77846A; text-decoration: none; }

/* ===== CTA ===== */
.sb-cta {
    background: #1a1f16;
    padding: 64px 0;
    font-family: 'Manrope', sans-serif;
}
.sb-cta__inner {
    max-width: 1340px;
    margin: 0 auto;
    padding: 0 48px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 32px;
    flex-wrap: wrap;
}
.sb-cta__title {
    font-size: 28px;
    font-weight: 800;
    color: #fff;
    margin: 0 0 8px;
    letter-spacing: -.02em;
}
.sb-cta__desc { font-size: 15px; color: #AAB99A; margin: 0; }
.sb-cta__btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #77846A;
    color: #fff;
    padding: 14px 28px;
    border-radius: 999px;
    font-family: 'Manrope', sans-serif;
    font-size: 15px;
    font-weight: 700;
    text-decoration: none;
    white-space: nowrap;
    transition: background .2s;
}
.sb-cta__btn:hover { background: #5A6650; }

/* ===== MOBİL ===== */
@media (max-width: 900px) {
    .sb-hero__inner { flex-direction: column; align-items: flex-start; gap: 28px; padding: 0 24px; }
    .sb-hero__stats { gap: 24px; }
    .sb-hero__title { font-size: 2rem; letter-spacing: normal; }
    .sb-hero__desc { font-size: 15px; }
    .sb-wrap { padding: 0 20px; }
    .sb-layout { grid-template-columns: 1fr; min-height: auto; }
    #sb-harita { min-height: 280px; }
    .sb-layout__list { max-height: 360px; border-left: none; border-top: 1px solid #e2e5dd; }
    .sb-cta__inner { flex-direction: column; align-items: flex-start; padding: 0 24px; }
    .sb-cta__title { font-size: 22px; }
}
</style>

<?php get_footer(); ?>
