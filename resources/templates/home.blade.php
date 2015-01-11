<!doctype html>
<html lang="ja-jp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>調整キット</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body>
        <div class="hero">
    　　　　    <h1>調整さんはURLをメンバーに送るだけで、イベントの出欠や日程調整ができるツールです。</h1>
            <img src="{{ asset('img/調整タイトル.png') }}" alt="調整タイトル">
        </div>

        <section>
            <h2 class="event">イベントをつくる</h2>

            <div class="event-grid">
                <section>
                    <h3>STEP1 イベント名</h3>
                    <p>※今期もお疲れ様でした飲み会、打ち合わせなど</p>
                </section>
                
                <section>
                    <h3>メモ（任意）</h3>
                    <p>※飲み会の日程調整しましょう！出欠〆切は◯日</p>
                </section>
            </div>

            <section class="event-grid">
                <h3>STEP2　候補日程</h3>
                <p>
                    ※候補日程／日時を入力してください。<br>
                    候補の区切りは改行で判断されます。<br>
                    例:<br>
                    11/1(土) 20:00～<br>
                    11/2(日) 20:00～<br>
                    11/3(月) 21:00～
                </p>
            </section>
            
        </section>
        
        <section class="clear">
            <h2>調整さんがみんなに使われる３つのポイント</h2>
        </section>
    </body>
</html>
