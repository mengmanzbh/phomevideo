<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='增加收藏夹';
$url="<a href=../../../../>首页</a>&nbsp;>&nbsp;<a href=../../cp/>会员中心</a>&nbsp;>&nbsp;<a href=../../fava/>收藏夹</a>&nbsp;>&nbsp;增加收藏夹";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<br>
        <table class="am-table am-table-bordered am-table-radius am-table-striped am-table-hover">
          <form name="form1" method="POST" class="am-form" action="../../doaction.php">
            <tr class="header"> 
              <td><div align="center"> 
                  <input name="enews" type="hidden" id="enews" value="AddFava">
                  增加收藏夹 
                  <input name="from" type="hidden" id="from2" value="<?=$from?>">
                  <input name="classid" type="hidden" id="classid2" value="<?=$classid?>">
                  <input name="id" type="hidden" id="id2" value="<?=$id?>">
                  [<a href="../FavaClass/" target="_blank">增加收藏分类</a>] </div></td>
            </tr>
            <tr> 
              <td><div align="center">收藏页面：<a href='<?=$titleurl?>' target=_blank><?=stripSlashes($r[title])?></a></div></td>
            </tr>
            <tr> 
              <td><div align="center">选择收藏分类: 
                  <select name="cid" id="select">
                    <option value="0">不设置</option>
                    <?=$select?>
                  </select>
                </div></td>
            </tr>
            <tr> 
              <td><div align="center"> 
                  <input type="submit" name="Submit" value="收藏">
                  &nbsp;&nbsp; 
                  <input type="button" name="Submit2" value="返回" onclick="javascript:history.go(-1)">
                </div></td>
            </tr>
          </form>
        </table>
        <br>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>