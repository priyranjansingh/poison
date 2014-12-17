<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once '/amember/library/Am/Lite.php';
/**
 * Description of auth
 *
 * @author neeraj
 */
class MyAuth {

    public function __construct(){
        $this->load->model('Vip_model');
    }

    public function isLogin() {
        $login = Am_Lite::getInstance()->isLoggedIn();
        if($login){
            $this->setDownloads();    
        }
        return $login;
    }
    
    public function getUserId() {
        $user = Am_Lite::getInstance()->getUser();
        
        return $user['user_id'];
    }
    
    public function onlyLogin() {
         Am_Lite::getInstance()->checkAccess(Am_Lite::ONLY_LOGIN);
    }

    public function userName(){
        return Am_Lite::getInstance()->getName();   
    }

    public function setDownloads(){
        $downloadArray  = Vip_model()->getAllDownloadByUser($this->getUserId());
        $this->session->set_userdata($downloadArray);
    }

}

?>
