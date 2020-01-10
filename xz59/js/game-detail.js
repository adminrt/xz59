
    window.onload = function () {
        var id = $("input[name='user_input']").data('id');
        var herf = $("input[name='user_input']").data('herf');
        var phonenumber = $("input[name='phonenumber']").val();

        if (!id) {
            $(".unsend").show();
            $(".comment_login").attr('href', herf)
            $(".send").hide();
        } else {

            $(".send").show();
            $(".unsend").hide();
            var username = $("input[name='user_input']").data('name');
            $(".user_name").text(username)
            var avatar = $("input[name='avatar']").val();
            $(".img_avater").attr('src',avatar);
            if (!phonenumber) {
                $(".btn_button").remove();
                $("textarea[name='textarea_name']").attr('placeholder','')
                var text_msg = '<span class="text_msg">尊敬的用户您好，根据网络安全法规定，自2017年6月1日起，<br/>用户发布信息需要<a href="/my/ziliao" target="_blank">手机认证</a> 才能发表点评！（完成后请刷新页面）</span>';
                $(".review").append(text_msg);
            }
        }
    };
    $(".btn_button").click(function () {
        var id = $("input[name='user_input']").data('id');
        var name = $("input[name='user_input']").data('name');
        var textarea = $("textarea[name='textarea_name']").val();
        var img_avater = $(".img_avater").attr('src');
        var plaid = $("input[name='plaid']").val();
        // 获取星星fullStar halfStar emptyStar

        var array = [];
        $(".socre li").each(function (k, v) {
            var class_name = $(v).attr('class');
            if (class_name == 'fullStar') {
                array.push(2);
            } else if (class_name == 'halfStar') {
                array.push(1);
            } else if (class_name == 'emptyStar') {
                array.push(0);
            }
        })

        //把 星星变成 字符串
        var stars = array.join(',')
        if (stars == '0,0,0,0,0' || stars=='' ) {
            layer.msg('请选择评分');
            return;
        }

        if (textarea == '') {
            layer.msg('评论内容不能为空');
            return;
        }

        if (!id) {
            layer.msg('登录信息已过过期');
            return;
        }

        $.ajax({
            url: '/news/insertCommentList',
            method: "post",
            data: {
                "user_id": id,
                "user_name": name,
                "comment": textarea,
                "user_avater": img_avater,
                "platid": plaid,
                "score": stars,
                "type": 2,
            },
            dataType: "json",
            success: function (res) {
                if (res.code == 200) {
                    layer.msg(res.msg);
                    $("textarea[name='textarea_name']").val('');
                    $(".socre li").each(function (k, v) {
                        var class_name = $(v).addClass('emptyStar');

                    })
                } else {
                    layer.msg(res.msg);
                }
            }
        })

    })

    $(".more").click(function () {
        var page = $("input[name='page']").val();
        var newId = $("input[name='plaid']").val();
        page++

        $.ajax({
            url: '/news/getMoreCommentList',
            method: "post",
            data: {
                "platid": newId,
                "page": page,
                "type":2
            },
            dataType: "json",
            success: function (res) {
                $("input[name='page']").val(page);
                if (res.code == 200) {
                    var html ='';
                    $.each(res.data,function (k,v) {
                        html += '<li><div class="fl user_img"><a href="">';
                        html += '<img src="'+v.user_avater+'" alt=""></a></div>';
                        html += '<div class="fl info"><div class="tit clearfix"><div class="fl xing">';
                        html += '<p class="name">'+v.user_name+'</p><div class="marks">';
                        html += '<ul>';
                        for(i=0;i<v.score_arr.length;i++){
                            if (v.score_arr[i] == '0'){
                                html += '<li class="emptyStar"><span>1</span><span>2</span></li>';
                            } else if (v.score_arr[i] == '1'){
                                html += '<li class="halfStar"><span>1</span><span>2</span></li>';
                            }else if (v.score_arr[i] == '2'){
                                html += '<li class="fullStar"><span>1</span><span>2</span></li>';
                            }
                        }
                        html += '</ul></div></div>';
                        html += '<em class="fr time">'+v.add_time+'</em></div>';
                        html += ' <p class="txt">'+v.comment+'</p></div></li>';
                    })
                    $(".list_add").append(html);
                } else {
                    //没有数据'
                    $(".more").text('没有更多数据~')
                }
            }
        });
    })

    $(".game_img").html($(".hide_game_img").html())
