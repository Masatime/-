<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>製品詳細・食料品玩具</title>
        <link rel="stylesheet" href="../../css/syouhin-syokuryou.css">
    </head>
    <body class="bady">
        <x-heder></x-heder>
        <div class="karaage">
            <p style="text-align:center"><font size="7">―<span class="takatu">製品詳細</span>・<span class="takatu">食料品玩具</span>―</font></p>
        </div>
        <div class="photo">
            <img src="../../css/syokuryou.jpg">
        </div>
        <div class="kamei">
            <div class="matuda">
                <p><font size="7">食料品玩具</font></p>
            </div>
            <div class="tyono">
                <p><font size="5">私たち株式会社クロスは様々なタイプの食料品玩具を受注・製造しています。<br>
                <span class="nakazima">短納期</span>・<span class="nakazima">高品質</span>・<span class="nakazima">低価格</span>で少量から大量生産まで様々なご要望を実現可能です！！<br>
                また当社は<span class="nakazima">世界規模</span>の柔軟な材料調達ネットワークを駆使し、お客様へ最良の製品提供が可能です！！<br>
                食料品玩具の製造をご希望のお客さまは、お問い合わせフォームからお気軽にお問い合わせください。</font></p>
            </div>
        </div>
        <div class="chage">
            <button onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSd_Hj8eZJktZTGt2GBfusJdG4Ui7JDnsv56qnLbUu5puYXZfw/viewform?embedded=true')">お問い合わせはこちらから</button>
        </div>
    </body>
</html>