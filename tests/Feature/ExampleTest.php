<?php


use App\Models\User;

it('test_the_application_returns_a_successful_response', function () {
    $response = $this->get('/');

    $response->assertStatus(302);
    $response->assertRedirect(route('filament.cafeRestaurant.auth.login'));
});

it('can login', function () {
    $mobile = '64357693390';
    $password = 'password';
    $userSuperadmin = User::create([
        'name' => 'superadmin',
        'mobile_number' => $mobile,
        'password' => Hash::make($password),

    ]);

    Livewire::test(\App\Filament\CafeRestaurant\Pages\Authentication\Login::class)
        ->fillForm([
            'mobile_number' => $mobile,
            'password' => $password,
        ])
        ->call('authenticate')
        ->assertHasNoFormErrors();

    $this->assertTrue(auth()->check());
});

