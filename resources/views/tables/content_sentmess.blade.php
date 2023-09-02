<div class="content_sentmess">
    <form action="{{ route('send_mail') }}" method="POST" id="admin_sentmessage" class="col-6 pt-4">
        @csrf
        <div class="d-flex mb-4">
            <input type="email" class="form-control w-50" id="from" placeholder="От кого"
                name="from" disabled>
            <input type="email" class="form-control w-50 ms-3" id="to" placeholder="Кому"
                name="to">
            <input type="text" class="form-control w-50 ms-3" style="display: none;" id="status"
                name="status" value="sent">
        </div>
        <textarea name="message" class="form-control"></textarea>
        <button class="btn btn-primary py-2 mt-4" id="admin_sent_mess">Отправить</button>
    </form>
</div>
