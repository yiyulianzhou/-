#对表属性的操作
1.修改表名
ALTER TABLE `旧表名` RENAME AS `新表名`;
ALTER TABLE `test8` RENAME AS `hehe`;

2.添加字段
ALTER TABLE `表名` ADD `字段名` 数据类型 字段属性;
ALTER TABLE `hehe` ADD `num` SMALLINT UNSIGNED NOT NULL DEFAULT 0;

3.修改字段属性
ALTER TABLE `表名` MODIFY `字段名` 新的数据类型;
ALTER TABLE `hehe` MODIFY `num` INT UNSIGNED NOT NULL DEFAULT 0;

4.修改字段名 及字段属性
ALTER TABLE `表名` CHANGE `旧字段名` `新字段名` 新的数据类型及属性;
ALTER TABLE `hehe` CHANGE `str1` `type` CHAR(1);

5.删除字段
ALTER TABLE `表名` DROP `字段名`;
ALTER TABLE `hehe` DROP `num`;

6.修改表引擎
先查看mysql的表引擎 SHOW ENGINES;
查看当前表引擎 SHOW CREATE TABLE `hehe`; 

ALTER TABLE `表名` ENGINE='表引擎';
ALTER TABLE `hehe` ENGINE='MyISAM';

-------------------------------------------------------
ENGINE
    MyISAM  不支持事务  表锁机制
    InnoDB  支持事务  行锁机制

事务
begin     开启一个事务的回滚点
rollback  回滚一个事务,回到begin前的样子
commit    提交一个事务,只有被提交的事物,才会被真真的执行带mysql里

UPDATE `sw_test` SET `value`=value+500 WHERE id=2;


#删除多表
DROP TABLE hehe,s47_user,test0,test1,test2,test3,test4,test5,test6,test7;

CREATE TABLE IF NOT EXISTS `user`(
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) UNIQUE NOT NULL,
    `sex` TINYINT UNSIGNED NOT NULL DEFAULT 0,
    `age` TINYINT UNSIGNED NOT NULL DEFAULT 0,
    `province` VARCHAR(255) NOT NULL DEFAULT ''
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#查看表结构
DESC `user`;
+----------+---------------------+------+-----+---------+----------------+
| Field    | Type                | Null | Key | Default | Extra          |
+----------+---------------------+------+-----+---------+----------------+
| id       | int(10) unsigned    | NO   | PRI | NULL    | auto_increment |
| name     | varchar(255)        | NO   | UNI | NULL    |                |
| sex      | tinyint(3) unsigned | NO   |     | 0       |                |
| age      | tinyint(3) unsigned | NO   |     | 0       |                |
| province | varchar(255)        | NO   |     |         |                |
+----------+---------------------+------+-----+---------+----------------+

#插入测试数据
INSERT INTO `user` VALUES
(null,'黄超','1','18','江苏'),
(null,'班长','2','45','新疆'),
(null,'蒯金伟','0','17','江苏'),
(null,'章心怡','0','16','浙江'),
(null,'华婷','0','15','江苏'),
(null,'吴昊','1','25','江苏'),
(null,'邓团','1','25','上海'),
(null,'李博文','1','100','信阳'),
(null,'王强','1','10','上海'),
(null,'施蓓','0','16','上海');

CREATE TABLE `s47_user` LIKE `user`;

INSERT INTO `s47_user` (id,name,sex,age,province) SELECT * FROM `user` WHERE id = 5;
----------------------------------------------
#查询的语句结构
SELECT 字段列表
FROM 表名
[WHERE 条件表达式]
[GROUP BY 字段名1 [HAVING 条件表达式2] ]
[ORDER BY 字段名2 [ASC|DESC]]
[LIMIT]

2 单表查询
------------
2.1 查询所有字段
---------------
  列出所有字段
  SELECT 字段列表 FROM 表名;

  使用*查询所有字段
  SELECT * FROM 表名;

2.2 查询指定字段
---------------
  SELECT `字段1`,`字段2` FROM `表名`;

2.3 查询指定记录
---------------
  SELECT 字段列表 FROM 表名 WHERE 条件表达式;
  SELECT id,name FROM user WHERE age=100;
  SELECT id,name,age FROM user WHERE age<18;


  WHERE子句的条件：
  比较 = < <= > >= != <>
  指定范围 BETWEEN AND、NOT BETWEEN AND
  指定集合 IN、NOT IN     
  匹配字符 LIKE、NOT LIKE 
  是否为空值 IS NULL、IS NOT NULL
  多个条件查询 AND、OR

2.4 带IN关键字查询
-----------------
  SELECT 字段列表 FROM 表名 WHERE 字段名 [NOT] IN (元素1, 元素2, 元素N)
  #查出'1','3','8','88','888'的值
  SELECT * FROM user WHERE id IN ('1','3','8','88','888');
  #查出 非'1','3','8','88','888' 的值
  SELECT * FROM user WHERE id NOT IN ('1','3','8','88','888');

2.5 带BETWEEN AND的范围查询
--------------------------
  SELECT 字段列表 FROM 表名 WHERE [NOT] BETWEEN 值1 AND 值2
  #查出 3-10 的所有值
  SELECT * FROM user WHERE id BETWEEN 3 AND 10;
  #查出非 3-6 的所有值
  SELECT * FROM user WHERE id NOT BETWEEN 3 AND 6;


2.6 带LIKE的字符串匹配查询
-------------------------
  SELECT 字段 FROM 表名 WHERE [NOT] LIKE '字符串'
  %-任意长度的字符串  0 1 多
  _-表示单个字符  1

