<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php

/**
 * Created by Soon
 * Date: 2016/8/8
 * Time: 23:15
 * 验证码模型
 */
class indexCaptchaModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * 创建一个验证码图片，返回图片名称
     * @return mixed
     */
    public function createCaptcha()
    {
        $this->load->helper('captcha');
        $vals = array(
            //'word' => 'Random word',
            'img_path' => './capcache/',
            'img_url' => '/hr/capcache/',
            'expiration' => 7200,
            'word_length' => 4,
            'font_path' => 'c:/windows/fonts/simsun.ttc',
            'font_size' => 20,
            'img_id' => 'captcha',
            'pool' => '023456789abcdefghjkmnopqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ',

            // White background and border, black text and red grid
            'colors' => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
            )
        );
        $cap = create_captcha($vals);
        $data = array(
            'captcha_time' => $cap['time'],
            'captcha_word' => $cap['word']
        );
        $this->session->set_userdata($data);
        return $cap['time'];
    }

    /**
     * 检验验证码是否正确
     * @return bool
     */
    public function validationCaptcha()
    {
        $expiration = time() - 7200; 
        if ($this->session->captcha_time < $expiration) {
           return false;
        }
        if (strtolower(trim($this->input->post('captcha',true))) == strtolower($this->session->captcha_word)) {
            return true;
        } else {
            return false;
        }

    }

}