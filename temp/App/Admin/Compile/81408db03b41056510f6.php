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
               <a href="http://127.0.0.1/AEshop/index.php/Admin/Brand/edit/id/1">首页</a>
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
            <span>添加品牌分类</span>
        </div>
        <form class='hd-form' action='<?php echo U(edit);?>' method='post' onsubmit="return hd_submit(this,'<?php echo U(index);?>')">
        <input type='hidden' name='id' value='<?php echo $field['id'];?>'/>
            <table class='table1'>
               <tr>
                   <th>品牌分类名称</th>
                    <td>
                    <input type="text" name="name" required="" class="w300" value='<?php echo $field['name'];?>'/>
                </td>
               </tr>

        </table>
        <div class="position-bottom" >
            <input type="submit" class="hd-success" value="确定"/>
            <input type="button" class="hd-cancel" value="取消" onclick="location.href='http://127.0.0.1/AEshop/index.php/Admin/Brand'"/>
        </div>
    </form>
</div>

</body>
</html>