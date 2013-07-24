@extends('layouts.scaffold')

@section('main')

<h1>All Profiles</h1>

<p>{{ link_to_route('profiles.create', 'Add new profile') }}</p>

@if ($profiles->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Name</th>
				<th>Mobile</th>
				<th>Email</th>
				<th>College</th>
				<th>Password</th>
				<th>New_pass</th>
				<th>Confirm_pass</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($profiles as $profile)
                <tr>
                    <td>{{{ $profile->name }}}</td>
					<td>{{{ $profile->mobile }}}</td>
					<td>{{{ $profile->email }}}</td>
					<td>{{{ $profile->college }}}</td>
					<td>{{{ $profile->password }}}</td>
					<td>{{{ $profile->new_pass }}}</td>
					<td>{{{ $profile->confirm_pass }}}</td>
                    <td>{{ link_to_route('profiles.edit', 'Edit', array($profile->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('profiles.destroy', $profile->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    There are no profiles
@endif

@stop