<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>添加用户</h2>
    <form action="./action.php?a=add" method="post">
        name:
        <input type="text" name="name" placeholder="请输入用户名"><br><br>
        sex:
        <input type="radio" name="sex" value="0">女
        <input type="radio" name="sex" value="1" checked>男
        <input type="radio" name="sex" value="2">保密<br><br>
        age:
        <input type="text" name="age"><br><br>
        province:
        <select name="province">
            <option value="江苏">江苏</option>
            <option value="上海">上海</option>
            <option value="新疆">新疆</option>
            <option value="浙江">浙江</option>
            <option value="北京">北京</option>
            <option value="深圳">深圳</option>
            <option value="纽约">纽约</option>
        </select><br><br>

        <input type="submit" value="确认添加">
    </form>
</body>
</html>