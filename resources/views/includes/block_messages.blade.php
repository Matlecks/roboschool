<div id="block_messages" class="block">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasSecondLabel">Письма</h5>
    </div>
    <div class="d-flex col-7 justify-content-between">
        <button type="button" class="btn btn-outline-primary" id="get_incoming_mess">Входящие</button>
        <button type="button" class="btn btn-outline-primary" id="get_sent_mess">Отправленные</button>
        <button type="button" class="btn btn-outline-warning" id="get_selected_mess">Избранные</button>
        <button type="button" class="btn btn-outline-dark" id="get_deleted_mess">Удаленные</button>
    </div>
    <div class="offcanvas-body">
        @include('tables.table_messages')
    </div>
</div>
