<?php
use yii\helpers\Html;
?>


<div class="body-content row d-flex justify-content-center"">
    <div class="row">
        <!-- lista bootstrap -->
        <ul class="list-group">
            <li class="list-group-item">
                <?= Html::encode($mensagem) ?>
            </li>
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    </div>

<style>
    

    .cronometro {
        display: flex;
        flex-direction: column;
        align-items: center;
        color: #17d4fe;
        font-size: 20px;
        font-family: monospace;
        letter-spacing: 7px;
    }

    *, *::after, *::before {
        box-sizing: border-box;
        font-family: Gotham Rounded, sans-serif;
    }


    .clock{
        width: 300px;
        height: 300px;
        background-color: whitesmoke;
        border-radius: 50%;
        border: 4px solid #17d4fe;
        position: relative;
    }    

    .clock .number{ 
        --rotation: 0;
        position: absolute;
        width: 100%;
        height: 100%;
        text-align: center;
        transform: rotate(var(--rotation));
        font-size: 1rem;
        color: #1868aa;
    }

    .clock .n1{ --rotation: 30deg; }
    .clock .n2{ --rotation: 60deg; }
    .clock .n3{ --rotation: 90deg; }
    .clock .n4{ --rotation: 120deg; }
    .clock .n5{ --rotation: 150deg; }
    .clock .n6{ --rotation: 180deg; }
    .clock .n7{ --rotation: 210deg; }
    .clock .n8{ --rotation: 240deg; }
    .clock .n9{ --rotation: 270deg; }
    .clock .n10{ --rotation: 300deg; }
    .clock .n11{ --rotation: 330deg; }

    .clock .time {
        --rotation: 0;
        position: absolute;
        bottom: 50%;
        left: 50%;
        border: 1px solid white;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        transform-origin: bottom;
        z-index: 10;
        transform: translateX(-50%) rotate(calc(var(--rotation) * 1deg));
    }

    .clock::after{
        content: '';
        position: absolute;
        background-color: black;
        z-index: 11;
        width: 15px;
        height: 15px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
    }

    .clock .time.second{
        width: 3px;
        height: 45%;
        background-color: red;
    }

    .clock .time.minute{
        width: 7px;
        height: 40%;
        background-color: black;
    }

    .clock .time.hour{
        width: 10px;
        height: 35%;
        background-color: black;
    }
</style>

<h1 style="color: white;"> Relógio Online</h1>   

<div class="cronometro">
    <h1 id="cronometro">00:00:00</h1>



<div class="relogio-face-digital d-flex justify-content-center">
    <div class="clock">
        <div class="time hour" data-hour-hand></div>
        <div class="time minute" data-minute-hand></div>
        <div class="time second" data-second-hand></div>
        <div class="number n1">1</div>
        <div class="number n2">2</div>
        <div class="number n3">3</div>
        <div class="number n4">4</div>
        <div class="number n5">5</div>
        <div class="number n6">6</div>
        <div class="number n7">7</div>
        <div class="number n8">8</div>
        <div class="number n9">9</div>
        <div class="number n10">10</div>
        <div class="number n11">11</div>
        <div class="number n12">12</div>
    </div>
</div>
    

<script>
    // Declaração das variáveis do relógio
    const hour = document.querySelector('[data-hour-hand]');
    const min = document.querySelector('[data-minute-hand]');
    const sec = document.querySelector('[data-second-hand]');


    //Função que gerencia a rotação do relógio
    function setRotation(element, rotationRatio) {
        //Gira o ponteiro (element) do relógio segundo o grau (rotationRatio) recebido
        element.style.setProperty('--rotation', rotationRatio * 360);

    }

    //Função que faz o relógio funcionar
    function timer () {
        //Pega o timestamp atual
        let dataAtual = new Date()

        //Salva os dias, horas, minutos e segundos
        let horas = dataAtual.getHours();
        let minutos = dataAtual.getMinutes(2);
        let segundos = dataAtual.getSeconds(2);

        //Verifica se precisa de um '0' antes do dia, hora, minuto ou segundo
        horas < 10 && horas >= 0 ? horas = "0" + horas : horas;
        minutos < 10 && minutos >= 0 ? minutos = "0" + minutos : minutos;
        segundos < 10 && segundos >= 0 ? segundos = "0" + segundos : segundos;

        //Altera os números do cronômetro
        document.querySelector("#cronometro").innerHTML = `${horas}:${minutos}:${segundos}`;

        //Pega os graus do ângulo dos ponteiros
        const seconds =  segundos/ 60;
        const minutes = minutos / 60;
        const hours = horas / 12;
        
        //Chama a função de rotação do cronômetro de acordo com o tempo restante
        setRotation(sec, seconds);
        setRotation(min, minutes);
        setRotation(hour, hours);
        
    }

    //Função que inicia o cronômetro e salva a data no localStorage
    function start () {
        //Inicia o cronômetro cronômetro
        setInterval(timer, 1000);
    }

    start();
</script>

</div>
</div>