  <?php get_header(); ?>

  <?php get_template_part('store-list') ?>

  <!-- CONTACT US -->
  <div id="contact-us"></div>

  <!-- フッター -->
  <!-- <script>
      var jscrollOption = {
        loadingHtml: '', // 記事読み込み中の表示、画像等をHTML要素で指定することも可能
        autoTrigger: true, // 次の表示コンテンツの読み込みを自動( true )か、ボタンクリック( false )にする
        padding: 300, // autoTriggerがtrueの場合、指定したコンテンツの下から何pxで読み込むか指定
        nextSelector: 'a.next', // 次に読み込むコンテンツのURLのあるa要素を指定
        contentSelector: '.jscroll' // 読み込む範囲を指定、指定がなければページごと丸っと読み込む
      }
      $('.jscroll').jscroll(jscrollOption);
    </script> -->
  </div>
  <?php get_footer(); ?>