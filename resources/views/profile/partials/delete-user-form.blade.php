<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/profile/delete-user-form.css', 'resources/js/app.js'])
</head>

<section class="delete-section">
    <header>
        <h2 class="delete-title">
            {{ __('edit.title_delete_account_edit') }}
        </h2>

        <p class="delete-desc">
            {{ __('edit.description_delete_account_edit') }}
        </p>
    </header>

    <x-danger-button
        class="btn-danger"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >
        {{ __('edit.delete_account_edit') }}
    </x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="modal-form-content">
            @csrf
            @method('delete')

            <h2 class="delete-title">
                {{ __('edit.confirm_delete_account_edit') }}
            </h2>

            <p class="delete-desc">
                {{ __('edit.delete_account_description_confirm_edit') }}
            </p>

            <div class="input-password-wrapper">
                <x-input-label for="password" value="{{ __('edit.password_text_edit') }}" class="sr-only" />
                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="input-password-field"
                    placeholder="{{ __('edit.password_text_edit') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="error-msg" />
            </div>

            <div class="actions-row">
                <x-secondary-button class="btn-secondary" x-on:click="$dispatch('close')">
                    {{ __('edit.bouton_cancel_delete_account_edit') }}
                </x-secondary-button>

                <x-danger-button class="btn-danger">
                    {{ __('edit.bouton_confirm_delete_account_edit') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>