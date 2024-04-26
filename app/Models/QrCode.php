<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CafeRestaurant as CafeModel;

class QrCode extends Model
{
    use HasFactory;

    protected $casts = [
        'meta' => 'array'
    ];

    public function getDestinationAttribute()
    {
        $qrCode = $this;
        $domain = config('app.domains.main');

        $cafe = CafeModel::where('id', $qrCode->meta['business_id'])->first();
        abort_if(!$cafe, 404, 'the qr code does not exist.');

        $queryParams = http_build_query([
            'tab_id' => $qrCode->meta['specific_parameters']['table_id'],
        ]);
        if ($cafe->has_domain_address) {
            $destination = "https://{$cafe->domain_address}/menu?{$queryParams}";
        } else {
            $destination = "https://{$domain}/{$cafe->slug}/menu?{$queryParams}";
        }

        return $destination;
    }
}
