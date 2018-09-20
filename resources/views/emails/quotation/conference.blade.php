@component('mail::message')
@if ($context == 'power')
@component('mail::panel')
# Bom Dia {{ $user->name }}

Tudo bem?

Recebemos a sua solicitação de cotação de {{ $quotation->category->name }}.
Em até 5 dias uteis (prazo de retorno da agência) enviaremos os valores para a aprovação.
@endcomponent
@endif

@if ($context == 'zodiac')
@component('mail::panel')
# Novo orçamento de {{ $quotation->category->name }}
@endcomponent
@endif

Confira os dados abaixo:

@component('mail::table')
| Cliente |  |
| ------------- |-------------|
| Nome do Cliente | {{ $quotation->fields['client']['name'] }} |
| Gerente de contas | {{ $quotation->fields['client']['account_manager'] }} |
| Responsável | {{ $quotation->fields['client']['contact_name'] }} |
| Telefone do Responsável | {{ $quotation->fields['client']['contact_phone'] }} |
| Email do Responsável | {{ $quotation->fields['client']['contact_email'] }} |
| Centro de Custos | {{ $quotation->fields['client']['cost_center'] }} |
| SIG do Responsável | {{ $quotation->fields['client']['sig'] }} |
@endcomponent

@component('mail::table')
| Informações Gerais | |
| ------------- |-------------|
| Nome do Evento | {{ $quotation->fields['general_info']['event_name'] }} |
| Período | {{ $quotation->fields['general_info']['event_period'] }} |
| Participantes | {{ $quotation->fields['general_info']['quantity_pax'] }} |
| Staffs Zodiac | {{ $quotation->fields['general_info']['quantity_staff'] }} |
| Data do Briefing | {{ $quotation->fields['general_info']['date_briefing'] }} |
| Entrega da Proposta | {{ $quotation->fields['general_info']['date_proposal'] }} |
| Previsão de Retorno | {{ $quotation->fields['general_info']['date_feedback'] }} |
| Formato de entrega | {{ ($quotation->fields['general_info']['delivery_format'] == 'forecast' ? 'Previsão de Custos' : 'Apresentação PPT') }} |
@endcomponent

@component('mail::table')
| Evento Anterior | |
| ------------- |-------------|
| Local do Evento | {{ $quotation->fields['previous_event']['local'] }} |
| Período do Evento | {{ $quotation->fields['previous_event']['period'] }} |
| Observações | {{ $quotation->fields['previous_event']['observations'] }} |
@endcomponent

@component('mail::table')
| Sobre os participantes | |
| ------------- |-------------|
| Quantidade | {{ $quotation->fields['attendees']['quantity'] }} |
| Faixa Etária | {{ $quotation->fields['attendees']['age_range'] }} |
| Quantidade de Homens | {{ $quotation->fields['attendees']['quantity_men'] }} |
| Quantidade de Mulheres | {{ $quotation->fields['attendees']['quantity_women'] }} |
| Tipo de Público | {{ ($quotation->fields['attendees']['public_type'] ==
'contributors' ? 'Colaboradores' : 'Médicos') }} |
@endcomponent

@component('mail::table')
| Sobre o Evento | |
| ------------- |-------------|
| Objetivo | {{ $quotation->fields['event']['objective'] }} |
| Sugestões | {{ $quotation->fields['event']['suggestions'] }} |
| Single | {{ $quotation->fields['event']['accommodations']['single'] }} |
| Duplo Single | {{ $quotation->fields['event']['accommodations']['duble_single'] }} |
| Duplo Casal | {{ $quotation->fields['event']['accommodations']['double_couple'] }} |
| Triplo | {{ $quotation->fields['event']['accommodations']['triple'] }} |
| Passantes | {{ $quotation->fields['event']['accommodations']['passant'] }} |
| Staff | {{ $quotation->fields['event']['accommodations']['staff'] }} |
| Despesas pagas pela Zodiac | {{ $quotation->fields['event']['paid_expenses'] }} |
| Refeições | {{ $quotation->fields['event']['meals'] }} |
@endcomponent

@component('mail::table')
| Sobre a Sala | |
| ------------- |-------------|
| Quantidade | {{ $quotation->fields['room']['quantity'] }} |
| Formato | {{ $quotation->fields['room']['format'] }} |
| Período | {{ $quotation->fields['room']['period'] }} |
| Premação | {{ $quotation->fields['room']['awards'] }} |
| Observações | {{ $quotation->fields['room']['observations'] }} |
@endcomponent

@component('mail::table')
| Equipamento | |
| ------------- |-------------|
| Período | {{ $quotation->fields['equipament']['period'] }} |
| Tamanho das Telas | {{ $quotation->fields['equipament']['screen']['size'] }} |
| Quantidade de Telas | {{ $quotation->fields['equipament']['screen']['quantity'] }} |
| Projetor | {{ ($quotation->fields['equipament']['projector'] ? 'Sim' : 'Não') }} |
| Sonorização Completa | {{ ($quotation->fields['equipament']['sound'] ? 'Sim' : 'Não') }} |
| Técnico | {{ ($quotation->fields['equipament']['technician'] ? 'Sim' : 'Não') }} |
| Passador de Sliders | {{ ($quotation->fields['equipament']['slider_control'] ? 'Sim' : 'Não') }} |
| Microfone | {{ ($quotation->fields['equipament']['microphone'] ? 'Sim' : 'Não') }} |
| Microfone Sem Fio | {{ ($quotation->fields['equipament']['wireless_microphone'] ? 'Sim' : 'Não') }} |
| Palco | {{ ($quotation->fields['equipament']['stage'] ? 'Sim' : 'Não') }} |
| Tribuna | {{ ($quotation->fields['equipament']['tribune'] ? 'Sim' : 'Não') }} |
| Cenografia | {{ $quotation->fields['equipament']['scenography'] }} |
| Observações | {{ $quotation->fields['equipament']['observations'] }} |
@endcomponent

@component('mail::table')
| Deslocamento | |
| ------------- |-------------|
| Aéreo | {{ ($quotation->fields['transfer']['airfare'] ? 'Sim' : 'Não') }} |
| Chegada | {{ $quotation->fields['transfer']['start_time'] }} |
| Término do Evento | {{ $quotation->fields['transfer']['end_time'] }} |
| Transfer | {{ ($quotation->fields['transfer']['transfer'] ? 'Sim' : 'Não') }} |
@endcomponent

@component('mail::table')
| Atividades/Diversos | |
| ------------- |-------------|
| Atrações | {{ $quotation->fields['activities']['attractions'] }} |
| Decoração | {{ $quotation->fields['activities']['decorations'] }} |
| Mobiliário | {{ $quotation->fields['activities']['furniture'] }} |
| Tema | {{ $quotation->fields['activities']['theme'] }} |
| Palestrante | {{ $quotation->fields['activities']['speaker'] }} |
| Mestre de cerimônia | {{ $quotation->fields['activities']['host'] }} |
| Team Building | {{ $quotation->fields['activities']['team_building'] }} |
| Brindes | {{ $quotation->fields['activities']['gifts'] }} |
| Stand | {{ $quotation->fields['activities']['stand'] }} |
| Diversos | {{ $quotation->fields['activities']['miscellaneous'] }} |
@endcomponent

@component('mail::table')
| Investimento | |
| ------------- |-------------|
| Budget | {{ $quotation->fields['budget'] }} |
| Outras Informações | {{ $quotation->fields['budget'] }} |
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
