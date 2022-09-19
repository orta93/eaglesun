<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Install and Use CKEditor In Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-3 mt-4">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Titulo</label>
                            <input name="name" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Categoria</label>
                            <select name="category_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->description }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Contact Title</label>
                            <input name="contact_title" class="form-control" value="Dejemos atrás el dolor, empieza hoy tu tratamiento."/>
                        </div>
                        <div class="form-group">
                            <label>Contact Subtitle</label>
                            <input name="contact_subtitle" class="form-control" value="Haz tu cita hoy mismo para que te indiquemos qué opción es la mejor para ti"/>
                        </div>
                        <div class="form-group">
                            <textarea class="ckeditor form-control" name="body"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
</html>