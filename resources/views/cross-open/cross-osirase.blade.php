<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>クロスのお知らせ</title>
        <link rel="stylesheet" href="../../css/osirase.css">
    </head>
    <body class="bady">
        <x-heder></x-heder>
        <div class="karaage">
            <p style="text-align:center"><font size="7">―<span class="takatu">クロスのお知らせ</span>―</font></p>
        </div>
        <table border="1">
            @foreach($items as $item)
                <tr>
                    <th>{{$item->title}}</th>
                    <td>{{$item->body}}</td>
                </tr>
            @endforeach
        </table>
        <a href="/roguin" class="btn_02">編集</a>
        
        