<?php
/**
 * 品牌模块
 */
Class BrandControl extends Control{
	Public $db;
	Public $_brand;
	Public $id;
	Public function __init(){
		$this->db = K('brand');
		$this->_brand = F('brand');
		$this->id = Q('id',NULL,'intval');

	}
	/**
	 * 品牌分类列表
	 * @return [type] [description]
	 */
	Public function index(){

		
		$page = new Page($this->db->count(),5);
		$this->page = $page->show(2);
		$this->brand_category = $this->db->limit($page->limit())->all();
		$this->display();
	}
	/**
	 * 添加品牌分类
	 */
	Public function add(){
		if(IS_POST){

			if($this->db->add_brand_category()){
				$this->ajax(array('state'=>1,'message'=>'品牌分类添加成功!'));
			}else{
				$this->ajax(array('state'=>1,'message'=>'品牌分类添加失败!'));
			}
		}else{
			$this->display();
		}
		
	}
	/**
	 * 品牌编辑
	 * @return [type] [description]
	 */
	Public function edit(){
		if(IS_POST){
			if($this->db->edit_brand_category()){
				$this->ajax(array('state'=>1,'message'=>'品牌分类修改成功!'));
			}else{
				$this->ajax(array('state'=>0,'message'=>'品牌分类修改失败!'));
			}
		}else{
			$field = $this->db->find($this->id);
			$this->field = $field;
			$this->display();
		}
	}
}