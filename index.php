<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script>
        function calcular() { 
            // Datos iniciales
            const unAnioLuz = 9.461e15; // en metros
            const distanciaProximaCentauri = 4.0e16; // en metros
            const diametroTierra = 1.3e7; // en metros
            const tamanoReducido = 1e-3; // en metros

            // Cálculo a) Distancia en años luz
            const distanciaAnosLuz = distanciaProximaCentauri / unAnioLuz;

            // Cálculo b) Distancia escalada
            const factorEscala = tamanoReducido / diametroTierra;
            const distanciaEscalada = distanciaProximaCentauri * factorEscala;

            // Mostrar resultados
            const resultadoDiv = document.getElementById("resultadoA");
            resultadoDiv.innerHTML = `
                <p><strong>a)</strong> Distancia en años luz: ${distanciaAnosLuz.toFixed(2)} años luz</p>
                <p><strong>b)</strong> Distancia escalada: ${distanciaEscalada.toFixed(2)} m (${(distanciaEscalada / 1000).toFixed(2)} km)</p>
            `;
        }
    </script>
</head>
<body>
    <section class="wrapper">
        <header>
            <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
        </header>
        <section id="contenedor">
            <section class="problema">
                <h2>Problema: Distancia a Próxima Centauri</h2>
                <p><strong>Descripción:</strong></p>
                <p>Próxima Centauri es la estrella más cercana a la Tierra, a una distancia de <strong>4.0 × 10<sup>16</sup></strong> metros.</p>
                <p><strong>a)</strong> ¿A cuántos años luz equivale esta distancia?</p>
                <p><strong>b)</strong> Si el diámetro de la Tierra se redujera de <strong>1.3 × 10<sup>7</sup></strong> metros al tamaño de una cabeza de alfiler (<strong>1 × 10<sup>-3</sup></strong> metros), ¿a qué distancia estaría esta estrella en la misma escala?</p>
            </section>
            <section class="esquemaProblema">
                <h2>Esquema</h2>
                <center>
                    <img class="imgProblema" src="images/problema.png" alt="Esquema del problema">
                </center>
            </section>
            <section class="formulas">
                <h2>Fórmulas</h2>
                <ul>
                    <li><strong>a)</strong> Distancia en años luz: <em>Distancia (años luz) = Distancia (m) ÷ 1 año luz (m)</em></li>
                    <li><strong>b)</strong> Distancia escalada: <em>Distancia escalada = Distancia original × Factor de escala</em></li>
                </ul>
            </section>
            <section class="datos">
                <h2>Datos:</h2>
                <ul>
                    <li>1 año luz = <strong>9.461 × 10<sup>15</sup></strong> metros</li>
                    <li>Distancia a Próxima Centauri = <strong>4.0 × 10<sup>16</sup></strong> metros</li>
                    <li>Diámetro de la Tierra = <strong>1.3 × 10<sup>7</sup></strong> metros</li>
                    <li>Tamaño reducido = <strong>1 × 10<sup>-3</sup></strong> metros</li>
                </ul>
            </section>
            <section class="calculos">
                <h2>Solución</h2>
                <button onclick="calcular()">Presiona para calcular</button>
            </section>
            <section class="resultado">
                <h2>Resultado:</h2>
                <div id="resultadoA"></div>
            </section>
        </section>
        <footer class="pie">
            Piedra Fiscal Alejandro
        </footer>
    </section>
</body>
</html>
