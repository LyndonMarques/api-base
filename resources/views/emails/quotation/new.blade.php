@component('mail::message')
  # Novo Orçamento de {{ $quotation->category->name }}

  Confira os dados abaixo:

  @component('mail::table')
  | Evento |  |
  | ------------- |-------------|
  | Evento/Congresso | {{ $quotation->event['name'] }} |
  | Tipo de Viagem | {{ $quotation->event['type'] }} |
  | Data de ida | {{ $quotation->event['departure_date'] }} |
  | Data de Retorno | {{ $quotation->event['return_date'] }} |
  | Solicitante | {{ $quotation->event['requester'] }} |
  | GD | {{ $quotation->event['gd'] }} |
  | Produto | {{ $quotation->event['product'] }} |
  | Segmentação | {{ $quotation->event['guest_segmentation'] }} |
  @endcomponent

  @component('mail::table')
  | Convidado | |
  | ------------- |-------------|
  | Nome do Convidado | {{ $quotation->guest['name'] }} |
  | CRM | {{ $quotation->guest['crm'] }} |
  | CPF | {{ $quotation->guest['cpf'] }} |
  | RG | {{ $quotation->guest['rg'] }} |
  | Data de Nascimento | {{ $quotation->guest['birthdate'] }} |
  | Crachá | {{ $quotation->guest['nametag'] }} |
  | Sociedade | {{ $quotation->guest['partner_number'] }} |
  | Telefone Celular | {{ $quotation->guest['cellphone'] }} |
  | Telefone Comercial | {{ $quotation->guest['phone'] }} |
  | E-mail | {{ $quotation->guest['email'] }} |
  | Endereço Completo | {{ $quotation->guest['address'] }} |
  @endcomponent

  @component('mail::table')
  | Itens orçados | |
  | ------------- |-------------|
  | Inscrição | {{ ($quotation->quoted_items['registration'] ? 'Sim' : 'Não') }} |
  | Hospedagem | {{ ($quotation->quoted_items['accommodation'] ? 'Sim' : 'Não') }} |
  | Aéreo | {{ ($quotation->quoted_items['airfare'] ? 'Sim' : 'Não') }} |
  @endcomponent

  Orçamento gerado online por <b>{{ $user->name }}</b>, envie o orçamento em anexo para o email <{{ $user->email }}>, ou utilize o botão abaixo.

  @component('mail::button', ['url' => "mailto:{$user->email}"])
    Responder
  @endcomponent
@endcomponent
