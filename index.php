<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO -->
    <meta name="description" content="ポートフォリオサイト(仮)">
    <meta name="keywords" content="Yoshioka's Portfolio">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/destyle.css">
    <link rel="stylesheet" href="./css/style.css?ver2">
    <link rel="stylesheet" href="./css/responsive.css?ver2">
    <link rel="icon" href="./img/site-icon.ico?ver2" type="image/x-icon"/>
    <title>Yoshioka's Portfolio</title>
</head>
<body>
    <header>
        <div class="header-icon-wrapper" onclick="headerNavigation('#top')">
            <img src="./img/site-icon.jpg" alt="">
        </div>
        <div class="nav-content">
            <ul>
                <li class="top" onclick="headerNavigation('#top')">Top</li>
                <li class="about" onclick="headerNavigation('#about')">About</li>
                <li class="skills" onclick="headerNavigation('#skills')">Skills</li>
                <li class="works" onclick="headerNavigation('#works')">Works</li>
                <li class="contact" onclick="headerNavigation('#contact')">Contact</li>
            </ul>
        </div>
        <div class="sp-nav-content">
            <img src="./img/nav-open-img.png" alt="">
        </div>
        <div class="sp-nav">
            <ul>
                <li class="top" onclick="headerNavigation('#top')">Top</li>
                <li class="about" onclick="headerNavigation('#about')">About</li>
                <li class="skills" onclick="headerNavigation('#skills')">Skills</li>
                <li class="works" onclick="headerNavigation('#works')">Works</li>
                <li class="contact" onclick="headerNavigation('#contact')">Contact</li>
            </ul>
        </div>
    </header>
    <main>
        <div id="top">
            <div class="main-content">
                <div class="title-content">
                    <h2>Yuta Yoshioka</h2>
                    <p>Webエンジニア</p>
                </div>
                <canvas id="can1"></canvas>
                <canvas id="can2"></canvas>
            </div>
        </div>

        <div id="about">
            <div class="container">
                <div class="main-title-content">
                    <h3 class="title">About</h3>
                    <img class="title-treatment" src="./img/title-treatment-1.jpg" alt="">
                </div>
                <div class="main-wrapper">
                    <div class="left-content">
                        <div class="image-wrapper">
                            <img class="image-icon" src="./img/icon-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="right-content">
                        <h4>吉岡 優太<span>Yuta Yoshioka</span></h4>
                        <h4>Webエンジニア</h4>
                        <p class="text">
                            2020年4月から独学でプログラミングを学習。<br>
                            同年9月、NPO法人FLY ONにてWebアプリ開発を始める。<br>
                            大学卒業後、個人事業でエンジニアとして活動。
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="skills">
            <div class="container">
                <div class="main-title-content">
                    <h3 class="title">Skills</h3>
                    <img class="title-treatment" src="./img/title-treatment-2.jpg" alt="">
                </div>
                <div class="main-wrapper">
                    <div class="card">
                        <div class="left-content">
                            <div class="image-wrapper">
                                <img src="./img/icon-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="right-content">
                            <h4>Webサイト制作</h4>
                            <p class="text">
                                Web制作・WordPressサイト制作を行います。<br>
                                サイト公開後、継続的な保守管理・運用をサポートいたします。
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="left-content">
                            <div class="image-wrapper">
                                <img src="./img/icon-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="right-content">
                            <h4>Webアプリケーション開発</h4>
                            <p class="text">
                                Web・iPhoneアプリケーション開発を行います。<br>
                                ご要望に合わせて柔軟に対応いたします。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="second-wrapper">
                    <div class="card">
                        <div class="title-content">
                            <h4>Front-end</h4>
                        </div>
                        <ul>
                            <li><p><span>✔︎</span>HTML</p></li>
                            <li><p><span>✔︎</span>CSS</p></li>
                            <li><p><span>✔︎</span>JavaScript</p></li>
                            <li><p><span>✔︎</span>Swift</p></li>
                        </ul>
                    </div>
                    <div class="card second-design">
                        <div class="title-content">
                            <h4>Back-end</h4>
                        </div>
                        <ul>
                            <li><p><span>✔︎</span>PHP</p></li>
                            <li><p><span>✔︎</span>Ruby</p></li>
                            <li><p><span>✔︎</span>SQL</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="works">
            <div class="container">
                <div class="main-title-content">
                    <h3 class="title">Works</h3>
                    <img class="title-treatment" src="./img/title-treatment-3.jpg" alt="">
                </div>
                <div class="main-wrapper">
                    <div class="card">
                        <a href="https://wakalook.com/">
                            <div class="image-wrapper">
                                <img src="./img/works-img1.jpg" alt="">
                            </div>
                            <div class="title-content">
                                <h4>WakaLook</h4>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="https://quiz-maze.com/">
                            <div class="image-wrapper">
                                <img src="./img/works-img2.jpg" alt="">
                            </div>
                            <div class="title-content">
                                <h4>Quiz & Maze</h4>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="https://npo-library.com/">
                            <div class="image-wrapper">
                                <img src="./img/works-img3.jpg" alt="">
                            </div>
                            <div class="title-content">
                                <h4>LIBRARY</h4>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="https://tallerflamencoosaka.net/">
                            <div class="image-wrapper">
                                <img src="./img/works-img4.jpg" alt="">
                            </div>
                            <div class="title-content">
                                <h4>Taller Flamenco Osaka</h4>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="https://senseition.net/">
                            <div class="image-wrapper">
                                <img src="./img/works-img5.jpg" alt="">
                            </div>
                            <div class="title-content">
                                <h4>Senseition</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="contact">
            <div class="treatment-image-wrapper">
                <img src="./img/treatment.jpg" alt="">
            </div>
            <div class="container">
                <div class="main-title-content">
                    <h3 class="title">Contact</h3>
                    <img class="title-treatment" src="./img/title-treatment-4.jpg" alt="">
                    <p>お気軽にお問い合わせください</p>
                </div>
                <form action="./sendMail.php" method="post">
                    <div class="form-content">
                        <input class="input-name" name="name" type="text">
                        <p>お名前<span class="name-err err">お名前を入力してください</span></p>
                        <input class="input-email" name="email" type="text">
                        <p>メールアドレス<span class="email-err err">メールアドレスを入力してください</span></p>
                        <textarea class="input-text" name="text" id="" cols="30" rows="8"></textarea>
                        <p>お問い合わせ内容<span class="text-err err">お問い合わせ内容を入力してください</span></p>
                    </div>
                    <div class="submit-button" onclick="sendEmail()">
                        <p>送信する</p>
                    </div>
                    <input id="form-submit" type="submit">
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="left-content">
            <p>Copyright © 2022 Yuta Yoshioka All Rights Reserved.</p>
        </div>
        <div class="right-content">
            <div class="image-wrapper twitter">
                <a href="https://twitter.com/yoshioka_engr">
                    <img src="./img/footer-icon-1.jpg" alt="">
                </a>
            </div>
            <div class="image-wrapper">
                <a href="mailto:yoshioka.engineer@gmail.com">
                    <img src="./img/footer-icon-2.jpg" alt="">
                </a>
            </div>
        </div>
    </footer>

</body>
<script src="./js/bubble.js?ver2"></script>
<script src="./js/script.js?ver2"></script>

</html>