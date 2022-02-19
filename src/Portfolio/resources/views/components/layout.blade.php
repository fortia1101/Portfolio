<!doctype html>
<html lang="ja" dir="Itr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>{{ $title }}</title>
        <link rel="stylesheet" href="css/stylesheet.css" />
    </head>

    <body>
        <header>
            <div class="title">
                <h1>rittoのプロフィール</h1>
            </div>
            <div class="header-photo">
                <img src="{{ url('images/day.jpeg') }}" />
            </div>
        </header>

        <main>
            <div class="container">
                {{ $slot }}
            </div>
        </main>

        <footer>
            <h2>アカウント</h2>
            <div class="footer-content">
                <div class="SNS-link">
                    <button type="submit" onclick="location.href='https://twitter.com/rd1101ms07'"><img src="{{ url('icon_tpl/TwitterIcon.png') }}" /></button>
                </div>
                <div class="SNS-link">
                    <button type="submit" onclick="location.href='https://www.instagram.com/rice_ms1101/?hl=ja'"><img src="{{ url('icon_tpl/InstagramIcon.png') }}" /></button>
                </div>
                <div class="SNS-link">
                    <button type="submit" onclick="location.href='https://github.com/fortia1101'"><img src="{{ url('icon_tpl/GitHubIcon.png') }}" /></button>
                </div>
            </div>
        </footer>
    </body>
</html>
