<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOBS2</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-2.1.3.min.js"></script>
</head>
<body>
    <p>JOBS2</p>
    <h1>職務情報 登録フォーム</h1>
    <h2>当該職務の内容</h2>
    <form method="post" action="form_post2_jobs2r.php">
        <table id="table">
            <tr>
                <th>項目</th>
                <th>値</th>
            </tr>
            <tr>
                <td>入力日</td>
                <td>
                    <!-- 年、月、日の選択 -->
                    <select name="year">
                        <option value="">--年--</option>
                        <!-- 年の選択肢をここに追加 -->
                    </select>
                    <select name="month">
                        <option value="">--月--</option>
                        <!-- 月の選択肢をここに追加 -->
                    </select>
                    <select name="day">
                        <option value="">--日--</option>
                        <!-- 日の選択肢をここに追加 -->
                    </select>
                </td>
            </tr>
            <tr>
                <td>組織コード</td>
                <td><input type="text" name="orgcode" size="20"></td>
            </tr>
            <tr>
                <td>所属</td>
                <td><input type="text" name="orgname" size="20"></td>
            </tr>
            <tr>
                <td>職位</td>
                <td><input type="text" name="title" size="20"></td>
            </tr>
            <tr>
                <td>経営職務グレード</td>
                <td><input type="text" name="grade" size="20"></td>
            </tr>
            <tr>
                <td>就任者 従業員番号</td>
                <td><input type="text" name="employeeid" size="20"></td>
            </tr>
            <tr>
                <td>就任者 氏名</td>
                <td><input type="text" name="employeename" size="20"></td>
            </tr>
            <tr>
                <td>当該職務の役割</td>
                <td><input type="text" name="mission" size="20"></td>
            </tr>
            <tr>
                <td>管下組織の定量情報</td>
                <td><input type="text" name="profit" size="20"></td>
            </tr>
            <tr>
                <td>管下組織の従業員数</td>
                <td><input type="text" name="employeenum" size="20"></td>
            </tr>
            <tr>
                <td>備考</td>
                <td><input type="text" name="memo" size="20"></td>
            </tr>
        </table>
        <p><input type="submit" value="登録"></p>
    </form>
    <script>
        // 職務情報の手入力

        // 年: 2023~2100
        let yearHTML = "";
        for (let i = 2023; i < 2101; i++) {
            yearHTML += `<option value="${i}">${i}</option>`;
        }
        $("select[name='year']").html(yearHTML);

        // 月: 1~12
        let monthHTML = "";
        for (let i = 1; i <= 12; i++) {
            monthHTML += `<option value="${i}">${i}</option>`;
        }
        $("select[name='month']").html(monthHTML);

        // 日: 1~31
        let dayHTML = "";
        for (let i = 1; i <= 31; i++) {
            dayHTML += `<option value="${i}">${i}</option>`;
        }
        $("select[name='day']").html(dayHTML);
    </script>
</body>
</html>
