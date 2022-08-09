@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

    <h1>Profile</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="Profile-tab" data-bs-toggle="tab" data-bs-target="#Profile-tab-pane"
                type="button" role="tab" aria-controls="Profile-tab-pane" aria-selected="true">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings-tab-pane"
                type="button" role="tab" aria-controls="settings-tab-pane" aria-selected="false">Settings</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="notifications-tab" data-bs-toggle="tab" data-bs-target="#notifications-tab-pane"
                type="button" role="tab" aria-controls="notifications-tab-pane"
                aria-selected="false">Notifications</button>
        </li>
        <!-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
                  </li> -->
    </ul>

    <div class="tab-content" id="myTabContent">

        <!-- Profile-tab -->
        <div class="tab-pane fade show active" id="Profile-tab-pane" role="tabpanel" aria-labelledby="Profile-tab"
            tabindex="0">

            <div>
                <img src="{{ asset('/uploads/user/avatar/' . $data['user']->profile->avatar) }}" id="avatar"
                    class="img-thumbnail" alt="User Avatar">
            </div>

            <div>
                <label for="fullName" class="form-label">Full Name:</label>
                <label for="fullName" class="form-label">
                    {{ $data['user']->profile->full_name ?? '---' }}
                </label>
            </div>

            <div>
                <label for="bio" class="form-label">bio:</label>
                <label for="bio" class="form-label">
                    {{ $data['user']->profile->bio ?? '---' }}
                </label>
            </div>

            <div>
                <label for="quotes" class="form-label">quotes:</label>
                <label for="quotes" class="form-label">
                    {{ $data['user']->profile->quotes ?? '---' }}
                </label>
            </div>

            <div>
                <label for="birthday" class="form-label">birthday:</label>
                <label for="birthday" class="form-label">
                    {{ $data['user']->profile->birthday ?? '---' }}
                </label>
            </div>

            <div>
                <label for="country_id" class="form-label">country:</label>
                <label for="country_id" class="form-label">
                    {{ $data['user']->profile->country ? $data['user']->profile->country->name : '---' }}
                </label>
            </div>

            <div>
                <label for="language" class="form-label">Language:</label>
                <label for="language" class="form-label">
                    {{ $data['user']->profile->language ? $data['user']->profile->language->name : '---' }}
                </label>
            </div>

            <div>
                <label for="gender" class="form-label">gender:</label>
                <label for="gender" class="form-label">
                    {{ $data['user']->profile->gender ? $data['user']->profile->gender->name : '---' }}
                </label>
            </div>

            <div>
                <label for="facebook" class="form-label">facebook:</label>
                <label for="facebook" class="form-label">
                    {{ $data['user']->profile->facebook ?? '---' }}
                </label>
            </div>

            <div>
                <label for="linkedIn" class="form-label">linkedIn:</label>
                <label for="linkedIn" class="form-label">
                    {{ $data['user']->profile->linkedin ?? '---' }}
                </label>
            </div>

            <div>
                <label for="instagram" class="form-label">instagram:</label>
                <label for="instagram" class="form-label">
                    {{ $data['user']->profile->instagram ?? '---' }}
                </label>
            </div>

            <div>
                <label for="youtube" class="form-label">youtube:</label>
                <label for="youtube" class="form-label">
                    {{ $data['user']->profile->youtube ?? '---' }}
                </label>
            </div>

            <div>
                <label for="website" class="form-label">website:</label>
                <label for="website" class="form-label">
                    {{ $data['user']->profile->website ?? '---' }}
                </label>
            </div>

            <a class="btn btn-outline-dark" href="{{ route('user.profile.edit') }}" role="button">Edit</a>

        </div>

        <!-- settings-tab -->
        <div class="tab-pane fade" id="settings-tab-pane" role="tabpanel" aria-labelledby="settings-tab"
            tabindex="0">
            <h2>{{ __('Update Password') }}</h2>

            <p>{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>

            <hr>

            <h2>{{ __('Change Password') }}</h2>

            <form action="{{ route('password.confirm') }}" method="post">

                @csrf

                <div class="form-floating mb-3">
                    <input type="password" name="current_password" id="current_password" class="form-control"
                        placeholder="Current password" required autofocus autocomplete="current-password">
                    <label for="password">current password</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                        required autofocus autocomplete="new-password">
                    <label for="password">Password</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                        placeholder="Password Confirmation" required autofocus>
                    <label for="password_confirmation">Password Confirmation</label>
                </div>

                <button type="submit" value="Submit" class="btn btn-dark">{{ __('Confirm') }}</button>

            </form>

            <hr>

            <h2>{{ __('Two Factor Authentication') }}</h2>

            <p>{{ __('Add additional security to your account using two factor authentication.') }}</p>

            <h3>
                @if ($this->enabled)
                    @if ($showingConfirmation)
                        {{ __('Finish enabling two factor authentication.') }}
                    @else
                        {{ __('You have enabled two factor authentication.') }}
                    @endif
                @else
                    {{ __('You have not enabled two factor authentication.') }}
                @endif
            </h3>

            <p>
                {{ __('When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.') }}
            </p>

            @if ($this->enabled)
                @if ($showingQrCode)

                    <div class="mt-4 max-w-xl text-sm text-gray-600">
                        <p class="font-semibold">
                            @if ($showingConfirmation)
                                {{ __('To finish enabling two factor authentication, scan the following QR code using your phone\'s authenticator application or enter the setup key and provide the generated OTP code.') }}
                            @else
                                {{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application or enter the setup key.') }}
                            @endif
                        </p>
                    </div>

                    <div class="mt-4">
                        {!! $this->user->twoFactorQrCodeSvg() !!}
                    </div>

                    <div class="mt-4 max-w-xl text-sm text-gray-600">
                        <p class="font-semibold">
                            {{ __('Setup Key') }}: {{ decrypt($this->user->two_factor_secret) }}
                        </p>
                    </div>

                    @if ($showingConfirmation)
                        <div class="mt-4">
                            <label for="code" value="{{ __('Code') }}"> {{ __('Code') }} </label>

                            <input id="code" type="text" name="code" class="block mt-1 w-1/2"
                                inputmode="numeric" autofocus autocomplete="one-time-code">

                            @error('Code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                    @endif

                    @if ($showingRecoveryCodes)
                        <div class="mt-4 max-w-xl text-sm text-gray-600">
                            <p class="font-semibold">
                                {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
                            </p>
                        </div>

                        <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                            @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                                <div>{{ $code }}</div>
                            @endforeach
                        </div>
                    @endif

                @endif

            @endif

            @if (!$this->enabled)

                <button type="button">
                    {{ __('Enable') }}
                </button>
            @else
                @if ($showingRecoveryCodes)
                    <button type="button" class="mr-3">
                        {{ __('Regenerate Recovery Codes') }}
                    </button>
                @elseif ($showingConfirmation)
                    <button type="button">
                        {{ __('Confirm') }}
                        <button>
                        @else
                            <button class="mr-3">
                                {{ __('Show Recovery Codes') }}
                                <button>
                @endif

                @if ($showingConfirmation)
                    <button wire:loading.attr="disabled">
                        {{ __('Cancel') }}
                        <button>
                        @else
                            <button wire:loading.attr="disabled">
                                {{ __('Disable') }}
                            </button>
                @endif

            @endif

            <hr>

            <h2>{{ __('Browser Sessions') }}</h2>

            <p>{{ __('Manage and log out your active sessions on other browsers and devices.') }}</p>

            <div class="max-w-xl text-sm text-gray-600">
                {{ __('If necessary, you may log out of all of your other browser sessions across all of your devices. Some
                                                of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account
                                                has been compromised, you should also update your password.') }}
            </div>

            @if (count($this->sessions) > 0)
                <div class="mt-5 space-y-6">
                    <!-- Other Browser Sessions -->
                    @foreach ($this->sessions as $session)
                        <div class="flex items-center">
                            <div>
                                @if ($session->agent->isDesktop())
                                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                        <path
                                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-8 h-8 text-gray-500">
                                        <path d="M0 0h24v24H0z" stroke="none"></path>
                                        <rect x="7" y="4" width="10" height="16"
                                            rx="1"></rect>
                                        <path d="M11 5h2M12 17v.01"></path>
                                    </svg>
                                @endif
                            </div>

                            <div class="ml-3">
                                <div class="text-sm text-gray-600">
                                    {{ $session->agent->platform() ? $session->agent->platform() : 'Unknown' }} -
                                    {{ $session->agent->browser() ? $session->agent->browser() : 'Unknown' }}
                                </div>

                                <div>
                                    <div class="text-xs text-gray-500">
                                        {{ $session->ip_address }},

                                        @if ($session->is_current_device)
                                            <span class="text-green-500 font-semibold">{{ __('This device') }}</span>
                                        @else
                                            {{ __('Last active') }} {{ $session->last_active }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="flex items-center mt-5">
                <button>
                    {{ __('Log Out Other Browser Sessions') }}
                </button>

                @error('Code')
                    <span class="text-danger">{{ __('Done.') }}</span>
                @enderror
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Log Out Other Browser Sessions') }}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{ __('Please enter your password to confirm you would like to log out of your other browser sessions
                                                             across all of your devices.') }}
                            <div class="form-floating mb-3">
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Password" required autocomplete="current-password">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                            <button type="button"
                                class="btn btn-primary">{{ __('Log Out Other Browser Sessions') }}</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <h2>{{ __('Delete Account') }}</h2>

            <h3>{{ __('Permanently delete your account.') }}</h3>

            <p>
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before
                            deleting your account, please download any data or information that you wish to retain.') }}
            </p>


            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                {{ __('Delete Account') }}
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ __('Delete Account') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources
                                            and data will be permanently deleted. Please enter your password to confirm you would like to
                                            permanently delete your account.') }}

                            <div class="form-floating mb-3">
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Password" required autocomplete="current-password">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                            <button type="button" class="btn btn-primary">{{ __('Delete Account') }}</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

         <!-- settings-tab -->
        <div class="tab-pane fade" id="notifications-tab-pane" role="tabpanel" aria-labelledby="notifications-tab" tabindex="0">
        

            <div class="form-check form-switch">
                 <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">E-Mail Notifications</label>
            </div>

             <div class="form-check form-switch">
                 <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">News Notifications</label>
            </div>

             <div class="form-check form-switch">
                 <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">News Notifications</label>
            </div>

        </div>
    </div>
@endsection
