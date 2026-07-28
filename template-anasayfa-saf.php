<?php
/*
 * Template Name: Anasayfa
 * Template Post Type: page
 */
get_header();
$tpl = get_template_directory_uri();
?>

<main class="tv-main">

    <!-- ============================ HERO ============================ -->
    <section class="tv-hero">
        <div class="tv-wrap">
            <div class="tv-hero-top">
                <div class="tv-hero-top-inner">
                    <p>1991'den bu yana ISO 9001 belgeli, 120+ dilde yeminli ve noter onaylı tercüme hizmeti sunan uzman ekibimizle belgeleriniz güvende.</p>
                    <div class="tv-hero-top-btns">
                        <a href="<?php echo esc_url(home_url('/teklif-al/')); ?>" class="tv-btn tv-btn-dark">Teklif Al</a>
                        <a href="<?php echo esc_url(home_url('/fiyat-hesapla/')); ?>" class="tv-btn tv-btn-ghost">Fiyat Hesapla</a>
                    </div>
                </div>
            </div>
            <div class="tv-hero-btm">
                <h1 class="tv-hero-title"><span class="tv-arrow" aria-hidden="true">&rarr;</span>Güvenilir, Hızlı ve Yeminli <span class="accent">Tercüme</span> Çözümleri</h1>
                <a href="#hakkimizda" class="tv-scroll" aria-label="Aşağı">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><polyline points="19 12 12 19 5 12"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ============================ LOGO ŞERİDİ ============================ -->
    <section class="tv-logos-strip">
        <div class="tv-wrap tv-logos-row">
            <span class="lg">ÖZALTIN</span>
            <span class="lg">UPL</span>
            <span class="lg">DPET</span>
            <span class="lg">Shell</span>
            <span class="lg">EnerjiSA</span>
            <span class="lg">Ziraat</span>
        </div>
    </section>

    <!-- ============================ HAKKIMIZDA ============================ -->
    <section class="tv-sec" id="hakkimizda">
        <div class="tv-wrap tv-about">
            <div class="tv-about-media">
                <div class="ph">[ Ofis / ekip görseli ]</div>
            </div>
            <div class="tv-about-content">
                <span class="tv-eyebrow">Hakkımızda</span>
                <h2>Deneyimle Güçlenen,<br>İnsanla Büyüyen Çeviri</h2>
                <p>Çeviri Sepeti, 1991 yılında kurulan, çeviri sektörünün en köklü ve geniş kadrolu bürolarından biridir. Hukuk, finans, teknik, medikal ve resmi belge çevirilerinde uzman ekibimizle kalite ve gizliliği bir arada sunuyoruz.</p>
                <div class="tv-about-feats">
                    <div class="tv-about-feat">
                        <span class="fi"><svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.5" fill="currentColor"/></svg></span>
                        <span><strong>Vizyonumuz</strong><small>Referans çeviri markası</small></span>
                    </div>
                    <div class="tv-about-feat">
                        <span class="fi"><svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg></span>
                        <span><strong>Misyonumuz</strong><small>Dil engellerini ortadan kaldırmak</small></span>
                    </div>
                </div>
                <a href="<?php echo esc_url(home_url('/hakkimizda/')); ?>" class="tv-btn tv-btn-ghost-dark">Daha Fazla <span class="ar"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></span></a>
            </div>
        </div>
    </section>

    <!-- ============================ İSTATİSTİK ============================ -->
    <section style="padding:20px 0 60px">
        <div class="tv-wrap">
            <div class="tv-stats">
                <div class="tv-stat"><b>%98</b><span>Müşteri memnuniyeti</span></div>
                <div class="tv-stat"><b>120+</b><span>Hizmet dili</span></div>
                <div class="tv-stat"><b>50K+</b><span>Tamamlanan proje</span></div>
            </div>
        </div>
    </section>

    <!-- ============================ HİZMETLER ============================ -->
    <section class="tv-sec" id="hizmetler" style="padding-top:20px">
        <div class="tv-wrap">
            <div class="tv-sol-head">
                <div class="l">
                    <span class="tv-eyebrow">Hizmetlerimiz</span>
                    <h2>Büyümenizi Hızlandıran<br>Çeviri Çözümleri</h2>
                </div>
                <div class="r">Yazılı belgelerden simültane konferans çevirisine, yeminli tercümeden web yerelleştirmeye kadar her ihtiyacınıza özel hizmet sunuyoruz.</div>
            </div>
            <div class="tv-sol-grid">
                <div class="tv-sol-card tv-featured">
                    <div class="tv-sol-ico"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#fff" stroke-width="1.8"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
                    <span class="tv-sol-badge">Öne Çıkan</span>
                    <h3>Yazılı Tercüme</h3>
                    <p>Metin, belge ve dokümanların bir dilden başka bir dile eksiksiz yazılı aktarımı.</p>
                    <a href="<?php echo esc_url(home_url('/hizmetler/')); ?>" class="tv-sol-more"><span class="plus"><svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>Detaylı Bilgi</a>
                </div>
                <div class="tv-sol-card tv-featured">
                    <div class="tv-sol-ico"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#fff" stroke-width="1.8"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/></svg></div>
                    <span class="tv-sol-badge">Öne Çıkan</span>
                    <h3>Sözlü Tercüme</h3>
                    <p>Toplantı, hastane veya resmi kurum ortamlarında anlık sözlü çeviri.</p>
                    <a href="<?php echo esc_url(home_url('/hizmetler/')); ?>" class="tv-sol-more"><span class="plus"><svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>Detaylı Bilgi</a>
                </div>
                <div class="tv-sol-card tv-featured">
                    <div class="tv-sol-ico"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#fff" stroke-width="1.8"><path d="M12 3l8 4v5c0 5-3.5 7.5-8 9-4.5-1.5-8-4-8-9V7z"/></svg></div>
                    <span class="tv-sol-badge">Öne Çıkan</span>
                    <h3>Yeminli & Noter Onaylı</h3>
                    <p>Yeminli tercüman onaylı, noter tasdikli ve apostilli resmi belge çevirileri.</p>
                    <a href="<?php echo esc_url(home_url('/hizmetler/')); ?>" class="tv-sol-more"><span class="plus"><svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>Detaylı Bilgi</a>
                </div>
                <div class="tv-sol-card">
                    <div class="tv-sol-ico"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#fff" stroke-width="1.8"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg></div>
                    <h3>Simültane Tercüme</h3>
                    <p>Konferans ve etkinliklerde eş zamanlı, duraksamasız anlık çeviri.</p>
                    <a href="<?php echo esc_url(home_url('/hizmetler/')); ?>" class="tv-sol-more"><span class="plus"><svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>Detaylı Bilgi</a>
                </div>
                <div class="tv-sol-card">
                    <div class="tv-sol-ico"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#fff" stroke-width="1.8"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></div>
                    <h3>Apostil İşlemleri</h3>
                    <p>Belgelerin yurt dışında hukuken geçerli olması için uluslararası tasdik.</p>
                    <a href="<?php echo esc_url(home_url('/hizmetler/')); ?>" class="tv-sol-more"><span class="plus"><svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>Detaylı Bilgi</a>
                </div>
                <div class="tv-sol-card">
                    <div class="tv-sol-ico"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#fff" stroke-width="1.8"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
                    <h3>Ardıl Çeviri</h3>
                    <p>Konuşmacı cümlesini tamamladıktan sonra hedef dile sözlü aktarım.</p>
                    <a href="<?php echo esc_url(home_url('/hizmetler/')); ?>" class="tv-sol-more"><span class="plus"><svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>Detaylı Bilgi</a>
                </div>
            </div>
            <div class="tv-sol-cta">
                <a href="<?php echo esc_url(home_url('/hizmetler/')); ?>" class="tv-viewall">Tüm Hizmetleri Gör <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>
        </div>
    </section>

    <!-- ============================ NEDEN BİZ ============================ -->
    <section class="tv-sec" style="padding-top:20px">
        <div class="tv-wrap tv-why">
            <div class="tv-why-l">
                <span class="tv-eyebrow">Neden Biz?</span>
                <h2>Güven Üzerine Kurulu,<br>Sonuç Odaklı Çeviri</h2>
                <p>30+ yıllık tecrübemiz, 150 kadrolu uzman ve 400+ freelance tercümanımızla her sektöre özel çözüm üretiyoruz. Belgeniz ister acil, ister uzmanlık gerektirsin — biz hazırız.</p>
                <a href="<?php echo esc_url(home_url('/teklif-al/')); ?>" class="tv-btn tv-btn-dark">Hemen Teklif Al <span class="ar"><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></span></a>
            </div>
            <div class="tv-why-panel">
                <div class="col">
                    <h3 class="tv-why-col-title">7/24 Acil Tercüme</h3>
                    <h4 class="tv-why-sub">Zamanla Yarışın</h4>
                    <ul class="tv-why-list">
                        <li><span class="ck">✓</span> 7 gün 24 saat erişilebilir destek</li>
                        <li><span class="ck">✓</span> Yeminli & teknik belgelerde hızlı çözüm</li>
                    </ul>
                    <h4 class="tv-why-sub">Garantili Sonuç</h4>
                    <ul class="tv-why-list">
                        <li><span class="ck">✓</span> Gizlilik ve hatasızlık garantisi</li>
                        <li><span class="ck">✓</span> Zamanında teslim taahhüdü</li>
                    </ul>
                </div>
                <div class="col">
                    <h3 class="tv-why-col-title">Teknolojik Altyapı</h3>
                    <h4 class="tv-why-sub">CAT Tools & Terim Bankası</h4>
                    <ul class="tv-why-list">
                        <li><span class="ck">✓</span> Tutarlı çeviri süreçleri</li>
                        <li><span class="ck">✓</span> AI destekli kalite kontrol</li>
                    </ul>
                    <h4 class="tv-why-sub">Online Proje Takibi</h4>
                    <ul class="tv-why-list">
                        <li><span class="ck">✓</span> Proje yöneticisi ile anlık iletişim</li>
                        <li><span class="ck">✓</span> Adım adım süreç şeffaflığı</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================ REFERANS PROJELER ============================ -->
    <section class="tv-sec" style="padding-top:20px">
        <div class="tv-wrap">
            <div class="tv-cases-head">
                <span class="tv-eyebrow">Çalışmalarımız</span>
                <h2 class="tv-h2">Referans Projeler &<br>Başarı Hikayeleri</h2>
            </div>
            <div class="tv-cases-grid">
                <div class="tv-case-card"><div class="cimg">[ Proje görseli ]</div><div class="ctag">Hukuki Çeviri</div><h4>Uluslararası Sözleşme Çevirisi</h4></div>
                <div class="tv-case-card"><div class="cimg">[ Proje görseli ]</div><div class="ctag">Medikal Çeviri</div><h4>Sağlık Raporu & Vize Belgeleri</h4></div>
                <div class="tv-case-card"><div class="cimg">[ Proje görseli ]</div><div class="ctag">Kurumsal</div><h4>Kurumsal İletişim Partnerliği</h4></div>
            </div>
        </div>
    </section>

    <!-- ============================ YORUMLAR ============================ -->
    <section class="tv-sec" style="padding-top:20px">
        <div class="tv-wrap">
            <div class="tv-rev-head">
                <span class="tv-eyebrow">Yorumlar</span>
                <h2 class="tv-h2">Müşterilerimiz Ne Diyor?</h2>
            </div>
            <div class="tv-rev-track" style="display:grid;grid-template-columns:repeat(3,1fr);gap:22px">
                <div class="tv-rev-card"><div class="tv-rev-stars">★★★★★</div><p class="txt">"Yurt dışı eğitim başvurum için çevirilerimi Çeviri Sepeti'de yaptırdım, çok memnun kaldım. Hem hızlı hem yardımcı oldular."</p><div class="tv-rev-user"><div class="av" style="width:44px;height:44px;border-radius:50%;background:var(--tv-sage-light);display:grid;place-items:center;color:#fff;font-weight:700">H</div><div><b>hümüssii</b><span>Google Yorumu</span></div></div></div>
                <div class="tv-rev-card"><div class="tv-rev-stars">★★★★★</div><p class="txt">"Hızlı, profesyonel ve kaliteli bir hizmet aldım. Belgelerim tam zamanında ve eksiksiz teslim edildi. Kesinlikle tavsiye ederim."</p><div class="tv-rev-user"><div class="av" style="width:44px;height:44px;border-radius:50%;background:var(--tv-sage-light);display:grid;place-items:center;color:#fff;font-weight:700">F</div><div><b>furkan yılmaz</b><span>Google Yorumu</span></div></div></div>
                <div class="tv-rev-card"><div class="tv-rev-stars">★★★★★</div><p class="txt">"Denizcilik firmasıyız, 10 yıla yakın çalışıyoruz. Hiç sorun yaşamadık, ne zaman yazsak anında cevap alıyoruz."</p><div class="tv-rev-user"><div class="av" style="width:44px;height:44px;border-radius:50%;background:var(--tv-sage-light);display:grid;place-items:center;color:#fff;font-weight:700">E</div><div><b>Engin Somsa</b><span>Google Yorumu</span></div></div></div>
            </div>
        </div>
    </section>

    <!-- ============================ BLOG ============================ -->
    <section class="tv-sec" id="blog" style="padding-top:20px">
        <div class="tv-wrap">
            <div class="tv-blog-head">
                <span class="tv-eyebrow">Blog</span>
                <h2>Çeviri Dünyasından Güncel İçerikler</h2>
            </div>
            <ul class="tv-blog-grid">
                <li class="tv-blog-card"><a href="#" class="bimg"><div style="width:100%;height:100%;background:var(--tv-cream);display:grid;place-items:center;color:#b7bbac;font-size:13px">[ Görsel ]</div></a><ul class="tv-blog-meta"><li>27 Tem 2026</li><li>Çeviri Sepeti</li></ul><h3><a href="#">Vekaletname Çevirisi: Yurt Dışından İşlem İçin Adımlar</a></h3><a href="#" class="tv-blog-more">Devamını Oku →</a></li>
                <li class="tv-blog-card"><a href="#" class="bimg"><div style="width:100%;height:100%;background:var(--tv-cream);display:grid;place-items:center;color:#b7bbac;font-size:13px">[ Görsel ]</div></a><ul class="tv-blog-meta"><li>26 Tem 2026</li><li>Çeviri Sepeti</li></ul><h3><a href="#">Sağlık Raporu Çevirisi: Vize, Sigorta ve Tedavi Rehberi</a></h3><a href="#" class="tv-blog-more">Devamını Oku →</a></li>
                <li class="tv-blog-card"><a href="#" class="bimg"><div style="width:100%;height:100%;background:var(--tv-cream);display:grid;place-items:center;color:#b7bbac;font-size:13px">[ Görsel ]</div></a><ul class="tv-blog-meta"><li>25 Tem 2026</li><li>Çeviri Sepeti</li></ul><h3><a href="#">Yurt Dışı Vekaletname Türkiye'de Geçerli mi? 2026</a></h3><a href="#" class="tv-blog-more">Devamını Oku →</a></li>
            </ul>
            <div class="tv-blog-cta">
                <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="tv-viewall">Tüm Yazılar <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>
        </div>
    </section>

    <!-- ============================ FOOT CTA ============================ -->
    <section class="tv-sec" style="padding-bottom:0">
        <div class="tv-wrap">
            <div class="tv-foot-cta">
                <div>
                    <span class="tv-eyebrow">Hemen Başlayın</span>
                    <h2>Belgenizi gönderin, dakikalar içinde teklifinizi alın</h2>
                </div>
                <a href="<?php echo esc_url(home_url('/fiyat-hesapla/')); ?>" class="tv-btn tv-btn-light" style="padding:16px 30px;font-size:15px">Ücretsiz Teklif Al →</a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
