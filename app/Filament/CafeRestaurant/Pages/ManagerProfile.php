<?php

namespace App\Filament\CafeRestaurant\Pages;

use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Validation\ValidationException;

//


class ManagerProfile extends Page
{
    use InteractsWithFormActions,
        WithRateLimiting;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    protected static string $view = 'filament.cafe-restaurant.pages.manager-profile';
    protected static ?string $navigationLabel = 'پروفایل  من';
    protected ?string $heading = 'پروفایل من';


    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    public function mount(): void
    {

        $user = auth()->user();
        $this->form->fill([
            'name' => $user->name,
            'family' => $user->family,
            'mobile_number' => $user->mobile_number,
            'password' => null,

        ]);
    }

    /**
     * @throws ValidationException
     */
    public function authenticate(): void
    {
        $user = auth()->user();
        $pass = $this->data['password'];
        if (is_string($pass) && strlen($pass) > 7) {
            $user->password = $pass;
            $user->save();
            auth()->logout();
            session()->regenerate();
            $this->redirect('/login');
            return;
        }
        $this->redirect('/manager-profile');
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
                        Forms\Components\TextInput::make('family')
                            ->label('نام خانوادگی')
                            ->disabled(),
                        Forms\Components\TextInput::make('mobile_number')
                            ->label('شماره موبایل')
                            ->disabled(),
                        Forms\Components\TextInput::make('password')
                            ->label('رمزعبور')
                            ->password()
                            ->helperText('درصورتی که میخواید رمز خود را تغییر دهید رمز جدید را در این فیلد وارد کنید')
                            ->minLength(8),
//                            ->confirmed(),
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
