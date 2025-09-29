<?php


// Início arquivo de configuração para extras adicionais
    //É um array retornando um array referente a cada recurso exta
        //Ele é chamado no front-end para popular os extras disponíveis
            //Ele também é chamado no backend para calcular o preço total da reserva

    return [

        'extras' => [
                'baby_seat' => [
                    'label' => 'Cadeira de Bebê',
                    'price' => 15000.00,
                    'icon'  => 'fas fa-baby-carriage',
                ],
                'protected_theft' => [
                    'label' => 'Proteção contra Roubo',
                    'price' => 50000.00,
                    'icon'  => 'fas fa-shield-alt',
                ],
                'protected_accidents' => [
                    'label' => 'Proteção contra Acidentes',
                    'price' => 35000.00,
                    'icon'  => 'fas fa-ambulance',
                ],
                
        ],

    ];


// Fim arquivo de configuração para extras adicionais