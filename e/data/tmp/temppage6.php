<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>入库申请-下载59网</title>

    <meta name="description" content="">

    <meta name="keywords" content="">

    <link type="text/css" rel="stylesheet" href="/kaifamei/css/about.css"/>
    <script type="text/javascript" src="/kaifamei/js/jquery1.9.1.min.js"></script>

</head>


<body>

<!-- head -->

<div class="about_head"><a href="/" class="logo fl"><img src="/kaifamei/images/logo.png" alt="下载59"></a>

    <div class="links fr"><a href="/support/about.html">关于本站</a> <a href="/link/index.html">友情链接</a> <a
            href="/support/contact.html">联系我们</a> <a href="/support/jzjh.html">家长监护</a> <a href="/ruku.html" class="on">入库申请</a>
    </div>

</div>

<div class="about_bg"></div>
<!-- content -->

<div class="content">

    <div class="about_wrap">

        <div class="about_title">入库申请</div>

        <div class="about_cont">


            <p>入库提醒：</p>

            <p>1、带*号为必填项，否者将会入库失败！&nbsp;</p>

            <p>2、含不良信息及对用户造成不良影响的游戏不收录，一经发现录入的游戏含不良信息，下载59网有权立即删除！</p>

            <p>3、请在官网首页添加本站的单向友情链接地址，未添加的一律不会入库！</p>

        </div>

    </div>
    <div class="ruku_wrap">
        <form id="info" method="post" action="/extension/rukuGetInfo.php" enctype="multipart/form-data">
            <div class="item_wrap">
                <h2>游戏上传</h2>
                <p><strong>游戏信息</strong></p>

                <div class="list">
                    <div class="left_txt"><i class="required">*</i>应用名称：</div>
                    <input type="text" name="title" class="Item_input" required="required" id="title">
                </div>
                <div class="list">
                    <div class="left_txt"><i class="required">*</i>应用大小：</div>
                    <input type="text" name="size" class="Item_input" required="required" id="size">
                </div>
                <div class="list">
                    <div class="left_txt"><i class="required">*</i>应用版号：</div>
                    <input type="text" name="bb" class="Item_input" required="required" id="bb">
                </div>
                <div class="list">
                    <div class="left_txt"><i class="required">*</i>安卓地址：</div>
                    <input type="text" name="downurl" class="Item_input" required="required" id="downurl">
                </div>
                <div class="list">
                    <div class="left_txt">IOS地址：</div>
                    <input type="text" name="downurli" class="Item_input" id="downurli">
                </div>
                <div class="list">
                    <div class="left_txt"><i class="required">*</i>应用图标：</div>
                    <div class="up_wrap up_wrap2">
                        <input type="file" name="icon" id="icon" required="required" accept="image/png,image/jpg,image/jpeg">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="list">
                    <div class="left_txt"><i class="required">*</i>截图地址：</div>
                    <div class="up_wrap up_wrap2">
                        <input type="file" multiple="" name="jietu0" required="required" id="net_jietu0"
                               accept="image/png,image/jpg,image/jpeg">
                        <img src="" alt="">
                    </div>
                    <div class="up_wrap up_wrap2">
                        <input type="file" multiple="" name="jietu1" id="net_jietu1"
                               accept="image/png,image/jpg,image/jpeg">
                        <img src="" alt="">
                    </div>
                    <div class="up_wrap up_wrap2">
                        <input type="file" multiple="" name="jietu2" id="net_jietu2"
                               accept="image/png,image/jpg,image/jpeg">
                        <img src="" alt="">
                    </div>
                    <div class="up_wrap up_wrap2">
                        <input type="file" multiple="" name="jietu3" id="net_jietu3"
                               accept="image/png,image/jpg,image/jpeg">
                        <img src="" alt="">
                    </div>
                </div>
                <div style="color:red;font-size: 14px;padding-left: 200px">上传不超过150kb的jpg或png图片(最多上传4张最少1张)</div>
                <div class="list">
                    <div class="left_txt"><i class="required">*</i>应用介绍：</div>
                    <textarea cols="100" rows="100" name="smalltext" style="margin: 10px 0px;height: 432px;width: 591px;" class="Item_input" id="smalltext"></textarea>
                </div>
                <div class="list">
                    <div class="left_txt"><i class="required">*</i>上传者：</div>
                    <input type="text" name="writer" class="Item_input" required="required" id="writer">
                </div>
                <div class="list">
                    <div class="left_txt"><i class="required">*</i>开发商：</div>
                    <select class="Item_input" name="kfs" required="required" id="net_company" style="height: 40px;">
                        <option value="1">个人</option>
                        <option value="2">企业</option>
                    </select>
                </div>
            </div>
            <p style="margin-bottom: 20px;">注：应用开发商为个人需要填写下方个人信息，应用开发商为公司则需要填写公司相关信息。</p>
            <div id="geren">
                <p><strong>个人信息</strong></p>
                <div class="item_wrap">
                    <div class="list">
                        <div class="left_txt"><i class="required">*</i>真实姓名：</div>
                        <input type="text" name="real_name" class="Item_input" required="required" id="real_name">
                    </div>
                    <div class="list">
                        <div class="left_txt">联系方式：</div>
                        <input type="text" name="phone" class="Item_input">
                    </div>
                    <div class="list">
                        <div class="left_txt">邮箱：</div>
                        <input type="text" name="email" class="Item_input">
                    </div>

                    <div class="list">
                        <div class="left_txt"><i class="required">*</i>手持身份证照：</div>
                        <div class="up_wrap">
                            <input type="file" id="idcard" name="idcard" required="required" accept="image/png,image/jpg,image/jpeg">
                            <img src="" alt="">
                        </div>
                        <div style="clear: both;"></div>
                        <div style="color:red;font-size: 14px;width: 100%; text-align: center;">上传不超过300kb的jpg或png图片
                        </div>
                    </div>
                </div>
            </div>
            <div id="qiye" style="display: none;">
                <p><strong>公司信息</strong></p>
                <div class="item_wrap">
                    <div class="list">
                        <div class="left_txt">公司名称：</div>
                        <input type="text" name="company" class="Item_input">
                    </div>
                    <div class="list">
                        <div class="left_txt">公司信息：</div>
                        <input type="text" name="company_desc" class="Item_input">
                    </div>
                    <div class="list">
                        <div class="left_txt">公司地址：</div>
                        <input type="text" name="company_address" class="Item_input">
                    </div>
                    <div class="list">
                        <div class="left_txt">组织机构代码：</div>
                        <input type="text" name="company_code" class="Item_input">
                    </div>
                    <div class="list">
                        <div class="left_txt">联系人：</div>
                        <input type="text" name="company_nickname" class="Item_input">
                    </div>
                    <div class="list">
                        <div class="left_txt">联系方式：</div>
                        <input type="text" name="company_phone" class="Item_input">
                    </div>
                    <div class="list">
                        <div class="left_txt">邮箱：</div>
                        <input type="text" name="company_email" class="Item_input">
                    </div>

                    <div class="list">
                        <div class="left_txt"><i class="required">*</i>营业执照扫描件：</div>
                        <div class="up_wrap">
                            <input type="file" id="company_icon" name="company_icon" accept="image/png,image/jpg,image/jpeg">
                            <img src="" alt="">
                        </div>
                        <div style="clear: both;"></div>
                        <div style="color:red;font-size: 14px;width: 100%; text-align: center;">上传不超过300kb的jpg或png图片
                        </div>
                    </div>
                    <div class="list">
                        <div class="left_txt">公司官网：</div>
                        <input type="text" name="company_site" class="Item_input">
                    </div>
                </div>
            </div>
            <button type="submit" class="up_btn">确定上传</button>
        </form>
    </div>

