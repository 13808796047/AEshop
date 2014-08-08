<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    
    <link href="http://127.0.0.1/AEshop/./App/Admin/Tpl/Public/css/common.css" rel="stylesheet" type="text/css" />

   <script type='text/javascript' src='http://127.0.0.1/AEshop/HDPHP/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<link href='http://127.0.0.1/AEshop/HDPHP/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/AEshop/HDPHP/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://127.0.0.1/AEshop/HDPHP/hdphp/../hdjs/js/slide.js'></script>
<script src='http://127.0.0.1/AEshop/HDPHP/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
HOST = '<?php echo $GLOBALS['user']['HOST'];?>';
ROOT = '<?php echo $GLOBALS['user']['ROOT'];?>';
WEB = '<?php echo $GLOBALS['user']['WEB'];?>';
URL = '<?php echo $GLOBALS['user']['URL'];?>';
HDPHP = '<?php echo $GLOBALS['user']['HDPHP'];?>';
HDPHPDATA = '<?php echo $GLOBALS['user']['HDPHPDATA'];?>';
HDPHPTPL = '<?php echo $GLOBALS['user']['HDPHPTPL'];?>';
HDPHPEXTEND = '<?php echo $GLOBALS['user']['HDPHPEXTEND'];?>';
APP = '<?php echo $GLOBALS['user']['APP'];?>';
CONTROL = '<?php echo $GLOBALS['user']['CONTROL'];?>';
METH = '<?php echo $GLOBALS['user']['METH'];?>';
GROUP = '<?php echo $GLOBALS['user']['GROUP'];?>';
TPL = '<?php echo $GLOBALS['user']['TPL'];?>';
CONTROLTPL = '<?php echo $GLOBALS['user']['CONTROLTPL'];?>';
STATIC = '<?php echo $GLOBALS['user']['STATIC'];?>';
PUBLIC = '<?php echo $GLOBALS['user']['PUBLIC'];?>';
HISTORY = '<?php echo $GLOBALS['user']['HISTORY'];?>';
HTTPREFERER = '<?php echo $GLOBALS['user']['HTTPREFERER'];?>';
</script>
<link type="text/css" rel="stylesheet" href="http://127.0.0.1/AEshop/./App/Admin/Tpl/Public/css/right.css"/>
<link href='http://127.0.0.1/AEshop/HDPHP/hdphp/Extend/Org/bootstrap/css/bootstrap.min.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/AEshop/HDPHP/hdphp/Extend/Org/bootstrap/js/bootstrap.min.js'></script>
                <!--[if lte IE 6]>
                <link rel="stylesheet" type="text/css" href="http://127.0.0.1/AEshop/HDPHP/hdphp/Extend/Org/bootstrap/ie6/css/bootstrap-ie6.css">
                <![endif]-->
                <!--[if lt IE 9]>
                <script src="http://127.0.0.1/AEshop/HDPHP/hdphp/Extend/Org/bootstrap/js/html5shiv.min.js"></script>
                <script src="http://127.0.0.1/AEshop/HDPHP/hdphp/Extend/Org/bootstrap/js/respond.min.js"></script>
                <![endif]-->
    <script type="text/javascript" src="http://127.0.0.1/AEshop/./App/Admin/Tpl/Public/js/common.js"></script>
    

</head>

<body>



    <div class="rightinfo">

        <div class="tools">

            <ul class="toolbar">
                <li >
                    <a href='<?php echo U(add);?>'>
                        <img src="http://127.0.0.1/AEshop/./App/Admin/Tpl/Public/images/t01.png" />
                        添加分类
                    </a>
                </li>
                <li >
                    <a href='javascript:;' onclick="hd_ajax('<?php echo U(update_cache);?>')">
                        <img src="http://127.0.0.1/AEshop/./App/Admin/Tpl/Public/images/t05.png" />
                        更新分类缓存
                    </a>
                </li>
            </ul>

            
        </div>

    </div>

    <table id="table" class='table2 hd-form'>
        <thead>
            <tr>
                <th width="1%"></th>
                <th >分类名称</th>
          
                <th >分类排序</th>
                <th >是否显示</th>
                <th >操作</th>
            </tr>
        </thead>
        <tbody>
        <?php $hd["list"]["v"]["total"]=0;if(isset($category) && !empty($category)):$_id_v=0;$_index_v=0;$lastv=min(1000,count($category));
$hd["list"]["v"]["first"]=true;
$hd["list"]["v"]["last"]=false;
$_total_v=ceil($lastv/1);$hd["list"]["v"]["total"]=$_total_v;
$_data_v = array_slice($category,0,$lastv);
if(count($_data_v)==0):echo "";
else:
foreach($_data_v as $key=>$v):
if(($_id_v)%1==0):$_id_v++;else:$_id_v++;continue;endif;
$hd["list"]["v"]["index"]=++$_index_v;
if($_index_v>=$_total_v):$hd["list"]["v"]["last"]=true;endif;?>

            <tr class="level_<?php echo $v['_level'];?> pid_<?php echo $v['pid'];?>" cid="<?php echo $v['cid'];?>" level="<?php echo $v['level'];?>">
                <td><a class=' btn-xs btn-info unfold' style="font-size:16px;" href="">+</a></td>
                <td><?php echo $v['_name'];?></td>
                
                <td><?php echo $v['sort'];?></td>
                <td>
                    <?php if($v['display']){?>
                        显示
                        <?php  }else{ ?>
                        隐藏
                    <?php }?>
                </td>
                <td>
                    <a class=' btn-success btn-xs' href="<?php echo U(add,array('cid'=>$v['cid']));?>">添加子类</a>
                    <a class=' btn-danger btn-xs' href="<?php echo U(edit,array('cid'=>$v['cid']));?>">编辑</a>
                    <a class='btn-warning btn-xs' href="javascript:hd_confirm('确证删除吗？',function(){hd_ajax('<?php echo U(del);?>',{cid:<?php echo $v['cid'];?>})})">
                                    删除
                                </a>
                    
                </td>
            </tr>
        <?php $hd["list"]["v"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
        </tbody>
    </table>


</body>
</html>