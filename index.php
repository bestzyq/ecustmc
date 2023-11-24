<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>ECUST Minecraft Server</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body {
            background-image: url('./home-hero-1200x600.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            margin: 0;
            padding: 0;
            height: 100vh;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .top-menu {
            background-color: rgba(51, 51, 51, 0.7); /* Semi-transparent black */
            padding: 10px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .top-menu a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
        }

        .container {
            width: 60%;
            background-color: rgba(240, 240, 240, 0.7);
            padding: 2% 5%;
            border-radius: 10px;
            margin-top: 20px;
        }

        ul {
            padding-left: 20px;
        }

        ul li {
            line-height: 2.3;
        }

        a {
            color: #000;
        }
        
        .footer {
            margin-top: auto;
            text-align: center;
            color: #fff;
            background-color: rgba(51, 51, 51, 0.7); /* Semi-transparent black for contrast */
            padding: 10px;
            width: 100%;
        }

        .footer a {
            text-decoration: none; /* Remove underline from the hyperlink */
            color: #fff; /* Set the color of the hyperlink */
        }
    </style>
    <!-- 添加 viewport meta 标签 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="top-menu">
        <a href="./" target="_blank">首页</a>
        <a href="./wiki.html" target="_blank">文档</a>
    </div>
    <div class="container">
        <h1>欢迎来到ECUST Minecraft Server！</h1>
        <h3>服务器地址：</h3>
        <ul>
            <li>1.20.1：</li>
            <ul><li>mcs.ecustcic.eu.org:53368</li></ul>
            <ul><li>
            <?php
            // 使用 file_get_contents 获取服务器信息
            $serverInfoJson = file_get_contents('https://mcsp.zyqs.xyz/');
            
            // 解析 JSON 数据
            $serverInfoData = json_decode($serverInfoJson, true);
            
            // 输出服务器信息
            if ($serverInfoData['error'] == '无法连接到服务器') {
                echo '无法连接到服务器';
            } elseif ($serverInfoData !== null && ($serverInfoData['version'] !== false || $serverInfoData['hint'] !== false || $serverInfoData['onlinePlayers'] !== false)) {
                echo '<div class="server-info">';
                echo '服务器实时信息：';
                echo '<ul>';
                
                echo '<i class="fas fa-tag"></i> 版本：' . $serverInfoData['version'] . '&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-info-circle"></i> 提示：' . $serverInfoData['hint'] . '&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-users"></i> 在线人数：' . $serverInfoData['onlinePlayers'] . '/20';
                
                echo '</ul>';
                echo '</div>';
            } else {
                echo "无法获取服务器信息";
            }
            ?>
            </li></ul>
            <li>1.19.2：</li>
            <ul>
                <li>校内：mc.ecust.cloud</li>
                <li>校外：mc.nakiri.site</li>
                <li>实时地图：<a href="https://map.ecust.cloud/" target="_blank">点击进入（仅校内）</a> <a href="https://mcmap.ecustcic.eu.org/" target="_blank">点击进入</a></li>
                <li>
                <?php
                // 使用 file_get_contents 获取服务器信息
                $serverInfoJson = file_get_contents('https://mcsp.zyqs.xyz/19-2.php');
                
                // 解析 JSON 数据
                $serverInfoData = json_decode($serverInfoJson, true);
                
                // 输出服务器信息
                if ($serverInfoData['error'] == '无法连接到服务器') {
                    echo '无法连接到服务器';
                } elseif ($serverInfoData !== null && ($serverInfoData['version'] !== false || $serverInfoData['hint'] !== false || $serverInfoData['onlinePlayers'] !== false)) {
                    echo '<div class="server-info">';
                    echo '服务器实时信息：';
                    echo '<ul>';
                    
                    echo '<i class="fas fa-tag"></i> 版本：' . $serverInfoData['version'] . '&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-info-circle"></i> 提示：' . $serverInfoData['hint'] . '&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-users"></i> 在线人数：' . $serverInfoData['onlinePlayers'] . '/20';
                    
                    echo '</ul>';
                    echo '</div>';
                } else {
                    echo "服务器离线";
                }
                ?>
                </li>
            </ul>
        </ul>
    </div>
    <div class="footer">
        <p>ECUST Computer Information Communication Club</p>
        <!--
        <p><a href="#" target="_blank">沪ICP备00000000号-1</a> | <a class="nav-link" target="_blank" href="https://www.beian.gov.cn/portal/registerSystemInfo?recordcode=" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="https://www.beian.gov.cn/img/ghs.png" style="float:left;"/>沪公网安备 号</p></a></p>
        -->
    </div>
</body>
</html>
