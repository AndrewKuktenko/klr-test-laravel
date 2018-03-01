@if(isset($projects))
    @foreach($projects as $project)
        <div class="list-group" style="background-color: #00b3ee; padding: 10px; margin: 4px; border-bottom: 2px solid #e3d2d2">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Name: {{ $project->name }}</h5>
                <h4 class="text-muted"><span style="color:#5e001f">Finish: {{ $project->finish_at }}</span></h4>
            </div>
            <p class="mb-1">Price: ${{ $project->price }}</p>
            <h4 class="text-muted"><span style="color:#fff">Started: {{ $project->start_at }}</span></h4>
        </div>
    @endforeach
@endif

