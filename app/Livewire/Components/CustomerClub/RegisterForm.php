<?php

namespace App\Livewire\Components\CustomerClub;

use App\Models\CafeRestaurant;
use App\Models\CafeRestaurantCustomer;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Select;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Form;
use Filament\Forms;
use Illuminate\Contracts\View\View;
use Filament\Notifications\Notification;

class RegisterForm extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public bool $isRegistered = false;
    public CafeRestaurant $business;

    public function mount(CafeRestaurant $business): void
    {
        $this->business = $business;
        $this->form->fill([]);
    }

    public function form(Form $form): Form
    {
//        $birthdate = Verta::jalaliToGregorian(1403, 1, 12);
//        dd(implode('-',$birthdate));
        // todo refactor
        $days = [];
        for ($i = 1; $i <= 31; $i++) {
            $days[$i] = $i;
        }


        $mounts = [
            1 => 'فروردین',
            2 => 'اردیبهشت',
            3 => 'خرداد',
            4 => 'تیر',
            5 => 'مرداد',
            6 => 'شهریور',
            7 => 'مهر',
            8 => 'آبان',
            9 => 'آذر',
            10 => 'دی',
            11 => 'بهمن',
            12 => 'اسفند',
        ];
        $years = [];


        for ($j = 1403; $j >= 1333; $j--) {
            $years[$j] = $j;
        }

        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('نام'),

                TextInput::make('family')
                    ->required()
                    ->label('نام خانوادگی'),

//                Forms\Components\DatePicker::make('birth_date')
//                    ->label('تاریخ تولد')
//                    ->jalali()
//                    ->seconds(false)
////                    ->mi
////                    ->required(),
//                ,
                Select::make('gender')
                    ->required()
                    ->label('جنسیت')
                    ->options([
                        'man' => 'مرد',
                        'woman' => 'زن'
                    ]),
                Forms\Components\Section::make()
                    ->heading('تاریخ تولد')
                    ->columns(3)
                    ->schema([
                        Select::make('day')
                            ->required()
                            ->label('روز')
                            ->options($days),
                        Select::make('mount')
                            ->required()
                            ->label('ماه')
                            ->options($mounts),
                        Select::make('year')
                            ->required()
                            ->label('سال')
                            ->options($years),
                    ]),


                TextInput::make('mobile')
                    ->label('شماره موبایل')
                    ->required()
                    ->maxLength(11)
                    ->minLength(11)
                    ->placeholder('09123456789')
                    ->startsWith('09'),
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
//        todo refactor
        $data = $this->form->getState();

        $birthdate = Verta::jalaliToGregorian($data['year'], $data['mount'], $data['day']);

        CafeRestaurantCustomer::create([
            'name' => $data['name'],
            'family' => $data['family'],
            'birth_date' => implode('-', $birthdate),
            'gender' => $data['gender'],
            'mobile' => $data['mobile'],
            'cafe_restaurant_id' => $this->business->id,
        ]);
        $this->isRegistered = true;
    }

    public function render(): View
    {
        return view('livewire.components.customer-club.register-form');
    }
}
