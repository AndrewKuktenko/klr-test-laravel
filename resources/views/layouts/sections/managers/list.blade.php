
<div class="col-md-10 offset-1 mt-5 mb-3">

    <div class="list-group">
        @foreach($managers as $manager)
            <a id="{{ $manager->id }}" class="ajax-managers list-group-item list-group-item-action flex-column align-items-start ">
                <div class="row">
                    <div class="col-md-3">
                        <img class="card-img-top float-left" src="{{ asset('/avatars/'.$manager->photo_id)}}" style="height: auto; border-radius: 2px 2px 2px 2px; width: 100px;" alt="{{ $manager->photo_id }}">
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Name: {{ $manager->name }}</h5>
                            <small class="text-muted">E-mail: {{ $manager->email}}</small>
                        </div>
                        <p class="mb-1">Company: {{ $manager->company }}</p>
                        <small class="text-muted"><span style="color:#10707f">Phone: {{ $manager->phone }}</span></small>
                    </div>
                </div>
                <div class="manager-project" id="manager-project">
                </div>
            </a>
        @endforeach
    </div>
</div>
