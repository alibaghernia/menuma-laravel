<?php

namespace App\Filament\CafeRestaurant\Pages\Setting;

use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
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

    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    public function mount(): void
    {

        $cafe = auth()->user()->cafeRestaurant;
        $this->form->fill([
            'name' => $cafe->name,
            'url' => 'menuma.online/' . $cafe->slug,
            'logo_path' => $cafe->logo_path,
            'banner_path' => $cafe->banner_path,
            'address' => $cafe->address,
            'social_media' => $cafe->social_media,
            'instagram' => $cafe->instagram,
            'telegram' => $cafe->telegram,
            'twitter' => $cafe->twitter,
            'description' => $cafe->description,

        ]);
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
        $cafe->update([
            'logo_path' => $imagesData['logo_path'],
            'banner_path' => $imagesData['banner_path'],
            'address' => $this->data['address'],
            'instagram' => $this->data['instagram'],
            'telegram' => $this->data['telegram'],
            'twitter' => $this->data['twitter'],
            'description' => $this->data['description'],
        ]);
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

                        Forms\Components\TextInput::make('address')
                            ->label('آدرس کافه')
                            ->maxLength(191)
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('description')
                            ->label('معرفی کافه')
                            ->maxLength(250)
                            ->columnSpanFull(),


                        Forms\Components\Section::make('شبکه های اجتماعی')
                            ->collapsible()
                            ->columns(3)
                            ->label('شبکه های اجتماعی')
                            ->schema([
                                TextInput::make('instagram')
                                    ->label('اینستاگرام'),
                                TextInput::make('telegram')
                                    ->label('تلگرام'),
                                TextInput::make('twitter')
                                    ->label('توییتر X'),
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
