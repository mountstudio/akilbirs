@component('mail::message')
# Заявка с сайта

Имя: {{ $data['name'] }}
<br>
Номер телефона: {{ $data['phone'] }}
<br>
E-mail: {{ $data['email'] }}
<br>
Комментарий: {{ $data['comment'] }}

Спасибо,<br>
{{ config('app.name') }}
@endcomponent
