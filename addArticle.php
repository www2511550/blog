<?php
/**
 * 添加文章
 * User: chengcong
 * Date: 2018/5/13
 * Time: 下午8:10
 */
require 'zb_system/function/c_system_base.php';

// 创建连接
$conn = new mysqli('119.29.27.122', 'root', 'a2511550', 'juanzhu');
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$conn->query("set names utf8");
$sql = "SELECT * FROM jz_article ORDER  BY id ASC LIMIT 20";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出数据
    while ($row = $result->fetch_assoc()) {
        $article = new Post();
        $article->CateID = 0;
        $article->AuthorID = 0;
        $article->Tag = 0;
        $article->Status = 0;
        $article->Type = 0;
        $article->Alias = 0;
        $article->Title = $row['title'];
        $article->Intro = $row['daodu'];
        $article->Content = getContent($row);
        $article->PostTime = time();

        var_dump($article->save());

        echo "id: " . $row["id"] . "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();


/**
 * 生成内容
 * @param $row
 * @return string
 */
function getContent($row){

    return '<p style="text-align: center;"><img src="'.$row['cover'].'" alt="'.$row['title'].'"></p>
    <p style="text-align:center"><a href="'.$row['buy_url'].'" target="_blank">点我购买！！</a></a></p>
    <p>'.$row['intro'].'</p>
    ';

}



