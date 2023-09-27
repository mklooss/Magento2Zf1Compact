<?php

if (class_exists('\Magento\Framework\Filter\FilterInput'))
{
    class Zend_Filter_Input extends \Magento\Framework\Filter\FilterInput {

    }
} else {
    class Zend_Filter_Input extends \Laminas\InputFilter\InputFilter {
        
    }
}