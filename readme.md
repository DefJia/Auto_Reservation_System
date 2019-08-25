# 后花园观景台抢票系统

[TOC]

## 前言

​		这个网站是我基于Laravel框架写的第一个完整意义上的网站，也是一个很早就开始构想的应用。但在很长一段时间内，都没有进展，只有一些早期写好的Python脚本可以基本满足我个人的使用需求。

​		灵感来源于各大厂商的火车票抢票系统，抢票-定制需求-分配加速包-后台开始抢票-抢到票通知用户，同时，由于后花园观景台购票系统和12306网站也有着很多共同点，也在很大程度上催生了这个应用。

## 基本概述

### 架构

​	这个应用包含前后端和一些服务器端的定时脚本，前端基于PHP的[Laravel](https://laravel.com/)框架，后端采用Python实现（虽然PHP也可以实现但是还是Python好用一些），暂时对于Python的框架结构只有Django有一点了解，在之后的版本中会考虑采用，前期通过一种不够优雅的方式，即通过PHP的[shell_exec](http://php.net/manual/zh/function.shell-exec.php)函数执行Python脚本并获取输出值的方式来做部分交互，另外一部分交互则通过数据库进行。

​		（2019年8月更）目前计划在内外网分别搭建预约脚本和Web页面，预约脚本定时向服务器发送请求获取当前配置信息，维护一个配置文件，来执行相应操作。

### 版本1.0主要功能

- 发布抢票需求
- 查看抢票信息
- 会员特权操作
- 个人设置

### 后期可拓展功能

- 管理员后台界面
- 充值功能与配置权重（加速包）
- 基于[Storm](http://storm.apache.org/)或[Spark](https://spark.apache.org/)进行大数据分析，刻画用户画像
- 机器学习预测用户行为

### 环境

- PHP 7.2
- Python 3.7
- Mysql 5.5

### 文档

​	可查看Docu文件夹中的内容。

## 参考资料

- 《Laravel框架关键技术解析》 陈昊，陈远征，陶业荣等 《电子工业出版社》
- [Laravel5.5中文文档](https://laravel-china.org/docs/laravel/5.5)
- LaravelCollective文档 - [中文](http://www.laramist.com/articles/12) & [英文](https://laravelcollective.com/docs/master/html)
- [Laravel数据库基本操作](http://laravelacademy.org/post/8029.html)

------

CopyRight © 2018-2019 [Defjia](https://blog.defjia.top/). All rights reserved.