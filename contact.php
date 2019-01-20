
<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
<section class="page__main">
  <main class="main">
    <div class="main__content">
      <section class="section">
        <div class="section__content">
          <p class="section__text">以下のフォームより、お問い合わせください。担当者よりメールにてご連絡差し上げます。</p>
          <p class="section__text">当サイトにおいて取得した個人情報は守秘義務等を遵守し、目的外の利用や事業外の第三者に提供することはありません。</p>
        </div>
        <div class="section__content">
          <div class="contact-form">
            <?php dynamic_sidebar('contact_form') ?>
          </div>
        </div>
      </section>
    </div>
    <div class="main__content">
      <section class="section">
        <h2 class="section__title">アクセス</h2>
        <div class="section__content">
          <p class="section__text">鈴木啓 / ASA エーエスエーアソシエイツ</p>
          <p class="section__text">
            <a class="section__link" href="https://goo.gl/maps/QDGiN7hWoss" target="_blank">〒154-0003 東京都世田谷区野沢1-29-12-A</a>
        </p>
        </div>
        <div class="section__content">
          <div class="section__imgWrapper section__imgWrapper--map">
            <div class="google-map">
              <iframe class="google-map__map" width="860" height="500" src="http://maps.google.co.jp/maps?&output=embed&q=東京都世田谷区野沢1-29-12-A&z=16&ll=35.6386306,139.6711704" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
</section>
<?php get_footer(); ?>
