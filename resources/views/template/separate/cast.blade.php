 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">

        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Cast</h3>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form action="{{ route('cast.store') }}" method="POST">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="castName">Name Cast</label>
                  <input type="text" class="form-control" @error('name') {{'is invalid'}} @enderror id="castName" name="name" placeholder="Enter Cast Name...">
                </div>
                <div class="form-group">
                  <label for="CastAge">Age</label>
                  <input type="number" class="form-control" id="castAge" placeholder="Enter Age...">
                </div>
                <div class="form-group">
                  <label for="movieSynopsis">Bio</label><br>
                  <textarea class="form-control" name="Bio" id="castBio" style="resize: none" placeholder="Enter Cast Bio..."></textarea>
                </div>
                <div class="form-group">
                  <div class="input-group">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-secondary">Submit</button>
              </div>
            </form>
        </div>
    </div><!-- /.container-fluid -->
  </section>
<!-- /.content -->
