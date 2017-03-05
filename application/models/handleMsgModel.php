<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php

/**
 * Created by Soon
 * Date: 2016/8/20
 * Time: 12:34
 */
class  handleMsgModel extends CI_Model
{
    public function handle($str)
    {
        return ($this->validationEmail($str) && $this->checkMsgForNull());
    }

    public function validationEmail($str)
    {
        $p = '/^[A-Za-z\d]+([-_.][A-Za-z\d]+)*@([A-Za-z\d]+[-.])+[A-Za-z\d]{2,5}$/i';
        if (preg_match($p, $str, $m)) {
            return true;
        } else {
            return false;
        }
    }

    public function checkMsgForNull()
    {
        $arr[0] = $this->input->post('name', true);
        $arr[1] = $this->input->post('birthday', true);
        $arr[2] = $this->input->post('classes', true);
        $arr[3] = $this->input->post('hometowns', true);
        $arr[4] = $this->input->post('phone', true);
        $arr[5] = $this->input->post('email', true);
        $arr[6] = $this->input->post('job1', true);
        $arr[7] = $this->input->post('job2', true);
        $arr[8] = $this->input->post('reason', true);
        $arr[9] = $this->input->post('evaluate', true);
        foreach ($arr as $item) {
            if ($item == null) {
                return false;
            }
        }
        return true;
    }
}