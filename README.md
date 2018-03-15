# 网页VR全景客户端

基于Krpano提取的客户端模块，可方便集成在网站中，快速实现VR全景功能。服务器端由幻镜VR联盟运营。

## 目录

* 服务器端文件
  * getdata.php
* 客户端文件
  * index.html
  * tour.js
  * tour.swf
  * plugins/
  * skin/
  * sound/
  * assets/

## 实现原理

服务器端文件 getdata.php 根据全景id从幻镜VR联盟服务器上获取配置信息，在客户端展示VR全景。


```xml
<?php

$panoid = $_GET['id'];
$url='http://720ybf.com/partner/server.php?view='.$panoid;
$html = file_get_contents($url);
echo $html;

?>
```

## 使用方法

本文件夹在PHP幻镜下可直接运行，只需传入全景id即可。案例：

  - http://服务器地址/vrshow/index.html?id=c2ec65dd93d604a5
  - http://服务器地址/vrshow/index.html?id=7e1d1999913da196
  - http://服务器地址/vrshow/index.html?id=1248a9e8f8994a9b
  - http://服务器地址/vrshow/index.html?id=3ae87581791df709
  - http://服务器地址/vrshow/index.html?id=3e7ee6462929a592
  - http://服务器地址/vrshow/index.html?id=68e4437414ae2e83


## 在线演示

* [http://720ybf.com/partner/vrshow/index.html?id=1248a9e8f8994a9b](http://720ybf.com/partner/vrshow/index.html?id=1248a9e8f8994a9b)
* [http://720ybf.com/partner/vrshow/index.html?id=7e1d1999913da196](http://720ybf.com/partner/vrshow/index.html?id=7e1d1999913da196)
* [http://720ybf.com/partner/vrshow/index.html?id=c2ec65dd93d604a5](http://720ybf.com/partner/vrshow/index.html?id=c2ec65dd93d604a5)



## 商业合作

幻镜VR联盟是由杭州幻镜科技有限公司运营的全国720全景拍摄服务网络，已经在全国80＋个城市开通服务。联盟制定了统一的价格和质量标准，为餐饮，美容，健身，教育等垂直行业平台提供标准化全景拍摄与制作服务。

  - 16K清晰度，单反相机拍摄， 1800元起
  - 8K清晰度，商业全景相机拍摄，1200元起
  - 4K清晰度，普通全景相机拍摄，680元起

全景照片由幻镜VR联盟拍摄制作，服务器端由杭州幻镜科技运营，客户端集成在垂直行业网站，App或微信端展示VR全景。

## 关于我们

  - 杭州幻镜科技有限公司
  - 地址：杭州市滨江区聚光科技产业园C座3W空间
  - 电话：18958021010
  - 网址：www.720ybf.com
