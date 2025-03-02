@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $apprenticeship->apprenticeship_name }}</h1>
    <p><strong>Duration:</strong> {{ $apprenticeship->years }} years</p>

    <h2>Groups under this Apprenticeship</h2>
    @if ($apprenticeship->groups->isEmpty())
        <p>No groups available for this apprenticeship.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Group Name</th>
                    <th>Milestone</th>
                    <th>Year</th>
                    <th>Individual Weighting</th>
                    <th>Progressive Weighting</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($apprenticeship->groups as $group)
                <tr>
                    <td>{{ $group->group_name }}</td>
                    <td>{{ $group->milestone ?? 'N/A' }}</td>
                    <td>{{ $group->year ?? 'N/A' }}</td>
                    <td>{{ $group->individual_weighting ?? 'N/A' }}%</td>
                    <td>{{ $group->progressive_weighting ?? 'N/A' }}%</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
