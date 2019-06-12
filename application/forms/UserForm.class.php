<?php

class UserForm extends Form
{
    public function build()
    {
        $this->addFormField('lastName');
        $this->addFormField('firstName');
        $this->addFormField('address');
        $this->addFormField('city');
        $this->addFormField('zipcode');
        $this->addFormField('phone');
        $this->addFormField('email');
    }
}