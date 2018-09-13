@component('mail::message')
  # Novo Orçamento de {{ $quotation->category->name }}

  Confira os dados abaixo:

  @component('mail::table')
  | Evento |  |
  | ------------- |-------------|
  | Evento/Congresso | {{ $quotation->fields['event']['name'] }} |
  | Tipo de Viagem | {{ $quotation->fields['event']['type'] }} |
  | Data de ida | {{ $quotation->fields['event']['departure_date'] }} |
  | Data de Retorno | {{ $quotation->fields['event']['return_date'] }} |
  | Solicitante | {{ $quotation->fields['event']['requester'] }} |
  | GD | {{ $quotation->fields['event']['gd'] }} |
  | Produto | {{ $quotation->fields['event']['product'] }} |
  | Segmentação | {{ $quotation->fields['event']['guest_segmentation'] }} |
  @endcomponent

  @component('mail::table')
  | Convidado | |
  | ------------- |-------------|
  | Nome do Convidado | {{ $quotation->fields['guest']['name'] }} |
  | CRM | {{ $quotation->fields['guest']['crm'] }} |
  | CPF | {{ $quotation->fields['guest']['cpf'] }} |
  | RG | {{ $quotation->fields['guest']['rg'] }} |
  | Data de Nascimento | {{ $quotation->fields['guest']['birthdate'] }} |
  | Crachá | {{ $quotation->fields['guest']['nametag'] }} |
  | Sociedade | {{ $quotation->fields['guest']['partner_number'] }} |
  | Telefone Celular | {{ $quotation->fields['guest']['cellphone'] }} |
  | Telefone Comercial | {{ $quotation->fields['guest']['phone'] }} |
  | E-mail | {{ $quotation->fields['guest']['email'] }} |
  | Endereço Completo | {{ $quotation->fields['guest']['address'] }} |
  @endcomponent

  @component('mail::table')
  | Itens orçados | |
  | ------------- |-------------|
  | Inscrição | {{ ($quotation->fields['quoted_items']['registration'] ? 'Sim' : 'Não') }} |
  | Hospedagem | {{ ($quotation->fields['quoted_items']['accommodation'] ? 'Sim' : 'Não') }} |
  | Aéreo | {{ ($quotation->fields['quoted_items']['airfare'] ? 'Sim' : 'Não') }} |
  @endcomponent

  Orçamento gerado online por <b>{{ $user->name }}</b>, envie o orçamento em anexo para o email <{{ $user->email }}>, ou utilize o botão abaixo.

  @component('mail::button', ['url' => "mailto:{$user->email}"])
    Responder
  @endcomponent
@endcomponent
