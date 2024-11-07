<?php

namespace mykholy\Paymentgateway\Base;

use mykholy\Paymentgateway\Base\Gateways\AuthorizeDotNetPay;
use mykholy\Paymentgateway\Base\Gateways\AwdPay;
use mykholy\Paymentgateway\Base\Gateways\BillPlzPay;
use mykholy\Paymentgateway\Base\Gateways\CashFreePay;
use mykholy\Paymentgateway\Base\Gateways\CinetPay;
use mykholy\Paymentgateway\Base\Gateways\CoinPayment;
use mykholy\Paymentgateway\Base\Gateways\FlutterwavePay;
use mykholy\Paymentgateway\Base\Gateways\InstamojoPay;
use mykholy\Paymentgateway\Base\Gateways\Iyzipay;
use mykholy\Paymentgateway\Base\Gateways\KineticPay;
use mykholy\Paymentgateway\Base\Gateways\MidtransPay;
use mykholy\Paymentgateway\Base\Gateways\MolliePay;
use mykholy\Paymentgateway\Base\Gateways\PagaliPay;
use mykholy\Paymentgateway\Base\Gateways\PayFastPay;
use mykholy\Paymentgateway\Base\Gateways\PaymobPay;
use mykholy\Paymentgateway\Base\Gateways\PaypalPay;
use mykholy\Paymentgateway\Base\Gateways\PaystackPay;
use mykholy\Paymentgateway\Base\Gateways\PayTabsPay;
use mykholy\Paymentgateway\Base\Gateways\PaytmPay;
use mykholy\Paymentgateway\Base\Gateways\PayUmoneyPay;
use mykholy\Paymentgateway\Base\Gateways\PowertranzPay;
use mykholy\Paymentgateway\Base\Gateways\RazorPay;
use mykholy\Paymentgateway\Base\Gateways\SaltPay;
use mykholy\Paymentgateway\Base\Gateways\Senangpay;
use mykholy\Paymentgateway\Base\Gateways\SitesWayPay;
use mykholy\Paymentgateway\Base\Gateways\SquarePay;
use mykholy\Paymentgateway\Base\Gateways\Sslcommerz;
use mykholy\Paymentgateway\Base\Gateways\StripePay;
use mykholy\Paymentgateway\Base\Gateways\MercadoPagoPay;
use mykholy\Paymentgateway\Base\Gateways\Toyyibpay;
use mykholy\Paymentgateway\Base\Gateways\TransactionCloudPay;
use mykholy\Paymentgateway\Base\Gateways\WiPay;
use mykholy\Paymentgateway\Base\Gateways\YooMoneyPay;
use mykholy\Paymentgateway\Base\Gateways\ZitoPay;

/**
 * @see SquarePay
 * @method  setApplicationId();
 * @method  setAccessToken();
 * @method  setLocationId();
 */

class PaymentGatewayHelpers
{

    public function stripe() : StripePay
    {
        return new StripePay();
    }
    public function paypal() : PaypalPay
    {
        return new PaypalPay();
    }
    public function midtrans() : MidtransPay
    {
        return new MidtransPay();
    }
    public function paytm() : PaytmPay
    {
        return new PaytmPay();
    }
    public function razorpay() : RazorPay
    {
        return new RazorPay();
    }
    public function mollie() : MolliePay
    {
        return new MolliePay();
    }
    public function flutterwave() : FlutterwavePay
    {
        return new FlutterwavePay();
    }
    public function paystack() : PaystackPay
    {
        return new PaystackPay();
    }

    public function payfast() : PayFastPay
    {
        return new PayFastPay();
    }
    public function cashfree() : CashFreePay
    {
        return new CashFreePay();
    }
    public function instamojo() : InstamojoPay
    {
        return new InstamojoPay();
    }
    // deprecated
    public function mercadopago() : MercadoPagoPay
    {
        return new MercadoPagoPay();
    }
    public function payumoney() : PayUmoneyPay
    {
        return new PayUmoneyPay();
    }
    public function squareup() : SquarePay
    {
        return new SquarePay();
    }
    public function cinetpay() : CinetPay
    {
        return new CinetPay();
    }
    public function paytabs() : PayTabsPay
    {
        return new PayTabsPay();
    }
    public function billplz() : BillPlzPay
    {
        return new BillPlzPay();
    }

    public function zitopay() : ZitoPay
    {
        return new ZitoPay();
    }
    public function toyyibpay() : Toyyibpay
    {
        return new Toyyibpay();
    }
    public function pagalipay() : PagaliPay
    {
        return new PagaliPay();
    }
    public function authorizenet() : AuthorizeDotNetPay
    {
        return new AuthorizeDotNetPay();
    }
    public function sitesway() : SitesWayPay
    {
        return new SitesWayPay();
    }
    public function wipay() : WiPay
    {
        return new WiPay();
    }
    public function kineticpay() : KineticPay
    {
        return new KineticPay();
    }
    public function transactionclud() : TransactionCloudPay
    {
        return new TransactionCloudPay();
    }

    public function senangpay() : Senangpay
    {
        return new Senangpay();
    }
    public function saltpay() : SaltPay
    {
        return new SaltPay();
    }

    public function paymob() : PaymobPay
    {
        return new PaymobPay();
    }

    public function iyzipay() : Iyzipay
    {
        return new Iyzipay();
    }

    public function powertranz() : PowertranzPay
    {
        return new PowertranzPay();
    }
    public function awdPay() : AwdPay
    {
        return new AwdPay();
    }

    public function yoomoney() : YooMoneyPay
    {
        return new YooMoneyPay();
    }

    public function coinpayments() : CoinPayment
    {
        return new CoinPayment();
    }
    public function sslcommerz() : Sslcommerz
    {
        return new Sslcommerz();
    }


    public function all_payment_gateway_list() : array
    {
        return [
            'zitopay','billplz','paytabs','cinetpay','squareup',
            'mercadopago','instamojo','cashfree','payfast',
            'paystack','flutterwave','mollie','razorpay','paytm',
            'midtrans','paypal','stripe','toyyibpay','pagali','authorizenet',
            'sitesway','transactionclud','wipay','kineticpay','senangpay','saltpay','paymob',
            'iyzipay','powertranz','awdPay','yoomoney','coinpayments','sslcommerz'
//            'payumoney',
        ];
    }
    public function script_currency_list(){
        return GlobalCurrency::script_currency_list();
    }

    public static function wrapped_id($id) : string
    {
        return random_int(11111,99999).$id.random_int(11111,99999);
    }
    public static function unwrapped_id($id) : string
    {
        return substr($id,5,-5);
    }
    public static function get_current_file_url($Protocol='http://') {
        return $Protocol.$_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(__DIR__));
    }
}
