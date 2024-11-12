<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>家計簿アプリ</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <header>
        <h1>家計簿アプリ</h1>
    </header>

    <section class="container">
        <div class="balance">
            <h3>支出一覧</h3>
            <table>
                <thead>
                    <tr>
                        <th>日付</th>
                        <th>カテゴリ</th>
                        <th>金額</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>

        <div class="add-balance">
            <h3>支出の追加</h3>
            <form action="/balances" method="POST">
                <label for="date">日付：</label>
                <input type="date" id="date" name="date">

                <label for="category">カテゴリ：</label>
                <input type="category" id="category" name="category">
  
                <label for="price">金額：</label>
                <input type="price" id="price" name="price">

                <button type="submit">追加</button>
            </form>
        </div>
    </section>
</body>
</html>