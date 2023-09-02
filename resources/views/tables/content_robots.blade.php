<div class="robots_container">
    <form action="{{ route('update_robots') }}" method="POST" id="robots_update" class="col-6 pt-4">
        @csrf
        <textarea name="robots_content" class="form-control textarea_robots">{{ $robots_content }}</textarea>
        <button class="btn btn-primary py-2 mt-4">Сохранить</button>
    </form>
</div>
