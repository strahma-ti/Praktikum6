<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            height: 150vh;
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

        .card-text {
            display: flex;
            flex-direction: column;
            padding: 1.5em;
        }

        .card h1 {
            margin: 0;
            margin-top: 10px;
            padding-bottom: 0.5em;
            color: green;
            font-weight: bold;
            font-size: 18px;
        }

        .card .desc {
            font-size: 15px;
            margin-bottom: 1em;
        }

        .card .desc strong {
            font-weight: bold;
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

        .round {
            border-radius: 5%;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-text">
            <img class="round" src="https://i.postimg.cc/MTPp4nmN/1679058166152.jpg" alt="user" />
            <h1 style="text-align: center">Siti Rahmah</h1>
            <div class="desc">
                Siti Rahmah, an IT student with design skills, currently delving into the world of UI/UX design and web development.
            </div>
            <div class="desc">
                <strong>NIM:</strong> 2110817120011<br>
                <strong>Asal Prodi:</strong> Teknologi Informasi<br>
                <strong>TTL:</strong> Jakarta, 20 Januari 2003<br>
                <strong>Hobi:</strong> Membaca, Desain<br>
                <strong>Skill:</strong> Desain Grafis<br>
            </div>
            <form action="/home/index">
                    <div class="button">
                        <button type="submit">
                            <a>Kembali</a>
                        </button>
                    </div>
                </form>
        </div>
    </div>
</body>
</html>
