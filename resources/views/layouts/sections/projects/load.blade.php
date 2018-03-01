@if(isset($managers))
    @foreach($managers as $manager)
        {{--{{ $manager }}--}}
        <div class="card-group">
            <div class="card">
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="card-img-top float-left" src="{{ asset('/avatars/'.$manager->photo_id)}}" style="height: auto; border-radius: 2px 0 0 2px; width: 100px;" alt="{{ $manager->photo_id }}">
                        </div>
                        <div class="col-md-8">
                            <h4 class="card-title">{{ $manager->name }} <span>ID: {{ $manager->id }}</span></h4>
                            <p class="card-text">{{ $manager->company }}</p>
                            <p class="card-text"><small class="text-muted">{{ $manager->email }}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif

