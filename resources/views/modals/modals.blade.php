<!-- Модальное окно редактирования User-->
<div class="modal fade" id="user_staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" id="user_crud_modal">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Редактировать пользователя</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <p class="mb-3">Id: <span id="user_id"></span></p>
                <input id="id" name="id" value="" style="display: none">
                <label for="title" class="form-label">Имя</label>
                <input class="form-control" name="name" id="name" value="">
                <label for="title" class="form-label">Фамилия</label>
                <input class="form-control" name="surname" id="surname" value="">
                <label for="title" class="form-label">E-mail</label>
                <input class="form-control" name="email" id="email" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary" id="save_btn" data-bs-dismiss="modal">Сохранить</button>
            </div>
        </form>
    </div>
</div>


<!-- Модальное окно редактирования Service-->
<div class="modal fade" id="service_staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" id="service_crud_modal">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Редактировать курс</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <p class="mb-3">Id: <span id="service_id"></span></p>
                <input id="id" name="id" value="" style="display: none">
                <label for="title" class="form-label">Название</label>
                <input class="form-control" name="title" id="title" value="">
                <label for="title" class="form-label">Цена</label>
                <input class="form-control" name="cost" id="cost" value="">
                <label for="title" class="form-label">Текст анонса</label>
                <input class="form-control" name="anounce_text" id="anounce_text" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary" id="save_btn" data-bs-dismiss="modal">Сохранить</button>
            </div>
        </form>
    </div>
</div>
