#http://db-engines.com/en/ranking
-- 我是单行注释
/*
1
2
3
SQL
Structured Query Language 结构化查询语言
用于访问和处理数据库的标准的计算机语言

DDL Data Definition Language 数据定义语言
CREATE 创建 ALTER 修改 DROP 删除 对库对表的操作

DML Data Manipulation Language 数据操作语言
GRANT 分配权限REVOKE 收回权限

打开服务 services.msc
#win + R 输入cmd 回车
键入 mysql --help 查看是否有帮助信息

mysql -uroot -p回车后输入密码
mysql -uroot -p123456
mysql -h指定的IP地址 -uroot -p

#每条命令的结束使用分号隔开或\g
#\c 清除之前未执行的命令
#\q 退出mysql
#\s 查看当前服务器状态
#help; 或 \h 查看帮助命令
#\d 更改执行符
*/
#查看数据库们
SHOW DATABASES

#修改新密码
SET password = password('123456');

#新建数据库
CREATE DATABASE IF NOT EXISTS `s60`;
#[IF NOT EXISTS]:如果不存在才创建

#删除数据库
DROP DATABASE IF EXISTS `S60`;
#[IF EXISTS]:如果存在才删除

#选择数据库
USE `s60`

#查看数据表
SHOW TABLES;    

#创建一张数据表
CREATE TABLE IF NOT EXISTS `S60_user`(
    #字段及属性
    `id` int,
    `name` varchar(255),
    `sex` TINYINT,
    `age` TINYINT,
    `tel` CHAR(11)
)ENGINE = InnoDB DEFAULT CHARSET = utf8;
#表名/库名/字段名使用反引号，它可以区分系统关键字
#CHARSET utf8
#字段名使用反引号,每条字段和属性用逗号分隔开 最后一条木有逗号

#查看表结构
DESC `s60_user`
SHOW CREATE TABLE `s60_user`;

#删除数据表
DROP TABLE IF EXISTS `s60_user`;

---------------
#添加数据
#单条数据
INSERT INTO `表名` (`字段1`,`字段2`) VALUES('值1','值2');
INSERT INTO `s60_user` SET `age`='17' WHERE `name`='seeker';

---------------------
#删除数据
#不带where条件就是耍流氓
DELETE FROM `表名` WHERE `字段`='值';
DELETE FROM `s60_user` WHERE `id` = '3';

#清空数据
TRUNCATE TABLE `s60_user`;