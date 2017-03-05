<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('includes/header'); ?>


    <div class="am-g">
        <form id="sh-form" method="post" class="am-form" action="index.php/add">
            <label for="name">姓名*:</label>
            <input type="text" name="name" id="name" value="" required="required">
            <br/>
            <label for="sex">性别*:</label>
            <div class="am-form-group" id="sex">
                <label class="am-radio-inline">
                    <input type="radio" value="0" name="sex" required>男
                </label>
                <label class="am-radio-inline">
                    <input type="radio" value="1" name="sex" required>女
                </label>
            </div>
            <label for="birthday">出生日期*:</label>
            <input type="date" name="birthday" id="birthday" value="" required="required">
            <br/>
            <label for="classes">专业班级*:</label>
            <input type="text" name="classes" id="classes" value="" required="required">
            <br/>
            <label for="hometowns">籍贯*:</label>
            <input type="text" name="hometowns" id="hometowns" value="" required="required">
            <br/>
            <label for="phone">联系电话*:</label>
            <input type="number" name="phone" id="phone" value="" required="required">
            <br/>
            <label for="email">邮箱*:</label>
            <input type="email" name="email" id="email" value="" required="required">
            <br/>
            <div class="am-form-group">
                <label for="job1">应聘部门一*:</label>
                <select id="job1" name="job1" required>
                    <option value="">-=请选择一项=-</option>
                    <option value="网络部">网络部</option>
                    <option value="程序部">程序部</option>
                    <option value="网络部">办公室</option>
                    <option value="程序部">信息部</option>
                    <option value="网络部">美工部</option>
                    <option value="程序部">运营部</option>
                    <option value="程序部">视频团</option>
                </select>
                <span class="am-form-caret"></span>
            </div>
            <br/>
            <div class="am-form-group">
                <label for="job2">应聘部门二*:</label>
                <select id="job2" name="job2"  required>
                    <option value="">-=请选择一项=-</option>
                    <option value="网络部">网络部</option>
                    <option value="程序部">程序部</option>
                    <option value="网络部">办公室</option>
                    <option value="程序部">信息部</option>
                    <option value="网络部">美工部</option>
                    <option value="程序部">运营部</option>
                    <option value="程序部">视频团</option>
                </select>
                <span class="am-form-caret"></span>
            </div>
            <br/>
            <div class="am-form-group">
                <label for="reason">应聘原因*:</label>
                <textarea class="" rows="5" id="reason" name="reason" required></textarea>
            </div>
            <br/>
            <div class="am-form-group">
                <label for="evaluate">自我评价*:(如：特长爱好)</label>
                <textarea class="" rows="5" id="evaluate" name="evaluate" required></textarea>
            </div>
            <br/>
            <div class="am-form-group">
                <label for="experience">工作或项目经历:(选填)</label>
                <textarea class="" rows="5" id="experience" name="experience"></textarea>
            </div>
            <br/>
            <div class="am-form-group">
                <label for="winning">获奖情况:（选填）</label>
                <textarea class="" rows="5" id="winning" name="winning" ></textarea>
            </div>
            <br/>
            <div class="am-input-group">
                <span class="am-input-group-label"> <label for="cap">验证码:</label>
                <img id="captcha" src="/capcache/<?php echo $img; ?>.jpg" style="width: 150; height: 30; border: 0;" alt=" "></span>
                <input type="text" name="captcha" id="cap" value="" required="required">
            </div>

            <div class="am-cf">
                <input type="submit" name="" value="提 交" class="am-btn am-btn-primary am-btn-sm am-fr">
            </div>
        </form>

    </div>

<?php $this->load->view('includes/footer'); ?>