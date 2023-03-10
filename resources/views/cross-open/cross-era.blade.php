<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ログイン</title>
        <link rel="stylesheet" href="../../css/era.css">
    </head>
    <body class="bady">
        <x-heder></x-heder>
        <div class="karaage">
            <p style="text-align:center"><font size="7"><span class="takatu">ワァオ！！パスワードが違うやないの！！！再入力せんと！！！</span></font></p>
        </div>
        <div class="tyousei">
            <form action="/rarara" method="POST">
            @csrf
                <div class="input-form">
                  <label for="title">パスワード</label><br>
                  <input type="text"  placeholder="ここに記入してください" required name="rogurogu">
                </div>
                <div class="input-form">
                  <input type="submit" value="送信">
                </div>
            </form>
        </div>