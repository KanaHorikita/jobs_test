
<?php
session_start();

// フォームのデータをセッションに保存
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["jobs_data"][] = $_POST;
}

// セッションからデータを取得
$jobsData = isset($_SESSION["jobs_data"]) ? $_SESSION["jobs_data"] : array();

?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/phpstyle.css">
    <title>JOBS2</title>
</head>

<body>
<h1 id="logo"><a href="./top.html" id="title" >JOBS</a></h1>

<!-- タブの作成 -->
<div class="contents">
<div class="tab">
    <label>
        <input type="radio" name="tab" >
        <a href="./top.html">
        TOP</a>
    </label>
    <label>
        <input type="radio" name="tab">
        <a href="./jobs2test2.html">
        登録</a>
    </label>
    <label>
        <input type="radio" name="tab" checked>
        <a href="./form_post2_jobs2r.php">
        データベース
        </a>
    </label>
</div>


<table id="table">
        <tr class="tr">
            <th class="th">入力日</th>
            <th class="th">登録区分</th>
            <th class="th">組織コード</th>
            <th class="th">所属</th>
            <th class="th">職位</th>
            <th class="th">経営職務グレード</th>
            <th class="th">就任者 従業員番号</th>
            <th class="th">就任者 氏名</th>
            <th class="th">当該職務の役割</th>
            <th class="th">管下組織の定量情報</th>
            <th class="th">管下組織の従業員数</th>
            <th class="th">備考</th>
        </tr>
        <?php foreach ($jobsData as $data) : ?>
            <tr class="tr">
                <div>
                <td class="td"><?php echo $data["year"]."年".$data["month"]."月".$data["day"]."日"; ?></td>
                <td class="td"><?php echo $data["reason"]; ?></td>
                <td class="td"><?php echo $data["orgcode"]; ?></td>
                <td class="td"><?php echo $data["orgname"]; ?></td>
                <td class="td"><?php echo $data["title"]; ?></td>
                <td class="td"><?php echo $data["grade"]; ?></td>
                <td class="td"><?php echo $data["employeeid"]; ?></td>
                <td class="td"><?php echo $data["employeename"]; ?></td>
                <td class="td"><?php echo $data["mission"]; ?></td>
                <td class="td"><?php echo $data["profit"]; ?></td>
                <td class="td"><?php echo $data["employeenum"]; ?></td>
                <td class="td"><?php echo $data["memo"]; ?></td>
                </div>
                <!-- <td class="td"><button class="deletebtn" data-id="orgcode">削除</button></td> -->
            </tr>
        <?php endforeach; ?>
    </table>
</body>

<!-- 削除ボタン実装予定 -->

</html>
