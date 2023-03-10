<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>削除</title>
        <link rel="stylesheet" href="../../css/sakuzyo.css">
    </head>
    <body class="bady">
        <x-heder></x-heder>
        <div class="karaage">
            <p style="text-align:center"><font size="7">―<span class="takatu">削除フォーム</span>―</font></p>
        </div>
        <table border="1">
            @foreach($items as $item)
                <tr>
                    <th>
                        <form action="/itemsakuzyo" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}"/>  
                            <input type="submit" value="削除"/>
                        </form>
                    </th>
                    <th>{{$item->title}}</th>
                    <td>{{$item->body}}</td>
                </tr>
            @endforeach
        </table>
        
        
        
        
        
    </body>
</html>
