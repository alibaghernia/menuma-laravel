<?php

namespace App\Livewire;

use App\Models\QrCode;
use App\Models\Table;
use Livewire\Component;

class QrCodePage extends Component
{
    public Table $table;

    public function mount($table_id)
    {
        $this->table = Table::find($table_id);
        abort_if(!$this->table, 404, 'the table does not exist');


        if (!$this->table->qrCode) {
            $slug = '_' . chr(rand(65, 90)) . QrCode::count();
            $qrCode = QrCode::create([
                'slug' => $slug,
                'type' => 'part_of_business',
                'meta' => [
                    'part' => 'menu',
                    'business_id' => auth()->user()->cafe_restaurant_id,
                    'specific_parameters' => [
                        'table_id' => $this->table->id
                    ]
                ],
                'cafe_restaurant_id' => auth()->user()->cafe_restaurant_id,
            ]);
            $this->table->qr_code_id = $qrCode->id;
            $this->table->save();
//            todo refresh model
            $this->table = Table::find($table_id);
        }

    }

    public function render()
    {

        return view('livewire.qr-code-page');
    }
}
