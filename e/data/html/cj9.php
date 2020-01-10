<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>标题正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--title--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_title]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_title]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_title]" type="text" id="add[z_title]" value="<?=stripSlashes($r[z_title])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>副标题正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--ftitle--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_ftitle]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_ftitle]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_ftitle]" type="text" id="add[z_ftitle]" value="<?=stripSlashes($r[z_ftitle])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>发布时间正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--newstime--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_newstime]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_newstime]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_newstime]" type="text" id="add[z_newstime]" value="<?=stripSlashes($r[z_newstime])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>标题图片正则：</strong><br>
      ( 
      <input name="textfield" type="text" id="textfield" value="[!--titlepic--]" size="20">
      )</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td>附件前缀 
        <input name="add[qz_titlepic]" type="text" id="add[qz_titlepic]" value="<?=stripSlashes($r[qz_titlepic])?>"> 
        <input name="add[save_titlepic]" type="checkbox" id="add[save_titlepic]" value=" checked"<?=$r[save_titlepic]?>>
        远程保存 </td>
    </tr>
    <tr> 
      <td><textarea name="add[zz_titlepic]" cols="60" rows="10" id="add[zz_titlepic]"><?=ehtmlspecialchars(stripSlashes($r[zz_titlepic]))?></textarea></td>
    </tr>
    <tr> 
      <td><input name="add[z_titlepic]" type="text" id="titlepic5" value="<?=stripSlashes($r[z_titlepic])?>">
        (如填写这里，这就是字段的值)</td>
    </tr>
  </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>内容简介正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--smalltext--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_smalltext]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_smalltext]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_smalltext]" type="text" id="add[z_smalltext]" value="<?=stripSlashes($r[z_smalltext])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>信息来源正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--befrom--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_befrom]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_befrom]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_befrom]" type="text" id="add[z_befrom]" value="<?=stripSlashes($r[z_befrom])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>游戏类型正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--typei--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_typei]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_typei]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_typei]" type="text" id="add[z_typei]" value="<?=stripSlashes($r[z_typei])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>大小正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--size--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_size]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_size]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_size]" type="text" id="add[z_size]" value="<?=stripSlashes($r[z_size])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>游戏版本正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--bb--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_bb]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_bb]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_bb]" type="text" id="add[z_bb]" value="<?=stripSlashes($r[z_bb])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>系统要求正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--xtyq--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_xtyq]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_xtyq]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_xtyq]" type="text" id="add[z_xtyq]" value="<?=stripSlashes($r[z_xtyq])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>语言正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--yy--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_yy]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_yy]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_yy]" type="text" id="add[z_yy]" value="<?=stripSlashes($r[z_yy])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>开发商正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--kfs--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_kfs]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_kfs]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_kfs]" type="text" id="add[z_kfs]" value="<?=stripSlashes($r[z_kfs])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>推荐评语正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--yjh--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_yjh]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_yjh]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_yjh]" type="text" id="add[z_yjh]" value="<?=stripSlashes($r[z_yjh])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>安卓下载地址正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--downurl--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_downurl]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_downurl]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_downurl]" type="text" id="add[z_downurl]" value="<?=stripSlashes($r[z_downurl])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>ios下载地址正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--downurli--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_downurli]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_downurli]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_downurli]" type="text" id="add[z_downurli]" value="<?=stripSlashes($r[z_downurli])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>ios下载地址2正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--downurli2--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_downurli2]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_downurli2]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_downurli2]" type="text" id="add[z_downurli2]" value="<?=stripSlashes($r[z_downurli2])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>安卓下载地址2正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--downurl2--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_downurl2]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_downurl2]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_downurl2]" type="text" id="add[z_downurl2]" value="<?=stripSlashes($r[z_downurl2])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>新闻正文正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--newstext--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_newstext]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_newstext]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_newstext]" type="text" id="add[z_newstext]" value="<?=stripSlashes($r[z_newstext])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>顶正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--diggtop--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_diggtop]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_diggtop]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_diggtop]" type="text" id="add[z_diggtop]" value="<?=stripSlashes($r[z_diggtop])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>游戏截图正则：</strong><br>
      (
      <input name="textfield" type="text" id="textfield" value="[!--ecmsspicurl--]" size="20">
      <br>
      <input name="textfield2" type="text" id="textfield2" value="[!--ecmsbpicurl--]" size="20">
	  <br>
      <input name="textfield2" type="text" id="textfield2" value="[!--ecmspicname--]" size="20">
      )<br>
      格式:缩略图[!empirecms!]大图[!empirecms!]名称</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_morepic]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_morepic]))?></textarea></td>
        </tr>
        <tr> 
          <td>地址前缀:
<input name="add[qz_morepic]" type="text" id="add[qz_morepic]" value="<?=stripSlashes($r[qz_morepic])?>">
<input name="add[save_morepic]" type="checkbox" id="add[save_morepic]" value=" checked"<?=$r[save_morepic]?>>
        远程保存
        </td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>权限正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--qx--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_qx]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_qx]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_qx]" type="text" id="add[z_qx]" value="<?=stripSlashes($r[z_qx])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>作者正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--writer--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_writer]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_writer]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_writer]" type="text" id="add[z_writer]" value="<?=stripSlashes($r[z_writer])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>
