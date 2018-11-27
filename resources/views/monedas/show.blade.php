<h1>Moneda {{ $moneda -> currency }}</h1>

<p>Id moneda: {{ $moneda -> idcurrency}}</p>
<p>Moneda: {{ $moneda -> currency }}</p>
<p>Descripción: {{ $moneda -> description }}</p>
<p>Activa: {{ $moneda -> isactive }}</p>
<p>Isocode: {{ $moneda -> isocode }}</p>
<p>Precisión: {{ $moneda -> precisionstd }}</p>
<p>Precisión costes: {{ $moneda -> precisioncost }}</p>
<p>Precisión precio: {{ $moneda -> precisionprize }}</p>
<p>Fecha de creación: {{ $moneda -> created_at }}</p>

<a href=" {{ route('monedas.index') }}">Volver al índice</a>
<a href=" {{ route('monedas.show', $moneda->idcurrency) }}">Recargar</a>
