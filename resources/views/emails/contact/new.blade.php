@component('mail::message')
  # Novo contato de {{ $user->name }} ({{ $user->email }})

  ## {{ $contact->category->name }}

  ### {{ $contact->subject }}

  <p>
    {!! $contact->message !!}
  </p>
@endcomponent