</div>
<script>

    $(function () {
        $('#net_company').change(function () {
            var type = $(this).val();
            if (type == 2) {
                $('#geren').css('display', 'none');
                $('#qiye').css('display', 'block');
                $('#real_name').removeAttr("required");
                $('#idcard').removeAttr("required");
                $('#company_icon').attr('required', 'required');
            } else {
                $('#geren').css('display', 'block');
                $('#qiye').css('display', 'none');
                $('#real_name').attr('required', 'required');
                $('#idcard').attr('required', 'required');
                $('#company_icon').removeAttr("required");
            }
        });

    });
    $('.up_wrap input').on('change', function (event) {
        var img_ = $(this).next('img');
        var reader = new FileReader();
        reader.onload = function (e) {
            img_src = reader.result // 预览base64
            img_.attr('src', img_src)

        }
        reader.readAsDataURL(this.files[0])
    });
    function clickme() {
        var form = new FormData(document.getElementById("info"));
        var icon = form.get('icon');
        if (icon.size > 0) {
            if (icon.size > 1024 * 150) {
                layer.msg("图标过大");
                return false;
            }
            if (icon.type != 'image/png' && icon.type != 'image/jpeg' && icon.type != 'image/jpg') {
                layer.msg("图标格式不正确");
                return false;
            }
        } else {
            layer.msg("请上传图标");
            return false;
        }
        let files = [0].files[0];
        console.log(files);
        var jietu = '';
        for (var i = 0; i <= 3; i++) {
            jietu = $('#net_jietu' +i)[0].files[0];
            if (jietu.size > 0) {
                if (jietu.size > 1024 * 150) {
                    layer.msg("第" + (i + 1) + "张截图过大");
                    return false;
                }
                if (jietu.type != 'image/png' && jietu.type != 'image/jpeg' && jietu.type != 'image/jpg') {
                    layer.msg("图标格式不正确");
                    return false;
                }
            } else if (i == 0) {
                layer.msg("请上传截图");
                return false;
            }
        }

        var idcard = form.get('idcard');
        if (idcard.size > 0) {
            if (idcard.size > 1024 * 300) {
                layer.msg("身份证图片超过300kb");
                return false;
            }
            if (idcard.type != 'image/png' && idcard.type != 'image/jpeg' && idcard.type != 'image/jpg') {
                layer.msg("身份证图片格式不正确");
                return false;
            }
        }
        var company_icon = form.get('company_icon');
        if (company_icon.size > 0) {
            if (company_icon.size > 1024 * 300) {
                layer.msg("营业执照图片超过300kb");
                return false;
            }
            if (company_icon.type != 'image/png' && company_icon.type != 'image/jpeg' && company_icon.type != 'image/jpg') {
                layer.msg("营业执照图片格式不正确");
                return false;
            }
        }
        return false;
    }
