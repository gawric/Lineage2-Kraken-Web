<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Service\Utils\FunctionAuthUser;
use Config;
use Illuminate\Support\Facades\Redirect;
use App\Service\Utils\FunctionSupport;
use App\Providers\Events\WebStatistics;
use App\Models\Statistics\User\Accounts_ExpansionStatistics;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate()
    {
        $this->ensureIsNotRateLimited();

        if (! Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {

            RateLimiter::hit($this->throttleKey());

            //$this->addStatistics($email = $this->only('email')['email']);

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }
       // info("LoginRequest1  2");

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited()
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    private function getRoleNameBlock(){
        return Config::get('lineage2.server.role_name_blocked');
    }

    /**
     * Get the rate limiting throttle key for the request.
     *
     * @return string
     */
    public function throttleKey()
    {
        return Str::transliterate(Str::lower($this->input('email')).'|'.$this->ip());
    }

    private function addStatistics($email){
        
        $use_unknown_user = Config::get('lineage2.statistics.use_unknown_user');
        $status_auth__fail_user = Config::get('lineage2.statistics.status_auth_unknown_user');
        event(new WebStatistics(FunctionSupport::createModelUserStatistic(Auth::getRequest()->getClientIp(true) , Auth::getRequest()->url() , $status_auth__fail_user . ' email: ' .$email , $use_unknown_user)));
        
    }
}
