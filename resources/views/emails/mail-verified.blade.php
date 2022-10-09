<p>Hello, {{ $user->name }}</p>
<p>Please verify your email<a href="/post/{{ url('users/' . $user->id) }}">here</a></p>
