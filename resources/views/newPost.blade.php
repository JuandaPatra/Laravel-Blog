@extends('layouts.main')

@section('container')

<h1 class="text-center">Add Article</h1>
<form method="get" action="">
    @csrf
    <label for="basic-url" class="form-label">Title</label>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="title" id="title">
    </div>

    <label for="basic-url" class="form-label">Slug</label>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" name="slug" id="slug">
    </div>

    <label for="basic-url" class="form-label">excerpt</label>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" name="excerpt">
    </div>


    <label for="basic-url" class="form-label">Body</label>
    <div>
        <input id="body" type="hidden" name="body">
        <trix-editor input="body"></trix-editor>
    </div>
    <button type="submit" class="btn btn-success tes">Edit Data</button>
</form>
<script>
    
    

    $('#title').on('change', () => {
        const title = $('#title').val()
        const slug = $('#slug').val()
        $.ajax({
            url: "add/post/checkSlug?title="+ title,
            method:"get",
            success: function(data) {
                $('#slug').val(data.slug)
                    },
            error: function(data) {
                        console.log(data, 'error');
                    }
            
        })
    })
</script>
@endsection