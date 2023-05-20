<?php
$imageURL = "https://i.postimg.cc/vZF7cwSb/1679058166152.jpg";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Card</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            height: 100vh;
            display: grid;
            align-items: center;
            justify-items: center;
            background-image: linear-gradient(to top, #96fbc4 0%, #f9f586 100%);
        }
        .card {
            background: #fff;
            border-radius: 4px;
            box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.5);
            max-width: 400px;
            display: flex;
            flex-direction: row;
            border-radius: 25px;
            position: relative;
        }
        .card h2 {
            margin: 0;
            padding: 0 1rem;
        }
        .card .title {
            padding: 1rem;
            text-align: right;
            color: green;
            font-weight: bold;
            font-size: 12px;
        }
        .card .desc {
            padding: 0.5rem 1rem;
            font-size: 12px;
        }
        .card .actions {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            align-items: center;
            padding: 0.5rem 1rem;
        }
        .card svg {
            width: 85px;
            height: 85px;
            margin: 0 auto;
        }
        .img-avatar {
            width: 80px;
            height: 80px;
            position: absolute;
            border-radius: 50%;
            border: 6px solid white;
            background-image: linear-gradient(-60deg, #16a085 0%, #f4d03f 100%);
            top: 15px;
            left: 85px;
        }
        .card-text {
            display: grid;
            grid-template-columns: 1fr 2fr;
        }
        .title-total {
            padding: 2.5em 1.5em 1.5em 1.5em;
        }
        .path {
            fill: white;
        }
        .portada {
            width: 100%;
            height: 100%;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            background-image: url("https://images.pexels.com/photos/3804996/pexels-photo-3804996.jpeg?cs=srgb&dl=pexels-kate-trifo-3804996.jpg&fm=jpg");
            background-position: bottom center;
            background-size: cover;
         }
         .button {
            margin-top: 20px;
            text-align: center;
        }
        .button button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #5aaf70;
            color: #ffffff;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            font-size: 12px;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }
        .button button:hover {
            background-color: #c9c74d;
        }

        .social-media a {
            display: inline-block;
            margin: 0 10px;
            padding: 10px;
            width: 15px;
            height: 15px;
            line-height: 15px;
            text-align: center;
            text-decoration: none;
            border-radius: 25%;
            font-size: 15px;
            color: #ffffff;
            transition: background-color 0.3s ease;
        }
        .social-media a.fa-linkedin {
            background-color: #0077b5;
        }
        .social-media a.fa-instagram {
            background-color: #e4405f;
        }
        .social-media a.fa-github {
            background-color: #333333;
        }
        .social-media a:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }
        .img-avatar img{
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="img-avatar">
            <img src="<?php echo $imageURL; ?>" alt="Profile Picture" style="width: 80px; height: 80px;">
            <svg viewbox="0 0 100 100"></svg>
        </div>
        <div class="card-text">
            <div class="portada"></div>
            <div class="title-total">
                <div class="title">2110817120011</div>
                <h2>Siti Rahmah</h2>
                <div class="desc">
                    Siti Rahmah an IT student with design skills, currently delving into the world of UI/UX design and web development.
                </div>
                <div class="social-media">
                    <a href="https://www.linkedin.com/in/sitirahma/" class="fa fa-linkedin"></a>
                    <a href="https://www.instagram.com/siraarhm/" class="fa fa-instagram"></a>
                    <a href="https://github.com/strahma-ti" class="fa fa-github"></a>
                </div>
                <form action="/home/biodata">
                    <div class="button">
                        <button type="submit">
                            <a> Kenal Lebih Dekat</a>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
