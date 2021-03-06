<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce Project</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('Footer') }}

</body>

<style>
    .custom-login {
        height: 780px;
       
    }
    .custom {
        padding-top: 250px;

    }

    .trending-image {
        height: 100px;
        border-radius: 10px;
        margin-top: 10px;
        opacity: 0.9;
    }
    .trending-item {
        float: left;
        width: 20%;
      
    }

    .trending-item h3 {
        margin-left: 15px;
        font-size: 22px;
      
    }

    .trending-item a {
        text-decoration: none;
        color: aliceblue;
      
    }

    .foot {
        clear: both;

      }
      .trending-wrapper {
          margin: 30px;
          margin-left: 60px;
          color: aliceblue;
       
      }

      .detail-img {
          height: 300px;
      }

    }


</style>

</html>