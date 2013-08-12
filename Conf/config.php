<?php
return array(
	//'配置项'=>'配置值'
		//'配置项'=>'配置值'
		
		'COOKIE_DOMAIN'=> '.tizhimei.com',			//COOKIE跨域设置
		'URL_MODEL'=> 2,
		
		//MYSQL配置
		'DB_TYPE'=>'mysql',
		'DB_HOST'=>'10.200.3.58',
		'DB_NAME'=>'tizhimei',
		'DB_USER'=>'tizhimei',
		'DB_PWD'=>'go_to_sportc8',
		'DB_PORT'=>'3306',
		'DB_PREFIX'=>'app_',
		
		'DB_FIELD_CACHE'        => false,
		
		'TMPL_ENGINE_TYPE' => 'Smarty',				//模版引擎配置
		'TMPL_TEMPLATE_SUFFIX'  => '.html',    		// 默认模板文件后缀
		'TMPL_CACHFILE_SUFFIX'  => '.php',     		// 默认模板缓存后缀
		'APP_GROUP_LIST'    =>  'Home,Admin,Test',		//分组列表配置
		'DEFAULT_GROUP'     =>  'Home',				//默认分组设置
		'HTML_FILE_SUFFIX'     =>  '.html',				//默认分组设置
		'TMPL_ENGINE_CONFIG' =>array(				//Smarty配置
// 				'template_dir' => TMPL_PATH,			//模板目录
				'compile_dir' =>TEMP_PATH,				//编译目录
				'cache_dir' =>CACHE_PATH,				//缓存目录
				'config_dir' => CONF_PATH.'Smarty/',	//Smarty配置变量
				'caching' => false,						//是否启用缓存
				'cache_lifetime' =>60*60*24,			//缓存时间s
				'left_delimiter' => "<{",				//左边界符
				'right_delimiter' => "}>",				//右边界符
		),
		
		'TMPL_ENGINE_SMARTY_FILTER'=>array(
		'output'=>'trimwhitespace',				//过滤输出的html代码的空白
		),
		TMPL_PARSE_STRING  =>array(
		'__PUBLIC__' =>  '/Tpl/Public',	//模板公共目录
		'__IMAGE__' =>  '/Tpl/Public/Image',//模板图片目录
		'__IMAGE4ADMIN__' =>  '/Tpl/Public/Image/Admin',//模板图片目录
		'__CSS__' =>  '/Tpl/Public/Css',	//模板CSS目录
		'__JS__' =>  '/Tpl/Public/Js',		//模板JS目录
		'__UPLOAD__' => 'http://oss.aliyuncs.com/tizhimei',//网站上传目录
		),
);
?>