<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="http://127.0.0.1/AEshop/./App/Admin/Tpl/Public/css/tab.css" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="http://127.0.0.1/AEshop/./App/Admin/Tpl/Public/css/right.css"/>
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
    <script type="text/javascript" src="http://127.0.0.1/AEshop/./App/Admin/Tpl/Public/js/jquery.idTabs.min.js"></script>
    <script type="text/javascript">
        //点击input表单实现 全选或反选
    $(function () {
    //全选
    $("input.select_all").click(function () {
        $("[type='checkbox']").attr("checked",$(this).attr('checked')=='checked');
    })
})
    //全选复选框
function select_all(state){
    if(state==1){
        $("[type='checkbox']").attr("checked",state);
    }else{
        $("[type='checkbox']").attr("checked",function(){return !$(this).attr('checked')});
    }
}
    </script>
</head>

<body>

    <!-- <div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li>
            <a href="#">首页</a>
        </li>
        <li>
            <a href="#">系统设置</a>
        </li>
    </ul>
</div>
-->
<div class="formbody">

    <div id="usual1" class="usual">

        <div class="itab">
            <ul>
                <li>
                    <a href="#tab1" class="selected">品牌分类</a>
                </li>
                <li>
                    <a href="#tab2">自定义</a>
                </li>
            </ul>
        </div>

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
        <div id="tab1" class="tabson">
            <table class="table2 ">
                <tr>
                    <td class='w30'><input type="checkbox" class="select_all"/></td>
                    <td >品牌分类ID</td>
                    <td >品牌分类名称</td>
                    <td>操作</td>
                </tr>
                <?php $hd["list"]["b"]["total"]=0;if(isset($brand_category) && !empty($brand_category)):$_id_b=0;$_index_b=0;$lastb=min(1000,count($brand_category));
$hd["list"]["b"]["first"]=true;
$hd["list"]["b"]["last"]=false;
$_total_b=ceil($lastb/1);$hd["list"]["b"]["total"]=$_total_b;
$_data_b = array_slice($brand_category,0,$lastb);
if(count($_data_b)==0):echo "";
else:
foreach($_data_b as $key=>$b):
if(($_id_b)%1==0):$_id_b++;else:$_id_b++;continue;endif;
$hd["list"]["b"]["index"]=++$_index_b;
if($_index_b>=$_total_b):$hd["list"]["b"]["last"]=true;endif;?>

                    <tr>
                    <td>
                        <input type="checkbox" name="cid[]" value="<?php echo $c['cid'];?>"/>
                    </td>
                        <td><?php echo $b['id'];?></td>
                        <td><?php echo $b['name'];?></td>
                        <td>
                            <a class=' btn-danger btn-xs' href="<?php echo U(edit,array('id'=>$b['id']));?>">编辑</a>
                            <a class='btn-warning btn-xs' href="javascript:hd_confirm('确证删除吗？',function(){hd_ajax('<?php echo U(del);?>',{cid:<?php echo $v['cid'];?>})})">删除</a>
                        </td>
                    </tr>
                <?php $hd["list"]["b"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
            </table>
            <div class="page1"><?php echo $page;?></div>
            <div class="position-bottom">
                <input type="button" class="hd-cancel" onclick="select_all(1)" value='全选'/>
                <input type="button" class="hd-cancel" onclick="select_all(0)" value='反选'/>
                <input type="button" class="hd-cancel" onclick="updateOrder()" value="更改排序"/>
                <input type="button" class="hd-cancel" onclick="BulkEdit()" value="批量编辑"/>              
            </div>
        </div>

        <div id="tab2" class="tabson">

            <ul class="seachform">

                <li>
                    <label>综合查询</label>
                    <input name="" type="text" class="scinput" />
                </li>
                <li>
                    <label>指派</label>
                    <div class="vocation">
                        <select class="select3">
                            <option>全部</option>
                            <option>其他</option>
                        </select>
                    </div>
                </li>

                <li>
                    <label>重点客户</label>
                    <div class="vocation">
                        <select class="select3">
                            <option>全部</option>
                            <option>其他</option>
                        </select>
                    </div>
                </li>

                <li>
                    <label>客户状态</label>
                    <div class="vocation">
                        <select class="select3">
                            <option>全部</option>
                            <option>其他</option>
                        </select>
                    </div>
                </li>

                <li>
                    <label>&nbsp;</label>
                    <input name="" type="button" class="scbtn" value="查询"/>
                </li>

            </ul>

            <table class="tablelist">
                <thead>
                    <tr>
                        <th>
                            <input name="" type="checkbox" value="" checked="checked"/>
                        </th>
                        <th>
                            编号 <i class="sort"><img src="http://127.0.0.1/AEshop/./App/Admin/Tpl/Public/images/px.gif" /></i> 
                        </th>
                        <th>标题</th>
                        <th>用户</th>
                        <th>籍贯</th>
                        <th>发布时间</th>
                        <th>是否审核</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input name="" type="checkbox" value="" />
                        </td>
                        <td>20130908</td>
                        <td>王金平幕僚：马英九声明字字见血 人活着没意思</td>
                        <td>admin</td>
                        <td>江苏南京</td>
                        <td>2013-09-09 15:05</td>
                        <td>已审核</td>
                        <td>
                            <a href="#" class="tablelink">查看</a>
                            <a href="#" class="tablelink">删除</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input name="" type="checkbox" value="" />
                        </td>
                        <td>20130907</td>
                        <td>温州19名小学生中毒流鼻血续：周边部分企业关停</td>
                        <td>uimaker</td>
                        <td>山东济南</td>
                        <td>2013-09-08 14:02</td>
                        <td>未审核</td>
                        <td>
                            <a href="#" class="tablelink">查看</a>
                            <a href="#" class="tablelink">删除</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input name="" type="checkbox" value="" />
                        </td>
                        <td>20130906</td>
                        <td>社科院:电子商务促进了农村经济结构和社会转型</td>
                        <td>user</td>
                        <td>江苏无锡</td>
                        <td>2013-09-07 13:16</td>
                        <td>未审核</td>
                        <td>
                            <a href="#" class="tablelink">查看</a>
                            <a href="#" class="tablelink">删除</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input name="" type="checkbox" value="" />
                        </td>
                        <td>20130905</td>
                        <td>江西&quot;局长违规建豪宅&quot;：局长检讨</td>
                        <td>admin</td>
                        <td>北京市</td>
                        <td>2013-09-06 10:36</td>
                        <td>已审核</td>
                        <td>
                            <a href="#" class="tablelink">查看</a>
                            <a href="#" class="tablelink">删除</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input name="" type="checkbox" value="" />
                        </td>
                        <td>20130907</td>
                        <td>温州19名小学生中毒流鼻血续：周边部分企业关停</td>
                        <td>uimaker</td>
                        <td>山东济南</td>
                        <td>2013-09-08 14:02</td>
                        <td>未审核</td>
                        <td>
                            <a href="#" class="tablelink">查看</a>
                            <a href="#" class="tablelink">删除</a>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>

    </div>

    <script type="text/javascript">$("#usual1 ul").idTabs(); </script>

    <script type="text/javascript">$('.tablelist tbody tr:odd').addClass('odd');</script>

</div>

</body>
</html>