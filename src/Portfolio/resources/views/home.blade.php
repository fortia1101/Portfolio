<x-layout>
    <x-slot name="title">
        Masahiro Ohara
    </x-slot>

    <div class="block">
        <h2>基本情報</h2>
        <table>
            <tr>
                <th>名前</th>
                <td><span class="mgn">Masahiro Ohara</span></td>
            </tr>
            <tr>
                <th>特徴</th>
                <td><span class="mgn">気になることができるとタスクそっちのけで没頭するタイプ. 食べ物には目がない.</span></td>
            </tr>
            <tr>
                <th>所属</th>
                <td><span class="mgn">岡山大学理学部地球科学科</span></br><span class="mgn"><a onclick="location.href='https://epa.desc.okayama-u.ac.jp'" style="text-decoration:none; cursor:pointer; color:deepskyblue;">地球および惑星大気科学研究室</a></span></td>
            </tr>
            <tr>
                <th>資格</th>
                <td><span class="mgn">普通自動車第一種運転免許</span></td>
            </tr>
            <tr>
                <th>趣味</th>
                <td><span class="mgn">サイクリング, カフェ巡り, プログラミング(PythonやPHP), ソフトテニス</span></td>
            </tr>
        </table>
    </div>

    <div class="block">
        <h2>経歴</h2>
        <table>
            <tr>
                <th>1999</th>
                <td><span class="mgn">生誕</span></td>
            </tr>
            <tr>
                <th>2019</th>
                <td><span class="mgn">岡山大学 理学部地球科学科 入学</span><br /><span class="mgn">岡山大学吟詩部 入部</span></td>
            </tr>
            <tr>
                <th>2023</th>
                <td><span class="mgn">岡山大学 理学部地球科学科 卒業予定</span></td>
            </tr>
        </table>
    </div>

    <div class="block">
        <h2>つくったもの</h2>
        <div class="product">
            <h3>○ 901の鍵アプリ web版</h3>
            <p>岡山大学吟詩部の恒例行事"901の鍵", その機関紙をアーカイブとしてまとめたwebアプリ. セキュリティ上の観点から部員のみ閲覧可.</p>
            <img id="photo-901app" src="{{ asset('images/901app_index.jpeg') }}"/>
            <img id="photo-901app" src="{{ asset('images/901app_sidemenu.jpeg') }}"/>
            <img id="photo-901app" src="{{ asset('images/901app_schedule.jpeg') }}"/>
        </div>
        <div class="product">
            <h3>○ CLI上で動かすプログラム</h3>
            <p>マジで実用性のないプログラムなのでリスト形式で紹介. 詳細はGitHubリポジトリを参照.</p>
            <ul>
                <li>偏差値自動計算プログラム(csv形式で成績表を出力)</li>
                <li>顔認識プログラム</li>
                <li>顔モザイク処理プログラム</li>
            </ul>
        </div>
    </div>
</x-layout>
