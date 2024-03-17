<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Beautiful with supplements</title>
        <meta name="description" conetnt="">
        <link rel="stylesheet" href="{{ asset('/css/stylesheet.css') }}">
    </head>

    <body>
        <div class="header">
            <div class="logo">
                <img src=img/rogo.gif>
                <h1 class="taitle">Beautiful with supplements</h1>
            </div>
            <button class="header-button" onclick="location.href='index.html'">Top</button>
            <button class="header-button">Topics</button>
            <button class="header-button">Contact</button>
            <button class="header-buttonrog">Login</button>
        </div>
        
        <div class="main">
            <div class="copy-container">
                <h1 class="white">Beautiful with supplements</h1>
                <h2 class="white">サプリメントで美しく、前向きに。</h2>
            </div>
            
            <div class="kensaku">
                <form action="cgi-bin/example.cgi" method="post">
                    <input type = "search" class="kensakuform" name="search" placeholder="例）ビタミンC">
                    <input type="image" src="img/musimegane.png" width="30" height="30" alt="検索" value="検索する">
                </form>
            </div>
        
            <div class="contents">
                <h1>Search by problem</h1>

                <div class="total-contents-item">
                    <div class="contents-item-1">
                        <button type="button" class="image-button1" onclick="location.href='{{ url('sample') }}'"></button>
                        <span class="button-text">Moisture</span>
                    </div>
                        
                    <div class="contents-item-2">
                        <button class="image-button2"></button>
                        <span class="button-text">ハリ・弾力</span>
                    </div>

                    <div class="contents-item-3">
                        <button class="image-button3"></button>
                        <span class="button-text">美白、透明感</span>
                    </div>

                    <div class="contents-item-4">
                        <button class="image-button4"></button>
                        <span class="button-text">ニキビ、毛穴</span>
                    </div>
                </div>
  
            </div>

            <div class="contents">
                <h1>Search by component</h1>

                <details>
                    <summary class="vitamin13">Vitamin -13 types-</summary>

                    <li class="siyousei">脂溶性Vitamin -4types-</li>
                    <button class="image-buttonA"></button>
                    <span class="button-text">Vitamin A</span>
                    <button class="image-buttonD"></button>
                    <span class="button-text">Vitamin D</span>
                    <button class="image-buttonE"></button>
                    <span class="button-text">Vitamin E</span>
                    </li>
                    <button class="image-buttonK"></button>
                    <span class="button-text">Vitamin K</span>

                    <li>水溶性Vitamin -9types-</li>
                    <div class="contents-item">
                        <button class="image-button"></button>
                        <span class="button-text">Vitamin C</span>
                    </div>
                </details>

                <details>
                    <summary class="mineral">mineral</summary>
                    
                    <button class="image-buttonA"></button>
                    <span class="button-text">Vitamin A</span>
                    <button class="image-buttonD"></button>
                    <span class="button-text">Vitamin D</span>
                    <button class="image-buttonE"></button>
                    <span class="button-text">Vitamin E</span>
                    </li>
                    <button class="image-buttonK"></button>
                    <span class="button-text">Vitamin K</span>
                </details>

                <details>
                    <summary class="carotenoids">carotenoids</summary>
                    
                    <button class="image-buttonA"></button>
                    <span class="button-text">Vitamin A</span>
                    <button class="image-buttonD"></button>
                    <span class="button-text">Vitamin D</span>
                    <button class="image-buttonE"></button>
                    <span class="button-text">Vitamin E</span>
                    </li>
                    <button class="image-buttonK"></button>
                    <span class="button-text">Vitamin K</span>
                </details>

            </div>

            <div class="contact-form">

            </div>
            
        <div class="footer">

        </div>
        <a>ビタミンC</a>
            
    </body>

    <footer>
        <div class="copy">
            &copy;2024 XXX
        </div>
    </footer>
</html>