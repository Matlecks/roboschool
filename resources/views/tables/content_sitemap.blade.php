<div class="">
    <div class="">Последний запуск: <span id="last_run_sitemap"></span></div>
    <div class="" style="display:flex">Добавить в robots.txt
        <div class="form-check" style="padding-left: 0px;">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="margin-left: 5px;">
        </div>
    </div>
    <form action="" method="GET" id="" class="col-6 pt-4">
        @csrf
        <textarea name="robots_content" class="form-control textarea_robots"></textarea>
        <button class="btn btn-primary py-2 mt-4" id="generate_site_map_btn">Сохранить</button>
    </form>
</div>
