<?php

namespace Application\Validator;

use Zend\Validator\AbstractValidator;

class EndDateValidator extends AbstractValidator
{
    const INVALID_LEAVING_DATE = 'invalidLeavingDate';
    const INVALID_JOINING_DATE = 'invalidJoiningDate';
    
    protected $messageTemplates = array(
        self::INVALID_LEAVING_DATE => 'Leaving date should be greater than joining date',
        self::INVALID_JOINING_DATE => 'Please enter joining date',
    );
    
    public function isValid($value, $context = null)
    {
        if(!empty($context['joining_date']) && !empty($value)){
            if(new \DateTime($context['joining_date']) > new \DateTime($value)){
                $this->error(self::INVALID_LEAVING_DATE);
                return false;
            }
        } else if (empty($context['joining_date']) && !empty($value)) {
            $this->error(self::INVALID_JOINING_DATE);
            return false;
        }
        return true;
    }
}
