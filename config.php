<?php
require_once ('lib/MysqliDb.php');
try {
    $project_title = isset($_POST['project_title']) ? $_POST['project_title']: '';
    $project_desc = isset($_POST['project_desc']) ? $_POST['project_desc'] : '';
    $project_json = isset($_POST['project_json']) ? $_POST['project_json'] : '';
    if (!empty($project_title) && !empty($project_json)) {
        $db = new MysqliDb (Array (
            'host' => '127.0.0.1',
            'username' => 'root',
            'password' => 'root',
            'db'=> 'swagger_api',
            'port' => 3306,
            'prefix' => '',
            'charset' => 'utf8mb4'));
        $data = Array ("project_title" => "test",
            "project_desc" => "test",
            "project_json" => 'test'
        );
        $id = $db->insert ('swagger_project', $data);
        if ($id)
            echo "<script>alert('导入配置成功. Id=" . $id . "')</script>";
    }
} catch (\Exception $e) {
    throw new \Exception($e->getMessage());
}
?>
<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Swagger UI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Source+Code+Pro:300,600|Titillium+Web:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./swagger-ui.css" >
    <link rel="icon" type="image/png" href="./favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="./favicon-16x16.png" sizes="16x16" />
    <style>
        html
        {
            box-sizing: border-box;
            overflow: -moz-scrollbars-vertical;
            overflow-y: scroll;
        }

        *,
        *:before,
        *:after
        {
            box-sizing: inherit;
        }

        body
        {
            margin:0;
            background: #fafafa;
        }
        table.swagger-config
        {
            width: 300px;
            text-align: center;
            margin: 0 auto;
        }
        .swagger-config tr td
        {
            width: 30px;
            font-size: 14px;
            float: left;
            line-height: 30px;
            vertical-align: middle;
        }
        .swagger-config-input
        {
            border: none;
            height: 30px;
            line-height: 30px;
        }
    </style>
</head>

<body>
<div id="swagger-ui">
    <section data-reactroot="" class="swagger-ui swagger-container">
        <div class="topbar">
            <div class="wrapper">
                <div class="topbar-wrapper"><a class="link"><img height="30" width="30"
                                                                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAAAYFBMVEUAAABUfwBUfwBUfwBUfwBUfwBUfwBUfwBUfwBUfwBUfwBUfwBUfwBUfwBUfwB0lzB/n0BfhxBpjyC0x4////+qv4CJp1D09++ft3C/z5/K16/U379UfwDf58/q79+Ur2D2RCk9AAAAHXRSTlMAEEAwn9//z3Agv4/vYID/////////////////UMeji1kAAAD8SURBVHgBlZMFAoQwDATRxbXB7f+vPKnlXAZn6k2cf3A9z/PfOC8IIYni5FmmABM8FMhwT17c9hnhiZL1CwvEL1tmPD0qSKq6gaStW/kMXanVmAVRDUlH1OvuuTINo6k90Sxf8qsOtF6g4ff1osP3OnMcV7d4pzdIUtu1oA4V0DZoKmxmlEYvtDUjjS3tmKmqB+pYy8pD1VPf7jPE0I40HHcaBwnue6fGzgyS5tXIU96PV7rkDWHNLV0DK4FkoKmFpN5oUnvi8KoeA2/JXsmXQuokx0siR1G8tLkN6eB9sLwJp/yymcyaP/TrP+RPmbMMixcJVgTR1aUZ93oGXsgXQAaG6EwAAAAASUVORK5CYII="
                                                                 alt="Swagger UI"><span>创建配置</span></a>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <form name="swagger-config-form" method="post">
                <table class="swagger-config">
                    <tr>
                        <td>名称</td>
                        <td><input type="text" name="project_title" class="swagger-config-input"></td>
                    </tr>
                    <tr>
                        <td>简介</td>
                        <td><input type="text" name="project_desc" class="swagger-config-input"></td>
                    </tr>
                    <tr>
                        <td>Json</td>
                        <td><input type="text" name="project_json" class="swagger-config-input"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input class="btn" type="submit" value="提交"></td>
                    </tr>
                </table>
            </form>
        </div>
    </section>
</div>
</body>
</html>
