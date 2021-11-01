<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .intro {
      text-align: center;
    }

    .main {
      display: grid;
      grid-template-columns: repeat(4, auto);
      column-gap: 5px;
    }

    h2 {
      grid-column-start: 1;
      grid-column-end: 5;
      justify-self: center;
    }

    .main div {
      background: gray;
      text-align: center;
      padding: 5em 3em;
    }
  </style>
</head>
<body>
  <div class="intro">
    <h1>This is an introduction</h1>
    <p>Here is an important paragraph that explains the purpose of the website and why you're here!</p>
  </div>
  <div class="main">
    <h2>Some basic categories</h2>
    <div>Fun Stuff</div>
    <div>Serious Stuff</div>
    <div>Exciting Stuff</div>
    <div>Boring Stuff</div>
  </div>

</body>
</html>