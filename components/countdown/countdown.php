<section class="dasso">
    <div class="encart">
        <h1 class="headline" id="headline">Cloture des inscriptions dans:</h1>
        <div id="countdown">
            <ul>
                <li class="li"><span class="span" id="days"></span>jours</li>
                <li class="li"><span class="span" id="hours"></span>Heures</li>
                <li class="li"><span class="span" id="minutes"></span>Minutes</li>
                <li class="li"><span class="span" id="seconds"></span>Secondes</li>
            </ul>
        </div>
    </div>
    <!--<script type="text/javascript" src="./components/countdown/countdown.js"></script>-->
</section>

<style>
.dasso 
    {
    width: 90%;
    margin-top: 2%;
    margin-bottom: auto;
    margin-left: auto;
    margin-right: auto;
    padding: 10px;
    box-sizing: content-box;
    color: black;
    background: #fff;
    border-radius: 4px;
    box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.4);
    text-align: center; 
    }
.encart 
    {
    color: #333;
    margin: 0 auto;
    text-align: center;
    } 
.headline 
    {
    font-weight: normal;
    letter-spacing: .125rem;
    text-transform: uppercase;
    }
.li 
    {
    display: inline-block;
    font-size: 1.5em;
    list-style-type: none;
    padding: 1em;
    text-transform: uppercase;
    } 
.span 
    {
    display: block;
    font-size: 4.5rem;
    }
</style>
<script type="text/javascript" src="components/countdown/countdown.js"></script>
<!--
<script>
(function () 
    {
    const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;

    let today = new Date(),
        dd = String(today.getDate()).padStart(2, "0"),
        mm = String(today.getMonth() + 1).padStart(2, "0"),
        yyyy = today.getFullYear(),
        dayMonth = "12/25/",
        Dday = dayMonth + yyyy;
    
    today = mm + "/" + dd + "/" + yyyy;
    
    const countDown = new Date(Dday).getTime(),
    x = setInterval(function() 
            {    
            const now = new Date().getTime(),
                  distance = countDown - now;
  
            document.getElementById("days").innerText = Math.floor(distance / (day)),
            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

            if (distance < 0) 
                {
                document.getElementById("headline").innerText = "Les inscriptions sont maintenant closes!";
                document.getElementById("countdown").style.display = "none";
                document.getElementById("content").style.display = "block";
                clearInterval(x);
                }
            //seconds
            }, 0)
    }
)();
</script>
-->