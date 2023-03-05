<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>株式会社クロス</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
        <link rel="stylesheet" href="../../css/cross-open.css">
    </head>
    <body class="bady">
        <div class="saisyo">
            <x-heder></x-heder>
        </div>
        <ul class="slider">
            <li class="slider-item slider-item01"></li>
            <li class="slider-item slider-item02"></li>
            <li class="slider-item slider-item03"></li>
            <li class="slider-item slider-item04"></li>
            <li class="slider-item slider-item05"></li>
        </ul>
        <div class="first">
            <p>私たち株式会社クロスは<span class="one">「Quality First」</span>をモットーとして、業界にとらわれず樹脂製品の設計・開発・製造等を行っている新しい会社です。</p>
        </div>
        <div class="abc">
            <p>クロスのお知らせ</p>
        </div>
        <table border="1">
            @foreach($items as $item)
                <tr>
                    <th>{{$item->title}}</th>
                    <td>{{$item->body}}</td>
                </tr>
            @endforeach
        </table>
        <div class="tko">
            <a href="/osirase/all">もっと見る</a>
        </div>
        <a href="/cross-syouhin-information-crossfan" class="example">
            <img width="450" height="350" src="../../css/crossfan.jpg" alt="Crossfan">
        </a>
        <a href="/cross-syouhin-information-syokuryou" class="example">
            <img width="450" height="350" src="../../css/syokuryou.jpg" alt="syokuryou">
        </a>
        <a href="/cross-syouhin-information-kamera" class="example">
            <img width="450" height="350" src="../../css/cross-kamera.jpg" alt="kamera">
        </a>
        <div class="a">
            <div class="crossfan">
                <button type=“button” onclick="location.href='/cross-syouhin-information-crossfan'">Cross-fan</p>
            </div>
            <div class="syokuryou">
                <button type=“button” onclick="location.href='/cross-syouhin-information-syokuryou'">食料品玩具</p>
            </div>
            <div class="kamera">
                <button type=“button” onclick="location.href='/cross-syouhin-information-kamera'">カメラ・レンズ部品</p>
            </div>
        </div>
        <a href="/cross-syouhin-information-car" class="example2">
            <img width="450" height="350" src="../../css/zidousya.jpg" alt="car">
        </a>
        <a href="/cross-syouhin-information-sisaku" class="example2">
            <img width="450" height="350" src="../../css/sisakuhin.png" alt="sisakuhin">
        </a>
        <div class="b">
            <div class="car">
                <button type=“button” onclick="location.href='/cross-syouhin-information-car'">自動車業界部品</p>
            </div>
            <div class="sisakuhin">
                <button type=“button” onclick="location.href='/cross-syouhin-information-sisaku'">試作品対応</p>
            </div>
        </div>
        <div class="call">
            <div class="youtien">
                <img width="500" height="400" src="../../css/youtien.jpg" alt="youtien">
            </div>
            <div class="you">
                <p id="xaxa">クロスの社会貢献(2023年1月)</p>
                <p id="sasa">慈絋保育園からかわいいお礼を頂きました。<br>
                昨年の夏から、弊社で廃棄されている梱包材(PP袋・ダンボール)を再利用していただくよう近くの保育園に提供を始めました。<br>
                これからも近隣への貢献を図っていきます。</p>
            </div>
        </div>
        <div class="youtube">
            <div class="vava">
                <p id="hahaha">Cross-fan(コードレス)、Cross-fan_α(コード付)のPR動画作成しました!!</p>
                <p id="rarara">先行して開発したコードレスタイプに加え価格もお手軽なコード付きタイプのPR動画です!!是非ご覧ください。
                コード付きタイプの購入の際にはお問い合わせフォームよりお気軽にお問い合わせください。</p>
            </div>
            <div class="youyou">
                <iframe id="gaga" width="600" height="355" src="https://www.youtube.com/embed/K8kAPXrc82w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe id="nana" width="600" height="355" src="https://www.youtube.com/embed/fVSdufmeWg8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="zi">
            <div class="vava">
                <p id="hahaha">自動車部品・望遠カメラ用品・食料品玩具など幅広い分野で採用されています</p>
                <p id="rarara">各分野のお客様のニーズに合わせた設計・試作・製造と一貫したモノづくりを目指しております。
                特に衛生管理に厳しい食料品玩具では食品パッケージング工程でクリーンルームを採用しています。</p>
            </div>
        </div>
        <div class="chage">
            <button onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSd_Hj8eZJktZTGt2GBfusJdG4Ui7JDnsv56qnLbUu5puYXZfw/viewform?embedded=true')">お問い合わせはこちらから</button>
        </div>
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="{{asset('/js/open.js')}}"></script>
    </body>
</html>