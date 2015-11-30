<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})

namespace ${NAMESPACE};

#end

class modules_${NAME} extends modules {
	public function _perm() {
		return array('use ${NAME} module');
	}
	public function _paths() {
		return array(
			'${NAME}' => array('title' => '${NAME}', 'menu' => MENU_TOP, 'access' => array('use ${NAME} module')),
			'${NAME}/page' => array('title' => 'Page', 'menu' => MENU_SIDEBAR, 'group' => '${NAME}'),
		);
	}
	public function _init() {
		
	}
	public function _autoload() {
		
	}
	public function _load() {
		
	}
}