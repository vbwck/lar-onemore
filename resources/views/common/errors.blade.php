@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Some problems with input</strong>
    </div>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
    </ul>
    </div>
@endif