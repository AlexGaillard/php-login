<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .main {
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
      width: 20%;
      margin: auto;
    }

    input {
      margin-bottom: 10px;
      padding: 5px;
    }

    button {
      width: 33%;
      margin: auto;
      padding: 10px;
      background: rgba(0,0,0,0);
      border: 3px solid black;
      font-weight: bold;
      cursor: pointer;
      transition: .5s;
    }

    button:hover {
      background: black;
      color: white;
    }
  </style>
</head>
<body>
  <div class=main>
    <h1>Sign Up</h1>
    <form action="">
      <input name="full-name" type="text" placeholder="Full name..." />
      <input name="email" type="email" placeholder="Email address..." />
      <input name="username" type="text" placeholder="Username..." />
      <input name="password" type="text" placeholder="Password..." />
      <input name="password-repeat" type="text" placeholder="Repeat password..." />
      <button type="submit">Sign Up</button>
    </form>
  </div>
</body>
</html>