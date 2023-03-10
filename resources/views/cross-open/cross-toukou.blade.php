<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>投稿</title>
        <link rel="stylesheet" href="../../css/toukou.css">
    </head>
    <body class="bady">
        <x-heder></x-heder>
        <div class="karaage">
            <p style="text-align:center"><font size="7">―<span class="takatu">投稿フォーム</span>―</font></p>
        </div>
        <div class="tyousei">
            <form action="/items" method="POST">
            @csrf
                <div class="input-form">
                  <label for="title">年数-月-日</label><br>
                  <input type="nen" pattern="[0-9]{4}-[0-1]{1}[0-9]{1}-[0-9]{2}" placeholder="例：2023-12-08(半角記入必須！！)" required name="title">
                </div>
                <div class="input-form">
                  <label for="body">内容(200字以内)</label><br>
                  <textarea maxlength="200" placeholder="内容を200字以内で入力"  required name="body"></textarea>
                </div>
                <div class="input-form">
                  <input type="submit" value="送信">
                </div>
            </form>
        </div>