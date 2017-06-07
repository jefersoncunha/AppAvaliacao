<html lang="pt-br">
    <head>
        <title>Form de exemplo com radios</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="form-action.php" method="post">
            <p>
                <input type="radio" name="band-rock" value="beatles"/>The Beatles
                <input type="radio" name="band-rock" value="led-zeppelin"/> Led Zeppelin
                <input type="radio" name="band-rock" value="pink-floyd"/>Pink Floy
            </p>
            <p>
                <input type="button" id="btnSubmit" value="Submit me!" />
                <input type="button" id="btnLoad" value="Load!" />
            </p>
        </form>
        <script type="text/javascript" >

            document.getElementById("btnSubmit").onclick = function () {
                var radios = document.getElementsByName("band-rock");
                for (var i = 0; i < radios.length; i++) {
                    if (radios[i].checked) {
                        console.log("Escolheu: " + radios[i].value);
                    }
                }
            };

            /**
             * Botão Load
             */
            document.getElementById("btnLoad").onclick = function () {
                var radios = document.getElementsByName("band-rock");

                for (var i = 0; i < radios.length; i++) {
                    if (radios[i].value === "led-zeppelin") {
                        radios[i].checked = true;
                    }
                }
            };
        </script>
    </body>
</html>