<!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">
  <a class="navbar-brand" href="#">
    Mile High Disc Golf Club
    <!-- <img src="<?=$cdn_host?>/img/common/logo.png" width="154" height="40" class="d-inline-block align-top" alt="Mile High Disc Golf Club"> -->
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/events">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/events">Tags</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/events">Aces</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDDLinkTheClub" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          The Club
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDDLinkTheClub">
          <a class="dropdown-item" href="/contents/view/club_membership">Join</a>
          <a class="dropdown-item" href="/meetings">Meeting Schedule</a>
          <a class="dropdown-item" href="/courses">Denver Area Courses</a>
        </div>
      </li>
      <?php if(!$this->request->getSession()->check('Auth.User')): ?>
      <li class="nav-item d-lg-none">
        <a class="nav-link" href="/users/login">Login</a>
      </li>
      <?php endif; ?>
    </ul>
    <?php if(!$this->request->getSession()->check('Auth.User')): ?>
    <form class="form-inline d-none d-lg-block" action="/users/login" method="post">
      <input class="form-control" type="text" placeholder="username" name="data[User][username]" />
      <input class="form-control" type="password" placeholder="password" name="data[User][password]" />
      <button class="btn btn-warning" type="submit" value="login"><i class="fa fa-chevron-right"></i> Login</button>
    </form>
    <?php else: ?>
      <?=$this->element('Admin/menu', array('user'=>$this->request->getSession()->read('Auth.User'))); ?>
    <?php endif; ?>
  </div>
</nav>
