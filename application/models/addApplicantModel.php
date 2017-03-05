<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php

/**
 * Created by Soon
 * Date: 2016/7/31
 * Time: 11:46
 */
class AddApplicantModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * 处理上传的信息
     * @param $id
     * @return array
     */
    public function uploadFile($id)
    {
        $file_list = array('works' => '', 'photo' => '');
      //  echo $_FILES ['works'] ['name'];
        if (!empty ($_FILES ['works'] ['name'])) {
            $tmp_file = $_FILES ['works'] ['tmp_name'];
            $file_types = explode(".", $_FILES ['works'] ['name']);
            $file_type = $file_types [count($file_types) - 1];

            if (strtolower($file_type) != "zip" && strtolower($file_type) != "rar") {
                exit(json_encode(array('state'=>'error','info'=>'不是支持的压缩文件类型，重新上传')));
            }
            $savePath = FCPATH . '/upload/works/';
            $file_name = $id . "." . $file_type;
            if (!copy($tmp_file, $savePath . $file_name)) {
                exit(json_encode(array('state'=>'error','info'=>'文件上传失败')));
            }
            $file_list['works'] =  $file_name;
        }
        if (!empty ($_FILES ['photo'] ['name'])) {

            $tmp_file = $_FILES ['photo'] ['tmp_name'];
            $file_types = explode(".", $_FILES ['photo'] ['name']);
            $file_type = $file_types [count($file_types) - 1];

            if (strtolower($file_type) != "jpg" && strtolower($file_type) != "png" && strtolower($file_type) != "gif" && strtolower($file_type) != "bmp" && strtolower($file_type) != "jpeg") {
                exit(json_encode(array('state'=>'error','info'=>'不是支持的图片类型，重新上传 ')));
            }

            $savePath = FCPATH . '/upload/photo/';
            $file_name = $id . "." . $file_type;
            if (!copy($tmp_file, $savePath . $file_name)) {
                exit(json_encode(array('state'=>'error','info'=>'图片上传失败')));
            }
            $file_list['photo'] = $file_name;
        }

        return $file_list;
    }

    /**
     * 向数据库添加数据
     * @return mixed
     */
    public function addApplicant($id)
    {
//        $id = md5(time() . rand(1000, 9999));
       // $fileList = $this->addApplicantModel->uploadFile($id);
        $insertApplicantData = array(
            'sign_id' => $id,
            'sign_name' => $this->input->post('name', true),
            'sign_sex' => intval($this->input->post('sex', true))> 0 ? '女' : '男',
            'sign_birthday' => $this->input->post('birthday', true),
            'sign_class' => $this->input->post('classes', true),
            'sign_native' => $this->input->post('hometowns', true),
            'sign_tele' => $this->input->post('phone', true),
            'sign_email' => $this->input->post('email', true),
            'sign_job_one' => $this->input->post('job1', true),
            'sign_job_two' => $this->input->post('job2', true),
            'sign_reason' => $this->input->post('reason', true),
            'sign_evaluate' => $this->input->post('evaluate', true),
            'sign_experience' => $this->input->post('experience', true),
            'sign_prize' => $this->input->post('winning', true),
//            'sign_photo_name' => $this->input->post('photo', true),
//            'sign_works_name' => $this->input->post('works', true),
//            'sign_photo_file_path' => $fileList['photo'],
//            'sign_works_file_path' => $fileList['works'],
            'sign_ip' => $this->input->ip_address(),
            'sign_time' => time(),
        );

        $insert = $this->db->insert('sh_signup', $insertApplicantData);
        return $insert;
    }
}