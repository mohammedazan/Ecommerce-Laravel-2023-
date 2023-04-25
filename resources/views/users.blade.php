<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }
        h1 {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 30px;
            color: #333;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #333;
            color: #fff;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .centered-link {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* يجعل العنصر يمتد للارتفاع الكامل للصفحة */
    }

    /* تطبيق بعض الأساليب الجمالية لرابط الـ admin */
    .admin-link {
        font-size: 2rem;
        font-weight: bold;
        color: #3f3f3f;
        text-decoration: none;
        background-color: #d9d9d9;
        border: 2px solid #3f3f3f;
        padding: 2px;
        border-radius: 5px;
        transition: all 0.3s ease-in-out;
    }

    /* تطبيق بعض التأثيرات الجمالية عند تحريك الماوس فوق رابط الـ admin */
    .admin-link:hover {
        background-color: #3f3f3f;
        color: #ffffff;
        cursor: pointer;
    }
    </style>
</head>
<body> 
    <a href="http://127.0.0.1:8000/admin" class="admin-link">Page Admin</a>
    <h1>Users List <a href="{{ route('register') }}" class="admin-link">add user </a></h1>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }} </td>
                <td>{{ $user->email }}</td>
                <td>
                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                            <button type="submit" class="btn btn-danger btn-sm">Modifier</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>
