  <?php get_header(); ?>


  <div class="how-to-use-wrapper">
    <div class="page-title">How to use</div>
    <div class="how-title">GOLFERS24ご利用の流れ</div>
    <div class="sm-how-title">
      <p>GOLFERS24ご利用の流れ</p>
    </div>
    <div class="how-to-use-contents">
      <!-- トライアル利用 -->
      <div class="trial-steps">
        <div class="steps-title">無料体験の流れ</div>

        <!-- 利用の流れ -->
        <div class="steps">
          <!-- それぞれの流れ -->

          <!-- STEP1 -->
          <div class="step">
            <div class="step-title step1">公式LINEの友達追加</div>
            <div class="step-explanation">
              <p>GOLFERS24公式LINEを友達追加してください。</p>
              <p>公式LINEを友達追加し、後ほど登録いただく予約システムと連携させることで今後はLINEを使ったスムーズなログイン・予約ができるようになります。</p>
            </div>
            <div class="step-caution">
              ※LINEをお持ちでない方は、右下の「予約サイトはこちら」を押してください。手順は「STEP2」に記載の手順と同様です。
            </div>
            <div class="step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/step1.svg" alt=""></div>
          </div>

          <!-- LINEと予約サイトはこちら -->
          <div class="how-to-line-webreserve">
            <a href="https://lin.ee/7Ii8MCV" class="how-to-line-link" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/images/how-to-use-line.svg" alt=""></a>
            <a href="https://golfers24.hacomono.jp/" class="how-to-webreserve-link" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/images/how-to-use-webreserve.svg" alt=""></a>
          </div>

          <!-- STEP2 -->
          <div class="step">
            <div class="open-step">
              <div class="step-words">
                <div class="step-title step2">予約サイトからトライアル体験予約</div>
                <div class="step-explanation">
                  <p>公式LINEから予約サイトを開き、ご希望の日時でトライアル予約をします。</p>
                </div>
              </div>
              <input type="checkbox" id="step2">
              <label class="hide-step-button step2" for="step2">トライアル予約の手順</label>
              <div class="hide-steps-wrapper">
                <div class="hide-explanation-wrapper">
                  <div class="hide-explanation">
                    <p>GOLFERS24では専用の予約管理システムを導入しております。</p>
                    <p>まずはシステム使用のための会員登録をお願いいたします。以下に沿って登録を進めてください。</p>
                  </div>
                  <div class="time-required">所要時間2~3分</div>
                </div>
                <div class="hide-steps">
                  <!-- 1 -->
                  <div class="hide-step">
                    GOLFERS24公式LINEとのトーク画面に表示される「体験予約」をタップいただくと、予約システムの会員登録画面に進みます。そのままお名前やメールアドレスを打ち込み会員登録をお済ませください。
                    <div class="hide-step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/hide-step1.svg" alt=""></div>
                  </div>

                  <!-- 2 -->
                  <div class="hide-step">
                    ご登録いただいたメールアドレスに「GOLFERS24 メールアドレスの確認」という認証メールが届きますので、必ずご確認をお願いいたします。メールアドレスの認証を完了させると登録完了です。
                    <div class="hide-step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/hide-step2.svg" alt=""></div>
                  </div>

                  <!-- 3 -->
                  <div class="hide-step">
                    予約システムのページへ戻り、先ほどご登録いただいたメールアドレス、パスワードで予約システムへログインしてください。（公式LINEのメニューから、「体験予約」を押していただいても同様のログインページへ入ることができます。）
                    <div class="hide-step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/hide-step3.svg" alt=""></div>
                  </div>

                  <!-- 4 -->
                  <div class="hide-step">
                    <p>ログイン後、下部に表示されるカレンダーマークを押すとカレンダーが表示されますので、ご希望の枠を選択し押してください。その後「トライアル予約する」というボタンが表示されますので、そちらをクリックすると体験予約が完了します。</p>
                    <p>なお、若葉マークが付いている枠のみ体験予約が可能です。</p>
                    <div class="hide-step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/hide-step4.svg" alt=""></div>
                  </div>

                  <div class="hide-step-caution">
                    <p> ＜注意点＞</p>
                    <p>※メール認証をしておらず体験予約が取れない事象がが多くなっておりますので、必ずご確認ください。</p>
                    <p>　また、迷惑メールフォルダに受信されている場合もございますので、合わせてご確認ください。</p>
                    <p>※受信拒否設定をされている方は、必ず事前に「@em.hacomono.jp」からのメールを受信できるように設定してください。</>
                  </div>

                </div>
              </div>
            </div>
            <div class="step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/step2.svg" alt=""></div>
          </div>

          <!-- クリックすると文字が変わるアクション -->
          <script>
            $('.step2').on('click', function() {
              if ($(this).text() === '閉じる') {
                $(this).text('トライアル予約の手順');
              } else {
                $(this).text('閉じる');
              }
            });
          </script>

          <!-- STEP3 -->
          <div class="step">
            <div class="open-step">
              <div class="step-words">
                <div class="step-title step3">電子解錠アプリ取得</div>
                <div class="step-explanation">
                  <p>トライアル予約が完了すると電子解錠アプリ「Akerun」より設定のご案内がメールで届きますので、</p>
                  <p>メールに記載のURLからアプリを取得・設定してください。</p>
                </div>
              </div>
              <input type="checkbox" id="step3">
              <label class="hide-step-button step3" for="step3">アプリ設定の手順</label>
              <div class="hide-steps-wrapper">
                <div class="hide-explanation-wrapper">
                  <div class="hide-explanation">
                    <p>GOLFERS24は完全無人での24時間運営を行なっております。</p>
                    <p>そのため、店舗の解錠・施錠はお客様ご自身で行なっていただくこととなりますが、</p>
                    <p>「Akerun」というアプリを使用し簡単に解錠・施錠を行うことができるようになります。</p>
                  </div>
                  <div class="time-required">所要時間2~3分</div>
                </div>
                <div class="hide-steps">
                  <!-- 1 -->
                  <div class="hide-step">
                    <p>STEP2の体験予約が完了すると、ご登録いただいたメールアドレスにAkerunより</p>
                    <p>「Akerunアカウント設定のご案内」というメールが届きます。</p>
                    <p>メール内に記載のURLを押していただき、パスワードを設定することでAkerunが使用可能となり、</p>
                    <p>ご予約時間にのみ使用可能な電子キーが付与されます。</p>
                    <div class="hide-step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/hide-step1.svg" alt=""></div>
                  </div>

                  <!-- 2 -->
                  <div class="hide-step">
                    <p>Akerun登録後、同メールに記載の「Akerunアプリのダウンロードはこちら」という部分のURLよりAkerunアプリの取得、ログインをお願いします。</p>
                    <p>入退店時にはこちらのアプリを使用します。来店準備はこれで完了です。</p>
                    <div class="hide-step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/hide-step2.svg" alt=""></div>
                  </div>

                  <div class="hide-step-caution">
                    <p>＜注意＞</p>
                    <p>※①でのAkerunからのご案内メールを受信できない事例が多く発生しております。</p>
                    <p>　メールが確認できない場合には、迷惑メールフォルダのご確認もお願いいたします。</p>
                    <p>※また受信拒否設定をしている場合には、事前に「@akerun.com」からのメールを受信できるようにしておいてください。</p>
                  </div>

                </div>
              </div>
            </div>
            <div class="step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/step3.svg" alt=""></div>
            <!-- <input type="checkbox" id="step3"> -->
          </div>

          <!-- クリックすると文字が変わるアクション -->
          <script>
            $('.step3').on('click', function() {
              if ($(this).text() === '閉じる') {
                $(this).text('アプリ設定の手順');
              } else {
                $(this).text('閉じる');
              }
            });
          </script>

          <!-- STEP4 -->
          <div class="step">
            <div class="step-title step1">ご来店</div>
            <div class="step-explanation">
              <p>ご予約日の予約時間になりましたら直接店舗へとお越しください。</p>
              <p>取得いただいたAkerunアプリを起動し、「解錠」ボタンを押していただきますと自動的に解錠され、入室が可能となります。</p>
              <p>館内に設置しているご案内・使用方法をご確認いただき、思う存分練習をお楽しみください。</p>
            </div>
            <div class="step-caution">
              <p>＜注意＞</p>
              <p>※前枠のお客様と鉢合わせることの無いよう、必ずご予約時間以降の入店をお願いいたします。</p>
              <p>※Akerunで付与される鍵はご自身のご予約日時でのみ有効となります。ご予約日時以外では使用できませんのでご注意ください。</p>
            </div>
            <div class="step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/step4.svg" alt=""></div>
          </div>

          <!-- STEP5 -->
          <div class="step">
            <div class="open-step">
              <div class="step-words">
                <div class="step-title">入会のご案内</div>
                <div class="step-explanation">
                  <p>体験を通して気に入っていただけた場合には、予約システム上で簡単に入会が可能です。</p>
                </div>
              </div>
              <input type="checkbox" id="step5">
              <label class="hide-step-button step5" for="step5">ご入会の手順</label>
              <div class="hide-steps-wrapper">
                <div class="hide-explanation-wrapper">
                  <div class="step5-hide-explanation">
                    <p>予約システムにログイン後マイページを開いていただき、「プラン新規契約」より登録へお進みください。</p>
                    <p>30日後までの入会日設定が可能ですので、ご利用をスタートされる日にちを登録開始日として設定が可能です。</p>
                    <p>（例：体験は12/25だけど、実際に通うのはお正月明けがいい→登録日は1月以降にすることも可能です。）</p>
                    <br>
                    <p>当月分の日割り会費＋翌月分の会費＋入会金（11,000円）が決済されます。</p>
                  </div>
                  <div class="step5-time-required">所要時間2~3分</div>
                </div>
              </div>
            </div>
            <div class="step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/step5.svg" alt=""></div>
          </div>

          <!-- クリックすると文字が変わるアクション -->
          <script>
            $('.step5').on('click', function() {
              if ($(this).text() === '閉じる') {
                $(this).text('ご入会の手順');
              } else {
                $(this).text('閉じる');
              }
            });
          </script>

          <!-- STEP6 -->
          <div class="step">
            <div class="step-title">ご退店</div>
            <div class="step-explanation">
              <p>次のお客様も快適にお過ごしいただけるよう、ご使用になった道具や備品は元あった場所にお戻しください。</p>
              <p>また、ゴミはゴミ箱に捨てていただくようお願いいたします。</p>
            </div>
            <div class="step-caution">
              <p>※必ず終了時間までに退館をお願いいたします。</p>
              <p>※退館の際には必ずAkerunにて施錠いただくようお願いいたします。</p>
            </div>
            <div class="step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/step6.svg" alt=""></div>
          </div>


        </div>

      </div>

      <!-- 会員利用 -->
      <div class="member-steps">
        <div class="steps-title">会員利用の流れ</div>

        <!-- 利用の流れ -->
        <div class="steps">
          <!-- それぞれの流れ -->

          <!-- STEP1 -->
          <div class="step">
            <div class="step-title step1">予約サイトから予約</div>
            <div class="step-explanation">
              <p>公式LINEから予約サイトを開き、ご希望の日時で予約をします。</p>
              <p>ご予約の日時に合わせ、自動的にAkerun（電子解錠アプリ）上で電子キーが発行されます。</p>
            </div>
            <div class="step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/step1.svg" alt=""></div>
          </div>

          <!-- STEP2 -->
          <div class="step">
            <div class="step-title step2">ご来店</div>
            <div class="step-explanation">
              <p>ご予約のお時間ちょうどになりましたら、店舗扉前でAkerunアプリを起動、</p>
              <p>「解錠」ボタンを押して鍵を開けて入室してください。思う存分練習をお楽しみください。</p>
            </div>
            <div class="step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/step2.svg" alt=""></div>
          </div>

          <!-- STEP3 -->
          <div class="step">
            <div class="step-title">ご退店</div>
            <div class="step-explanation">
              <p>次のお客様も快適にお過ごしいただけるよう、ご使用になった道具や備品は元あった場所にお戻しください。</p>
              <p>また、ゴミはゴミ箱に捨てていただくようお願いいたします。</p>
            </div>
            <div class="step-caution">
              <p>※必ず終了時間までに退館をお願いいたします。</p>
              <p>※退館の際には必ずAkerunにて施錠いただくようお願いいたします。</p>
            </div>
            <div class="step-number"><img src="<?php echo get_theme_file_uri(); ?>/images/step3.svg" alt=""></div>
          </div>


        </div>

      </div>

      <!-- プランごとの利用時間 -->
      <div class="hour-plan">
        <div class="page-title">Member Fee</div>

        <div class="sm-how-title">料金プラン</div>
        <div class="how-title">料金プラン</div>

        <!-- 利用時間の表 -->
        <div class="hour-table">
          <?php
          $args = array(
            'post_type' => 'price',
            // 全件取得、数を指定すればその数だけ取得する。
            'posts_per_page' => -1,
            'order' => 'ASC'
          );
          $st_query = new WP_Query($args);
          ?>

          <?php if ($st_query->have_posts()) : ?>
            <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>
              <table>
                <tr>
                  <th>プラン</th>
                  <th class="play-hours">利用時間</th>
                  <th>価格(税込)</th>
                </tr>
                <tr>
                  <td>レギュラープラン</td>
                  <td class="allday">0時〜24時</td>
                  <td><?php echo SCF::get('regular'); ?></td>
                </tr>
                <tr class="table-premium">
                  <td class="premium-plan">プレミアムプラン</td>
                  <td class="allday">0時〜24時</td>
                  <td class="premium-discount"><?php echo SCF::get('premium'); ?></td>
                </tr>
                <tr>
                  <td>デイプラン</td>
                  <td class=day>6時〜17時</td>
                  <td><?php echo SCF::get('day'); ?></td>
                </tr>
                <tr>
                  <td>ナイトプラン</td>
                  <td class="night">17時〜24時</td>
                  <td><?php echo SCF::get('night'); ?></td>
                </tr>
                <tr>
                  <td>ミッドナイトプラン</td>
                  <td class="midnight">0時〜6時</td>
                  <td><?php echo SCF::get('midnight'); ?></td>
                </tr>
                <tr>
                  <td>入会金</td>
                  <td></td>
                  <td><?php echo SCF::get('admission'); ?></td>
                </tr>
              </table>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="sm-arrorw"></div>
      </div>
    </div>
  </div>


  <!-- CONTACT US -->
  <?php get_template_part('contact-us'); ?>

  <!-- フッター -->
  <?php get_footer(); ?>