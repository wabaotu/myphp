<?php
// 定义一个壁纸数组，每个元素是一个壁纸的url
$wallpapers = array(
    "https://z1.ax1x.com/2023/11/30/pirGifP.jpg",
"https://z1.ax1x.com/2023/11/30/pirGVOg.jpg",
"https://z1.ax1x.com/2023/11/30/pirGE6S.jpg",
"https://z1.ax1x.com/2023/11/30/pirGCFI.jpg",
"https://z1.ax1x.com/2023/11/30/pirGPYt.jpg",
"https://z1.ax1x.com/2023/11/30/pirGAl8.jpg",
"https://z1.ax1x.com/2023/11/30/pirGkSf.jpg",
"https://z1.ax1x.com/2023/11/30/pirGemQ.jpg",
    
    // ...更多壁纸
);

// 从数组中随机选择一个壁纸
$random_wallpaper = $wallpapers[array_rand($wallpapers)];

// 设置响应的内容类型为图片
header("Content-Type: image/jpeg");

// 读取并输出选中的壁纸
readfile($random_wallpaper);
?>
