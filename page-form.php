<?php get_header(); ?>

<div class="form-wrapper">
  <div class="page-title">Contact</div>
  <div class="form-title">お問い合わせ</div>
  <div class="form-contents">
    <!-- 公式LINEでのお問い合わせ -->
    <div class="form-line-contact">
      <div class="form-line-title"><img src="<?php echo get_theme_file_uri(); ?>/images/Line-icon.svg" alt="">公式LINEでのお問い合わせ</div>
      <div class="form-line-caution">
        <p>公式LINEを友達追加していただき、メッセージにてお問い合わせください。担当者よりご返信いたします。</p>
        <p>日々最新情報もお届けしております。</p>
      </div>
      <div class="form-line-link">
        <a href="https://lin.ee/7Ii8MCV"><img src="<?php echo get_theme_file_uri(); ?>/images/公式LINEはこちら.svg" alt=""></a>
      </div>
    </div>

    <!-- フォームでのお問い合わせ -->
    <div class="form-line-contact">
      <div class="form-line-title"><img src="<?php echo get_theme_file_uri(); ?>/images/Mail-icon.svg" alt="">フォームでのお問い合わせ</div>
      <div class="form-caution">メールフォームでのお問い合わせも受け付けております。下記に必要事項を入力し、確認画面へお進みください。</div>
    </div>
    <!-- フォーム -->
    <form class="form" action="https://form.run/api/v1/r/1g5ihaqer4ouruczzchjdgrv" method="post" data-formrun-confirm="true">
      <!-- ↓自由に要素を追加・編集することができます -->
      <!-- お問い合わせ内容 -->
      <div class="select-form-inquiry">
        <label>お問い合わせ内容</label>
        <div class="form-required">必須</div>
        <select name="お問い合わせ内容" class="form-select-option" id="form">
          <option selected disabled>選択してください</option>
          <option value="料金について">料金について</option>
          <option value="改善してほしい">改善して欲しい</option>
          <option value="その他">その他</option>
        </select>
      </div>

      <div class="form-name">
        <label>お名前</label>
        <div class="form-required">必須</div>
        <input name="お名前" type="text" required>
      </div>

      <div class="form-email">
        <label>メールアドレス</label>
        <div class="form-required">必須</div>
        <input name="メールアドレス" type="text" data-formrun-type="email" data-formrun-required required>
        <div data-formrun-show-if-error="メールアドレス">メールアドレスを正しく入力してください</div>
      </div>

      <div class="detail-form-inquiry">
        <label>お問い合わせ</label>
        <div class="form-required">必須</div>
        <textarea name="お問い合わせ" data-formrun-required required></textarea>
        <div data-formrun-show-if-error="お問い合わせ">お問い合わせ内容を入力してください</div>
      </div>

      <div class="form-privacy-policy-caution">
        <a href="<?php echo esc_url(home_url('/privacy_policy')); ?>" style="border-bottom: 1px solid ;">プライバシーポリシー</a>同意の上、送信してください。
      </div>

      <div class="form-privacy-policy">
        <input type="checkbox" id="privacy-policy" name="個人情報利用同意" data-formrun-required required>
        <div data-formrun-show-if-error="個人情報利用同意">同意してください</div>
        <label for="privacy-policy">同意する</label>
      </div>

      <!-- ボット投稿をブロックするためのタグ -->
      <div class="_formrun_gotcha">
        <style media="screen">
          ._formrun_gotcha {
            position: absolute !important;
            height: 1px;
            width: 1px;
            overflow: hidden;
          }
        </style>
        <label for="_formrun_gotcha">If you are a human, ignore this field</label>
        <input type="text" name="_formrun_gotcha" id="_formrun_gotcha" tabindex="-1">
      </div>
      <a href="javascript:void(0)" class="btn btn-default" data-formrun-back-button>戻る</a>

      <button type="submit" class="form-submit" data-formrun-error-text="未入力の項目があります" data-formrun-submitting-text="送信中...">確認画面へ進む</button>
    </form>
    <form class="form-mobile" action="https://form.run/api/v1/r/1g5ihaqer4ouruczzchjdgrv" method="post">
      <!-- ↓自由に要素を追加・編集することができます -->
      <!-- お問い合わせ内容 -->
      <div class="select-form-inquiry">
        <div class="form-content-title">
          <label>お問い合わせ内容</label>
          <div class="form-required">必須</div>
        </div>
        <div>
          <select name="お問い合わせ内容" class="form-select-option" id="form-select">
            <option value="" hidden>利用するには</option>
            </option>
            <option value=""></option>
            <option value=""></option>
          </select>
        </div>
      </div>

      <div class="form-name">
        <div class="form-content-title">
          <label>お名前</label>
          <div class="form-required">必須</div>
        </div>
        <input name="お名前" type="text">
      </div>

      <div class="form-email">
        <div class="form-content-title">
          <label>メールアドレス</label>
          <div class="form-required">必須</div>
        </div>
        <input name="メールアドレス" type="text" data-formrun-type="email" data-formrun-required>
        <div data-formrun-show-if-error="メールアドレス">メールアドレスを正しく入力してください</div>
      </div>

      <div class="detail-form-inquiry">
        <div class="form-content-title">
          <label>お問い合わせ内容</label>
          <div class="form-required">必須</div>
        </div>
        <textarea name="お問い合わせ" data-formrun-required></textarea>
        <div data-formrun-show-if-error="お問い合わせ">お問い合わせ内容を入力してください</div>
      </div>

      <!-- デスクトップ用注意書き -->
      <div class="form-privacy-policy-caution">
        <a href="<?php echo esc_url(home_url('/privacy_policy')); ?>" style="border-bottom: 1px solid ;">プライバシーポリシー</a>同意の上、送信してください。
      </div>

      <!-- モバイル用注意書き -->
      <div class="sm-form-privacy-policy-caution">
        <p><a href="<?php echo esc_url(home_url('/privacy_policy')); ?>" style="border-bottom: 1px solid ;">プライバシーポリシー</a></p>
        <p>に同意の上、送信してください。</p>
      </div>

      <div class="form-privacy-policy">
        <input type="checkbox" id="privacy-policy" name="個人情報利用同意" data-formrun-required>
        <div data-formrun-show-if-error="個人情報利用同意">同意してください</div>
        <label for="privacy-policy">同意する</label>
      </div>


      <!-- ボット投稿をブロックするためのタグ -->
      <div class="_formrun_gotcha">
        <style media="screen">
          ._formrun_gotcha {
            position: absolute !important;
            height: 1px;
            width: 1px;
            overflow: hidden;
          }
        </style>
        <label for="_formrun_gotcha">If you are a human, ignore this field</label>
        <input type="text" name="_formrun_gotcha" id="_formrun_gotcha" tabindex="-1">
      </div>
      <a href="javascript:void(0)" class="btn btn-default" data-formrun-back-button>戻る</a>

      <button type="submit" class="form-submit" data-formrun-error-text="未入力の項目があります" data-formrun-submitting-text="送信中...">
        <p>確認画面へ進む</p>
      </button>
    </form>

    <?php echo do_shortcode('[mwform_formkey key="183"]') ?>


  </div>


</div>


<!-- CONTACT US -->
<?php get_template_part('contact-us') ?>

<!-- フッター -->
<?php get_footer(); ?>