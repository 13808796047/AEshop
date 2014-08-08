<?php
/**
 * 商品分类管理
 */
Class CategoryControl extends Control{
	Private $_category;
	//数据模型对象
	Private $db;
	Private $cid;
	Public function __init(){
		$this->db = K('category');
			 //栏目缓存数据
		$this->cid = Q('cid',null,'intval');
		$this ->_category = F('category');
	

	}
	/**
	 * 更新分类缓存
	 * @return [type] [description]
	 */
	Public function update_cache(){
		if($this->db->update_cache()){
				echo json_encode(array('state' => 1, 'message' => '更新缓存成功!','timeout'=>3));exit;
		}else{
				$this->error('缓存更新失败,请检查缓存目录'.CACHE_PATH.'写权限','index');
		}
	}
	/**
	 * 商品分类列表
	 * @return [type] [description]
	 */
	Public function index(){
		
		$this->category = $this ->_category;

		$this->display();
	}

	/**
	 * 添加商品分类
	 */
	Public function add(){
		if(IS_POST){

			if($this->db->addCategory()){
				$this->ajax(array('state'=>1,'message'=>'栏目添加成功!'));
			}else{
				$this->ajax(array('state'=>0,'message'=>'栏目添加失败!'));
			}
		}else{
			$this->parent = $this->db->getParent($this->cid);
		 	$this->category = $this ->_category;
			
			$this->display();
		}
		
	}
	/**
	 * 修改分类
	 * @return [type] [description]
	 */
	Public function edit(){

		if(IS_POST){
			if($this->db->editCategory()){
				$this->ajax(array('state'=>1,'message'=>'分类修改成功!'));
			}else{
				$this->ajax(array('state'=>0,'message'=>'分类修改失败!'));
			}
		}else{
			$category = $this->_category;
			$field = $category[$this->cid];
			foreach ($category as $k => $v) {
				$v['selected'] = $v['disabled']= '';
				//父级选中
				$v['selected'] = $v['cid'] == $field['pid']?' selected="selected" ':'';
				//自身选中
				if($field['cid']==$v['cid']||Data::isChild($category,$v['cid'],$field['cid'])){
                    $v['disabled']=' disabled="disabled" class="disabled"';
                }
                $category[$k]=$v;
			}
			
			$this->category = $category;
			$this->field = $field;
			$this->display();
		}
		
	}
	/**
	 * 删除分类
	 * @return [type] [description]
	 */
	  Public function del(){  
	  
	  	if($this->db->del_category()){
			$this->ajax(array('state'=>1,'message'=>'删除成功'));
			}else{
			$this->ajax(array('state'=>0,'message'=>$this->db->error));
			}	
        }

}
