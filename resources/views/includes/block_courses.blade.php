<div id="block_courses" class="block">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasSecondLabel">Курсы</h5>
    </div>
    <div class="offcanvas-body">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="courses_switch" value="1" checked>
            <label class="form-check-label" for="courses_switch">Активные элементы</label>
        </div>
        @include('tables.table_courses')
    </div>
</div>
