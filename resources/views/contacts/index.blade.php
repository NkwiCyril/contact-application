<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>My Contact</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
  <!-- Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand text-uppercase" href="index.html">
        <strong>Contact</strong> App
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- /.navbar-header -->
      <div class="collapse navbar-collapse" id="navbar-toggler">
        <ul class="navbar-nav">
          <li class="nav-item"><a href="#" class="nav-link">Companies</a></li>
          <li class="nav-item active"><a href="#" class="nav-link">Contacts</a></li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mr-2"><a href="#" class="btn btn-outline-secondary">Login</a></li>
          <li class="nav-item"><a href="#" class="btn btn-outline-primary">Register</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              John Doe
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/profile">Settings</a>
              <a class="dropdown-item" href="#">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- content -->
  <main class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-title">
              <div class="d-flex align-items-center">
                <h2 class="mb-0">All Contacts</h2>
                <div class="ml-auto">
                  <a href="form.html" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col">
                      <select class="custom-select">
                        <option value="" selected>All Companies</option>
                        <option value="1">Company One</option>
                        <option value="2">Company Two</option>
                        <option value="3">Company Three</option>
                      </select>
                    </div>
                    <div class="col">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="button">
                            <i class="fa fa-refresh"></i>
                          </button>
                          <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                            <i class="fa fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Company</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($contacts as $key => $contact)
                  <tr>
                    <th scope="row">
                      {{ $key }}
                    </th>
                    <td>
                      {{ $contact['firstname'] }}
                    </td>
                    <td>
                      {{ $contact['lastname'] }}
                    </td>
                    <td>
                      {{ $contact['email'] }}
                    </td>
                    <td>
                      {{ $contact['company'] }}
                    </td>
                    <td width="150">
                      <a href="{{ route('contacts.show', [$id = $key]) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                      <a href="{{ route('contact.edit', [$id = $key]) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

              <nav class="mt-4">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>