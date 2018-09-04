@component('mail::message')
  # Novo contato de {{ $user->name }}

  ## {{ $contact->category->name }}

  ### {{ $contact->subject }}

  <p>
    {!! $contact->message !!}
  </p>
@endcomponent
