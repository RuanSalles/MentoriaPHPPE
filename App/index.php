<?php

use App\Finance\Actions\Checkout\Checkout;
use \MercadoPago;
use \PagSeguro;
use Symfony\Component\Routing\Route;

$mercadoPago = Config::class;
$pagSeguro = Domains::class;
$checkOut = new Checkout();
$qualquerCoisa = new Route();
