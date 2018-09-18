@component('mail::message')
  # Novo contato de {{ $user->name }} ({{ $user->email }})

  ## {{ $contact->subject }}

  <p>
    {!! $contact->message !!}
  </p>
@endcomponent
