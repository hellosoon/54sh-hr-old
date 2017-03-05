<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php

/**
 * Created by Soon
 * Date: 2016/8/19
 * Time: 17:56
 */
class sendEmailModel extends CI_Model
{
    public function send($str,$id,$name)
    {
        $this->load->library('email');
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.qq.com';
        $config['smtp_user'] = '';
        $config['smtp_pass'] = "";
        $config['smtp_port'] = 465;
        $config['charset'] = 'utf-8';
        $config['smtp_timeout'] = 30;
        $config['mailtype'] = 'html';
        $config['wordwrap'] = TRUE;
        $config['crlf'] = PHP_EOL;
        $config['newline'] = PHP_EOL;

        $this->email->initialize($config);
        $this->email->from('', '');
        $this->email->to($str);

        $this->email->subject('');
        $this->email->message('<div style="color: rgb(90, 88, 88); font-family: 微软雅黑; font-size: 16px; line-height: 27.2px;"><div id="mainmail" style="color: rgb(0, 0, 0); font-family: "lucida Grande", Verdana, "Microsoft YaHei"; font-size: 12px; line-height: normal; position: relative; z-index: 1; margin-bottom: 12px;"><div id="contentDiv" class="body" style="line-height: 1.7; position: relative; font-size: 14px; height: auto; padding: 15px 15px 10px; z-index: 1; zoom: 1;"><div id="qm_con_body"><div id="mailContentContainer" class="qmbox qm_con_body_content qqmail_webmail_only" style="padding: 0px; height: auto; min-height: 100px; word-wrap: break-word;"><div style="width: 632px; margin: 0px auto;"><div style="clear: both; font-size: 16px; color: rgb(90, 88, 88); font-family: 微软雅黑;"><div><div style="line-height: 27.2px;">亲爱的&nbsp;<b>'.$name.'</b>：</div><div style="line-height: 27.2px;"><p style="line-height: 27.2px;">恭喜您<strong>报名成功</strong>，我们会根据您的联系方式给您下发笔试面试通知</p></div><a href="http://hr.so-on.cn/index.php/result/'.$id.'" target="_blank" style="outline: none; cursor: pointer; color: rgb(50, 56, 78); line-height: 27.2px;"><input type="button" value="查询网址" style="font-family: 微软雅黑; font-size: 16px; -webkit-font-smoothing: subpixel-antialiased; outline: none; padding: 8px; border-radius: 5px; color: rgb(255, 255, 255); border: none; cursor: pointer; font-weight: bold; background-color: rgb(101, 182, 235);"></a><span style="color: rgb(0, 0, 0); font-family: Simsun; font-size: medium; line-height: normal;"></span><div style="color: rgb(0, 0, 0); font-family: Simsun; font-size: medium; line-height: normal;"><br><div><span style="color: rgb(90, 88, 88); font-family: 微软雅黑; font-size: 16px; line-height: 27.2px;">如未通过请通过此网址了解详情，您也可以通过此连接查看报名详情和处理进度。</span><br><div style="color: rgb(90, 88, 88); font-family: 微软雅黑; font-size: 16px; line-height: 27.2px;"><p style="line-height: 27.2px;">如点击按钮无效，请复制以下链接至浏览器地址栏后访问：</p><p style="line-height: 27.2px; color: rgb(0, 109, 182);"><a href="http://hr.so-on.cn/index.php/result/'.$id.'" target="_blank" style="outline: none; cursor: pointer; color: rgb(50, 56, 78);">http://hr.so-on.cn/index.php/result/'.$id.'</a></p><p style="line-height: 27.2px;">如果您有个人作品，请将作品以单个压缩包附件形式发到我们的公共邮箱<strong>public@54sh.com</strong>&nbsp;，并注明身份信息</p></div><div style="color: rgb(90, 88, 88); font-family: 微软雅黑; font-size: 16px; line-height: 27.2px; padding: 10px 0px;"><p style="line-height: 27.2px;">谨上</p><p style="line-height: 27.2px;">升华网团队</p></div><div style="font-family: 微软雅黑; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: rgb(228, 228, 228); padding: 5px 0px; font-size: 12px; color: rgb(0, 109, 182);">&nbsp;&nbsp;<a href="http://54sh.csu.edu.cn/" target="_blank" style="outline: none; text-decoration: none; cursor: pointer; color: rgb(0, 109, 182);">中南大学升华网</a></div></div></div></div><div style="position: relative; float: right; width: 170px; padding-top: 5px; color: rgb(55, 55, 55); font-size: 12px;">盛世升华网，服务中南人</div><div><br></div></div></div></div></div></div></div><div id="pageEnd" style="color: rgb(0, 0, 0); font-family: "lucida Grande", Verdana, "Microsoft YaHei"; font-size: 12px; line-height: normal; clear: both; position: relative; z-index: 2;"><div module="qmQReply" id="quickreply" class="quickreply" style="margin: 0px;"></div></div></div>
');

        return $this->email->send();
      //  echo $this->email->print_debugger();
    }
}

