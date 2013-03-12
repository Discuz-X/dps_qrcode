<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 13-3-10
 * Time: 下午9:09
 * To change this template use File | Settings | File Templates.
 */
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class plugin_dps_qrcode{
	var $identifier = 'dps_qrcode';
	var $config=array();
	function  __construct() {

	}
	function  plugin_dps_qrcode() {
		global $_G;
		$this->config = $_G['cache']['plugin']['dps_qrcode'];
		$fids=(array)unserialize($this->config['fids']);
		$fids=empty($fids) || in_array('',$fids) ? array() : $fids;
		$this->config['fids']=$fids;
	}
	function global_cpnav_extra2(){
		global $_G;
		$pic = 1;
		include template('dps_qrcode:_tpl_'.__FUNCTION__);
		return $return;
	}
}

?>