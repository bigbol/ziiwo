/*************************
 *
 * @Auth: lwj
 * @Data: 2013-10-31
 * @Desc: JS设置
 *
 *************************/
var Basic =
        {
            jsPath: '',
            cssPath: '',
            imgPath: '',
            path: '',
            uploadPath: '',
            /*
             * @去空格回车换行
             */
            trim: function(str)
            {
                if (str != "") {
                    str = str.replace(/[ ]/g, "");
                    str = str.replace(/[\r\n]/g, "<BR>");
                }
                return str;
            },
            /*
             * @去左空格
             */
            ltrim: function(s) {
                return s.replace(/(^\s*)/, "");
            },
            /*
             * @去右空格
             */
            rtrim: function(s) {
                return s.replace(/(\s*$)/, "");
            },
            /*
             * @验证email
             */
            checkEmail: function(str)
            {
                var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
                if (!myreg.test(str))
                {
                    return false;
                } else {
                    return true;
                }
            },
            /*
             * @验证是否为价格
             */
            checkPrice: function(str)
            {
                if (str != "" && str != undefined) {
                    if (str.match(/^(:?(:?\d+.\d+)|(:?\d+))$/))
                        return true;
                    else
                        return false;
                }
                return false;
            },
            /*
             * @提示错误信息
             */
            msgError: function(id, str)
            {
                $("#" + id).html(str);
            },
            /*
             * @提示正确信息
             */
            msgSuccess: function(id)
            {
                $("#" + id).html("");
            },
            /*
             * @清空两种提示状态
             */
            emptyMsgClass: function(id)
            {
                $("#" + id).html("");
            },
            zoombox: function() {
                var m = $("<div class=\"modal hide fade\" id=\"zoombox\"></div>");
                var cnt = "";
                return {'show': function(type, url, msg) {
                        switch (type)
                        {
                            case 'confirm':
                                msg = '您确定要删除吗？';
                                cnt = "<div class=\"modal-header\" style=\"height:2em;overflow:hidden;\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button><h5>操作确认</h5></div><div class=\"modal-body\"><p class=\"alert alert-error\">" + msg + "</p></div><div class=\"modal-footer\"><button class=\"btn btn-primary\" onclick=\'" + url + "');\">确定</button><button class=\"btn\" onclick=\"Basic.zoombox().hide();\">取消</button></div";
                                break;

                            case 'ajax':
                                cnt = "<div class=\"modal-header\" style=\"height:2em;overflow:hidden;\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button><h5>出现错误</h5></div><div class=\"modal-body\"><p class=\"alert alert-error\">" + msg + "</p></div>";
                                break;

                            case 'ajaxOK':
                                cnt = "<div class=\"modal-header\" style=\"height:2em;overflow:hidden;\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button><h5>操作成功</h5></div><div class=\"modal-body\"><p class=\"alert alert-success\">" + msg + "</p></div>";
                                break;

                            default:
                                cnt = "<div class=\"modal-header\" style=\"height:2em;overflow:hidden;\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button><h5>出现错误</h5></div><div class=\"modal-body\"><p class=\"alert alert-error\">" + msg + "</p></div>";
                        }
                        m.html(cnt);
                        m.modal({});
                    },
                    'hide': function() {
                        $('#zoombox').modal('hide');
                        $('#zoombox').remove();
                    }
                }
            },
        }



/*************************
 *
 * @Auth: lwj
 * @Data: 2013-10-31
 * @Desc: 注册
 *
 *************************/
var Registr =
        {
            mySubmit: function()
            {

            },
            /*************************
             *
             * @Auth: lwj
             * @Data: 2013-10-31
             * @Desc: 返回城市
             *
             *************************/
            changeProvince: function()
            {
                var provinceId = $('#c_province option:selected').val();
                if (parseInt(provinceId) >= 1)
                {
                    $("#c_city").html("<option>正在加载...</option>");
                    var url = Basic.path + "/Registr/getAjaxCity.html";
                    $.post(url, {"provinceId": provinceId},
                    function(json)
                    {
                        var json = $.parseJSON(json);
                        var list = json.list;
                        if (list.length >= 1)
                        {
                            var html = '';
                            for (var i = 0; i < list.length; i++)
                            {
                                html += '<option>' + list[i].cityname + '</option>';
                            }
                            $("#c_city").html(html);
                        }
                    });
                }
            }
        }


/*************************
 *
 * @Auth: lwj
 * @Data: 2013-10-31
 * @Desc: 登录
 *
 *************************/
var Login =
        {
            mySubmit: function()
            {
                var username = $("#username").val();
                var userpassword = $("#userpassword").val();
                $("#login_error").hide();
                if (Basic.trim(username) != "" && Basic.trim(userpassword) != "")
                {
                    var url = Basic.path + "index.php?r=login/AjaxLogin";
                    $.post(url, {"username": username, "userpassword": userpassword},
                    function(json)
                    {
                        var json = jQuery.parseJSON(json);
                        if (json.ret == 1)
                        {
                            window.location = Basic.path + "index.php";
                        } else {
                            $("#login_error").show();
                            $("#login_error").html(json.msg);
                        }
                    });
                } else {
                    $("#login_error").show();
                    $("#login_error").html("用户名密码不能为空!");
                }
            },
        }

/*************************
 *
 * @Auth: lwj
 * @Data: 2014-10-31
 * @Desc: 基本信息修改
 *
 *************************/
var User = {
    delUser: function(id) {
        Basic.zoombox().hide()
        var url = Basic.path + "index.php?r=user/DelUser";
        $.post(url, {"id": id},
        function(json) {
            var json = $.parseJSON(json);
            if (json.ret == 1) {
                window.location = Basic.path + "index.php?r=user";
            } else {
                Basic.zoombox().show('ajax', '', json.msg);
                Basic.zoombox().hide()
            }
        });
    },
    /*************************
     *
     * @Auth: lwj
     * @Data: 2013-11-05
     * @Desc: JS统计
     *
     *************************/

}
var Graphs = {
    Line: function() {
        $('#container').highcharts({chart: {type: 'line'}, title: {text: 'Monthly Average Temperature'}, subtitle: {text: 'Source: WorldClimate.com'}, xAxis: {categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']}, yAxis: {title: {text: 'Temperature (°C)'}}, tooltip: {enabled: false, formatter: function() {
                    return '<b>' + this.series.name + '</b><br>' + this.x + ': ' + this.y + '°C';
                }}, plotOptions: {line: {dataLabels: {enabled: true}, enableMouseTracking: false}}, series: [{name: 'Tokyo', data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]}, {name: 'London', data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]}]});
    }
}