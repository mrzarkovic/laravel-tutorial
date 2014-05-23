@extends('layouts.users')

@section('main')

<h1>Create Users</h1>

<p>{{ link_to_route('users.create', 'Add new user') }}</p>

{{ Form::open(array('route' => 'users.store')) }}
	<ul>
		<li>
			{{ Form::label('name', 'Name') }}
			{{ Form::text('name') }}
		</li>
		<li>
			{{ Form::label('username', 'Username') }}
			{{ Form::text('username') }}
		</li>
		<li>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
		</li>
		<li>
			{{ Form::label('password', 'Password confirmation') }}
			{{ Form::password('password_confirmation') }}
		</li>
		<li>
			{{ Form::label('email', 'Email') }}
			{{ Form::text('email') }}
		</li>
		<li>
			{{ Form::label('phone', 'Phone') }}
			{{ Form::text('phone') }}
		</li>
		<li>
			{{ Form::submit('Submit', array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop