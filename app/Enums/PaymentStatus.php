<?php

namespace App\Enums;

enum PaymentStatus:int {
    case APPROVED = 1;
    case PENDING = 2;
    case FAILED = 3;

    public static function getAllNames(){
        return [
            PaymentStatus::APPROVED->value => 'Aprobado',
            PaymentStatus::PENDING->value => 'Pendiente',
            PaymentStatus::FAILED->value => 'Fallido'
        ];
    }
}
