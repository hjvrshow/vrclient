# VR全景客户端

VR全景作为一种吸引眼球的广告展示工具，已应用于携程去哪儿，飞猪，大众点评，支付宝口碑，汽车之家等大型平台网站。但VR全景涉及拍摄，制作，展示等多个方面，中小平台网站和软件开发商添加VR全景功能，开展VR业务负担较重。

幻镜VR联盟为推广VR全景应用，推出了VR全景客户端与后台制作系统分离的模式：各平台网站可直接使用本客户端代码在网站，App和小程序中实现VR全景展示功能；平台上的商家客户需要拍摄制作VR全景时，可发给幻镜联盟全国各地代理商拍摄制作。使用本VR全景客户端，平台网站无需额外投资便可迅速开展VR全景业务。



## 目录

* 客户端入口文件
  * basic.html     提供基本功能的720全景，类似720云
  * pro.html       提供带2D模型的VR漫游，类似百度街景
* 全景模块文件夹
  * vrmodule/
* 静态资源文件夹
  * static/

## 使用方法

下载后放置于服务器任意目录下，传入全景ID可直接运行。例如下载后文件名为vrclient, 放置在根目录下，则访问地址为：

```xml
http://127.0.0.1/vrclient/basic.html?id=c2ec65dd93d604a5
```

全景模块会根据全景ID从幻镜VR联盟服务器上获取配置信息，在客户端展示全景图片与热点。



## 在线演示


* [http://720ybf.com/vrclient/basic.html?id=7002fb055d0fa518](http://720ybf.com/vrclient/basic.html?id=7002fb055d0fa518)
* [http://720ybf.com/vrclient/basic.html?id=1248a9e8f8994a9b](http://720ybf.com/vrclient/basic.html?id=1248a9e8f8994a9b)
* [http://720ybf.com/vrclient/basic.html?id=7e1d1999913da196](http://720ybf.com/vrclient/basic.html?id=7e1d1999913da196)
* [http://720ybf.com/vrclient/basic.html?id=c2ec65dd93d604a5](http://720ybf.com/vrclient/basic.html?id=c2ec65dd93d604a5)



## 商业合作

幻镜VR联盟是由杭州幻镜科技有限公司运营的全国720全景拍摄服务网络，已经在全国80＋个城市开通服务。
联盟制定了统一的价格和质量标准，为餐饮，美容，健身，教育等垂直行业平台提供标准化全景拍摄与制作服务。

幻镜联盟为各平台网站提供统一价格的VR全景拍摄服务:
  - 16K清晰度，单反相机拍摄， 900元每套起
  - 12K清晰度，商业全景相机拍摄，500元每套起

全景照片由幻镜VR联盟拍摄制作，服务器端由杭州幻镜科技运营，客户端集成在垂直行业网站，App或微信端展示VR全景。

## 关于我们

  - 杭州幻镜科技有限公司
  - 地址：杭州市滨江区聚光科技产业园C座3W空间
  - 电话：18958021010
  - 网址：www.letsdo360.com
