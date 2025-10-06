<!DOCTYPE html>
<html>
<head>
  <style>
    body,
    html {
      margin: 0;
      padding: 0;
      width: 100%;
    }

    .navbar {
      width: 100%;
      background-color:black
    }

    .navbar ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    .navbar li {
      float: left;
    }

    .navbar li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .navbar li a:hover {
      background-color: #111;
    }

    .container {
      min-height: 100vh;
    }

    .containercadastro {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 70px); 
      padding: 20px;
    }

    footer {
      background-color:black;
      color: white;
      padding: 8px 0;
      width: 100%;
      height: 70px;
      position: relative;
      bottom: 0;
      text-align: center;
    }

    .footer-links a {
      color: white;
      text-decoration: none;
      margin-right: 15px;
    }

    .footer-links a:hover {
      text-decoration: underline;
    }

    #imgUser {
      border-radius: 80px;
    }

    @media (max-width: 768px) {
      .navbar ul {
        display: flex;
        flex-direction: column;
      }

      .navbar li {
        float: none;
      }

      .navbar li a {
        text-align: left;
        padding: 10px 15px;
      }

      .form-container {
        padding: 15px;
      }
    }
  </style>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

  <div class="navbar">
    <a href="index.php">
      <img src="images/coragemusuario.jpg" width="50px" id="imgUser">
    </a>
    <ul>
      <li><a class="active" href="index.php">Home</a></li>
      <li><a href="perfil.php">Perfil</a></li>

    </ul>
  </div>
</body>
</html>