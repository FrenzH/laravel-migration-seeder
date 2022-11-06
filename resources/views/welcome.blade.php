@foreach ($trains as $train)
<div>
    <h2>{{ $train['id'] }}</h2>
    <p>{{ $train['azienda'] }}</p>
</div>
@endforeach
