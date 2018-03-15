# VR全景客户端

VR全景展示已应用于携程去哪儿，飞猪，大众点评，支付宝口碑，汽车之家等大型平台网址。但VR全景涉及拍摄，制作，展示等多个方面，中小平台和小程序开发商添加VR全景功能，开展VR业务负担较重。

幻镜VR联盟为推广VR全景应用，推出了VR全景客户端与后台制作系统分离的模式：各平台网站可直接使用本客户端代码在网站，App和小程序中实现VR全景展示功能；商家客户VR需求可发给幻镜联盟全国各地代理商拍摄制作。
使用本VR全景客户端，平台网站可零花费迅速开展VR全景业务。

## 目录

* 服务器端文件
  * getdata.php
* 客户端文件
  * tour.html
  * 其它...

## 实现原理

传入一个全景ID给客户端入口文件tour.html,例如：
```xml
tour.html?id=7002fb055d0fa518
```

客户端会访问本地唯一的一个服务器文件 getdata.php 从幻镜VR联盟服务器上获取配置信息，在客户端展示全景图片与文字。


```xml
<?php

error_reporting(E_ALL^E_NOTICE^E_WARNING);
$getid = $_GET['id'];
$postid =  $_POST['id'];
$url='http://720ybf.com/partner/serverpro.php?getid='.$getid.'&postid='.$postid;
$html = file_get_contents($url);
echo $html;

?>
```

## 使用方法

本文件夹在PHP环境下可直接运行，只需传入全景id即可。例如下载后文件名为vrclient,放置在PHP环境根目录下，则访问地址为：

  - http://服务器地址/vrclient/tour.html?id=c2ec65dd93d604a5
  - http://服务器地址/vrclient/tour.html?id=7e1d1999913da196
  - http://服务器地址/vrclient/tour.html?id=1248a9e8f8994a9b
  - http://服务器地址/vrclient/tour.html?id=3ae87581791df709
  - http://服务器地址/vrclient/tour.html?id=3e7ee6462929a592
  - http://服务器地址/vrclient/tour.html?id=68e4437414ae2e83


## 在线演示

* [http://720ybf.com/vrclient/tour.html?id=7002fb055d0fa518](http://720ybf.com/vrclient/tour.html?id=7002fb055d0fa518)
* [http://720ybf.com/vrclient/tour.html?id=1248a9e8f8994a9b](http://720ybf.com/vrclient/tour.html?id=1248a9e8f8994a9b)
* [http://720ybf.com/vrclient/tour.html?id=7e1d1999913da196](http://720ybf.com/vrclient/tour.html?id=7e1d1999913da196)
* [http://720ybf.com/vrclient/tour.html?id=c2ec65dd93d604a5](http://720ybf.com/vrclient/tour.html?id=c2ec65dd93d604a5)



## 商业合作

幻镜VR联盟是由杭州幻镜科技有限公司运营的全国720全景拍摄服务网络，已经在全国80＋个城市开通服务。
联盟制定了统一的价格和质量标准，为餐饮，美容，健身，教育等垂直行业平台提供标准化全景拍摄与制作服务。

幻镜联盟对外的VR全景拍摄制作服务制定的市场价格为：
  - 16K清晰度，单反相机拍摄， 1800元起
  - 12K清晰度，商业全景相机拍摄，1200元起
  
幻镜联盟合作平台可享受折扣价格。

全景照片由幻镜VR联盟拍摄制作，服务器端由杭州幻镜科技运营，客户端集成在垂直行业网站，App或微信端展示VR全景。

## 关于我们

  - 杭州幻镜科技有限公司
  - 地址：杭州市滨江区聚光科技产业园C座3W空间
  - 电话：18958021010
  - 网址：www.720ybf.com
