<?php
/*
 * Template Name: Fiyat Hesapla V2
 * Template Post Type: page
 */
get_header();

$languages = [
    'turkce'        => 'Türkçe',
    'almanca'       => 'Almanca',
    'arapca'        => 'Arapça',
    'arnavutca'     => 'Arnavutça',
    'azerice'       => 'Azerice',
    'bosnakca'      => 'Boşnakça',
    'bulgarca'      => 'Bulgarca',
    'cekce'         => 'Çekçe',
    'cince'         => 'Çince',
    'darice'        => 'Darice',
    'danca'         => 'Danca',
    'endonezyaca'   => 'Endonezyaca',
    'ermenice'      => 'Ermenice',
    'farsca'        => 'Farsça',
    'fince'         => 'Fince',
    'flemenkce'     => 'Flemenkçe',
    'fransizca'     => 'Fransızca',
    'guney_amerika' => 'Güney Amerika Dilleri',
    'gurcuce'       => 'Gürcüce',
    'hintce'        => 'Hintçe',
    'hirvatca'      => 'Hırvatça',
    'hollandaca'    => 'Hollandaca',
    'ibranice'      => 'İbranice',
    'ingilizce'     => 'İngilizce',
    'ispanyolca'    => 'İspanyolca',
    'isvecce'       => 'İsveççe',
    'italyanca'     => 'İtalyanca',
    'izlandaca'     => 'İzlandaca',
    'japonca'       => 'Japonca',
    'karadagca'     => 'Karadağca',
    'kazakca'       => 'Kazakça',
    'kirgizca'      => 'Kırgızca',
    'korece'        => 'Korece',
    'kurmanci'      => 'Kurmançi',
    'kurtce'        => 'Kürtçe',
    'latince'       => 'Latince',
    'lehce'         => 'Lehçe (Polakça)',
    'letonyaca'     => 'Letonyaca',
    'litvanyaca'    => 'Litvanyaca',
    'macarca'       => 'Macarca',
    'makedonca'     => 'Makedonca',
    'malayca'       => 'Malayca',
    'moldovyaca'    => 'Moldovyaca',
    'norvecce'      => 'Norveççe',
    'osmanlica'     => 'Osmanlıca',
    'ozbekce'       => 'Özbekçe',
    'portekizce'    => 'Portekizce',
    'romence'       => 'Romence',
    'rusca'         => 'Rusça',
    'sirpca'        => 'Sırpça',
    'slovakca'      => 'Slovakça',
    'slovence'      => 'Slovence',
    'soranice'      => 'Soranice',
    'taylandca'     => 'Taylandça',
    'tayvanca'      => 'Tayvanca',
    'turkmence'     => 'Türkmence',
    'ukraynaca'     => 'Ukraynaca',
    'urduca'        => 'Urduca',
    'vietnamca'     => 'Vietnamca',
    'yunanca'       => 'Yunanca',
    'zazaca'        => 'Zazaca',
];
asort($languages);
?>

<style>
/* ── Fiyat Hesapla V2 — Truvista Stili ── */
.fh2-page {
    background: #F3F4EF;
    font-family: 'Manrope', sans-serif;
    color: #26291F;
}

