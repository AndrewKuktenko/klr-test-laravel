<!-- /.col-lg-3 -->

<div class="col-lg-9">

    <div class="my-4"></div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#projectCreate" role="tab" aria-controls="projectCreate">Create project</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#projectUpdate" role="tab" aria-controls="projectUpdate">Update project</a>
        </li>
    </ul>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="tab-content">
        <div class="tab-pane active" id="projectCreate" role="tabpanel">
            <form method="post" action="/addProject" name="projectForm" onsubmit="return validateCreateForm()">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="projectName">Name</label>
                    <input type="text" class="form-control" name="projectName" id="projectName" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="projectExecutor">Executors ID:</label>
                    <input type="text" class="form-control" name="projectExecutor" id="projectExecutor" placeholder="1,2,3... etc.">
                </div>
                <div class="form-group">
                    <label for="projectPrice">Price</label>
                    <input type="text" class="form-control" name="projectPrice" id="projectPrice" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="startAt">Start at</label>
                    <div class="input-group date" id="datetimepickerStart" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" name="startAt" id="startAt" data-target="#datetimepickerStart"/>
                        <div class="input-group-append" data-target="#datetimepickerStart" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="finishAt">Finish at</label>
                    <div class="input-group date" id="datetimepickerFinish" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" name="finishAt" id="finishAt" data-target="#datetimepickerFinish"/>
                        <div class="input-group-append" data-target="#datetimepickerFinish" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="">
                        <button type="submit" name="submit"  value="create" class="btn btn-default bg-primary text-white">Create</button>
                    </div>
                </div>
            </form>

        </div>
        <div class="tab-pane" id="projectUpdate" role="tabpanel">
            <form method="post" action="/updateProject" name="projectForm" onsubmit="return validateUpdateForm()">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="projectId">ID:</label>
                    <input type="text" class="form-control id-request" name="id" id="projectId" placeholder="* required only for update" required>
                </div>
                <div class="form-group">
                    <label for="projectName">Name</label>
                    <input type="text" class="form-control" name="projectName" id="projectName" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="projectExecutor">Executors ID:</label>
                    <input type="text" class="form-control" name="projectExecutor" id="projectExecutor" placeholder="1,2,3... etc.">
                </div>
                <div class="form-group">
                    <label for="projectPrice">Price</label>
                    <input type="text" class="form-control" name="projectPrice" id="projectPrice" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="startAt">Start at</label>
                    <div class="input-group date" id="datetimepickerStartUpdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" name="startAt" id="startAt" data-target="#datetimepickerStartUpdate"/>
                        <div class="input-group-append" data-target="#datetimepickerStartUpdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="finishAt">Finish at</label>
                    <div class="input-group date" id="datetimepickerFinishUpdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" name="finishAt" id="finishAt" data-target="#datetimepickerFinishUpdate"/>
                        <div class="input-group-append" data-target="#datetimepickerFinishUpdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="">
                        <button type="submit" name="submit"  value="update" class="btn btn-default bg-primary text-white">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>
<!-- /.col-lg-9 -->