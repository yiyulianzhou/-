<?
回顾GD画图的六脉神贱
1.创建画布
imagecreate()
imagecreatetruecolor(x,y)

2.分配颜色
imagecolorallocate($img, 255, 255, 255)
imagecolorallocate($img, 0xff, 0x00, 0x00)

3.填充背景
imagefill($img, 0,0, color)

4.画图
imagesetpixel($img, x,y, color) 点
imageline($img, x1,y1, x2,y2, color) 线段
imagerectangle($img, x1,y1, x2,y2, color) 矩形
imagefilledrectangle($img, x1,y1, x2,y2, color)  填充矩形
imagepolygon($img, array(), 顶点数, color) 多边形
imagefilledpolygon($img, array(), 顶点数, color)
imageellipse($img, ox,oy, w,h, color) 椭圆
imagefilledellipse($img, ox,oy, w,h, color)  填充椭圆
imagearc($img, ox,oy, w,h, start, end, color)  圆弧
imagefilledarc($img,  ox,oy, w,h, start, end, color, IMG_ARC_PIE)  填充圆弧

写字
imagettftext($img, font-size, 角度, x1,y1, color, '.ttf', '写啥')

5.输出图片
imagejpeg()
imagepng()
imagegif()

6.销毁图片资源
imagedestroy()