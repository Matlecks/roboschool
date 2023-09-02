<table class="table table-hover" id="service-table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Название</th>
            <th scope="col">Стоимость</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($services as $service)
            <tr>
                <th scope="row">{{ $service->id }}</th>
                <td>{{ $service->title }}</td>
                <td>{{ $service->cost }}</td>
            </tr>
        @endforeach
    </tbody>

</table>
