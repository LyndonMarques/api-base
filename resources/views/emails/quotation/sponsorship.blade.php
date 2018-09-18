@component('mail::message')
  @if ($context == 'power')
    @component('mail::panel')
      # Bom Dia {{ $user->name }}
      <p>
        Tudo bem?<br/>
        Recebemos a sua solicitação de cotação de {{ $quotation->category->name }}.<br/>
        Até o dia 10/09 (prazo de 5 dias uteis de retorno da agência) enviaremos os valores para a aprovação.<br/>
        Confira os dados abaixo:
      </p>
    @endcomponent
  @endif

  @if ($context == 'zodiac')
    @component('mail::panel')
      # Novo orçamento de {{ $quotation->category->name }}
      <p>
        Confira os dados abaixo:
      </p>
    @endcomponent
  @endif

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
    | Nome para crachá | {{ $quotation->fields['guest']['nametag'] }} | Endereço Completo | {{ $quotation->fields['guest']['address'] }} |
  @endcomponent

  @component('mail::table')
    | Itens orçados | |
    | ------------- |-------------|
    | Inscrição | {{ ($quotation->fields['quoted_items']['registration'] ? 'Sim' : 'Não') }} |
    | Hospedagem | {{ ($quotation->fields['quoted_items']['accommodation'] ? 'Sim' : 'Não') }} |
    | Aéreo | {{ ($quotation->fields['quoted_items']['airfare'] ? 'Sim' : 'Não') }} |
  @endcomponent

  @if ($context == 'power')
    <p>
      Orçamento gerado online por <b>{{ $user->name }}</b>, envie o orçamento em anexo para o email <{{ $user->email }}>, ou utilize o botão abaixo.
    </p>

    @component('mail::button', ['url' => "mailto:{$user->email}"])
      Responder
    @endcomponent
  @endif

  @if ($context == 'zodiac')
    <p>
      Qualquer dúvida estamos à disposição.<br>
      Att,
    </p>
  @endif
@endcomponent
