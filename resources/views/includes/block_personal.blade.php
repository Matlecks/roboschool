<div id="block_personal" class="block">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasSecondLabel">Тренеры</h5>
    </div>
    <div class="offcanvas-body">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="user_switch" value="1" checked>
            <label class="form-check-label" for="user_switch">Активные элементы</label>
        </div>
        @include('tables.table_personal')
    </div>
</div>
