<div id="table_mail_letters" class="block">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasSecondLabel">Письма</h5>
    </div>
    <div class="offcanvas-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Почта</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Сообщение</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($letters as $letter)
                    <tr>
                        <th scope="row">{{ $letter->id }}</th>
                        <td>{{ $letter->title }}</td>
                        <td>{{ $letter->name }}</td>
                        <td>{{ $letter->email }}</td>
                        <td>{{ $letter->phone }}</td>
                        <td>{{ $letter->message }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
