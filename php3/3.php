<?php 
	header("Content-type:text/html;charset=utf-8");
	/**
	 php 	运算符
			按操作数来区分：1/2/3元
			按功能区分：
				赋值运算符
				=
				+=	$a+=5 等价于 $a = $a +5
				-=	$a-=5 等价于 $a = $a-5
				*=
				/=
				%=
				.=
				
				比较运算符
				逻辑运算符
				位运算符
				其他运算符
	 */
	$a = 10;

	$str = '';
	$str .= '<table border="1" width="600">';
	$str .= '<tr>';
	$str .= '<td>name</td>';
	$str .= '<td>sex</td>';
	$str .= '<td>age</td>';
	$str .= '<td>tel</td>';
	$str .= '</tr>';

	$str .= '<tr>';
	$str .= '<td>吴昊</td>';
	$str .= '<td>1</td>';
	$str .= '<td>19</td>';
	$str .= '<td>15900000000</td>';
	$str .= '</tr>';
	$str .= '<tr>';
	$str .= '<td>吴昊</td>';
	$str .= '<td>1</td>';
	$str .= '<td>19</td>';
	$str .= '<td>15900000000</td>';
	$str .= '</tr>';
	$str .= '<tr>';
	$str .= '<td>'.$a.'</td>';
	$str .= '<td>1</td>';
	$str .= '<td>19</td>';
	$str .= '<td>15900000000</td>';
	$str .= '</tr>';

	$str .= '</table>';

	echo $str;