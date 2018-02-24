<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Nebraska</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=Uri::create('index.php/nebraska'); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?=Uri::create('index.php/nebraska'); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Attractions
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="<?=Uri::create('index.php/nebraska/carhenge'); ?>" target="_blank">Carhenge</a>
          <a class="dropdown-item" href="<?=Uri::create('index.php/nebraska/zooAqua'); ?>" target="_blank">Henry Doorly Zoo and Aquarium</a>
          <a class="dropdown-item" href="<?=Uri::create('index.php/nebraska/chimney'); ?>" target="_blank">Chimney Rock</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <div class="my-2 my-lg-0">
      <a class="btn btn-outline-warning my-2 my-sm-0" href="<?=Uri::create('index.php/nebraska/login'); ?>" target="_blank">Login</a>
    </div>
  </div>
</nav>
