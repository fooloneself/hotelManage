<?php
namespace service\admin;
use common\components\Server;
use common\models\AdminRole;

class Privilege extends Server{
    //admin server
    protected $admin;
    //权限数组
    private $_privileges;

    public function __construct(\service\admin\Admin $admin)
    {
        $this->admin=$admin;
    }

    /**
     * 获取所有的权限
     * @return array
     */
    public function all(){
        if($this->_privileges===null){
            if($this->admin->isSuper()){
                if($this->admin->isAdminOfMerchant()){
                    $this->_privileges=\Yii::$app->getModule('merchant')->allPrivilegeOfModules($this->admin->allModules());
                }else{
                    $this->_privileges=\Yii::$app->getModule('admin')->allPrivilege();
                }
            }else{
                if($this->admin->isAdminOfMerchant()){
                    $this->_privileges=\common\models\Admin::getPrivilegeOfMerchantByAdminId($this->admin->getAdminId());
                }else{
                    $this->_privileges=AdminRole::getPrivilegeByAdminId($this->admin->getAdminId());
                }
            }
        }
        return $this->_privileges;
    }

    /**
     * 是否有权限
     * @param $privilegeCode
     * @return bool
     */
    public function hasPrivilege($privilegeCode){
        if($this->admin->isSuper()){
            if($this->admin->isAdminOfMerchant()){
                return in_array($privilegeCode,$this->all());
            }else{
                return true;
            }
        }else{
            $privileges=$this->all();
            return in_array($privilegeCode,$privileges,true);
        }
    }
}