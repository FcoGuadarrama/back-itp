
<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Procedencia</th>
        <th>Email</th>
        <th>¿Ha realizado alguna prueba vocacional?</th>
        <th>Carrera de interés</th>
        <th>Resultados</th>
        <th>Fecha</th>
    </tr>
    </thead>
    <tbody>
    @foreach($aspirantes as $aspirante)
        <tr>
            <td>{{ $aspirante->id }}</td>
            <td>{{ $aspirante->name }}</td>
            <td>{{ $aspirante->age }}</td>
            <td>{{ $aspirante->originSchool }}</td>
            <td>{{ $aspirante->email }}</td>
            <td>{{ $aspirante->option }}</td>
            <td>{{ $aspirante->interestedCareer }}</td>
            <td>{{ $aspirante->results }}</td>
            <td>{{ \Carbon\Carbon::parse($aspirante->created_at)->format('d-m-y') }}</td>
        </tr>
    @endforeach
    </tbody>
</table>