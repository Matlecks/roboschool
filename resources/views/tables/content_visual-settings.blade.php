<form class="content_visual-settings">
    @csrf
    <div class="d-flex" id="color-settings-part"
        style="border-bottom: 1px solid #f3f3f3;
        border-bottom-color: rgb(243, 243, 243); padding-bottom: 20px;">
        <div class="d-flex flex-wrap w-50">
            <label class="form-label w-100 text-montserrat fw-bold" style="font-size: 12px; letter-spacing: .5px;">БАЗОВЫЙ
                ЦВЕТ</label>
            <div class="d-flex flex-wrap w-10 mt-3">
                <div class="rounded-circle border border-1 border-of-color-btn"><span
                        class="rounded-circle bg-color-1 color-btn"></span></div>
                <div class="rounded-circle border border-1 border-of-color-btn"><span
                        class="rounded-circle bg-color-2 color-btn"></span></div>
                <div class="rounded-circle border border-1 border-of-color-btn"><span
                        class="rounded-circle bg-color-3 color-btn"></span></div>
                <div class="rounded-circle border border-1 border-of-color-btn"><span
                        class="rounded-circle bg-color-4 color-btn"></span></div>
                <div class="rounded-circle border border-1 border-of-color-btn"><span
                        class="rounded-circle bg-color-5 color-btn"></span></div>
                <div class="rounded-circle border border-1 border-of-color-btn"><span
                        class="rounded-circle bg-color-6 color-btn"></span></div>
                <div class="rounded-circle border border-1 border-of-color-btn"><span
                        class="rounded-circle bg-color-7 color-btn"></span></div>
                <div class="rounded-circle border border-1 border-of-color-btn"><span
                        class="rounded-circle bg-color-8 color-btn"></span></div>
                <div class="rounded-circle border border-1 border-of-color-btn"><span
                        class="rounded-circle bg-color-9 color-btn"></span></div>
                <div class="rounded-circle border border-1 border-of-color-btn"><span
                        class="rounded-circle bg-color-10 color-btn"></span></div>
                <div class="rounded-circle border border-1 border-of-color-btn"><span
                        class="rounded-circle bg-color-11 color-btn"></span></div>
                <div class="rounded-circle border border-1 border-of-color-btn"><span
                        class="rounded-circle bg-color-12 color-btn"></span></div>
                <div class="rounded-circle border border-1 border-of-color-btn"><span
                        class="rounded-circle bg-color-13 color-btn"></span></div>
                <div class="rounded-circle border border-1 border-of-color-btn"><span
                        class="rounded-circle bg-color-14 color-btn"></span></div>
                <div class="rounded-circle border border-1 border-of-color-btn"><span
                        class="rounded-circle bg-color-15 color-btn"></span></div>
                <div class="rounded-circle border border-1 border-of-color-btn"><span
                        class="rounded-circle bg-color-16 color-btn"></span></div>
                <div class="rounded-circle border border-1 border-of-color-btn"><span
                        class="rounded-circle bg-color-17 color-btn"></span></div>
                <div class="rounded-circle border border-1 border-of-color-btn"><span
                        class="rounded-circle bg-color-18 color-btn"></span></div>
                <input value="" class="form-control mt-3" type="text" id="base_color" hidden="true"
                    name="base_color" placeholder="#">
            </div>
        </div>
    </div>
    <div class="d-flex flex-wrap mt-3" id="theme-setting-part"
        style="border-bottom: 1px solid #f3f3f3;
        border-bottom-color: rgb(243, 243, 243); padding-bottom: 20px;">
        <label for="custom_color" class="form-label text-montserrat fw-bold w-100"
            style="font-size: 12px; letter-spacing: .5px;">ОФОРМЛЕНИЕ</label>
        <div class="d-flex mt-3">
            <button type="button" id="theme-auto" class="theme-setting-btn active">Автоматически</button>
            <button type="button" id="theme-light" class="theme-setting-btn">Светлое</button>
            <button type="button" id="theme-dark" class="theme-setting-btn">Темное</button>
            <input value="" class="form-control mt-3" type="text" id="theme-setting" hidden="true"
                name="theme-setting" placeholder="#">
        </div>
    </div>
    <div class="d-flex flex-wrap mt-3" id="width-setting-part"
        style="border-bottom: 1px solid #f3f3f3;
        border-bottom-color: rgb(243, 243, 243); padding-bottom: 20px;">
        <label for="custom_color" class="form-label text-montserrat fw-bold w-100"
            style="font-size: 12px; letter-spacing: .5px;">ШИРИНА САЙТА</label>
        <div class="d-flex mt-3">
            <button type="button" id="width-auto" class="theme-setting-btn active">Автоматическая</button>
            <button type="button" id="width-70" class="theme-setting-btn">70%</button>
            <button type="button" id="width-75" class="theme-setting-btn">75%</button>
            <button type="button" id="width-80" class="theme-setting-btn">80%</button>
            <input value="" class="form-control mt-3" type="text" id="width-setting" hidden="true"
                name="width-setting" placeholder="#">
        </div>
    </div>
    <div class="d-flex flex-wrap mt-3 w-50" id="font-title-setting-part"
        style="border-bottom: 1px solid #f3f3f3;
        border-bottom-color: rgb(243, 243, 243); padding-bottom: 20px;">
        <label for="custom_color" class="form-label text-montserrat fw-bold w-100"
            style="font-size: 12px; letter-spacing: .5px;">ШРИФТ ЗАГОЛОВКОВ</label>
        <div class="d-flex mt-3 justify-content-between w-100">
            <span class="text-montserrat" style="font-size: 14px">Roboto</span>
            <div class="d-flex">
                <button type="button" id="font-title-roboto-40" class="theme-setting-btn active">40 px</button>
                <button type="button" id="font-title-roboto-41" class="theme-setting-btn">41 px</button>
                <button type="button" id="font-title-roboto-42" class="theme-setting-btn">42 px</button>
            </div>
        </div>
        <div class="d-flex mt-1 justify-content-between w-100">
            <span class="text-montserrat" style="font-size: 14px">Montserrat</span>
            <div class="d-flex">
                <button type="button" id="font-title-montserrat-40" class="theme-setting-btn active">40
                    px</button>
                <button type="button" id="font-title-montserrat-41" class="theme-setting-btn">41 px</button>
                <button type="button" id="font-title-montserrat-42" class="theme-setting-btn">42 px</button>
            </div>
        </div>
        <input value="" class="form-control mt-3" type="text" id="font-title-setting" hidden="true"
            name="font-title-setting" placeholder="#">
    </div>
    <div class="d-flex flex-wrap mt-3 w-50" id="font-text-setting-part"
        style="border-bottom: 1px solid #f3f3f3;
        border-bottom-color: rgb(243, 243, 243); padding-bottom: 20px;">
        <label for="custom_color" class="form-label text-montserrat fw-bold w-100"
            style="font-size: 12px; letter-spacing: .5px;">ШРИФТ ТЕКСТА</label>
        <div class="d-flex mt-3 justify-content-between w-100">
            <span class="text-montserrat" style="font-size: 14px">Roboto</span>
            <div class="d-flex">
                <button type="button" id="font-text-roboto-16" class="theme-setting-btn active">16 px</button>
                <button type="button" id="font-text-roboto-18" class="theme-setting-btn">18 px</button>
                <button type="button" id="font-text-roboto-20" class="theme-setting-btn">20 px</button>
            </div>
        </div>
        <div class="d-flex mt-1 justify-content-between w-100">
            <span class="text-montserrat" style="font-size: 14px">Montserrat</span>
            <div class="d-flex">
                <button type="button" id="font-text-montserrat-16" class="theme-setting-btn active">16 px</button>
                <button type="button" id="font-text-montserrat-18" class="theme-setting-btn">18 px</button>
                <button type="button" id="font-text-montserrat-20" class="theme-setting-btn">20 px</button>
            </div>
        </div>
        <input value="" class="form-control mt-3" type="text" id="font-text-setting" hidden="true"
            name="font-text-setting" placeholder="#">
    </div>
    {{-- <button type="submit" class="">Сохранить</button> --}}
</form>
