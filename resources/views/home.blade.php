<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @auth
    <p>Logged in</p>

    <form action="/logout" method="POST">
        @csrf
        <button>Logout</button>
    </form>

    <div style="border: 3px solid black;">
        <h2>Create a new post</h2>
        <form action="/create-post" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Post title">
            <br>
            <textarea name="body" cols="30" rows="10" placeholder="Content..."></textarea>
            <br>
            <button>Save post</button>
        </form>
    </div>

    <div style="border: 3px solid black;">
        <h2>My posts</h2>
        @foreach($posts as $post)
        <div style="background-color:gray; padding:10px;margin:10px;">
            <h3>{{ $post['title'] }}</h3>
            {{ $post['body'] }}
        </div>
        @endforeach
    </div>

    @else
    <div style="border: 3px solid black;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name">
            <br>
            <input name="email" type="text" placeholder="email">
            <br>
            <input name="password" type="password" placeholder="password">
            <br>
            <button>Register</button>
        </form>
    </div>

    <div style="border: 3px solid black;">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="name">
            <br>
            <input name="loginpassword" type="password" placeholder="password">
            <br>
            <button>Log in</button>
        </form>
    </div>

    @endauth

    
</body>
</html>