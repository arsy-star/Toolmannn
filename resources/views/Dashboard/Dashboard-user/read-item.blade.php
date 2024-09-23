
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>item</title>
    <link rel="stylesheet" href="{{asset('css/User/user.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="dashboard-container">
        <nav class="sidebar">
            <div class="sidebar-header">
                <h2>Menu</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="{{route('dashboard_user')}}">Dashboard</a></li>
                <li><a href="{{route('item.index')}}">Item</a></li>
                <li><a href="#">Tasks</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </nav>
        <div class="main-content">
            <header class="topbar">
                <h1>item</h1>
                <div class="user-info">
                    <p>Welcome, User</p>
                    <a href="{{route('login')}}">Logout</a>
                </div>
            </header>
            <div class="content">
                <div>
                    <h1>Daftar Barang</h1>
                    <table>
                        <thead>
                            <tr>
                                <input type="text" placeholder="search">
                                <th>no</th>
                                <th>category</th>
                                <th>nama barang</th>                                                                                                                                                                                                          
                                <th>storage rack</th>
                                <th>jumlah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($items as $item)
                                <tr>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->stok }}</td>
                                    <td>{{ $item->harga }}</td>
                                    <td>{{ $item->harga }}</td> --}}
                                    <td>
                                        {{-- <a href="{{ route('peminjaman.create', $item->id) }}">Ajukan Peminjaman</a> --}}
                                    </td>
                                </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
              
                    
              
  

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