</script>

<!-- footer -->
<footer>
  <div class="footer w1200">
    <div class="bottom_footer"> 游戏版权归原作者享有，如无意之中侵犯了您的版权，请按照《版权保护投诉指引》</a> 来信告知，本站将应您的要求删除<br>
      健康游戏提示：抵制不良游戏，拒绝盗版游戏，注意自我保护，谨防受骗上当，适度游戏益脑，沉迷游戏伤身，合理安排时间，享受健康生活<br>
          <div class="footer-links"> <a href="/support/about.html" rel="nofollow" target="_blank">关于本站</a> <a href="/link/" rel="nofollow" target="_blank">友情链接</a> <a href="/support/contact.html" rel="nofollow" target="_blank">联系我们</a> <a href="/support/jzjh.html" rel="nofollow" target="_blank">家长监护</a> <a href="/ruku.html" rel="nofollow" target="_blank">游戏入库</a></div>
      Copyright 2019-2025 <a href="/" class="s"><strong><?=$public_r['add_www_kaifamei_com_www']?></strong></a>. Some rights reserved.<?=$public_r['add_www_kaifamei_com_name']?> 版权所有 </div>
  </div>
</footer>
<script type="text/javascript" src="/xz59/js/jquery1.9.1.min.js"></script> 
<script type="text/javascript" src="/xz59/js/index.js"></script> 
</body>

</html>