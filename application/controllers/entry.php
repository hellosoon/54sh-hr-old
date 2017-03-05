<?php

/**
 * Created by Soon
 * Date: 2016/7/31
 * Time: 11:34
 */
class entry extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');//全局session
    }

    /**
     * 报名table
     */
    public function index()
    {
        $this->load->model('indexCaptchaModel');
        $img = $this->indexCaptchaModel->createCaptcha();
        $data = array(
            'img' => $img,
        );
        $this->load->view('indexView', $data);
    }

    /**
     * 验证码更换
     */
    public function getCaptcha()
    {
        $this->load->model('indexCaptchaModel');
        echo $this->indexCaptchaModel->createCaptcha();
    }

    /**
     * 添加报名信息
     */
    public function add()
    {

        $id = md5(time() . rand(1000, 9999));

        $this->load->model('indexCaptchaModel');//验证码

        if ($this->indexCaptchaModel->validationCaptcha()) {//识别验证码


            $this->load->model('handleMsgModel');//检验一些参数是否正确

            if (!$this->handleMsgModel->handle($this->input->post('email', true))) {
                exit(json_encode(array('state' => 'error', 'info' => '请检查所填参数是否正确（如：邮箱是否为常见邮箱）')));
            }
            $this->load->model('addApplicantModel');//添加信息
            $this->load->model('sendEmailModel');//发送邮件

            if ($this->addApplicantModel->addApplicant($id)) {
                //$result = '报名成功，我们会根据您的联系方式给您下发笔试面试通知，如未通过请通过此<a href="result/' . $id . '">网址</a>了解详情<br/>';
                //if ($this->sendEmailModel->send($this->input->post('email', true), $id,$this->input->post('name', true))) {
                    //     $result .=  '我们已将此网址发送到您的邮箱，请查收';
                //}
                echo json_encode(array('state' => 'success', 'info' => 'index.php/result/' . $id));
            } else {
                echo json_encode(array('state' => 'error', 'info' => '报名失败'));
            }
        } else {
            echo json_encode(array('state' => 'error', 'info' => '验证码错误'));
        }

    }

}