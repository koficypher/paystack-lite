<?php
namespace KofiCypher\PayStack\Abstractions;

class Endpoint {

    const InitializeUrl = '/transaction/initialize';
    const VerifyUrl = '/transaction/verify';
    const ListUrl = '/transaction';
    const ChargeAuthUrl = '/transaction/charge_authorization';
    const CheckAuthUrl = '/transaction/check_authorization';
    const ViewTransTimeline = '/transaction/timeline';
    const TransTotals = '/transaction/totals';
    const ExportTrans = '/transaction/export';
    const PartialDebit = '/transaction/partial_debit';
    const Split = '/split';
    const Customer = '/customer';
    const Subaccount = '/subaccount';
    const Plan = '/plan';
    const Subscription = '/subscription';
    const Product = '/product';
    const Page = '/page';
    const PageAvailable = '/page/check_slug_availability';
}