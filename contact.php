
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
          <p class="section__text">〒xxx-xxxx<br>東京都世田谷区野沢 1-29-12</p>
          <p class="section__text">東急田園都市線三軒茶屋駅より徒歩xx分</p>
        </div>
        <div class="section__imgWrapper">
          <div class="google-map">
            <iframe class="google-map__map" src="https://www.google.com/maps/d/embed?mid=1bgYTbrPGpXKOrS0LwmEQ6ZpqJN3xAH9z" width="640" height="480"></iframe>
          </div>
        </div>
      </section>
    </div>
  </main>
</section>
<?php get_footer(); ?>
