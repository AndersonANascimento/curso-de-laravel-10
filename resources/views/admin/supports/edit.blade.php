{{-- {{ $support }} --}}
<h1>Dúvida {{ $support->id }}</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
@endif

<form action="{{ route('supports.update', $support->id) }}" method="post">
    @csrf()<br>
    @method('put')<br>
    <input type="text" placeholder="Assunto" name="subject" value="{{ $support->subject }}">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{ $support->body }}</textarea>
    <button type="submit">Salvar</button>
</form>
