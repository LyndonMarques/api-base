@component('mail::message')
  # Novo Orçamento de {{ $quotation->category->name }}

  Confira os dados abaixo:

  @component('mail::table')
    | Evento |  |  |  |
    | ------------- |-------------|-------------|-------------|
    | Evento/Congresso | {{ $quotation->fields['event']['name'] }} | GD | {{ $quotation->fields['event']['gd'] }} |
    | Tipo de Viagem | {{ $quotation->fields['event']['type'] }} | Produto | {{ $quotation->fields['event']['product'] }} |
    | Data de ida | {{ $quotation->fields['event']['departure_date'] }} | Segmentação | {{ $quotation->fields['event']['guest_segmentation'] }} |
    | Data de Retorno | {{ $quotation->fields['event']['return_date'] }} | | |
    | Solicitante | {{ $quotation->fields['event']['requester'] }} | | |
  @endcomponent

  @component('mail::table')
    | Convidado | |
    | ------------- |-------------|
    @if ($quotation->fields['guest']['sponsorship_type'] == 'onco')
      | Nome do Médico | {{ $quotation->fields['guest']['name'] }} | Instituição que o médico trabalha | {{ $quotation->fields['guest']['institution'] }} |
    @else
      | Nome do Médico | {{ $quotation->fields['guest']['name'] }} | Sociedade e nro. do Sócio | {{ $quotation->fields['guest']['partner_number'] }} |
    @endif
    | CRM | {{ $quotation->fields['guest']['crm'] }} | Especialidade do Médico | {{ $quotation->fields['guest']['expertise'] }} |
    | CPF | {{ $quotation->fields['guest']['cpf'] }} | Telefone Celular | {{ $quotation->fields['guest']['cellphone'] }} |
    | RG | {{ $quotation->fields['guest']['rg'] }} | Telefone Comercial | {{ $quotation->fields['guest']['phone'] }} |
    | Data de Nascimento | {{ $quotation->fields['guest']['birthdate'] }} | E-mail | {{ $quotation->fields['guest']['email'] }} |
    | Nome para crachá | {{ $quotation->fields['guest']['nametag'] }} | Endereço Completo | {{ $quotation->fields['guest']['address'] }} |
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
