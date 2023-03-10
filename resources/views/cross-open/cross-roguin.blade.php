<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ログイン</title>
        <link rel="stylesheet" href="../../css/roguin.css">
    </head>
    <body class="bady">
        <x-heder></x-heder>
        <div class="karaage">
            <p style="text-align:center"><font size="7">―<span class="takatu">ログイン</span>―</font></p>
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