# VR全景客户端

VR全景展示已应用于携程去哪儿，飞猪，大众点评，支付宝口碑，汽车之家等大型平台网址。但VR全景涉及拍摄，制作，展示等多个方面，中小平台和小程序开发商添加VR全景功能，开展VR业务负担较重。

幻镜VR联盟为推广VR全景应用，推出了VR全景客户端与后台制作系统分离的模式：各平台网站可直接使用本客户端代码在网站，App和小程序中实现VR全景展示功能；商家客户VR需求可发给幻镜联盟全国各地代理商拍摄制作。
使用本VR全景客户端，平台网站可零花费迅速开展VR全景业务。

## 目录

* 服务器端文件
  * server/getdata.php
* 客户端入口文件
  * tour.html
* 全景模块文件夹
  * vrmodule/
* 静态资源文件夹
  * static/

## 实现原理

传入一个全景ID给客户端入口文件tour.html,例如：
```xml
tour.html?id=7002fb055d0fa518
```

全景模块会访问本地唯一的一个服务器文件 getdata.php 从幻镜VR联盟服务器上获取配置信息，在客户端展示全景图片与热点。


```xml
<?php

error_reporting(E_ALL^E_NOTICE^E_WARNING);
$getid = $_GET['id'];
$postid =  $_POST['id'];
$url='http://720ybf.com/partner/serverpro.php?getid='.$getid.'&postid='.$postid.'&key=publickey';
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


## 高级配置

根据服务器环境不同，用户可以配置下面3个全局变量：

  - VR_ID：      全景ID。   默认采用的是读取URL上传入的参数，如： /tour.html?id=7002fb055d0fa518
                       如用户采用了不同的URL结构，需要自行获取全景ID
  - VR_SERVER：  服务器页面。 VR模块通过改页面从幻镜联盟服务器读取数据和配置信息。
                        如用户改变了路径，或修改了名称，需要设置该变量。
                        该变量设置的是相对路径。
  - VR_MODULE:   全景模块文件夹路径。 该模块包含多个文件。
                        如果用户改变了全景模块的路径，或修改了名称，需要设置改变量。
                        该变量设置的是相对路径。

```xml
<script>
var VR_ID;

      var href = window.location.href;
      if(href.lastIndexOf('&')>0){
        VR_ID = href.substring(href.lastIndexOf('id=') + 3, href.lastIndexOf('&'));
      }else{
        VR_ID = href.substring(href.lastIndexOf('id=') + 3);
      }

var VR_SERVER = 'server/getdata.php';
var VR_MODULE = 'vrmodule/';
</script>

<!-- 特别注意： 如果配置了 VR_MODULE 参数，请同时修改下面JS文件的路径。该 tour.js 文件放置在全景模块文件夹下。-->
<script language="JavaScript" type="text/javascript" src="vrmodule/tour.js"></script>
```


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
