<?php

namespace App\Filament\CafeRestaurant\Pages\Setting;

use App\Enums\WeekdayEnum;
use App\Filament\CafeRestaurant\Pages\Setting\Components\RepeaterOfFromToTime;
use App\Filament\CafeRestaurant\Pages\Setting\Components\SocialNetwork;
use App\Models\WorkingHour;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Validation\ValidationException;

class Profile extends Page
{
    use InteractsWithFormActions,
        WithRateLimiting;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'تنظیمات';
    protected static ?string $navigationLabel = 'پروفایل کافه';
    protected ?string $heading = 'پروفایل کافه';
    protected static string $view = 'filament.cafe-restaurant.pages.setting.profile';
    protected static ?int $navigationSort = 2;


    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    public function mount(): void
    {
        $data = [];
        $workingHours = WorkingHour::select('from', 'to', 'weekday')
            ->where('cafe_restaurant_id', auth()->user()->cafe_restaurant_id)
            ->get();
        foreach ($workingHours as $time) {
            $data[$time['weekday']][] = [
                'from' => $time->from,
                'to' => $time->to,
                'cafe_restaurant_id' => auth()->user()->cafe_restaurant_id,
            ];
        }
//        return $data;

        $cafe = auth()->user()->cafeRestaurant;
        $this->form->fill(array_merge([
            'name' => $cafe->name,
            'url' => 'menuma.online/' . $cafe->slug,
            'logo_path' => $cafe->logo_path,
            'banner_path' => $cafe->banner_path,
            'address' => $cafe->address,
            'social_media' => $cafe->social_media,
            'instagram' => $cafe->instagram,
            'telegram' => $cafe->telegram,
            'twitter' => $cafe->twitter,
            'whatsapp' => $cafe->whatsapp,
            'description' => $cafe->description,
            'phone_number' => $cafe->phone_number,
            'email' => $cafe->email,

        ], $data));
    }

    /**
     * @throws ValidationException
     */
    public function authenticate(): void
    {

        $cafe = auth()->user()->cafeRestaurant;
        $imagesData = [];
        $logo = null;
        $logoFullPath = null;
        $logoFileName = null;
//        dd($this->data['logo_path']);
        if (count($this->data['logo_path'])) {
            $logo = array_shift($this->data['logo_path']);
            if (!is_string($logo)) {
                $logoFullPath = ($logo->store('public'));
                $logoFileName = explode('/', $logoFullPath)[1];
                $imagesData['logo_path'] = $logoFileName;
            } else {
                $imagesData['logo_path'] = $logo;
            }
        } else {
            $imagesData['logo_path'] = null;
        }
        $banner = null;
        $bannerFullPath = null;
        $bannerFileName = null;
        if (count($this->data['banner_path'])) {
            $banner = array_shift($this->data['banner_path']);
            if (!is_string($banner)) {

                $bannerFullPath = ($banner->store('public'));
                $bannerFileName = explode('/', $bannerFullPath)[1];
                $imagesData['banner_path'] = $bannerFileName;
            } else {
                $imagesData['banner_path'] = $banner;

            }
        } else {
            $imagesData['banner_path'] = null;
        }
//
        $cafe->update([
            'logo_path' => $imagesData['logo_path'],
            'banner_path' => $imagesData['banner_path'],
            'address' => $this->data['address'],
            'instagram' => $this->data['instagram'],
            'telegram' => $this->data['telegram'],
            'twitter' => $this->data['twitter'],
            'whatsapp' => $this->data['whatsapp'],
            'description' => $this->data['description'],
            'phone_number' => $this->data['phone_number'],
            'email' => $this->data['email'],
        ]);
//
//        todo:H
        WorkingHour::where(
            'cafe_restaurant_id', auth()
            ->user()
            ->cafe_restaurant_id
        )
            ->delete();
        $times = [];
        foreach (WeekdayEnum::arrayKeyValue('name', 'value') as $name => $weekday) {
            foreach ($this->data[$weekday] as $time) {
                $times[] = [
                    'from' => $time['from'],
                    'to' => $time['to'],
                    'weekday' => $weekday,
                    'cafe_restaurant_id' => auth()->user()->cafe_restaurant_id,
                ];
            }
        }
        WorkingHour::insert($times);
        $this->redirect('/profile');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                Grid::make(2)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('نام')
                            ->disabled(),
                        Forms\Components\TextInput::make('url')
                            ->label('آدرس اینترنتی')
                            ->disabled(),

                        Grid::make()
                            ->schema([
                                FileUpload::make('logo_path')
                                    ->label('لوگو')
                                    ->required()
                                    ->image()
                                    ->imageEditor()
                                    ->imageEditorAspectRatios([
                                        null,
                                        '1:1',
                                    ]),
                                FileUpload::make('banner_path')
                                    ->label('بنر')
                                    ->image()
                                    ->imageEditor()
                                    ->imageEditorAspectRatios([
                                        null,
                                        '16:9',
                                    ]),
                            ]),

                        Forms\Components\TextInput::make('description')
                            ->label('شعار')
                            ->maxLength(99)
                            ->columnSpanFull(),

                        Forms\Components\Textarea::make('address')
                            ->label('آدرس ')
                            ->maxLength(191)
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('phone_number')
                            ->label('شماره تماس')
                            ->tel()
                            ->numeric()
                            ->maxLength(99),

                        Forms\Components\TextInput::make('email')
                            ->label('ایمیل')
                            ->maxLength(99)
                            ->email(),


                        Forms\Components\Section::make('شبکه های اجتماعی')
                            ->collapsible()
                            ->collapsed()
                            ->columns(3)
                            ->label('شبکه های اجتماعی')
                            ->schema([
                                SocialNetwork::make('instagram', 'اینستاگرام'),
                                SocialNetwork::make('telegram', 'تلگرام'),
                                SocialNetwork::make('twitter', 'توییتر X'),
                                SocialNetwork::make('whatsapp', 'واتساپ'),
                            ]),

                        Forms\Components\Section::make('ساعات کاری')
                            ->collapsible()
                            ->collapsed()
                            ->label('ساعات کاری')
                            ->schema([
                                RepeaterOfFromToTime::make('saturday', 'شنبه'),
                                RepeaterOfFromToTime::make('sunday', 'یکشنبه'),
                                RepeaterOfFromToTime::make('monday', 'دوشنبه'),
                                RepeaterOfFromToTime::make('tuesday', 'سه‌شنبه'),
                                RepeaterOfFromToTime::make('wednesday', 'چهارشنبه'),
                                RepeaterOfFromToTime::make('thursday', 'پنجشنبه'),
                                RepeaterOfFromToTime::make('friday', 'جمعه'),
                            ]),

                    ]),


            ])
            ->statePath('data');
    }


    public function getTitle(): string|Htmlable
    {
        return 'پروفایل کافه';
    }


    /**
     * @return array<Action | ActionGroup>
     */
    protected function getFormActions(): array
    {
        return [
            $this->getAuthenticateFormAction(),
        ];
    }

    protected function getAuthenticateFormAction(): Action
    {
        return Action::make('authenticate')
            ->label('ذخیره تغییرات')
            ->submit('authenticate');
    }

    protected function hasFullWidthFormActions(): bool
    {
        return false;
    }


}
