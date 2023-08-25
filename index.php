<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=DotGothic16&family=Mochiy+Pop+One&family=Vollkorn+SC:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Kosugi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <title>TOP</title>
</head>
<body>
    <?php require 'header.php'; ?>
    <div class="fixed_button">
        <a href="#" class="fixed_button_top">
            <div class="triangle_s"></div>
            <div class="triangle"></div>
            <p>トップへ</p>
        </a>
        <div class="fixed_button_list">
            <p class="q_click">お問い合わせ</p>
            <div class="q_click_menu">
                <a href="repair_point_inquiry.php" class="q_click_menu_left">修理箇所</a>
                <a href="Recruitment_information_inquiry.php" class="q_click_menu_right">採用情報</a>
            </div>
        </div>
    </div>
    <div class="main">
        <img src="img/index1.png" alt="img">
        <p class="mainp">お客様の理想のリフォームのお手伝いをいたします！</p>
        <div class="maintel">
            <p class="teltitel">修理・施工に関するお問い合わせ</p>
            <div class="telbox">
                <p><span class="material-symbols-outlined">call</span>019-661-8356</p>
                <p><span class="material-symbols-outlined">fax</span>019-661-8329</p>
                <p><span class="material-symbols-outlined">mail</span>himekami@rnac.ne.jp</p>
            </div>        
        </div>
    </div>
    <div class="main_content">
        <div class="content content1">
            <h1>会社の魅力</h1>
            <div class="content1_a">
                <p>お客様との距離の近さ</p>
                <p>技術・サービスの信頼</p>
                <p>社会貢献</p>
            </div>
        </div>
        <div class="content content2">
            <h1>会社について</h1>
            <div class="content2_a">
                <figure class="hover-parent">
                    <img class="content2_img" src="img/index2.png">
                    <figcaption class="hover-mask">
                        テキストテキストテキストテキストテキストテキスト<br>
                        テキストテキストテキストテキスト<br>
                        テキストテキストテキストテキストテキスト
                    </figcaption>
                </figure>
                
                <figure class="hover-parent">
                    <img class="content2_img" src="img/index3.png">
                    <figcaption class="hover-mask">
                        テキストテキストテキストテキストテキストテキスト<br>
                        テキストテキストテキストテキスト<br>
                        テキストテキストテキストテキストテキスト
                    </figcaption>
                </figure>

                <figure class="hover-parent">
                    <img class="content2_img" src="img/index4.png">
                    <figcaption class="hover-mask">
                        テキストテキストテキストテキストテキストテキスト<br>
                        テキストテキストテキストテキスト<br>
                        テキストテキストテキストテキストテキスト
                    </figcaption>
                </figure>

                <figure class="hover-parent">
                    <img class="content2_img" src="img/index5.png">
                    <figcaption class="hover-mask">
                        テキストテキストテキストテキストテキストテキスト<br>
                        テキストテキストテキストテキスト<br>
                        テキストテキストテキストテキストテキスト
                    </figcaption>
                </figure>
            </div>
            <a href="enterprise_overview.php" class="main_button">詳しく見る</a>
        </div>
        <div class="content content3">
            <div class="content3_grid content3_title">
                <h1>ご依頼からの流れ</h1>
                <a href="business_achievement_introduction.php">実例を見る</a>
            </div>
            <div class="content3_grid">
                <div class="content3_grid_item1">
                    <p>相談</p>
                    <p>現地調査</p>
                    <p>打ち合せ</p>
                    <p>見積り・設計</p>
                    <p>ご契約</p>
                    <p>実施</p>
                </div>
                <div>
                    <p>料金<br>￥00000000</p>
                    <p>期間<br>〇週間～〇ヶ月</p>
                    <p>修理箇所例<br>XXXX,XXXXX,XXXX</p>
                    <img src="img/index6.png" alt="img">
                </div>
            </div>
            <div class="content3_button_grid">
                <a href="Construction_flow.php" class="">水道施設・菅工事</a>
                <a href="Construction_example.php" class="">一般住宅ビル等の排水設備工事</a>
                <a href="Construction_flow2.php" class="">とび・土木工事</a>
            </div>
            <div>
                <p>写真をクリックするとそれぞれのご依頼からの流れを詳しく見れるよ！</p>
                <div class="out">
                    <img src="img/index2.png">
                    <input type=radio name="slide" id="slide1">
                    <input type=radio name="slide" id="slide2">
                    <input type=radio name="slide" id="slide3">
                    <input type=radio name="slide" id="slide4">
                    <div class="in">
                        <label for="slide1"><span></span><a href="#1"><img src="img/index2.png"></a></label>
                        <label for="slide2"><span></span><a href="#2"><img src="img/index3.png"></a></label>
                        <label for="slide3"><span></span><a href="#3"><img src="img/index4.png"></a></label>
                        <label for="slide4"><span></span><a href="#4"><img src="img/index5.png"></a></label>
                    </div>
                </div>
            </div>
        </div>
        <div class="content content4">
            <h1>お客様の声</h1>
            <p>個人で依頼されたお客様の声</p>
            <p>企業さんから依頼されたお客様の声</p>
            <p>　　</p>
        </div>
        <div class="content content5">
            <div class="content5_1">
                <h1>採用情報</h1>
                <p>私達と一緒に働きませんか？<br>未経験でも先輩社員が丁寧にお教えします！</p>
                <a href="Recruitment_information.php" class="main_button">詳しく見る</a>
                <img class="content5_img1" src="img/index7.png" alt="img">
            </div>
            <div>
                <h1>アクセス</h1>
                <p>営業時間<span>8:30～17:00</span></p>
                <p>定休日<span>第2・4土曜日、日曜日、GW、お盆、年末年始</span></p>
                <p>駐車場<span>有</span></p>
                <p>TEL<span>019-661-8356</span></p>
                <p>FAX<span>019-661-8329</span></p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3067.632938014574!2d141.14723517477415!3d39.74789539607717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f85743c88fa0a11%3A0x3856036b46a876d4!2z44ix5aer56We6Kit5YKZ5bel5qWt!5e0!3m2!1sja!2sjp!4v1692584418387!5m2!1sja!2sjp" width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="content content6">
            <h1>NEWS</h1>
            <p><span>xxxx.xx.xx</span>タイトルタイトルタイトルタイトル</p>
            <p><span>xxxx.xx.xx</span>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
            <p><span>xxxx.xx.xx</span>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
            <p><span>xxxx.xx.xx</span>タイトルタイトルタイトルタイトル</p>
            <p><span>xxxx.xx.xx</span>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
            <a href="notice_list.php" class="main_button">すべて</a>
        </div>
    </div>
    <?php require 'footer.php'; ?>
    <script src="js/index.js"></script>
</body>
</html>