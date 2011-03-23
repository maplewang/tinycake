<?php 

class mmenu extends model
{

	public function getMenu()
	{
		$menu = array(
			"新建项目" => array('/install/install', ''),
			"项目列表" => array('/project/listall', ''),
			"项目配置文件生成" => array('/project/listall', ''),
			"日志分析" => array('/log/analyse', ''),
			"日志快放" => array('/log/recall', ''),
		);
		
		return $menu;
	}

	public function getSubMenu($ctrl)
	{
		$submenu = array();

        $submenu['project'] = array(
            '生成配置文件' => array('/project/genconfig'),
            '生成配置文件' => array('/project/genconfig'),
            '生成配置文件' => array('/project/genconfig'),
            '生成配置文件' => array('/project/genconfig'),
        );
		
		if(isset($submenu[$ctrl]))
			return $submenu[$ctrl];
		else
			return array();
	}
}