<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>製品情報</title>
        <link rel="stylesheet" href="../../css/cross-syouhin-all.css">
    </head>
    <body class="bady">
        <x-heder></x-heder>
        <div class="karaage">
            <p style="text-align:center"><font size="7">―<span class="takatu">製品情報</span>―</font></p>
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
        <div class="crossfan">
            <button type=“button” onclick="location.href='/cross-syouhin-information-crossfan'">Cross-fan</p>
        </div>
        <div class="syokuryou">
            <button type=“button” onclick="location.href='/cross-syouhin-information-syokuryou'">食料品玩具</p>
        </div>
        <div class="kamera">
            <button type=“button” onclick="location.href='/cross-syouhin-information-kamera'">カメラ・レンズ部品</p>
        </div>
        <a href="/cross-syouhin-information-car" class="example2">
            <img width="450" height="350" src="../../css/zidousya.jpg" alt="car">
        </a>
        <a href="/cross-syouhin-information-sisaku" class="example2">
            <img width="450" height="350" src="../../css/sisakuhin.png" alt="sisakuhin">
        </a>
        <div class="car">
            <button type=“button” onclick="location.href='/cross-syouhin-information-car'">自動車業界部品</p>
        </div>
        <div class="sisakuhin">
            <button type=“button” onclick="location.href='/cross-syouhin-information-sisaku'">試作品対応</p>
        </div>