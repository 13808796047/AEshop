<?php
/**
 * 品牌模型
 */
Class BrandModel extends Model{
	/**
	 * 操作表
	 * @var string
	 */
	Public $table = 'brand_category';
	/**
	 * 更新缓存
	 * @return [type] [description]
	 */
	Public function update_cache(){
		$brand = $this->all();
		return F('brand',$brand);
	}
	/**
	 * 添加品牌分类
	 */
	Public function add_brand_category(){
		if($this->create()){
			if($this->add()){
				return $this->update_cache();
			}
		}
	}
	/**
	 * 修改品牌分类
	 * @return [type] [description]
	 */
	Public function edit_brand_category(){
		if($this->create()){
			if($this->save()){
				return $this->update_cache();
			}
		}
	}
}