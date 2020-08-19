<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?wp_head()?>
  <title>Document</title>
</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light py-5 px-20">
  <a class="navbar-brand" href="<?echo site_url('');?>">The <span class="dark-green text-bold">Vegan</span> Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?echo site_url('');?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?echo site_url('/clothing');?>">Clothing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?echo site_url('/drinks');?>">Drinks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?echo site_url('/food');?>">Food</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?echo site_url('/places');?>">Places</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

