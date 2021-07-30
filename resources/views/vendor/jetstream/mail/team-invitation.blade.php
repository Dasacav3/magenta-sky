@component('mail::message')
{{ __('¡Has sido invitado a unirte al equipo :team!', ['team' => $invitation->team->name]) }}

@if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::registration()))
{{ __('Si no tiene una cuenta, puede crear una haciendo clic en el botón de abajo. Después de crear una cuenta, puede hacer clic en el botón de aceptación de la invitación en este correo electrónico para aceptar la invitación del equipo.:') }}

@component('mail::button', ['url' => route('register')])
{{ __('Crear cuenta') }}
@endcomponent

{{ __('Si ya tiene una cuenta, puede aceptar esta invitación haciendo clic en el botón de abajo:') }}

@else
{{ __('Puede aceptar esta invitación haciendo clic en el botón de abajo:') }}
@endif


@component('mail::button', ['url' => $acceptUrl])
{{ __('Aceptar la invitacion') }}
@endcomponent

{{ __('Si no esperaba recibir una invitación para este equipo, puede descartar este correo electrónico.') }}
@endcomponent
