<?php
/**
 * 栏目模型管理
 */
Class CategoryModel extends Model{
	/**
	 * 操作的表
	 * @var string
	 */
	Public $table = 'category';
	
	
	/**
	 * 添加
	 */
	Public function addCategory(){
		//create 就是对数据执行自动验证
			if($this->create()){
				//向表中写入数据
					if($this->add()) {
					//更新缓存
					return $this->update_cache();
				}
			}
		}
		/**
		 * 更新
		 * @return [type] [description]
		 */
	Public function editCategory(){
		if($this->create()){
			if($this->save()){
				return $this->update_cache();
			}
		}
	}
	/**
	 * 获得父类信息
	 * @return [type] [description]
	 */
	Public function getParent($cid){
		$result = $this->field(array('cid','catname'))->where(array('cid'=>$cid))->find();
		if($result){
			return $result;
		}else{
			return array(
				'cid'=>0,
				'catname'=>'顶级分类'
				);
		}
	}

	/**
	 * 更新分类缓存
	 * @return [type] [description]
	 */
	Public function update_cache(){
		//获得表中所有的数据
		$category = Data::tree($this->all(),'catname');
		
		//储存文件缓存
		//S('houdunwang','bbs.houdunwang.com',1440,array('dir'=>'cache','driver'=>'file','zip'=>true));
		return F('category',$category);
	}
	/**
	 * 删除
	 * @return [type] [description]
	 */
	//删除栏目
		Public function del_category(){
			$cid=Q('cid');
			
			//判断当前要删除的栏目有没有子栏目
			if($this->where('pid='.$cid)->find()){
				$this->error='请先删除子栏目';
			}else{
			if($this->del($cid)) {
					//更新缓存
					return $this->update_cache();
				}
			}
		}
}