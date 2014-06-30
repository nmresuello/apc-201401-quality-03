<?php

class UserIdentity extends CUserIdentity
{
    private $_id;

    public function authenticate()
    {
        $record=User::model()->findByAttributes(array('username'=>$this->username));
		$employee = Employee::model()->findByAttributes(array('id'=>$record->employee_id));
	
		
        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($record->password!==($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
			$this->setState('eid', $employee->id);
		    $this->setState('isAdmin',$record->role="Admin");
            $this->_id=$record->employee_id;
			
            $this->setState('role', $record->role);
            $this->errorCode=self::ERROR_NONE;
	
				
			
        }
        return !$this->errorCode;
    }
 
    public function getId()
    {
        return $this->_id;
    }

	
	
	
}
	


/**
 * $id=Yii::app()->user->id;
 * $lastLoginTime=Yii::app()->user->lastLoginTime;
 */

