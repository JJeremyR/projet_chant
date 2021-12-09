<section class="auto-slider">
    <div id="slider">
        <figure>
            <img src="./ressources/Slide/1.jpg" alt="Image">
            <img src="./ressources/Slide/2.jpg" alt="Image">
            <img src="./ressources/Slide/3.jpg" alt="Image">
            <img src="./ressources/Slide/4.jpg" alt="Image">
            <img src="./ressources/Slide/5.jpg" alt="Image">
            <img src="./ressources/Slide/6.jpg" alt="Image">
            <img src="./ressources/Slide/7.jpg" alt="Image">
            <img src="./ressources/Slide/8.jpg" alt="Image">
            <img src="./ressources/Slide/9.jpg" alt="Image">
            <img src="./ressources/Slide/10.jpg" alt="Image">
            <img src="./ressources/Slide/11.jpg" alt="Image">
            <img src="./ressources/Slide/12.jpg" alt="Image">
            <img src="./ressources/Slide/13.jpg" alt="Image">
            <img src="./ressources/Slide/14.jpg" alt="Image">
            <img src="./ressources/Slide/15.jpg" alt="Image">
            <img src="./ressources/Slide/16.jpg" alt="Image">
            <img src="./ressources/Slide/17.jpg" alt="Image">
            <img src="./ressources/Slide/18.jpg" alt="Image">
            <img src="./ressources/Slide/19.jpg" alt="Image">
            <img src="./ressources/Slide/20.jpg" alt="Image">
            <img src="./ressources/Slide/21.jpg" alt="Image">
            <img src="./ressources/Slide/22.jpg" alt="Image">
            <img src="./ressources/Slide/23.jpg" alt="Image">
            <img src="./ressources/Slide/24.jpg" alt="Image">
            <img src="./ressources/Slide/25.jpg" alt="Image">
            <img src="./ressources/Slide/26.jpg" alt="Image">                         
        </figure>
    </div>
</section>

<style>
.auto-slider
    {
    position: relative;
    box-sizing: content-box;
    display: inline-block;
        /*padding: 10px 10px 20px;*/
    background: #fff;
    max-width: 100%;
    margin: 0 auto;
    overflow: hidden;
    border-radius: 4px;
    box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.4);
    }
div#slider { overflow: hidden; }
div#slider figure img 
    { 
    width: 3.846%; /* nbres images / 100 */
    float: left; 
    height: 300px;
    object-fit: cover; /* contain , cover , fill , none , scale-down */
    }
div#slider figure 
    { 
    position: relative;
    width: 2600%; /* nbres images x 100 */
    margin: 0;
    left: 0;
    text-align: left;
    font-size: 0;
    animation: sliding 156s ease-in-out infinite; /* nbres images x 5s */
    }
@keyframes sliding      /* % = nbres images / 100 */
    {
    from{left: 0%;}
    2%{left: -100%;}        4%{left: -100%;}
    6%{left: -200%;}        8%{left: -200%;}
    10%{left: -300%;}       12%{left: -300%;}
    14%{left: -400%;}       16%{left: -400%;}
    18%{left: -500%;}       20%{left: -500%;}
    22%{left: -600%;}       24%{left: -600%;}
    26%{left: -700%;}       28%{left: -700%;}
    30%{left: -800%;}       32%{left: -800%;}
    34%{left: -900%;}       36%{left: -900%;}
    38%{left: -1000%;}      40%{left: -1000%;}
    42%{left: -1100%;}      44%{left: -1100%;}
    46%{left: -1200%;}      48%{left: -1200%;}
    50%{left: -1300%;}      52%{left: -1300%;}
    54%{left: -1400%;}      56%{left: -1400%;}
    58%{left: -1500%;}      60%{left: -1500%;}
    62%{left: -1600%;}      64%{left: -1600%;}
    66%{left: -1700%;}      68%{left: -1700%;}
    70%{left: -1800%;}      72%{left: -1800%;}
    74%{left: -1900%;}      76%{left: -1900%;}
    78%{left: -2000%;}      80%{left: -2000%;}
    82%{left: -2100%;}      84%{left: -2100%;}
    86%{left: -2200%;}      88%{left: -2200%;}
    90%{left: -2300%;}      92%{left: -2300%;}
    94%{left: -2400%;}      96%{left: -2400%;}
    to{left: -2500%;}
    }           
</style>