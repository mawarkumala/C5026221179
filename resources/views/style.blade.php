<html>
    <head>
        <title>CSS</title>
        <style>
            body {
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                color :blueviolet;
            }
            p,div {
                text-align:
                center;
            }
            .salam{
        font-size: larger;
        text-align: right;
        font-weight: bold;
        text-transform: uppercase;
    }
        </style>
    </head>

    <body>
        <!-- Inline CSS , digunakan jika hanya 1 bagian di 1 halaman yg berbeda-->
        Hallo <b style="
        color:red;
        text-decoration: underline;
        text-shadow: 2px 2px 5px rgb(0, 0, 0);
        ">Apa</b> kabar ?
        <!-- Inpage CSS , digunakan jika hanya yg berbeda di satu halaman-->
        <div class="salam">Hallo Apa kabar ?</div>
        <!-- External File, digunakan untuk global 1 situs-->
        <span>Hallo Apa kabar ?</span>
        <p>Hallo Apa kabar ?</p>
    </body>

</html>
