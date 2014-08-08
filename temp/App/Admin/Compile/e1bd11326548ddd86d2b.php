<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="http://127.0.0.1/AEshop/./App/Admin/Tpl/Public/css/style.css" rel="stylesheet" type="text/css" />
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
    <script type="text/javascript" src="http://127.0.0.1/AEshop/./App/Admin/Tpl/Public/js/validate.js"></script>
</head>

<body>

   <!--  <div class="place">
      
       <ul class="placeul">
           <li>
               <a href="http://127.0.0.1/AEshop/index.php/Admin/Category/add">首页</a>
           </li>
           <li>
               <a href="<?php echo U(index);?>">分类管理</a>
           </li>
           <li>
               <a href="<?php echo U(add);?>">添加分类</a>
           </li>
       </ul>
   </div> -->

    <div class="formbody">

        <div class="formtitle">
            <span>添加分类</span>
        </div>
        <form class='hd-form' action='<?php echo U(add);?>' method='post' onsubmit="return  hd_submit_confirm(this)">
            <table class='table1'>
                <tr>
                    <th>上级分类</th>
                    <td>
                        <select name="pid" class="w200">
                        <?php if($parent['cid']){?>
                        
                            <option value ='<?php echo $parent['cid'];?>'><?php echo $parent['catname'];?></option>

                        <?php  }else{ ?>
                             <option value="0">顶级栏目</option>
                            <?php $hd["list"]["c"]["total"]=0;if(isset($category) && !empty($category)):$_id_c=0;$_index_c=0;$lastc=min(1000,count($category));
$hd["list"]["c"]["first"]=true;
$hd["list"]["c"]["last"]=false;
$_total_c=ceil($lastc/1);$hd["list"]["c"]["total"]=$_total_c;
$_data_c = array_slice($category,0,$lastc);
if(count($_data_c)==0):echo "";
else:
foreach($_data_c as $key=>$c):
if(($_id_c)%1==0):$_id_c++;else:$_id_c++;continue;endif;
$hd["list"]["c"]["index"]=++$_index_c;
if($_index_c>=$_total_c):$hd["list"]["c"]["last"]=true;endif;?>

                                <option value="<?php echo $c['cid'];?>"
                                    <?php if($_GET['pid']==$c['cid']){?>selected='selected'<?php }?>
                                ><?php echo $c['_name'];?>
                            </option>
                        <?php $hd["list"]["c"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
                        <?php }?>
                            
                    </select>
                </td>
            </tr>
            <tr>
                <th>分类名称</th>
                <td>
                    <input type="text" name="catname" required="" class="w300"/>
                </td>
            </tr>
            <tr>
                <th>导航显示</th>
                <td>
                    <label>
                        <input type="radio" name="display" value="1" checked="checked"/>
                        是
                    </label>
                    <label>
                        <input type="radio" name="display" value="0"/>
                        否
                    </label>
                    <span class="validate-message">前台使用&lt;channel&gt;标签时是否显示</span>
                </td>
            </tr>
            <tr>
                <th>分类排序</th>
                <td>
                    <input type='text' name='sort' />
                </td>
            </tr>
            <tr>

                <th>SEO标题</th>
                <td>
                    <input type="text" name="pagetitle"  class="w300"/>
                </td>
            </tr>
            <tr>

                <th class='w100'>关键词</th>
                <td>
                    <input type="text" name="pagekeywords" class="w300"/>
                </td>
            </tr>
            <tr>

                <th>描述</th>
                <td>
                    <textarea name='pagedesc' class='w400 h150'></textarea>
                </td>
            </tr>
        </table>
        <div class="position-bottom" >
            <input type="submit" class="hd-success" value="确定"/>
            <input type="button" class="hd-cancel" value="取消" onclick="location.href='http://127.0.0.1/AEshop/index.php/Admin/Category'"/>
        </div>
    </form>
</div>

</body>
</html>