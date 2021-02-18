<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="{{asset('js/app.js')}}"></script>

<div class="container">
    <form action="{{route('post.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="url_clean">Url Limpia</label>
            <input type="text" class="form-control" name="url_clean" id="url_clean">
        </div>
        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea type="text" class="form-control" name="content" id="content" rows="3">
        </textarea>
        </div>
        <input type="submit" class="btn btn-danger" value="Enviar">
        {{--    <div class="form-group">--}}
        {{--        <label for="posted">Posteado</label>--}}
        {{--        <input type="text" class="fom-group" name="posted" id="posted">--}}
        {{--    </div>--}}
    </form>
</div>



