<?php

namespace App\Filament\CafeRestaurant\Pages\Authentication;

use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Facades\Filament;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Http\Responses\Auth\Contracts\LoginResponse;
use Filament\Notifications\Notification;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Pages\SimplePage;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Validation\ValidationException;

//


class Login extends SimplePage
{

    use InteractsWithFormActions;
    use WithRateLimiting;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.cafe-restaurant.pages.authentication.login';
    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    public function mount(): void
    {
//        if (Filament::auth()->check()) {
//            redirect()->intended(Filament::getUrl());
//            redirect()->intended(route('clinic.welcome'));
//        }

        $this->form->fill();
    }

    public function authenticate()
    {
        try {
            $this->rateLimit(5);
        } catch (TooManyRequestsException $exception) {
            Notification::make()
                ->title(__('filament-panels::pages/auth/login.notifications.throttled.title', [
                    'seconds' => $exception->secondsUntilAvailable,
                    'minutes' => ceil($exception->secondsUntilAvailable / 60),
                ]))
                ->body(array_key_exists('body',
                    __('filament-panels::pages/auth/login.notifications.throttled') ?: []) ?
                    __('filament-panels::pages/auth/login.notifications.throttled.body', [
                        'seconds' => $exception->secondsUntilAvailable,
                        'minutes' => ceil($exception->secondsUntilAvailable / 60),
                    ]) : null)
                ->danger()
                ->send();

            return null;
        }

        $data = $this->form->getState();

        if (!Filament::auth()->attempt($this->getCredentialsFromFormData($data), $data['remember'] ?? false)) {
            throw ValidationException::withMessages([
                'data.username' => __('filament-panels::pages/auth/login.messages.failed'),
            ]);
        }

        session()->regenerate();
//todo
//        return redirect()->route('clinic.welcome');
        return app(LoginResponse::class);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('mobile_number')
//                    ->label(__('filament-panels::pages/auth/login.form.email.label'))
                    ->label(__('نام کاربری'))
                    ->hint('شماره موبایل')
                    ->helperText('شماره موبایل باید با 09 شروع شود')
                    ->string()
//                    ->numeric()
                    ->maxLength(11)
                    ->minLength(11)
                    ->length(11)
                    ->required()
                    ->autocomplete()
                    ->autofocus(),
                TextInput::make('password')
                    ->label(__('filament-panels::pages/auth/login.form.password.label'))
//                    ->hint(filament()->hasPasswordReset() ? new HtmlString(Blade::render('<x-filament::link :href="filament()->getRequestPasswordResetUrl()"> {{ __(\'filament-panels::pages/auth/login.actions.request_password_reset.label\') }}</x-filament::link>')) : null)
                    ->password()
                    ->required(),
                Checkbox::make('remember')
                    ->label(__('filament-panels::pages/auth/login.form.remember.label'))
                    ->default(true),
            ])
            ->statePath('data');
    }


    public function registerAction(): Action
    {
        return Action::make('register')
            ->link()
            ->label(__('filament-panels::pages/auth/login.actions.register.label'))
            ->url(filament()->getRegistrationUrl());
    }

    public function getTitle(): string|Htmlable
    {
        return __('filament-panels::pages/auth/login.title');
    }

    public function getHeading(): string|Htmlable
    {
        return __('filament-panels::pages/auth/login.heading');
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
            ->label(__('filament-panels::pages/auth/login.form.actions.authenticate.label'))
            ->submit('authenticate');
    }

    protected function hasFullWidthFormActions(): bool
    {
        return true;
    }

    /**
     * @param array<string, mixed> $data
     * @return array<string, mixed>
     */
    protected function getCredentialsFromFormData(array $data): array
    {
        return [
            'mobile_number' => $data['mobile_number'],
            'password' => $data['password'],
        ];
    }


}
