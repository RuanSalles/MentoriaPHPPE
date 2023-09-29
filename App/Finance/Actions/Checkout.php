<?php

//'Root\Dominio\SubDominio\ClasseConcreta

namespace App\Finance\Actions\Checkout;

class Checkout
{

}

namespace PagBank\Actions\Checkout;
class Checkout {

}

namespace MercadoPago\Marketplace\Operations\Checkout;
use App\Finance\Utils\Validator;

class Checkout {

}

$mercadoPago = new Checkout();
$pagBank = new \PagBank\Actions\Checkout\Checkout();
$app = new \App\Finance\Actions\Checkout\Checkout();
$validador = new Validator();