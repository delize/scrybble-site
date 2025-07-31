<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Services\CloudflareTurnstileService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return User|JsonResponse
     */
    public function create(array $input): User|JsonResponse
    {
        $token = request()->input('cf-turnstile-response');
        $ip = request()->ip();

        $result = app(CloudflareTurnstileService::class)->verifyTurnstileToken($token, $ip);

        if (!$result['success']) {
            return response()->json([
                'errors' => [
                    'turnstile' => 'Invalid or expired Turnstile token, try again.'
                ]
            ], 400);
        }

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
