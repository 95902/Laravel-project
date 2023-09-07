<?php

declare(strict_types=1);
use App\Models\User;
use Illuminate\Routing\Route;
use Nette\Utils\Strings;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\assertOk;


// Inclure les routes de Laravel Backpack


// Définition de vos autres routes Laravel


// Autres routes...




// it('has a /admin/dashboard page', function () {
//     $user = User::factory()->create(); // Créez un utilisateur pour les tests
    
//     $this->actingAs($user)
//         ->get('/admin/dashboard')
//         ->assertOk();
// });

// it('can store a studen-card', function () {
//     actingAs( User::factory()->create())
//     ->post(
//         uri:route('admin/studen-card'),
//         data: [
//             'user_id' => User::factory()->create()->id,
//             'school' => fake()->randomElement(\App\Enums\SchoolEnum::cases())->value,
//             'description' => Strings::random(16),
//             'is_internal' => fake()->boolean(),
            
//             'date_of_birth' => $dateofbirth = fake()->date(),
//         ]
//         )->assertOk();
//     assertDatabaseCount('student_cards', 1);


// })->only();