/* Hero */
.fh2-hero {
    background: linear-gradient(135deg, #74826A 0%, #74826A 40%, #93A182 65%, #C2D0B0 85%, #DCE9CD 100%);
    padding: 48px 0 44px;
}
.fh2-hero__inner {
    max-width: 1340px;
    margin: 0 auto;
    padding: 0 30px;
}
.fh2-breadcrumb {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 13px;
    color: rgba(255,255,255,.65);
    margin-bottom: 18px;
}
.fh2-breadcrumb a { color: rgba(255,255,255,.65); text-decoration: none; }
.fh2-breadcrumb a:hover { color: #fff; }
.fh2-breadcrumb span { color: rgba(255,255,255,.4); }
.fh2-hero__tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(255,255,255,.15);
    border: 1px solid rgba(255,255,255,.25);
    border-radius: 50px;
    padding: 5px 14px;
    font-size: 12px;
    font-weight: 700;
    color: #fff;
    letter-spacing: .04em;
    margin-bottom: 14px;
}
.fh2-hero__title {
    font-size: 36px;
    font-weight: 800;
    color: #fff;
    letter-spacing: -.03em;
    margin: 0 0 10px;
    line-height: 1.1;
}
.fh2-hero__desc {
    font-size: 15px;
    color: rgba(255,255,255,.8);
    margin: 0;
}

/* Layout */
.fh2-wrap {
    max-width: 1340px;
    margin: 0 auto;
    padding: 40px 30px 80px;
    display: grid;
    grid-template-columns: 1fr 380px;
    gap: 28px;
    align-items: start;
}
@media (max-width: 1024px) {
    .fh2-wrap { grid-template-columns: 1fr; }
}

/* Adım kartları */
.fh2-form { display: flex; flex-direction: column; gap: 14px; }

.fh2-step {
    background: #fff;
    border: 1px solid #E6E6DF;
    border-radius: 16px;
    overflow: hidden;
}

.fh2-step__head {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 16px 22px;
    background: #F3F4EF;
    border-bottom: 1px solid #E6E6DF;
}

.fh2-step__num {
    width: 30px; height: 30px;
    border-radius: 50%;
    background: #77846A;
    color: #fff;
    font-size: 13px;
    font-weight: 800;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
}

.fh2-step__num--icon {
    background: #EDF0E8;
    color: #77846A;
}

.fh2-step__title {
    font-size: 15px;
    font-weight: 700;
    color: #1a1a1a;
    margin: 0;
}

.fh2-step__badge {
    margin-left: auto;
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 11px;
    color: #6A6E60;
    background: #EDF0E8;
    border-radius: 50px;
    padding: 3px 10px;
}

.fh2-step__body { padding: 22px; }

/* Dil seçimi */
.fh2-lang-row {
    display: grid;
    grid-template-columns: 1fr 40px 1fr;
    align-items: end;
    gap: 12px;
}
.fh2-lang-arrow {
    display: flex;
    align-items: center;
    justify-content: center;
    padding-bottom: 8px;
    color: #77846A;
}

/* Form elemanları */
.fh2-label {
    display: block;
    font-size: 13px;
    font-weight: 600;
    color: #26291F;
    margin-bottom: 6px;
}
.fh2-req { color: #c0392b; }

.fh2-select,
.fh2-input,
.fh2-textarea {
    width: 100%;
    padding: 11px 14px;
    border: 1.5px solid #E6E6DF;
    border-radius: 10px;
    font-size: 14px;
    color: #1a1a1a;
    background: #fff;
    font-family: 'Manrope', sans-serif;
    box-sizing: border-box;
    transition: border-color .2s, box-shadow .2s;
    appearance: none;
}
.fh2-select { background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%236A6E60' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 14px center; padding-right: 36px; }

.fh2-select:focus,
.fh2-input:focus,
.fh2-textarea:focus {
    outline: none;
    border-color: #77846A;
    box-shadow: 0 0 0 3px rgba(119,132,106,.13);
}
.fh2-textarea { resize: vertical; min-height: 110px; }
.fh2-input-hint { font-size: 12px; color: #6A6E60; margin-top: 5px; display: block; }

/* Mod sekmeleri */
.fh2-tabs {
    display: flex;
    gap: 8px;
    margin-bottom: 18px;
}
.fh2-tab {
    display: flex;
    align-items: center;
    gap: 7px;
    padding: 9px 18px;
    border: 1.5px solid #E6E6DF;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 600;
    color: #6A6E60;
    cursor: pointer;
    background: #fff;
    transition: all .2s;
    font-family: 'Manrope', sans-serif;
}
.fh2-tab input { display: none; }
.fh2-tab.is-active {
    border-color: #77846A;
    background: #EDF0E8;
    color: #3f4a37;
}

/* Drop zone */
.fh2-dropzone {
    border: 2px dashed #C8CCBE;
    border-radius: 12px;
    padding: 40px 20px;
    text-align: center;
    cursor: pointer;
    background: #F3F4EF;
    transition: all .2s;
}
.fh2-dropzone:hover,
.fh2-dropzone.is-over { border-color: #77846A; background: #EDF0E8; }
.fh2-dropzone.is-done { border-color: #77846A; background: #EDF0E8; border-style: solid; }
.fh2-dropzone__icon { color: #77846A; margin-bottom: 12px; }
.fh2-dropzone__title { font-size: 14px; font-weight: 700; color: #1a1a1a; margin: 0 0 6px; }
.fh2-dropzone__hint { font-size: 12px; color: #6A6E60; margin: 0; line-height: 1.7; }
.fh2-file-hidden { display: none; }
.fh2-file-status { font-size: 12px; color: #6A6E60; margin: 8px 0 0; }
.fh2-spinner {
    display: inline-block;
    width: 18px; height: 18px;
    border: 2px solid #E6E6DF;
    border-top-color: #77846A;
    border-radius: 50%;
    animation: fh2-spin .7s linear infinite;
    margin-top: 8px;
}
@keyframes fh2-spin { to { transform: rotate(360deg); } }

.fh2-text-meta { display: flex; align-items: center; gap: 10px; margin-top: 8px; }
.fh2-wc-badge { font-size: 12px; background: #EDF0E8; color: #3f4a37; border-radius: 20px; padding: 3px 10px; font-weight: 700; }
.fh2-text-hint { font-size: 12px; color: #6A6E60; }

/* Sipariş sınıfı */
.fh2-class-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
}
@media (min-width: 640px) { .fh2-class-grid { grid-template-columns: repeat(4, 1fr); } }

.fh2-class-card { cursor: pointer; }
.fh2-class-card input { display: none; }
.fh2-class-card__inner {
    border: 1.5px solid #E6E6DF;
    border-radius: 12px;
    padding: 16px 12px;
    text-align: center;
    background: #fff;
    display: flex; flex-direction: column; align-items: center; gap: 7px;
    transition: all .2s;
    height: 100%; box-sizing: border-box;
}
.fh2-class-card input:checked + .fh2-class-card__inner {
    border-color: #77846A;
    background: #EDF0E8;
    box-shadow: 0 2px 12px rgba(119,132,106,.13);
}
.fh2-class-card__icon { color: #77846A; }
.fh2-class-card__title { font-size: 13px; font-weight: 700; color: #1a1a1a; }
.fh2-class-card__desc { font-size: 11px; color: #6A6E60; }

/* Hizmet kademeleri */
.fh2-tiers {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
}
@media (max-width: 640px) { .fh2-tiers { grid-template-columns: 1fr; } }

.fh2-tier { cursor: pointer; }
.fh2-tier input { display: none; }
.fh2-tier__inner {
    border: 1.5px solid #E6E6DF;
    border-radius: 14px;
    padding: 18px 16px;
    background: #fff;
    height: 100%; box-sizing: border-box;
    transition: all .2s;
}
.fh2-tier.is-active .fh2-tier__inner,
.fh2-tier input:checked + .fh2-tier__inner {
    border-color: #77846A;
    background: #EDF0E8;
    box-shadow: 0 4px 20px rgba(119,132,106,.14);
}
.fh2-tier__top { display: flex; align-items: center; gap: 8px; margin-bottom: 10px; }
.fh2-tier__badge {
    font-size: 10px; font-weight: 800; letter-spacing: .05em;
    padding: 3px 9px; border-radius: 4px;
}
.fh2-tier__badge--premium { background: #26291F; color: #fff; }
.fh2-tier__badge--pro { background: #77846A; color: #fff; }
.fh2-tier__badge--eco { background: #EDF0E8; color: #3f4a37; border: 1px solid #AAB99A; }
.fh2-tier__popular { font-size: 10px; font-weight: 700; color: #77846A; }
.fh2-tier__sub { font-size: 13px; font-weight: 600; color: #1a1a1a; margin: 0 0 3px; }
.fh2-tier__exp { font-size: 12px; color: #6A6E60; margin: 0 0 12px; }
.fh2-tier__list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 7px; }
.fh2-tier__list li { display: flex; align-items: flex-start; gap: 7px; font-size: 12px; color: #26291F; }
.fh2-tier__list svg { color: #77846A; flex-shrink: 0; margin-top: 2px; }
.fh2-tier__link { display: inline-block; margin-top: 12px; font-size: 12px; color: #77846A; font-weight: 600; text-decoration: none; }

/* Teslimat */
.fh2-delivery-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
}
@media (max-width: 540px) { .fh2-delivery-grid { grid-template-columns: 1fr; } }

.fh2-delivery { cursor: pointer; }
.fh2-delivery input { display: none; }
.fh2-delivery__inner {
    border: 1.5px solid #E6E6DF;
    border-radius: 12px;
    padding: 18px 12px;
    text-align: center;
    background: #fff;
    display: flex; flex-direction: column; align-items: center; gap: 6px;
    transition: all .2s;
}
.fh2-delivery input:checked + .fh2-delivery__inner {
    border-color: #77846A;
    background: #EDF0E8;
}
.fh2-delivery__icon { color: #77846A; }
.fh2-delivery__title { font-size: 13px; font-weight: 700; color: #1a1a1a; }
.fh2-delivery__days { font-size: 12px; color: #6A6E60; }
.fh2-delivery__price { font-size: 11px; font-weight: 700; color: #3f4a37; background: #EDF0E8; border-radius: 4px; padding: 2px 8px; }

/* Ek hizmetler */
.fh2-extras { display: flex; flex-direction: column; gap: 8px; }

.fh2-extra {
    display: flex; align-items: flex-start; gap: 12px;
    padding: 13px 16px;
    border: 1.5px solid #E6E6DF;
    border-radius: 10px;
    cursor: pointer;
    background: #fff;
    transition: all .2s;
}
.fh2-extra:hover { border-color: #AAB99A; background: #F3F4EF; }
.fh2-extra input { display: none; }
.fh2-extra input:checked ~ .fh2-checkbox { background: #77846A; border-color: #77846A; }
.fh2-extra input:checked ~ .fh2-checkbox::after { opacity: 1; }

.fh2-checkbox {
    width: 18px; height: 18px;
    border: 2px solid #C8CCBE;
    border-radius: 5px;
    flex-shrink: 0;
    position: relative;
    transition: all .2s;
    margin-top: 2px;
}
.fh2-checkbox::after {
    content: '';
    position: absolute;
    left: 4px; top: 1px;
    width: 6px; height: 10px;
    border: 2px solid #fff;
    border-top: none; border-left: none;
    transform: rotate(45deg);
    opacity: 0;
    transition: opacity .15s;
}
.fh2-extra__text { display: flex; flex-direction: column; gap: 2px; }
.fh2-extra__name { font-size: 13px; font-weight: 700; color: #1a1a1a; }
.fh2-extra__price { font-size: 12px; color: #6A6E60; }

.fh2-extras-note {
    display: flex; align-items: flex-start; gap: 7px;
    font-size: 12px; color: #6A6E60;
    margin-top: 12px; line-height: 1.6;
}
.fh2-noter-notice {
    background: #EDF0E8;
    border: 1px solid #AAB99A;
    border-radius: 8px;
    padding: 10px 14px;
    color: #3f4a37;
}
.fh2-extras-subgrid { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin-top: 4px; }
.fh2-extras-subgrid__col { display: flex; flex-direction: column; gap: 8px; }
.fh2-extra--tall { flex: 1; height: 100%; }

/* Ödeme yöntemi */
.fh2-payment-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
.fh2-payment { cursor: pointer; }
.fh2-payment input { display: none; }
.fh2-payment__inner {
    border: 1.5px solid #E6E6DF;
    border-radius: 12px;
    padding: 18px 14px;
    display: flex; flex-direction: column; align-items: center; gap: 7px;
    text-align: center; background: #fff; transition: all .2s;
}
.fh2-payment.is-active .fh2-payment__inner,
.fh2-payment input:checked + .fh2-payment__inner {
    border-color: #77846A; background: #EDF0E8;
}
.fh2-payment__inner svg { color: #77846A; }
.fh2-payment__title { font-size: 13px; font-weight: 700; color: #1a1a1a; }
.fh2-payment__desc { font-size: 11px; color: #6A6E60; }

/* Müşteri bilgileri */
.fh2-customer-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 14px;
}
.fh2-customer-grid__full { grid-column: 1 / -1; }
@media (max-width: 540px) { .fh2-customer-grid { grid-template-columns: 1fr; } }

/* Sipariş özeti */
.fh2-summary {
    background: #fff;
    border: 1px solid #E6E6DF;
    border-radius: 16px;
    overflow: hidden;
}

.fh2-summary__head {
    padding: 20px 22px;
    background: #77846A;
}
.fh2-summary__title {
    font-size: 16px; font-weight: 800; color: #fff;
    margin: 0; letter-spacing: -.01em;
}

.fh2-summary__section {
    padding: 14px 22px;
    border-bottom: 1px solid #E6E6DF;
    display: flex; flex-direction: column; gap: 9px;
}

.fh2-summary__row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 8px;
}
.fh2-summary__label {
    display: flex; align-items: center; gap: 5px;
    font-size: 12px; color: #6A6E60;
}
.fh2-summary__val { font-size: 13px; font-weight: 600; color: #1a1a1a; text-align: right; }
.fh2-summary__val--big { font-size: 15px; font-weight: 800; color: #3f4a37; }

.fh2-summary__row--hl {
    background: #F3F4EF;
    margin: 0 -22px;
    padding: 8px 22px;
}

.fh2-summary__est { font-size: 11px; color: #6A6E60; margin: 0; font-style: italic; }

.fh2-summary__section--price { background: #F3F4EF; }

.fh2-summary__total {
    padding: 18px 22px;
    display: flex; justify-content: space-between; align-items: center;
    background: #EDF0E8;
    border-top: 2px solid #AAB99A;
}
.fh2-summary__total-label { font-size: 13px; font-weight: 700; color: #3f4a37; }
.fh2-summary__total-price { font-size: 24px; font-weight: 800; color: #3f4a37; letter-spacing: -.02em; }

/* KVKK */
.fh2-consent {
    display: flex; align-items: flex-start; gap: 10px;
    padding: 14px 22px; cursor: pointer;
    border-top: 1px solid #E6E6DF;
}
.fh2-consent__text { font-size: 12px; color: #6A6E60; line-height: 1.6; }
.fh2-consent__text a { color: #3f4a37; font-weight: 600; text-decoration: underline; }

/* Gönder */
.fh2-submit {
    width: calc(100% - 44px);
    margin: 14px 22px;
    padding: 15px;
    background: #3f4a37;
    color: #fff;
    border: none;
    border-radius: 12px;
    font-size: 15px;
    font-weight: 700;
    cursor: pointer;
    display: flex; align-items: center; justify-content: center; gap: 8px;
    transition: background .2s;
    font-family: 'Manrope', sans-serif;
    letter-spacing: -.01em;
}
.fh2-submit:hover:not(:disabled) { background: #77846A; }
.fh2-submit:disabled { opacity: .45; cursor: not-allowed; }

.fh2-submit-error { font-size: 12px; color: #c0392b; padding: 0 22px 10px; margin: 0; }

.fh2-disclaimer {
    font-size: 11px; color: #6A6E60; text-align: center;
    padding: 0 22px 12px; margin: 0; line-height: 1.6;
}

.fh2-trust {
    display: flex; justify-content: center; gap: 16px;
    padding: 12px 22px 18px;
    border-top: 1px solid #E6E6DF;
    flex-wrap: wrap;
}
.fh2-trust span {
    display: flex; align-items: center; gap: 4px;
    font-size: 11px; color: #6A6E60; font-weight: 600;
}
.fh2-trust svg { color: #77846A; }

.fh2-req-star { color: #c0392b; }
</style>

<div class="fh2-page">

  <!-- Hero -->
  <div class="fh2-hero">
    <div class="fh2-hero__inner">
      <nav class="fh2-breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Anasayfa</a>
        <span>›</span>
        <span>Fiyat Hesapla</span>
      </nav>
      <div class="fh2-hero__tag">
        <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        Anlık Fiyat Hesaplama
      </div>
      <h1 class="fh2-hero__title">Fiyat Hesapla</h1>
      <p class="fh2-hero__desc">Belgenizi yükleyin veya metin girin, anında fiyat hesaplayalım.</p>
    </div>
  </div>

  <!-- Ana layout -->
  <div class="fh2-wrap">

    <!-- SOL: Form -->
    <form id="tq-form" class="fh2-form" novalidate>

      <!-- Adım 1: Dil Seçimi -->
      <div class="fh2-step" id="tq-step-1">
        <div class="fh2-step__head">
          <span class="fh2-step__num">1</span>
          <h2 class="fh2-step__title">Dil Seçimi</h2>
        </div>
        <div class="fh2-step__body">
          <div class="fh2-lang-row">
            <div>
              <label class="fh2-label" for="tq-source-lang">Kaynak Dil</label>
              <select id="tq-source-lang" name="source_lang" class="fh2-select">
                <?php foreach ($languages as $val => $label) : ?>
                <option value="<?php echo esc_attr($val); ?>" <?php selected($val,'turkce'); ?>><?php echo esc_html($label); ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="fh2-lang-arrow">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </div>
            <div>
              <label class="fh2-label" for="tq-target-lang">Hedef Dil <span class="fh2-req-star">*</span></label>
              <select id="tq-target-lang" name="target_lang" class="fh2-select" required>
                <option value="">Dil seçin…</option>
                <?php foreach ($languages as $val => $label) : ?>
                <option value="<?php echo esc_attr($val); ?>"><?php echo esc_html($label); ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
        </div>
      </div>

      <!-- Adım 2: Belge Yükleme -->
      <div class="fh2-step" id="tq-step-2">
        <div class="fh2-step__head">
          <span class="fh2-step__num">2</span>
          <h2 class="fh2-step__title">Belgelerinizi Yükleyin</h2>
          <span class="fh2-step__badge">
            <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Verileriniz gizli tutulmaktadır
          </span>
        </div>
        <div class="fh2-step__body">
          <div class="fh2-tabs" role="group">
            <label class="fh2-tab is-active">
              <input type="radio" name="tq-input-mode" value="file" checked>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
              Dosya Yükle
            </label>
            <label class="fh2-tab">
              <input type="radio" name="tq-input-mode" value="text">
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="17" y1="10" x2="3" y2="10"/><line x1="21" y1="6" x2="3" y2="6"/><line x1="21" y1="14" x2="3" y2="14"/><line x1="17" y1="18" x2="3" y2="18"/></svg>
              Metin Gir
            </label>
          </div>
          <div id="tq-pane-file">
            <div class="fh2-dropzone" id="tq-drop-zone" role="button" tabindex="0">
              <input type="file" id="tq-file-input" name="document" accept=".docx,.xlsx,.pptx,.pdf,.txt,.jpg,.jpeg,.png,.odt,.rtf" class="fh2-file-hidden">
              <div class="fh2-dropzone__icon">
                <svg viewBox="0 0 24 24" width="40" height="40" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
              </div>
              <p class="fh2-dropzone__title">Dosyayı sürükleyin veya seçmek için tıklayın</p>
              <p class="fh2-dropzone__hint">.docx, .xlsx, .pdf, .pptx, .jpg, .png ve 50+ format<br>Dosya başına maks. <strong>100 MB</strong></p>
              <span id="tq-file-spinner" class="fh2-spinner" hidden></span>
            </div>
            <p id="tq-file-status" class="fh2-file-status">Henüz dosya seçilmedi.</p>
          </div>
          <div id="tq-pane-text" hidden>
            <label class="fh2-label" for="tq-text-input">Çevrilecek metni buraya yapıştırın</label>
            <textarea id="tq-text-input" name="text_content" rows="10" placeholder="Metninizi buraya yapıştırın…" class="fh2-textarea"></textarea>
            <div class="fh2-text-meta">
              <span id="tq-text-cc" class="fh2-wc-badge">0 karakter</span>
              <span class="fh2-text-hint">Fiyat hesaplamak için en az 50 karakter girin.</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Adım 3: Sipariş Sınıfı -->
      <div class="fh2-step" id="tq-step-3">
        <div class="fh2-step__head">
          <span class="fh2-step__num">3</span>
          <h2 class="fh2-step__title">Sipariş Sınıfı</h2>
        </div>
        <div class="fh2-step__body">
          <div class="fh2-class-grid">
            <label class="fh2-class-card">
              <input type="radio" name="tq-order-class" value="standard" checked>
              <span class="fh2-class-card__inner">
                <span class="fh2-class-card__icon"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></span>
                <span class="fh2-class-card__title">Standart Çeviri</span>
                <span class="fh2-class-card__desc">Genel amaçlı belgeler</span>
              </span>
            </label>
            <label class="fh2-class-card">
              <input type="radio" name="tq-order-class" value="sworn">
              <span class="fh2-class-card__inner">
                <span class="fh2-class-card__icon"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg></span>
                <span class="fh2-class-card__title">Yeminli Çeviri</span>
                <span class="fh2-class-card__desc">Resmi & hukuki belgeler</span>
              </span>
            </label>
            <label class="fh2-class-card">
              <input type="radio" name="tq-order-class" value="official">
              <span class="fh2-class-card__inner">
                <span class="fh2-class-card__icon"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg></span>
                <span class="fh2-class-card__title">Resmi Belge</span>
                <span class="fh2-class-card__desc">Apostil & noter işlemleri</span>
              </span>
            </label>
            <label class="fh2-class-card">
              <input type="radio" name="tq-order-class" value="specialist">
              <span class="fh2-class-card__inner">
                <span class="fh2-class-card__icon"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></span>
                <span class="fh2-class-card__title">Uzman Çeviri</span>
                <span class="fh2-class-card__desc">Teknik & bilimsel içerik</span>
              </span>
            </label>
          </div>
        </div>
      </div>

      <!-- Adım 4: Uzmanlık Alanı -->
      <div class="fh2-step" id="tq-step-4">
        <div class="fh2-step__head">
          <span class="fh2-step__num">4</span>
          <h2 class="fh2-step__title">Uzmanlık Alanı</h2>
        </div>
        <div class="fh2-step__body">
          <label class="fh2-label" for="tq-expertise">Çeviri alanını seçin</label>
          <select id="tq-expertise" name="expertise" class="fh2-select">
            <option value="general" selected>Genel Çeviri</option>
            <option value="legal">Hukuki Çeviri</option>
            <option value="technical">Teknik Çeviri</option>
            <option value="medical">Tıbbi Çeviri</option>
            <option value="financial">Finansal Çeviri</option>
            <option value="academic">Akademik Çeviri</option>
            <option value="marketing">Pazarlama &amp; Reklam</option>
            <option value="literary">Edebi Çeviri</option>
          </select>
        </div>
      </div>

      <!-- Adım 5: Hizmet Kademesi -->
      <div class="fh2-step" id="tq-step-5">
        <div class="fh2-step__head">
          <span class="fh2-step__num">5</span>
          <h2 class="fh2-step__title">Hizmet Kademesi Seçin</h2>
        </div>
        <div class="fh2-step__body">
          <div class="fh2-tiers">
            <label class="fh2-tier" data-tier="premium">
              <input type="radio" name="tq-tier" value="premium">
              <div class="fh2-tier__inner">
                <div class="fh2-tier__top">
                  <span class="fh2-tier__badge fh2-tier__badge--premium">PREMIUM</span>
                </div>
                <p class="fh2-tier__sub">Elle Seçilmiş En İyi Tercümanlar</p>
                <p class="fh2-tier__exp">(5+ Sene Deneyim)</p>
                <ul class="fh2-tier__list">
                  <li><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>500+ İşte %98 Memnuniyet</li>
                  <li><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Dedike Proje Yöneticisi</li>
                  <li><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Çift Aşamalı Detaylı Kontrol</li>
                </ul>
                <a href="#" class="fh2-tier__link" tabindex="-1">Ne için uygun? →</a>
              </div>
            </label>
            <label class="fh2-tier is-active" data-tier="professional">
              <input type="radio" name="tq-tier" value="professional" checked>
              <div class="fh2-tier__inner">
                <div class="fh2-tier__top">
                  <span class="fh2-tier__badge fh2-tier__badge--pro">PROFESYONEL</span>
                  <span class="fh2-tier__popular">● POPÜLER</span>
                </div>
                <p class="fh2-tier__sub">Uzman Tercümanlar</p>
                <p class="fh2-tier__exp">(3–5 Sene Deneyim)</p>
                <ul class="fh2-tier__list">
                  <li><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>100+ İşte %95 Memnuniyet</li>
                  <li><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Detaylı Tercüme Kontrolü</li>
                </ul>
                <a href="#" class="fh2-tier__link" tabindex="-1">Ne için uygun? →</a>
              </div>
            </label>
            <label class="fh2-tier" data-tier="economy">
              <input type="radio" name="tq-tier" value="economy">
              <div class="fh2-tier__inner">
                <div class="fh2-tier__top">
                  <span class="fh2-tier__badge fh2-tier__badge--eco">EKONOMİ</span>
                </div>
                <p class="fh2-tier__sub">Profesyonel Tercüman</p>
                <p class="fh2-tier__exp">(1–3 Sene Deneyim)</p>
                <ul class="fh2-tier__list">
                  <li><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Genel Tercüme Kontrolü</li>
                </ul>
                <a href="#" class="fh2-tier__link" tabindex="-1">Ne için uygun? →</a>
              </div>
            </label>
          </div>
        </div>
      </div>

      <!-- Adım 6: Teslimat Hızı -->
      <div class="fh2-step" id="tq-step-6">
        <div class="fh2-step__head">
          <span class="fh2-step__num">6</span>
          <h2 class="fh2-step__title">Teslimat Hızı</h2>
        </div>
        <div class="fh2-step__body">
          <div class="fh2-delivery-grid">
            <label class="fh2-delivery">
              <input type="radio" name="tq-delivery" value="standard" checked>
              <div class="fh2-delivery__inner">
                <span class="fh2-delivery__icon"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>
                <span class="fh2-delivery__title">Standart</span>
                <span class="fh2-delivery__days">3–5 İş Günü</span>
                <span class="fh2-delivery__price">Normal Fiyat</span>
              </div>
            </label>
            <label class="fh2-delivery">
              <input type="radio" name="tq-delivery" value="express">
              <div class="fh2-delivery__inner">
                <span class="fh2-delivery__icon"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></span>
                <span class="fh2-delivery__title">Ekspres</span>
                <span class="fh2-delivery__days">1–2 İş Günü</span>
                <span class="fh2-delivery__price">+%40 Ek Ücret</span>
              </div>
            </label>
            <label class="fh2-delivery">
              <input type="radio" name="tq-delivery" value="rush">
              <div class="fh2-delivery__inner">
                <span class="fh2-delivery__icon"><svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></span>
                <span class="fh2-delivery__title">Acil</span>
                <span class="fh2-delivery__days">Aynı Gün</span>
                <span class="fh2-delivery__price">+%80 Ek Ücret</span>
              </div>
            </label>
          </div>
        </div>
      </div>

      <!-- Adım 7: Ek Hizmetler -->
      <div class="fh2-step" id="tq-step-7">
        <div class="fh2-step__head">
          <span class="fh2-step__num">7</span>
          <h2 class="fh2-step__title">Ek Hizmetler</h2>
        </div>
        <div class="fh2-step__body">
          <div class="fh2-extras">
            <label class="fh2-extra">
              <input type="checkbox" name="tq-extra" value="notarized">
              <span class="fh2-checkbox"></span>
              <span class="fh2-extra__text"><span class="fh2-extra__name">Yeminli Tercüman Onayı</span><span class="fh2-extra__price">+75 ₺</span></span>
            </label>
            <label class="fh2-extra">
              <input type="checkbox" name="tq-extra" value="printed">
              <span class="fh2-checkbox"></span>
              <span class="fh2-extra__text"><span class="fh2-extra__name">Kargo ile Teslimat</span><span class="fh2-extra__price">+250 ₺</span></span>
            </label>
            <label class="fh2-extra">
              <input type="checkbox" name="tq-extra" value="apostille">
              <span class="fh2-checkbox"></span>
              <span class="fh2-extra__text"><span class="fh2-extra__name">Apostil İşlemi</span><span class="fh2-extra__price">+1.200 ₺</span></span>
            </label>
            <label class="fh2-extra" id="tq-extra-noter">
              <input type="checkbox" name="tq-extra" value="noter">
              <span class="fh2-checkbox"></span>
              <span class="fh2-extra__text"><span class="fh2-extra__name">Noter Ücreti</span><span class="fh2-extra__price">+3.000 ₺ / nüsha</span></span>
            </label>
            <div class="fh2-extras-subgrid">
              <div class="fh2-extras-subgrid__col">
                <label class="fh2-extra">
                  <input type="checkbox" name="tq-extra" value="format">
                  <span class="fh2-checkbox"></span>
                  <span class="fh2-extra__text"><span class="fh2-extra__name">Biçim &amp; Düzen Koruma</span><span class="fh2-extra__price">+25 ₺</span></span>
                </label>
                <label class="fh2-extra">
                  <input type="checkbox" name="tq-extra" value="review">
                  <span class="fh2-checkbox"></span>
                  <span class="fh2-extra__text"><span class="fh2-extra__name">Kaynaklı Kontrol &amp; Revizyon</span><span class="fh2-extra__price">+40 ₺</span></span>
                </label>
              </div>
              <div class="fh2-extras-subgrid__col">
                <label class="fh2-extra fh2-extra--tall">
                  <input type="checkbox" name="tq-extra" value="barkod">
                  <span class="fh2-checkbox"></span>
                  <span class="fh2-extra__text">
                    <span class="fh2-extra__name">Barkodlu Belge Doğrulatma</span>
                    <span class="fh2-extra__price" style="font-size:11px;color:#6A6E60;font-weight:400;">Askerlik, adli sicil, ikametgah, nüfus kayıt örneği, transkript, tapu kayıt örneği, vergi levhası, kira sözleşmesi gibi e-Devlet belgeleri için noter onaylı doğrulama</span>
                    <span class="fh2-extra__price">+800 ₺</span>
                  </span>
                </label>
              </div>
            </div>
          </div>
          <div id="tq-noter-notice" class="fh2-extras-note fh2-noter-notice" hidden>
            <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <span><strong>Yeminli/Apostil fiyatlandırma:</strong> Apostil işlemi 1.200 ₺, noter ücreti 3.000 ₺ (1 nüsha/sayfa için). Dosyanın içeriğine göre noter fiyatlandırması değişebilir; olası değişiklikler tarafınıza bildirilir.</span>
          </div>
          <p class="fh2-extras-note">
            <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            Tercümana iletmek istediğiniz not ve referans dokümanlarınızı sonradan girebilirsiniz.
          </p>
        </div>
      </div>

      <!-- Ödeme Yöntemi -->
      <div class="fh2-step" id="tq-step-payment">
        <div class="fh2-step__head">
          <span class="fh2-step__num fh2-step__num--icon">
            <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
          </span>
          <h2 class="fh2-step__title">Ödeme Yöntemi</h2>
        </div>
        <div class="fh2-step__body">
          <div class="fh2-payment-grid">
            <label class="fh2-payment is-active" id="tq-pm-card-label">
              <input type="radio" name="tq-payment-method" value="card" checked>
              <span class="fh2-payment__inner">
                <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                <span class="fh2-payment__title">Kredi / Banka Kartı</span>
                <span class="fh2-payment__desc">PayTR güvencesiyle güvenli ödeme</span>
              </span>
            </label>
            <label class="fh2-payment" id="tq-pm-havale-label">
              <input type="radio" name="tq-payment-method" value="havale">
              <span class="fh2-payment__inner">
                <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
                <span class="fh2-payment__title">Havale / EFT</span>
                <span class="fh2-payment__desc">Banka transferi ile ödeme yapın</span>
              </span>
            </label>
          </div>
        </div>
      </div>

      <!-- Adım 8: Not -->
      <div class="fh2-step" id="tq-step-8">
        <div class="fh2-step__head">
          <span class="fh2-step__num">8</span>
          <h2 class="fh2-step__title">Tercümana Not <span style="font-weight:400;font-size:13px;color:#6A6E60;">(isteğe bağlı)</span></h2>
        </div>
        <div class="fh2-step__body">
          <label class="fh2-label" for="tq-note">Not ve referans bilgileriniz</label>
          <textarea id="tq-note" name="note" rows="4" placeholder="Özel terminoloji, format tercihleri veya iletmek istediğiniz diğer bilgiler…" class="fh2-textarea"></textarea>
        </div>
      </div>

      <!-- Adım 9: İletişim Bilgileri -->
      <div class="fh2-step" id="tq-step-9">
        <div class="fh2-step__head">
          <span class="fh2-step__num">9</span>
          <h2 class="fh2-step__title">İletişim Bilgileri</h2>
        </div>
        <div class="fh2-step__body">
          <div class="fh2-customer-grid">
            <div>
              <label class="fh2-label" for="tq-customer-name">Ad Soyad <span class="fh2-req-star">*</span></label>
              <input type="text" id="tq-customer-name" name="customer_name" placeholder="Adınız Soyadınız" autocomplete="name" class="fh2-input" required>
            </div>
            <div>
              <label class="fh2-label" for="tq-customer-phone">Telefon <span class="fh2-req-star">*</span></label>
              <input type="tel" id="tq-customer-phone" name="customer_phone" placeholder="05XXXXXXXXX" autocomplete="tel" class="fh2-input" required>
            </div>
            <div class="fh2-customer-grid__full">
              <label class="fh2-label" for="tq-customer-email">E-posta <span class="fh2-req-star">*</span></label>
              <input type="email" id="tq-customer-email" name="customer_email" placeholder="eposta@ornek.com" autocomplete="email" class="fh2-input" required>
              <span class="fh2-input-hint">Sipariş onayı bu adrese gönderilecektir.</span>
            </div>
          </div>
        </div>
      </div>

    </form>

    <!-- SAĞ: Sipariş Özeti -->
    <div class="fh2-summary" id="tq-summary">
      <div class="fh2-summary__head">
        <h2 class="fh2-summary__title">Sipariş Özeti</h2>
      </div>
      <div class="fh2-summary__section">
        <div class="fh2-summary__row">
          <span class="fh2-summary__label"><svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg> Belge</span>
          <span class="fh2-summary__val" id="tq-sum-file">—</span>
        </div>
        <div class="fh2-summary__row fh2-summary__row--hl">
          <span class="fh2-summary__label"><svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="17" y1="10" x2="3" y2="10"/><line x1="21" y1="6" x2="3" y2="6"/><line x1="21" y1="14" x2="3" y2="14"/><line x1="17" y1="18" x2="3" y2="18"/></svg> Karakter Sayısı</span>
          <span class="fh2-summary__val fh2-summary__val--big" id="tq-sum-chars">—</span>
        </div>
        <p id="tq-estimated-note" class="fh2-summary__est" hidden>* Tahmini değer. Kesin sayı işlemde hesaplanır.</p>
      </div>
      <div class="fh2-summary__section">
        <div class="fh2-summary__row">
          <span class="fh2-summary__label">Kaynak Dil</span>
          <span class="fh2-summary__val" id="tq-sum-src">Türkçe</span>
        </div>
        <div class="fh2-summary__row">
          <span class="fh2-summary__label">Hedef Dil</span>
          <span class="fh2-summary__val" id="tq-sum-trg">—</span>
        </div>
        <div class="fh2-summary__row fh2-summary__row--hl">
          <span class="fh2-summary__label"><span style="font-weight:700;">₺</span> Dil Çifti Ücreti</span>
          <span class="fh2-summary__val" id="tq-sum-rate">—</span>
        </div>
        <p id="tq-nopair-note" class="fh2-summary__est" hidden>* Bu dil çifti için fiyat ekibimiz tarafından belirlenecektir.</p>
      </div>
      <div class="fh2-summary__section">
        <div class="fh2-summary__row">
          <span class="fh2-summary__label">Sipariş Sınıfı</span>
          <span class="fh2-summary__val" id="tq-sum-class">Standart Çeviri</span>
        </div>
        <div class="fh2-summary__row">
          <span class="fh2-summary__label">Uzmanlık Alanı</span>
          <span class="fh2-summary__val" id="tq-sum-exp">Genel Çeviri</span>
        </div>
        <div class="fh2-summary__row">
          <span class="fh2-summary__label">Hizmet Kademesi</span>
          <span class="fh2-summary__val" id="tq-sum-tier">Profesyonel</span>
        </div>
        <div class="fh2-summary__row">
          <span class="fh2-summary__label">Teslimat</span>
          <span class="fh2-summary__val" id="tq-sum-del">Standart (3–5 gün)</span>
        </div>
      </div>
      <div class="fh2-summary__section fh2-summary__section--price">
        <div class="fh2-summary__row">
          <span class="fh2-summary__label">Temel Ücret</span>
          <span class="fh2-summary__val" id="tq-sum-base">—</span>
        </div>
        <div class="fh2-summary__row">
          <span class="fh2-summary__label">Teslimat Farkı</span>
          <span class="fh2-summary__val" id="tq-sum-dextra">—</span>
        </div>
        <div class="fh2-summary__row">
          <span class="fh2-summary__label">Ek Hizmetler</span>
          <span class="fh2-summary__val" id="tq-sum-extras">—</span>
        </div>
      </div>
      <div class="fh2-summary__total">
        <span class="fh2-summary__total-label">Tahmini Toplam</span>
        <span class="fh2-summary__total-price" id="tq-sum-total">0,00 ₺</span>
      </div>
      <label class="fh2-consent" id="kvkk-wrapper">
        <input type="checkbox" id="kvkk-check" name="kvkk_onay" value="1">
        <span class="fh2-checkbox" id="kvkk-box"></span>
        <span class="fh2-consent__text"><a href="<?php echo esc_url(home_url('/kvkk/')); ?>" target="_blank" rel="noopener">KVKK Aydınlatma Metni</a>'ni okudum, kişisel verilerimin işlenmesine açık rıza veriyorum. <span class="fh2-req-star">*</span></span>
      </label>
      <label class="fh2-consent" id="sozlesme-wrapper">
        <input type="checkbox" id="sozlesme-check" name="sozlesme_onay" value="1">
        <span class="fh2-checkbox" id="sozlesme-box"></span>
        <span class="fh2-consent__text"><a href="<?php echo esc_url(home_url('/mesafeli-satis-sozlesmesi/')); ?>" target="_blank" rel="noopener">Mesafeli Satış Sözleşmesi</a>'ni ve <a href="<?php echo esc_url(home_url('/iptal-ve-iade-politikasi/')); ?>" target="_blank" rel="noopener">İptal-İade Koşulları</a>'nı okudum, kabul ediyorum. <span class="fh2-req-star">*</span></span>
      </label>
      <button type="button" id="tq-submit-btn" class="fh2-submit" disabled aria-disabled="true">
        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
        Ödemeye Geç
      </button>
      <p id="tq-submit-error" class="fh2-submit-error" hidden></p>
      <p class="fh2-disclaimer">Güvenli ödeme PayTR altyapısı ile gerçekleştirilmektedir. Bilgileriniz şifrelenerek iletilir.</p>
      <div class="fh2-trust">
        <span><svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Gizlilik Güvencesi</span>
        <span><svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> KVKK Uyumlu</span>
        <span><svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 7/24 Destek</span>
      </div>
    </div>

  </div><!-- /.fh2-wrap -->
</div><!-- /.fh2-page -->

<?php get_footer(); ?>
