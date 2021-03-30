@component('mail::message')
# A new service request has been made

Customer Name: {{ $data['customer_name'] }}

Customer Phone: {{ $data['customer_phone'] }}

Customer Email: {{ $data['customer_email'] }}

Type of dispenser: {{ $data['unit_type'] }}

Number of units: {{ $data['number_units'] }}

Additional Notes: {{ $data['description'] }}

@endcomponent
