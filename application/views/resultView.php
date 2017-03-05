<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
/**
 * Created by Soon
 * Date: 2016/8/20
 * Time: 14:26
 */
//echo $arr['sign_pass_one'] . '<br/>';
//echo $arr['sign_isdel'] . '<br/>';
//echo $arr['sign_ip'].'<br/>';
?>

<!doctype html>
<html class="no-js"  lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="2016年升华网秋季招新报名系统">
    <meta name="keywords" content="2016年升华网秋季招新报名系统">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>升华网招新报名系统</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <link rel="icon" type="image/png" href="/assets/i/logo.png">
    <link rel="stylesheet" href="//cdn.amazeui.org/amazeui/2.1.0/css/amazeui.min.css">
    <link rel="stylesheet" href="./assets/css/app.css">
</head>
<body>
<!--<div id="bg">-->
<!--</div>-->
<div class="am-u-lg-6 am-u-lg-offset-3 am-u-md-8 am-u-md-offset-2 am-u-sm-12 " id="main">
    <div class="header">
        <div class="am-g">
            <h5>升华网招新报名系统</h5>
        </div>
    </div>

    <div class="content">
        <div class="content-header">
            <p>恭喜您<span><strong>报名成功</strong></span>，我们会根据您的联系方式给您下发笔试面试通知，如未通过请通过当前网址了解详情</p>
            <p>您也可以通过此网址查看您的报名信息和我们审核进度</p>
            <p>如果您有个人作品，可以将作品以单个压缩包附件形式发到我们的公共邮箱<span><strong>public@54sh.com</strong></span> ，并注明身份信息</p>
        </div>
        <div class="content-page">
            <div class="am-panel am-panel-primary">
                <header class="am-panel-hd">
                    <h3 class="am-panel-title">审核状态</h3>
                </header>
                <div class="am-panel-bd">
                    <?php echo $arr['sign_state'] ?>
                </div>
            </div>
            <div
                class="am-panel am-panel-secondary am-table-bordered am-table-radius am-table-striped am-table-centered">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">基本信息</h3>
                </div>
                <table class="am-table">
                    <tbody>
                    <tr>
                        <td>报名id</td>
                        <td><?php echo $arr['sign_id'] ?></td>
                    </tr>
                    <tr>
                        <td>报名时间</td>
                        <td><?php echo date('Y-m-d H:i:s', $arr['sign_time']) ?></td>
                    </tr>
                    <tr>
                        <td>姓名</td>
                        <td><?php echo $arr['sign_name'] ?></td>
                    </tr>
                    <tr>
                        <td>性别</td>
                        <td><?php echo $arr['sign_sex'] ?></td>
                    </tr>
                    <tr>
                        <td>出生日期</td>
                        <td><?php echo $arr['sign_birthday'] ?></td>
                    </tr>
                    <tr>
                        <td>籍贯</td>
                        <td><?php echo $arr['sign_native'] ?></td>
                    </tr>
                    <tr>
                        <td>专业班级</td>
                        <td><?php echo $arr['sign_class'] ?></td>
                    </tr>
                    <tr>
                        <td>邮箱</td>
                        <td><?php echo $arr['sign_email'] ?></td>
                    </tr>
                    <tr>
                        <td>电话</td>
                        <td><?php echo $arr['sign_tele'] ?></td>
                    </tr>
                    <tr>
                        <td>应聘部门一</td>
                        <td><?php echo $arr['sign_job_one'] ?></td>
                    </tr>
                    <tr>
                        <td>应聘部门二</td>
                        <td><?php echo $arr['sign_job_two'] ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>


            <div class="am-panel am-panel-secondary">
                <header class="am-panel-hd">
                    <h3 class="am-panel-title">应聘原因</h3>
                </header>
                <div class="am-panel-bd">
                    <?php echo $arr['sign_reason'] ?>
                </div>
            </div>
            <div class="am-panel am-panel-secondary">
                <header class="am-panel-hd">
                    <h3 class="am-panel-title">自我评价</h3>
                </header>
                <div class="am-panel-bd">
                    <?php echo $arr['sign_evaluate'] ?>
                </div>
            </div>
            <div class="am-panel am-panel-secondary">
                <header class="am-panel-hd">
                    <h3 class="am-panel-title">工作或项目经历</h3>
                </header>
                <div class="am-panel-bd">
                    <?php echo $arr['sign_experience'] ?>
                </div>
            </div>
            <div class="am-panel am-panel-secondary">
                <header class="am-panel-hd">
                    <h3 class="am-panel-title">获奖情况</h3>
                </header>
                <div class="am-panel-bd">
                    <?php echo $arr['sign_prize'] ?>
                </div>
            </div>

        </div>
    </div>

    <div class="am-footer">
        <div class="am-g">
            <p>Copyright © 2001-2016<br/>中南大学升华网 版权所有</p>
        </div>
    </div>

</div>


<!--[if lt IE 9]>
<script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.1.js"></script>
<script src="//cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="//libs.useso.com/js/respond.js/1.4.2/respond.min.js"></script>
<script src="//cdn.amazeui.org/amazeui/2.1.0/js/amazeui.legacy.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdn.amazeui.org/amazeui/2.1.0/js/amazeui.min.js"></script>
<!--<![endif]-->
<script src="//cdn.bootcss.com/jquery.form/3.51/jquery.form.min.js"></script>
<script src="/assets/js/app.js"></script>
</body>
</html>