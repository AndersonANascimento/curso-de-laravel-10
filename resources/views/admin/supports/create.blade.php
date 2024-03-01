<h1>Nova Dúvida</h1>

<form action="{{ route('supports.store') }}" method="post">
    {{-- <input type="text" value="{{ csrf_token() }}" name="_token"> --}}
    @csrf()
    <input type="text" placeholder="Assunto" name="subject" id="">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição"></textarea>
    <button type="submit">Enviar</button>
</form>
