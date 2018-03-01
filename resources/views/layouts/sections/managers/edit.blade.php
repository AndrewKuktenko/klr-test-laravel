<div class="col-lg-9">

    <div class="my-4"></div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#projectCreate" role="tab" aria-controls="projectCreate">Add manager</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#projectUpdate" role="tab" aria-controls="projectUpdate">Update manager</a>
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
            <form action="/addManager" name="managerForm" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="managerName">Name</label>
                    <input type="text" class="form-control" name="managerName" id="managerName" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="managerEmail">Email</label>
                    <input type="email" class="form-control" name="managerEmail" id="managerEmail" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="managerPhone">Phone</label>
                    <input type="text" class="form-control" name="managerPhone" id="managerPhone" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="managerCompany">Company</label>
                    <input type="text" class="form-control" name="managerCompany" id="managerCompany" placeholder="Company">
                </div>
                <div class="form-group">
                    <label for="managerPhoto">Photo</label>
                    <input type="file" class="form-control" name="managerPhoto" id="managerPhoto" placeholder="Photo">
                    <img id="preview" src="#" style="width: 100px; height: 100px"/>
                </div>
                <div class="form-group">
                    <div class="">
                        <button type="submit" class="btn btn-default bg-primary text-white">Add</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="tab-pane" id="projectUpdate" role="tabpanel">
            <form action="/updateManager" name="managerForm" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="managerId">ID:</label>
                    <input type="text" class="form-control id-request" name="id" id="managerId" placeholder="* required only for update" required>
                </div>
                <div class="form-group">
                    <label for="managerName">Name</label>
                    <input type="text" class="form-control" name="managerName" id="managerName" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="managerEmail">Email</label>
                    <input type="email" class="form-control" name="managerEmail" id="managerEmail" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="managerPhone">Phone</label>
                    <input type="text" class="form-control" name="managerPhone" id="managerPhone" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="managerCompany">Company</label>
                    <input type="text" class="form-control" name="managerCompany" id="managerCompany" placeholder="Company">
                </div>
                <div class="form-group">
                    <label for="managerPhoto">Photo</label>
                    <input type="file" class="form-control" name="managerPhotoUpd" id="managerPhotoUpd" placeholder="Photo">
                    <img id="previewUpd" src="#" style="width: 100px; height: 100px"/>
                </div>
                <div class="form-group">
                    <div class="">
                        <button type="submit" class="btn btn-default bg-primary text-white">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>
<!-- /.col-lg-9 -->