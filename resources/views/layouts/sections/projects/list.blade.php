
<div class="col-md-10 offset-1 mt-5 mb-3">

    <div class="list-group">
        @foreach($projects as $project)
            <a id="{{ $project->id }}" class="ajax-projects list-group-item list-group-item-action flex-column align-items-start ">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Name: {{ $project->name }}</h5>
                <small class="text-muted">Started at: {{ $project->start_at }}</small>
            </div>
            <p class="mb-1">Price: {{ $project->price }}</p>
            <small class="text-muted"><span style="color:#ff050c">Must be finished at: {{ $project->finish_at }}</span></small>
            <div class="project-manager" id="project-manager">
            </div>
        </a>
        @endforeach
    </div>
</div>
