<?php

/**
 * Created by Soon
 * Date: 2016/8/10
 * Time: 16:07
 */
class result extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     *结果查询，直接在控制器处理业务逻辑了...
     * @param $str
     */
    public function index($str)
    {
        $p = '/^([\w]+)$/';
        if (preg_match($p, $str, $m)) {
            $query = $this->db->where('sign_id=', $str)->get('sh_signup');
            if (count($query->result_array())) {
                $arr = $query->result_array();
                $arr =  $arr[0];
                if ($arr['sign_state'] == 1) {
                    $arr['sign_state'] = '审核未通过';
                    $arr['sign_state'] .= $arr['sign_fecdback'];
                }else if ($arr['sign_state'] == 2){
                    $arr['sign_state'] = '审核已通过';
                    $arr['sign_state'] .= $arr['sign_fecdback'];
                }else {
                    $arr['sign_state'] = '未审核';
                }

                foreach ($arr as $key => $value){
                    if($arr[$key] == null){
                        $arr[$key] = '无';
                    }
                }
                $data = array(
                    'arr' => $arr
                );
                $this->load->view('resultView', $data);
            } else {
                echo '未找到有关结果';
            }

        } else {
            echo '未找到有关结果';
        }
    }
}