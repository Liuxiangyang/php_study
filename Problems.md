```
	/***首先声明这篇文章不是教程，非常简略，只是方便回顾***/
```
标签：函数篇
# 为什么要使用函数
	为了代码的服用，提高自己的生产力，跟使用对象的意义差不多
# 函数结构 

* 关键字 
* 函数名
* 参数
* 函数体
* 返回值

# 函数的参数

* 形参
* 实参

# 关于函数中指针的传递（又称引用的传递）

> 也就是将一个局部变量传入函数中，从而使得函数可以更改局部变量
> 最初我以为是传地址进去，然鹅是
在c语言中是这个样子
```
	void swap(double *p1, double *p2) 
	int main()
	{
    	double a = 0, b = 0, *p1 = &a, *p2 = &b;
    	scanf("%lf%lf", &a, &b);
    	if(*p1 < *p2)//也可以写为if(a < b){ swap(&a, &b);}
    	{
       	 swap(p1, p2);   
    	}   
    	printf("max = %lf\nmin = %lf\n", *p1, *p2);
    	return 0;
	} 
```
然而在php中是这样子
```
	function swap(&$a,&$b){
		...
	}
	swap($a,$b);
```
> 这个&符号后面一般是指变量的地址
# 变量
*	局部变量 
*	全局变量
*	超全局变量
## 关于变量作用域那些事

**误区**
> 我的误区1：认为函数外部局部变量，也可以在函数或对象内部使用
>但是函数外部的局部变量只限于函数外部，函数内部只限于函数内部

* 想在函数或对象内部使用外部变量有两种方法
** 对外部变量进行global声明
** 通过超全局变量$GLOBALS['name']进行调用

> 我的误区2：认为静态变量的值不可更改，然鹅是可以的╮(╯▽╰)╭

* 在php中静态变量，指的是有固定地址的一个储存信息的地方，当该地方被占用的时候，再次声明是不会发生位置的变化
* 其次里面储存的信息却是可以变化的
---
**知识盲点**

> 如何让一个变量指向另一个变量的内容
`$a=&$b`
---
#复杂函数
##可变函数
> 盲点：类似与有一种函数指针专门指向函数

* 第一种 $a=$GET('func_name')通过超全局变量获取函数然后付给变量a
* 第二种 $a='func_name' $a后面加括号直接调用即可

##嵌套函数

##递归函数

##闭包函数
1. 
```
	$name='hello';
	$a=function($var)use($name){echo $name};
    $a();
```

2. 
```
    function test(Closure $clo){
    	$clo();
    }
    test(function(){
    	echo "hello";
    	})
```

##代码的复用
###复用方式分为三种
* require(url)
* include(url)
* require_once(url)
* include_one(url)

###如何让他们的url变得更加简洁
* 设定搜索父目录即可`set_include_path("aaa");`

###当url的父目录不止一个的时候如何解决
* 设定一个父目录集合即可
```
set_include_path(get_include_path().PATH_SEPARATOR.A)
set_include_path(get_include_path().PATH_SEPARATOR.B)
/***或者另外一种方式***/
ini_set('include_path',get_include_path().PATH_SEPARATOR.A)
ini_set('include_path',get_include_path().PATH_SEPARATOR.B)
```
* 恢复原最初路径使用`restore_include_path()`即可

##函数进阶，常用函数的使用
1. 日期函数的使用
* 如何获取当前时区
`ini_get(date.time.zone)`
或
`date_default_timezone_get()`
* 如何设置时区
`ini_set('date.timezone','Asia/Shanghai');`
`date_default_timezone_set($timezone)`

>中国时区是PRC

2. 如何获得一个指定日期的相关信息
```
mktime（时，分秒，月，日，年）
date('日/月/年',mktime(...));
```
3. 什么是时间戳，如何获取时间戳，如何进行格式转化





