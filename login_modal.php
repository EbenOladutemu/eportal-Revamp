  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true" style="padding-top: 170px">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <form class="form-width">
            <div class="form-group">
              <div class="input-group-prepend flex-nowrap">
                <span class="input-group-text form-span"><i class="fas fa-user"></i></span><input type="name" class="form-control form-span-2" id="staffID" aria-describedby="staffID" placeholder="Staff ID/Student Number" required>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group-prepend flex-nowrap">
                <span class="input-group-text form-span"><i class="fas fa-lock"></i></span><input type="password" class="form-control form-span-2" id="password" aria-describedby="passwrod" placeholder="Password" required>
              </div>
            </div>
            <div class="form-group">
              <select class="custom-select" required>
                <option selected=""></option>
                <option value="">2018/2019</option>
                <option value="">2017/2018</option>
                <option value="">2016/2017</option>
                <option value="">2015/2016</option>
                <option value="">2014/2015</option>
                <option value="">2013/2014</option>
                <option value="">2012/2013</option>
                <option value="">2011/2012</option>
                <option value="">2010/2011</option>
                <option value="">2009/2010</option>
                <option value="">2008/2009</option>
                <option value="">2007/2008</option>
                <option value="">2006/2007</option>
              </select>
            </div>
            <div class="form-group">
              <select class="custom-select" required>
                <option selected></option>
                <option value="rain">Rain</option>
                <option value="harmattan">Harmattan</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary login-btn">Submit</button>
            <small class="float-right"><a href="#">Forgot your<br> password?</a></small>
          </form>
        </div>
      </div>
    </div>
  </div>