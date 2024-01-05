<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\QrCode;
use Illuminate\Http\Request;
use App\Models\CafeRestaurant as CafeModel;


class QrCodeController extends Controller
{
    public function getDestination(string $slug)
    {

//        todo: implement direct type
//        todo: set fixed structure for meta
//        todo: add enum type

        $qrCode = QrCode::where('slug', $slug)->first();
        abort_if(!$qrCode, 404, 'the qr code does not exist.');

//        $cafe = CafeModel::where('id', $qrCode->meta['business_id'])->first();
//        abort_if(!$cafe, 404, 'the qr code does not exist.');
//
//        $queryParams = http_build_query([
//            'tab_id' => $qrCode->meta['specific_parameters']['table_id'],
//        ]);
//        if ($cafe->has_domain_address) {
//            $destination = "https://{$cafe->domain_address}/menu?{$queryParams}";
//        } else {
//            $destination = "https://menuma.online/{$cafe->slug}/menu?{$queryParams}";
//        }

        return [
            'destination' => $qrCode->destination
        ];
    }
}
