<table class="table table-hover" id="table_courses">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Анонс текст</th>
            <th scope="col">Стоимость</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($services as $service)
            <tr>
                <th scope="row">{{ $service->id }}</th>
                <td>{{ $service->title }}</td>
                <td>{{ $service->anounce_text }}</td>
                <td>{{ $service->cost }}</td>
                <td>
                    <div class="btn-group dropend">
                        <button type="button" class="btn_burger" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#service_staticBackdrop" id="service_{{ $service->id }}">
                                    Редактировать</a></li>
                            <li>
                                <form class="dropdown-item" id="service_delete_{{ $service->id }}">
                                    @csrf
                                    <span>Удалить</span>
                                </form>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
