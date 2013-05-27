<?php
/**
 * Author PreSelect
 *
 * @author Jon Mifsud
 * @version 0.1
 */
Class extension_author_preselect extends Extension{
	
	public function getSubscribedDelegates(){
		return array(
			array(
				'page' => '/backend/',
				'delegate' => 'InitaliseAdminPageHead',
				'callback' => 'initializeAdmin',
			),
		);
	}
	
	private $LOAD_NUMBER = 955968299;

	public function initializeAdmin($context) {
		$page = Administration::instance()->Page;
		$assets_path = URL . '/extensions/author_preselect/assets';
		$page->addScriptToHead($assets_path . '/author_preselect.js', $this->LOAD_NUMBER++);
	}
	
	public function enable() {
		return $this->install();
	}

	public function disable() {
		return true;
	}

	public function install() {
		return true;
	}

	public function uninstall() {
		return true;
	}

}
