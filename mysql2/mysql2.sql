/*
    忘记密码怎么办？
    重装WAMP ！(一定要备份数据)

1.mysqld 关掉
2.打开DOS窗口 切换到D:\wamp\bin\mysql\mysql5.7.9\bin
输入以下命令：
mysqld --skip-grant-talbes
此时DOS窗口已经不能动了，它已经韩勇3306端口
3.新开一个DOS窗口
输入mysql
选择 use mysql 数据库
UPDATE user SET authentication_string=password("123456") where user = "root";

4.设置成功后
刷新权限（必须步骤):flush privileges;

5.退出所有的DOS 并重启mysql服务
----------------------------
导出数据
!(必须在mysql外进行)
mysqldump -uroot -p 库名 表名1 表名2 > 指定保存文件的路径
mysqldump -uroot -p s47 s47_user > d:/s47_user.sql

导入数据
!(必须在mysql外进行)
mysql -uroot -p 库名 < 指定的数据表文件
mysql -uroot -p s60 < d:/s47_user.sql

CREATE TABLE [IF NOT EXISTS] `表名`(
    `字段名1` 数据类型 [字段属性],
    `字段名2` 数据类型 [字段属性],
    `字段名3` 数据类型 [字段属性]
)[表引擎= 引擎名][default charset = utf8];
*/
#UNSIGNED 的特性
CREATE TABLE IF NOT EXISTS `test0`(
    `num` TINYINT
)engine = InnoDB DEFAULT CHARSET = UTF8;

#添加数据测试
INSERT INTO `test0` VALUES(50);
INSERT INTO `test0` VALUES(-30);
INSERT INTO `test0` VALUES(300);
INSERT INTO `test0` VALUES(-300);

CREATE TABLE IF NOT EXISTS `test1`(
    `` TINYINT UNSIGNED
)ENGINE = INNODB DEFAULT CHARSET = UTF8;
INSERT INTO `test1` values(50);
INSERT INTO `test1` values(-30);
insert into `test1` values(300);
insert into `test1` values(-300);

#零填充 zerofill
CREATE TABLE IF NOT EXISTS `test2`(
    `num` int(5) zerofill
)engine = Innodb default charset = utf8;
insert into `test2` values(50);
insert into `test2` values(50000);

#自增 / 主键
create table if not exists `test3`(
    `id` int unsigned auto_increment primary key,
    `name` varchar(255)
)engine = Innodb default charset=utf8;

#自增字段配合主键来一起使用
#一个表只能有一个自增字段
#一个表只能有一个主键，主键从1开始自增的，无符号
#如果是自增主键，字段，可以省略传值
insert into `test3` values(null,'TOO1');

#删除所有数据
DELETE FROM `test3`;
insert into `test3` values (null,'呵呵呵');

#id重置为0开始自增
1.删表重建 重新导入数据
2.TRUNCATE TABLE test3;

#浮点数 decimal(m,d) 精度，标度 标度为小数点后的长的
create talbe if not exists `test4`(
    `price` decimal(6,2)
)engine = InnoDB default charset = utf8;

insert into `test4` values('100');
insert into `test4` values('9999');
insert into `test4` values('998.99');
insert into `test4` values('123456789');

#字符串 定长和变长
create table if not exists `test5`(
    `name` varchar(255) unique,
    `pwd` char(32) not null
)engine = InnoDB default charset=utf8;

INSERT INTO `test5` values('马小达',md5('123456'));
INSERT INTO `test5` values('mxd',md5('123456'));

#字符串 定长和变长
CREATE TABLE IF NOT EXISTS `test5`(
    `name` varchar(255) unique,
    `pwd` char(32) not null
)engine = InnoDB  DEFAULT CHARSET= UTF8;
INSERT INTO `test5` VALUES ('马小达',md5('123456'));
INSERT INTO `test5` VALUES ('mxd',md5('123456'));

#ENUM 类型 百里挑一
CREATE TABLE IF NOT EXISTS `test6`(
    `sex` enum('man','woman','towinone')
)engine = innodb default charset=utf8;
insert into `test6` values('man');
insert into `test6` values('woman');
insert into `test6` values('hehe');

#SET类型 百里跳N
CREATE TABLE IF NOT EXISTS `test7`(
    `sex` set('man','woman','towinone');
)engine = innodb default charset = utf8;

insert into `test7` values('man,woman,hehe,haha');

#默认值
create table if not exists `test8`(
    `str` varchar(255) not null default 'PHP',
    `str1` varchar(255)
)engine = InnoDB default charset=utf8;
insert into `test8` (`str1`) values('a');
insert into `test8` (`str1`) values('b');
insert into `test8` (`str1`) values('b');
insert into `test8` values ('html','c');
