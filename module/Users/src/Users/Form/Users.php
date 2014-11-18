<?php

namespace Users\Form;

use Zend\Form\Form;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class Users extends Form implements InputFilterAwareInterface
{

    protected $inputFilter;

    public function __construct($name = 'null')
    {
        parent::__construct('users');
        $this->setAttribute('method', 'post');
        $this->setAttribute('id', 'users');


        $this->add(array(
            'name' => 'first_name',
            'required' => 'required',
            'attributes' => array(
                'type' => 'text',
                'id' => 'first_name',
            ),
            'options' => array(
                'label' => 'First Name ',
            ),
        ));

        $this->add(array(
            'name' => 'last_name',
            'required' => 'required',
            'attributes' => array(
                'type' => 'text',
                'id' => 'last_name',
            ),
            'options' => array(
                'label' => 'Last Name ',
            ),
        ));

        $this->add(array(
            'name' => 'email',
            'required' => 'required',
            'attributes' => array(
                'type' => 'text',
                'id' => 'email',
            ),
            'options' => array(
                'label' => 'Email ',
            ),
        ));


        $this->add(array(
            'type' => 'Zend\Form\Element\Select',
            'name' => 'role',
            'required' => 'required',
            'attributes' => array(
                'id' => 'role',
                'class' => 'uniformselect'
            ),
            'options' => array(
                'label' => 'Role ',
                'value_options' => array(
                    '' => 'Select Role',
                    'user' => 'User',
                    'admin' => 'Admin',
                )
            ),
        ));
    }

    public function getInputFilter()
    {
        if (!$this->inputFilter) {
            $inputFilter = new InputFilter();
            $factory = new InputFactory();


            $inputFilter->add($factory->createInput(array(
                        'name' => 'first_name',
                        'required' => true,
                        'filters' => array(
                            array('name' => 'StripTags'),
                            array('name' => 'StringTrim'),
                        ),
                        'validators' => array(
                            array(
                                'name' => 'NotEmpty',
                                'options' => array('message' => 'First Name cannot be empty'),
                            ),
                        ),
            )));

            $inputFilter->add($factory->createInput(array(
                        'name' => 'last_name',
                        'required' => true,
                        'filters' => array(
                            array('name' => 'StripTags'),
                            array('name' => 'StringTrim'),
                        ),
                        'validators' => array(
                            array(
                                'name' => 'NotEmpty',
                                'options' => array('message' => 'Last Name cannot be empty'),
                            ),
                        ),
            )));

            $inputFilter->add($factory->createInput(array(
                        'name' => 'email',
                        'required' => true,
                        'filters' => array(
                            array('name' => 'StripTags'),
                            array('name' => 'StringTrim'),
                        ),
                        'validators' => array(
                            array(
                                'name' => 'NotEmpty',
                                'options' => array('message' => 'Email cannot be empty'),
                            ),
                        ),
            )));


            $inputFilter->add($factory->createInput(array(
                        'name' => 'role',
                        'required' => false,
                        'filters' => array(
                            array('name' => 'StripTags'),
                            array('name' => 'StringTrim'),
                        ),
                        'validators' => array(
                            array(
                                'name' => 'NotEmpty',
                                'options' => array('message' => 'Role cannot be empty'),
                            ),
                        ),
            )));



            $this->inputFilter = $inputFilter;
        }

        return $this->inputFilter;
    }

}