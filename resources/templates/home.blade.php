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
            <form>
            <div class="event-grid hello">
                <section>
                    <h3>STEP1 イベント名</h3>
                    <p>※今期もお疲れ様でした飲み会、打ち合わせなど</p>
                    <input type="text">
                </section>
                
                <section>
                    <h3>メモ（任意）</h3>
                    <p>※飲み会の日程調整しましょう！出欠〆切は◯日</p>
                </section>
            </div>

            <section class="event-grid hello">
                <h3>STEP2　候補日程</h3>
                <p>
                    ※候補日程／日時を入力してください。<br>
                    候補の区切りは改行で判断されます。<br>
                    例:<br>
                    11/1(土) 20:00～<br>
                    11/2(日) 20:00～<br>
                    11/3(月) 21:00～
                </p>
                <textarea rows="4" cols="40" placeholder="候補の区切りは改行で判断されます。また、カレンダーの日付をクリックすると日時が入ります。"></textarea>
            </section>
            <section class="event-grid hello">
                <h3>カレンダー</h3>
                <hr>
                    <script type="text/javascript">
                    //日付と時間の設定
                    now = new Date();
                    year = now.getFullYear();
                    mon = now.getMonth()+1;
                    day = now.getDate();
                    you = now.getDay();

                    //曜日の選択肢
                    youbi = new Array("日","月","火","水","木","金","土");
                    youbi_color = new Array("ff0000","","","","","","0000ff");

                    //表示の設定
                    today = year + "年" + mon + "月" + day + "日" + "(<font color='" + youbi_color[you] + "'>" + youbi[you] + "</font>)";

                    //画面に表示
                    //document.write(today);
                    //document.write("<hr>");

                    view_cal(year,mon);

                    function view_cal(cy,cm) {
                        //1日
                        fday = new Date(cy+"/"+cm+"/1");
                        fyou = fday.getDay();
                        //末日
                        lday = new Array(31,28,31,30,31,30,31,31,30,31,30,31); 
                        if ((cy%4 == 0 && cy%100 != 0) || (cy%400 == 0)) {lday[1]++;}
                        //カレンダー表示
                        document.write("<table border='2'>");
                        document.write("<tr><th colspan='7'>"+cy+"年"+cm+"月</th></tr>");
                        document.write("<tr>");
                        for (m = 0; m < 7; m++){
                            document.write("<th><font color='" + youbi_color[m] + "'>" + youbi[m] + "</font></th>");
                        }
                        document.write("</tr>");
                        for (n = 0; n < 6; n++) {
                            document.write("<tr>");
                            for (m = 0; m < 7; m++){                
                                d = (n*7+m+1-fyou);
                                if (day == d) {document.write("<td align='right' bgcolor='#ffaaaa'>");}
                                else {document.write("<td align='right'>");}
                                if (d > 0 && d <= lday[cm-1]) {document.write("<font color='" + youbi_color[m] + "'>" + d + "</font>");}
                                else {document.write("&nbsp;");}
                                document.write("</td>");
                            }
                            document.write("</tr>");
                            if (d >= lday[cm-1]) break;
                        }
                        document.write("</table>");
                    }
                    </script>
            </section>
            <div class="clear">
                <input type="submit" value="イベントを作る">
            </div>
            </form>
        </section>
        <section class="clear event">
            <h2>調整さんがみんなに使われる３つのポイント</h2>
            <section class="event-grid hello">
                <img src="{{ asset('img/ポイント１.png') }}" alt="ログインなしで簡単作成" width="300px">
                <p>１．ログインなしで簡単作成</p>
                <p>調整さんは飲み会、会議、同窓会、送別会など、どんなイベントにも使えます。</p>
            </section>
            <section class="event-grid hello">
                <img src="{{ asset('img/ポイント２.png') }}" alt="パソコンやスマホで使える" width="300px">
                <p>２．パソコンやスマホで使える</p>
                <p>みんなが平等かつカンタンに扱えます。対応機種を気にする必要はありません！</p>
            </section>
            <section class="event-grid hello">
                <img src="{{ asset('img/ポイント３.png') }}" alt="愛用者がたくさんいます" width="300px">
                <p>３．愛用者がたくさんいます</p>
                <p>6年前から様々な方々、イベントに使われてきました。これからも幹事さんを応援しつづけます！</p>
            </section>
        </section>
    </body>
</html>
