<div {{ $attributes->merge(['class' => 'test-class test2-class']) }}>
    <h3>Sidebar component view</h3>
    {{ $title }}
    <p>Email: {{ $email }}</p>


    <hr>
    <h2>Users list</h2>
    <p>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>
    </p>
    <h3>function with params</h3>
    <ul>
        @foreach ($users1('Miki Tran') as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>
    <div>{{ $attributes }}</div>
</div>
