<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Login
    <small>Control panel</small>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-4">

    </div>

    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">HALAMAN LOGIN</h3>
        </div>

        <form method="POST" action="?aksi=login">
          <div class="box-body">
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
          </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-success btn-block btn-xs">Submit</button>
          </div>
        </form>
      </div>
    </div>

    <div class="col-md-4">

    </div>
  </div>
</section>