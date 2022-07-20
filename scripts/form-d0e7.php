<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Заявка по бетону',
    'email_message' => 'У вас есть новая заявка!',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'beton@beton77.ru',
    'to' => 'Arm_93@mail.ru'
    // 'to' => 'leetio19@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'phone' => array(
    'order' => 3,
    'type' => 'tel',
    'label' => 'Телефон',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Телефон\' is required.'
    )
    ),
    'message' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>