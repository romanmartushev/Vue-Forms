@if (count($projects))
	<h1 class="text-3xl">My Projects</h1>

	<ul>
		@foreach ($projects as $project)
			<li>
				<a href="#" class="text-teal-400">{{ $project->name }}</a>
			</li>
		@endforeach
	</ul>

	<hr class="border border-gray-400"/>
@endif
