<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>製品詳細・試作品対応</title>
        <link rel="stylesheet" href="../../css/syouhin-sisaku.css">
    </head>
    <body class="bady">
        <x-heder></x-heder>
        <div class="karaage">
            <p style="text-align:center"><font size="7">―<span class="takatu">製品詳細</span>・<span class="takatu">試作品対応</span>―</font></p>
        </div>
        <div class="photo">
            <img src="../../css/sisakuhin.png">
        </div>
        <div class="kamei">
            <div class="matuda">
                <p><font size="7">試作品対応</font></p>
            </div>
            <div class="tyono">
                <p><font size="5">私たち株式会社クロスは試作品の製造を受注しています。<br>
                <span class="nakazima">短納期</span>での納入が可能で、また<span class="nakazima">3Dプリンター・光造形・真空注型</span>による当社の技術を駆使し、試作品の改良提案なども行っております。<br>
                また当社は<span class="nakazima">世界規模</span>の柔軟な材料調達ネットワークを駆使し、様々な素材での試作品作成が可能です。<br>
                試作品の製造をご希望のお客さまは、お問い合わせフォームからお気軽にお問い合わせください。</font></p>
            </div>
        </div>
        <div class="chage">
            <button onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSd_Hj8eZJktZTGt2GBfusJdG4Ui7JDnsv56qnLbUu5puYXZfw/viewform?embedded=true')">お問い合わせはこちらから</button>
        </div>
    </body>
</html>