#插入测试数据
INSERT INTO `user` VALUES
(null,'老王','1','40','隔壁的'),
(null,'小王','1','40','北京'),
(null,'小王八','1','4','纽约'),
(null,'小霸王','1','4','上海'),
(null,'王老五','1','4','江苏'),
(null,'王老吉','1','4','安徽'),
(null,'王尼玛','1','40','深圳'),
(null,'王中王','1','40','北京');

# 王xx
SELECT * FROM user WHERE name LIKE '王__';
# 王x  或 王xx  或 王N...
SELECT * FROM user WHERE name LIKE '王%';
# x王x
SELECT * FROM user WHERE name LIKE '_王_';
#所有带'王'字的
SELECT * FROM user WHERE name LIKE '%王%';

2.7 带AND的多条件查询
--------------------
  SELECT 字段列表 FROM 表名 WHERE 条件表达式1 AND 条件表达式2 [... AND 条件表达式N]
  #  2~10的数据
  SELECT * FROM user WHERE id>=2 AND id<=10;

2.8 带OR的多条件查询
------------------
  SELECT 字段列表 FROM 表名 WHERE 条件表达式1 OR 条件表达式2 [... OR 条件表达式N]
  SELECT * FROM user WHERE id=5 OR age=18;

2.9 查询结果不重复
------------------
  SELECT DISTINCT 字段列表 FROM 表名
  #无重复值
  SELECT DISTINCT province FROM user;
  #全部
  SELECT province FROM user;

2.10 对查询结果排序
------------------
  SELECT * FROM 表名 ORDER BY 字段名 [ASC|DESC]

  SELECT * FROM user;
  #按ID倒序查询
  SELECT * FROM user ORDER BY id DESC;
  # 先按sex排正序  再按id排倒序
  SELECT * FROM user ORDER BY sex ASC,id DESC;
  #汉字按编码排序!!
  SELECT * FROM user ORDER BY province DESC;

2.11 分组查询
------------
  GROUP BY 字段名 [HAVING 条件表达式] 

  1.单独使用GROUP BY分组
  SELECT * FROM 表名 GROUP BY 字段名;
  SELECT * FROM user GROUP BY province;
  这样使用只显示了指定字段的第一条记录。
  说明单独使用GROUP BY只能显示每个分组的一条记录。这样使用意义不大。
  因此，一般使用集合函数时才使用GROUP BY关键字。
  sum()  求和
  min()  最小
  max()  最大
  avg()  平均值
  count() 统计个数
  group_concat() 再分组
  
  # 年龄总和
  SELECT sum(age) FROM user;
  # 最小年龄
  SELECT min(age) FROM user;
  #最大 年龄
  SELECT max(age) FROM user;
  #平均年龄
  SELECT avg(age) FROM user;
  # 统计用户个数
  SELECT count(id) FROM user;

  SELECT group_concat(name) FROM user;

  #统计各个省份有多少人
  SELECT province,count(id) AS 人数 FROM user GROUP BY province;
  #统计各个省份的平均年龄
  SELECT province,avg(age) AS 年龄 FROM user GROUP BY province;
  #各个省份里都有那些人
  SELECT province,group_concat(name) FROM user GROUP BY province;
  #HAVING 对结果再过滤 
  #查看 大于3人的省份和里面的人名
  SELECT province,group_concat(name) FROM user GROUP BY province  HAVING count(id)>3;


2.12 用LIMIT限制查询结果的数量
-----------------------------
  1.不指定初始值
  #查询结果的数量
  LIMIT 2
  SELECT * FROM user LIMIT 2;
  

  2.指定初始值
  LIMIT 初始位置(偏移量),记录数
  SELECT * FROM user LIMIT 0,2;
  SELECT * FROM user LIMIT 2,2;
  SELECT * FROM user LIMIT 5,10;

2.13 为表和字段取别名
--------------------
  1.为字段取别名
  字段名 [as] 别名
  SELECT province AS pro FROM user;

  SELECT province pro FROM user;
  

  2.为表取别名
  表名 [as] 别名
  
  #SELECT `user`.`province` pro FROM user AS u;
  SELECT u.province pro FROM user AS u;

3.多表查询  关联查询
CREATE TABLE IF NOT EXISTS `lover`(
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) UNIQUE NOT NULL,
    `sex` TINYINT UNSIGNED NOT NULL DEFAULT 0,
    `user_id` INT UNSIGNED
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `lover` VALUES
(null,'小花','0','2'),
(null,'小草','1','4'),
(null,'如花','2','7'),
(null,'阿凤','0','2'),
(null,'曾哥','1','5'),
(null,'芝芝','0','7');


------------
  内连查询是一种最常用的连接查询。
  可以查询两个或两个以上的表。
  #两表关系联查
  SELECT u.id, u.name AS uname, u.sex AS usex, u.age, u.province, l.id, l.name AS lname, l.sex AS lsex
  FROM user AS u,lover AS l
  WHERE u.id = l.user_id;

  #查询结果排序
  SELECT u.id, u.name AS uname, u.sex AS usex, u.age, u.province, l.id, l.name AS lname, l.sex AS lsex
  FROM user AS u,lover AS l
  WHERE u.id = l.user_id
  ORDER BY u.name;

  #查询结果再筛选
  SELECT u.id, u.name AS uname, u.sex AS usex, u.age, u.province, l.id, l.name AS lname, l.sex AS lsex
  FROM user AS u,lover AS l
  WHERE u.id = l.user_id AND u.id=2;


