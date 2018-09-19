@component('mail::message')
@if ($context == 'power')
@component('mail::panel')
# Bom Dia {{ $user->name }}

Tudo bem?

Recebemos a sua solicitação de cotação de {{ $quotation->category->name }}.

Até o dia 10/09 (prazo de 5 dias uteis de retorno da agência) enviaremos os valores para a aprovação.
@endcomponent
@endif

@if ($context == 'zodiac')
@component('mail::panel')
# Novo orçamento de {{ $quotation->category->name }}
@endcomponent
@endif

Confira os dados abaixo:

@component('mail::table')
| | Data de Solicitação | {{ $request_date }} | |
| | | | |
| Evento/Congresso | {{ $quotation->fields['event']['name'] }} | GD | {{ $quotation->fields['event']['gd'] }} |
| Tipo de Viagem | {{ $quotation->fields['event']['type'] }} | Produto | {{ $quotation->fields['event']['product'] }} |
| Data de ida | {{ $quotation->fields['event']['departure_date'] }} | Segmentação | {{ $quotation->fields['event']['guest_segmentation'] }} |
| Data de Retorno | {{ $quotation->fields['event']['return_date'] }} | | |
| Solicitante | {{ $quotation->fields['event']['requester'] }} | | |
| | | | |
| Dados do Convidado | | | |
| | | | |
@if ($quotation->fields['sponsorship_type'] == 'onco')
| Nome do Médico | {{ $quotation->fields['guest']['name'] }} | Instituição que o médico trabalha | {{ $quotation->fields['guest']['institution'] }} |
@else
| Nome do Médico | {{ $quotation->fields['guest']['name'] }} | Sociedade e nro. do Sócio | {{ $quotation->fields['guest']['partner_number'] }} |
@endif
| CRM | {{ $quotation->fields['guest']['crm'] }} | Especialidade do Médico | {{ $quotation->fields['guest']['expertise'] }} |
| CPF | {{ $quotation->fields['guest']['cpf'] }} | Telefone Celular | {{ $quotation->fields['guest']['cellphone'] }} |
| RG | {{ $quotation->fields['guest']['rg'] }} | Telefone Comercial | {{ $quotation->fields['guest']['phone'] }} |
| Data de Nascimento | {{ $quotation->fields['guest']['birthdate'] }} | E-mail | {{ $quotation->fields['guest']['email'] }} |
| Nome para crachá | {{ $quotation->fields['guest']['nametag'] }} | Endereço Completo | {{ $quotation->fields['guest']['address'].' '.$quotation->fields['guest']['city'].' '.$quotation->fields['guest']['state'].' '.$quotation->fields['guest']['zipcode'] }} |
@endcomponent

@component('mail::table')
| Itens orçados | |
| ------------- |-------------|
| Inscrição | {{ (in_array("registration", $quotation->fields['quoted_items']) ? 'Sim' : 'Não') }} |
| Hospedagem | {{ (in_array("accommodation", $quotation->fields['quoted_items']) ? 'Sim' : 'Não') }} |
| Aéreo | {{ (in_array("airfare", $quotation->fields['quoted_items']) ? 'Sim' : 'Não') }} |
@endcomponent

@if ($context == 'power')
Orçamento gerado online por <b>{{ $user->name }}</b>, envie o orçamento em anexo para o email <{{ $user->email }}>, ou utilize o botão abaixo.

@component('mail::button', ['url' => "mailto:{$user->email}"])
Responder
@endcomponent
@endif

@if ($context == 'zodiac')
Qualquer dúvida estamos à disposição.

Att,
@endif
@endcomponent
