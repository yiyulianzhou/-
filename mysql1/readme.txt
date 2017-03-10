0.连接mysql数据库的命令
    0.1 本机连接
    mysql -uroot -p123456
    0.2 指定连接192.168.20.110
    mysql -h192.168.20.110 -uroot -p123456

1.如何以行来显示结果？如何清除未执行的语句？
\c
\G

2.如题：
    如何新建数据库xdl_s60
        create database if not exists `xdl_s60`;
    如何选择这个数据库
        use xdl_s60;
    如何删除这个数据库？
        drop database if exists `xdl_s60`

3.新建一个svip的数据表，字段为id,name,level
    
        create table if not exists `svip`(
            `id` int,
            `name` varchar(255),
            `level` not null
        )engine=InnoDB default charset = utf8;
        删除该表
        drop table if exists `svip`

4.增
INSERT INTO `表名` (`字段1`,`字段2`...) values('值1','值2');
INSERT INTO `表名` VALUES('值1','值2','值3'),('值1','值2','值3'),('值1','值2','值n');

5.删
    delete from `表名` where `条件字段` = '条件值';
6.改
    update `表名` set `字段`='新值' where `字段`='值';

7.查
    select * from `表名`;
    select * from `表名` where `字段`='值';