<?php

namespace App\Http\Controllers\Api\Business;

use App\Http\Controllers\Controller;
use App\Models\CafeRestaurant as CafeModel;
use App\Models\Table;
use App\Models\User;
use Filament\Notifications\Notification;
use Filament\Notifications\Actions\Action;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class WaiterPagerController extends Controller
{
    private function findBySlug(string $slug)
    {
        $cafe = CafeModel::where('slug', $slug)->first();
        if (!$cafe) {
            abort(404);
        }
        return $cafe;
    }

    public function call(string $slug, string $table_id)
    {
        $cafe = $this->findBySlug($slug);
        $table = Table::find($table_id);
        abort_if(
            !$table,
            404,
            'table does not exist.',
        );
        abort_if(
            $cafe->id !== $table->cafe_restaurant_id,
            400,
            ' the table is not match with this cafe.',
        );


        $data = [
            "actions" => [
                [
                    "name" => "view",
                    "color" => null,
                    "event" => null,
                    "eventData" => [],
                    "dispatchDirection" => false,
                    "dispatchToComponent" => null,
                    "extraAttributes" => [],
                    "icon" => null,
                    "iconPosition" => "before",
                    "iconSize" => null,
                    "isOutlined" => false,
                    "isDisabled" => false,
//                    "label" => "\u0645\u0646 \u0645\u06cc\u0631\u0645",
                    "label" => "من میرم",
                    "shouldClose" => true,
                    "shouldMarkAsRead" => false,
                    "shouldMarkAsUnread" => false,
                    "shouldOpenUrlInNewTab" => false,
                    "size" => "sm",
                    "tooltip" => null,
                    "url" => null,
                    "view" => "filament-actions=>=>button-action"
                ]
            ],
            "body" => null,
            "color" => null,
            "duration" => "persistent",
            "icon" => null,
            "iconColor" => null,
            "status" => null,
//            "title" => "\u0645\u06cc\u0632 ".$table->code,
            "title" => " میز " . $table->code,
            "view" => "filament-notifications=>=>notification",
            "viewData" => [],
            "format" => "filament"
        ];

        DatabaseNotification::create([
            'id' => Str::uuid(),
            'type' => 'Filament\Notifications\DatabaseNotification',
            'notifiable_type' => 'App\Models\CafeRestaurant',
            'notifiable_id' => $cafe->id,
            'data' => $data,
            'read_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
            'table_id' => $table->id,
        ]);
        return;

        $recipientUsers = User::where('cafe_restaurant_id', $cafe->id)
            ->get();
//        $title = <<<TITLE
//        میز "{$unitCheck->unit->name}"
//        توسط "{$unitCheck->user->name}"
//        چک شد
//        TITLE;
        $t = 'میز ' .
            $table->code;
        $cafe->notify(
            Notification::make()
                ->title($t)
//                ->body(now())
                ->actions([
                    Action::make('view')
                        ->label('من میرم')
                        ->button()
//                        ->action(function (){})
//                        ->markAsRead(),
                        ->close()
                ])
                ->toDatabase()
        );
//        Notification::make()
//            ->title($t)
//            ->body('$body')
//            ->sendToDatabase($recipientUsers); //todo
//        \Filament\Notifications\DatabaseNotification\
    }

    public function cancel(string $slug, string $table_id)
    {
        $cafe = $this->findBySlug($slug);
        $table = Table::find($table_id);
        abort_if(
            !$table,
            404,
            'table does not exist.',
        );
        abort_if(
            $cafe->id !== $table->cafe_restaurant_id,
            400,
            ' the table is not match with this cafe.',
        );

        DatabaseNotification::where('table_id', $table->id)
            ->delete();

    }
}
