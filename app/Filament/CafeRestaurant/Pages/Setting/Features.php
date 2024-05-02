<?php
// todo
namespace App\Filament\CafeRestaurant\Pages\Setting;

use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components;
use Filament\Forms\Form;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\HtmlString;

class Features extends Page
{

    use InteractsWithFormActions,
        WithRateLimiting;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-vertical';
    protected static string $view = 'filament.cafe-restaurant.pages.setting.features';
    protected static ?string $navigationGroup = 'تنظیمات';
    protected static ?string $navigationLabel = 'مدیریت امکانات';
    protected ?string $heading = 'مدیریت امکانات';
    protected static ?int $navigationSort = 3;


    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                Grid::make(2)
                    ->schema([
                        Components\Section::make('منو دو زبانه')
                            ->columns(3)
                            ->schema([
                                Components\Placeholder::make('created')
                                    ->label('امکان ثبت اطلاعات به فارسی و انگلیسی')
                                    ->content('پس از فعال سازی در فرم ها یک منو کشویی اضافه میشود که میتوانید زیان مورد نظر را انتخاب کنید و اطلاعات را وارد کنید.')
                                    ->columnSpan(2),
                                Components\Toggle::make('enabled_multi_lang')
                                    ->label('وضعیت'),
                            ]),

                        Components\Section::make('وبسایت اختصاصی')
                            ->columns(3)
                            ->schema([
                                Components\Placeholder::make('created')
                                    ->label('با داشتن وبسایت اختصاصی سرعت بهتری را تجربه خواهید کرد و دسترسسی به خدمات بیشتری خواهید داشت')
//                                    ->content('پس از فعال سازی در فرم ها یک منو کشویی اضافه میشود که میتوانید زیان مورد نظر را انتخاب کنید و اطلاعات را وارد کنید.')
                                    ->columnSpan(2),
                                Components\Toggle::make('asd')
                                    ->disabled()
                                    ->label('وضعیت')
                                    ->hint((new HtmlString(' <a class="underline" href="tel:09920560841"> 09920560841 </a>')))
                                    ->helperText('برای تغییر وضعیت با پشتیبانی تماس بگیرید'),
                            ]),
                        Components\Section::make('باشگاه مشتریان')
                            ->columns(3)
                            ->schema([
                                Components\Placeholder::make('created')
                                    ->label('با فعال سازی باشگاه مشتریان، مشتریان میتواند به صورت انلاین در ان ثبت نام کنند.')
//                                    ->content('پس از فعال سازی در فرم ها یک منو کشویی اضافه میشود که میتوانید زیان مورد نظر را انتخاب کنید و اطلاعات را وارد کنید.')
                                    ->columnSpan(2),
                                Components\Toggle::make('asd')
                                    ->label('وضعیت'),
                            ]),


                    ]),

            ])
            ->statePath('data');
    }

    public function save(): void
    {
        dd('fasd');
    }

    public function getTitle(): string|Htmlable
    {
        return 'مدیریت امکانات';
    }

    /**
     * @return array<Action | ActionGroup>
     */
    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('ذخیره تغییرات')
                ->submit('save')
        ];
    }

    protected function hasFullWidthFormActions(): bool
    {
        return false;
    }

}
