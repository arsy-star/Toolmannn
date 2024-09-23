<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/operator/operator.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="dashboard-container">
        <nav class="sidebar">
            <div class="sidebar-header">
                <h2>Menu</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Item</a></li>
                <li><a href="#">Peminjam</a></li>
                <li><a href="#">Data Peminjaman</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </nav>
        <div class="main-content">
            <header class="topbar">
                <h1>Dashboard</h1>
                <div class="user-info">
                    <p>Welcome, User</p>
                    <a href="{{route('logout')}}">Logout</a>
                </div>
            </header>
            <div class="content">
              
                    <div class="card">
                        <h3>Projects</h3>
                        <p>10 active projects</p>
                    </div>
                <div class="cards">
                    <div class="card">
                        <h3>Projects</h3>
                        <p>10 active projects</p>
                    </div>
                    <div class="card">
                        <h3>Tasks</h3>
                        <p>50 tasks completed</p>
                    </div>
                    <div class="card">
                        <h3>Resources</h3>
                        <p>30 resources used</p>
                    </div>
                </div>
              <table>
  <thead>
    <tr>
      <th>Nom</th>
      <th>Email</th>
      <th>Téléphone</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>John Doe</td>
      <td>john@example.com</td>
      <td>555-1234</td>
      <td>
        <a href="#">Modifier</a>
        <a href="#">Supprimer</a>
      </td>
    </tr>
    <tr>
      <td>Jane Smith</td>
      <td>jane@example.com</td>
      <td>555-5678</td>
      <td>
        <a href="#">Modifier</a>
        <a href="#">Supprimer</a>
      </td>
    </tr>
    <tr>
      <td>Bob Johnson</td>
      <td>bob@example.com</td>
      <td>555-9012</td>
      <td>
        <a href="#">Modifier</a>
        <a href="#">Supprimer</a>
      </td>
    </tr>
  </tbody>
</table>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
