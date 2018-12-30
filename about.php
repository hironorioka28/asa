
<?php
/*
Template Name: About us
*/
?>

<?php get_header(); ?>
<section class="page__main">
  <main class="main">
    <div class="main__content">
      <section class="section">
        <div class="section__content">
          <div class="profile-card">
            <div class="profile-card__nameWrapper">
              <h2 class="profile-card__name">鈴木啓</h2>
              <p class="profile-card__nameEn">Akira Suzuki</p>
              <p class="profile-card__jobTitle">一級建築士</p>
              <p class="profile-card__jobTitle">構造設計一級建築士</p>
            </div>
            <div class="profile-card__imgWrapper">
              <img class="profile-card__img" src="<?php echo get_template_directory_uri() ?>/src/img/profile_img.jpg" alt="profile_img">
            </div>
          </div>
        </div>
        <h3 class="section__title section__title--sub">略歴</h3>
        <div class="section__content">
          <dl class="definition-list">
            <dt class="definition-list__title">1970年</dt>
            <dd class="definition-list__data">初芝電器産業株式会社入社</dd>
            <dt class="definition-list__title">1983年</dt>
            <dd class="definition-list__data">本社営業本部 販売助成部宣伝課 課長</dd>
            <dt class="definition-list__title">1992年</dt>
            <dd class="definition-list__data">本社総合宣伝部 部長</dd>
            <dt class="definition-list__title">2002年</dt>
            <dd class="definition-list__data">本社取締役 九州地区担当役員</dd>
            <dt class="definition-list__title">2005年</dt>
            <dd class="definition-list__data">本社取締役 上海地区担当役員 上海初芝電産董事長</dd>
            <dt class="definition-list__title">2008年</dt>
            <dd class="definition-list__data">初芝五洋ホールディングス株式会社（2010年1月 社名をTECOTに変更） 代表取締役社長</dd>
          </dl>
        </div>
        <h3 class="section__title section__title--sub">受賞等</h3>
        <div class="section__content">
          <dl class="definition-list">
            <dt class="definition-list__title">1953年</dt>
            <dd class="definition-list__data">日本芸術院賞</dd>
            <dt class="definition-list__title">1953年</dt>
            <dd class="definition-list__data">日本建築学会賞作品賞</dd>
            <dt class="definition-list__title">1953年</dt>
            <dd class="definition-list__data">日本建築学会賞作品賞</dd>
            <dt class="definition-list__title">1958年</dt>
            <dd class="definition-list__data">藍綬褒章</dd>
            <dt class="definition-list__title">1964年</dt>
            <dd class="definition-list__data">日本建築学会賞作品賞</dd>
            <dt class="definition-list__title">1967年</dt>
            <dd class="definition-list__data">文化勲章</dd>
          </dl>
        </div>
      </section>
    </div>
    <div class="main__content">
      <section class="section">
        <h2 class="section__title">会社概要</h2>
        <div class="section__content">
          <dl class="definition-list">
            <dt class="definition-list__title">名称</dt>
            <dd class="definition-list__data">鈴木啓 / ASA エーエスエーアソシエイツ</dd>
            <dt class="definition-list__title">代表</dt>
            <dd class="definition-list__data">鈴木啓</dd>
            <dt class="definition-list__title">所在地</dt>
            <dd class="definition-list__data">東京都世田谷区野沢 1-29-12</dd>
            <dt class="definition-list__title">設立</dt>
            <dd class="definition-list__data">xxxx年xx月xx日</dd>
            <dt class="definition-list__title">資本金</dt>
            <dd class="definition-list__data">xxxx万円</dd>
            <dt class="definition-list__title">登録</dt>
            <dd class="definition-list__data">一級建築士事務所<br>東京都知事登録第xxxxx号</dd>
            <dt class="definition-list__title">事業内容</dt>
            <dd class="definition-list__data">建築物および付帯工作物の構造設計・監理，建築構造物に関する調査・研究</dd>
          </dl>
        </div>
        <div class="section__content">
          <div class="section__imgWrapper">
            <img class="section__img" src="<?php echo get_template_directory_uri() ?>/src/img/office.png" alt="office">
          </div>
        </div>
      </section>
    </div>
  </main>
</section>
<?php get_footer(); ?>
