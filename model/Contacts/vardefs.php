<?php

$dictionary['Leads'] = array(
    'table' => 'leads',
    'fields' => array(
        'id' => array(
            'type' => 'id',
        ),
        'date_entered' => array(
            'type' => 'datetime',
        ),
        'date_modified' => array(
            'type' => 'datetime',
        ),
        'converted' => array(
            'type' => 'bool',
            'default' => '0',
        ),
        'status' => array(
            'type' => 'enum',
            'len'  => '65',
            'options' => array(
                  'Curly',
                  'Larry',
                  'Moe'
            ),
        ),
        'first_name' => array(
            'type' => 'varchar',
            'len' => '32',
        ),
        'last_name' => array(
            'type' => 'varchar',
            'len' => '32',
        ),
        'full_name' => array(
            'type' => 'concat',
            'fields' => array('first_name', 'last_name'),
        ),
        'phone_home' => array(
            'type' => 'phone',
            'len' => '50',
        ),
        'phone_mobile' => array(
            'type' => 'phone',
            'len' => '50',
        ),
        'phone_work' => array(
            'type' => 'phone',
            'len' => '50',
        ),
        'address_street' => array(
            'type' => 'varchar',
            'len' => '100',
        ),
        'address_city' => array(
            'type' => 'varchar',
            'len' => '100',
        ),
        'address_state' => array(
            'type' => 'varchar',
            'len' => '50',
        ),
        'address_country' => array(
            'type' => 'varchar',
            'len' => 50,
        ),
        'address_postalcode' => array(
            'type' => 'varchar',
            'len' => '20',
        ),
        'email'=> array(
            'type' => 'email',
            'len' => '20',
        ),
    ),
);

