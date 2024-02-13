<link rel="apple-touch-icon" sizes="57x57" href="/noppa/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/noppa/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/noppa/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/noppa/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/noppa/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/noppa/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/noppa/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/noppa/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/noppa/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/noppa/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/noppa/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/noppa/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/noppa/favicon-16x16.png">
<link rel="manifest" href="/noppa/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/noppa/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<title>Heitä noppaa</title>
<meta name="viewport" content="width=device-width, initial-scale=1">



<meta property="og:title" content="Heitä noppaa" />
<meta property="og:description" content="Tällä sivulla voit heittää virtuaalista noppaa ja valita sen nopeuden" />
<meta property="og:url" content="https://jaakkotalvitie.fi/noppa" />
<meta property="og:image" content="https://jaakkotalvitie.fi/noppa/favicon-96x96.png" />



<style>
* { box-sizing: border-box; }

body { font-family: sans-serif; }

.scene {
  width: 200px;
  height: 200px;
  /*border: 1px solid #CCC;*/
  margin: 80px;
  perspective: 400px;
}

.cube {
   left:calc(50% - 100px);
   top:50px;
position: absolute;
  width: 200px;
  height: 200px;
  transform-style: preserve-3d;
  transform: translateZ(-100px);
  transition: transform 0.5s;
}

.cube.show-front  { transform: translateZ(-100px) rotateY(   0deg); }
.cube.show-right  { transform: translateZ(-100px) rotateY( -90deg); }
.cube.show-back   { transform: translateZ(-100px) rotateY(-180deg); }
.cube.show-left   { transform: translateZ(-100px) rotateY(  90deg); }
.cube.show-top    { transform: translateZ(-100px) rotateX( -90deg); }
.cube.show-bottom { transform: translateZ(-100px) rotateX(  90deg); }

.cube__face {
  position: absolute;
  width: 200px;
  height: 200px;
  border: 3px solid black;
  border-radius:20px;
  line-height: 200px;
  font-size: 40px;
  font-weight: bold;
  color: black;
  text-align: center;
}
.noppa_icon_left
{
    width:100%;
    height:100%;
    position:absolute;
    top:10%;
    left:10%;
}

.noppa_element_left_1
{
    position:absolute;
    top:16%;
    left:16%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}

.noppa_element_left_2
{
    position:absolute;
    top:56%;
    left:56%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}


.noppa_icon_bottom
{
    width:100%;
    height:100%;
    position:absolute;
    top:10%;
    left:10%;
}

.noppa_element_bottom_1
{
    position:absolute;
    top:16%;
    left:16%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}

.noppa_element_bottom_2
{
    position:absolute;
    top:35%;
    left:35%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}

.noppa_element_bottom_3
{
    position:absolute;
    top:56%;
    left:56%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}


.noppa_icon_front
{
    width:100%;
    height:100%;
    position:absolute;
    top:10%;
    left:10%;
}

.noppa_element_front_1
{
    position:absolute;
    top:35%;
    left:35%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}


.noppa_icon_back
{
    width:100%;
    height:100%;
    position:absolute;
    top:10%;
    left:10%;
}

.noppa_element_back_1
{
    position:absolute;
    top:16%;
    left:16%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}
.noppa_element_back_2
{
    position:absolute;
    top:56%;
    left:16%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}
.noppa_element_back_3
{
    position:absolute;
    top:16%;
    left:56%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}
.noppa_element_back_4
{
    position:absolute;
    top:56%;
    left:56%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}

.noppa_element_back_5
{
    position:absolute;
    top:35%;
    left:56%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}
.noppa_element_back_6
{
    position:absolute;
    top:35%;
    left:16%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}


.noppa_icon_top
{
    width:100%;
    height:100%;
    position:absolute;
    top:10%;
    left:10%;
}

.noppa_element_top_1
{
    position:absolute;
    top:16%;
    left:16%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}
.noppa_element_top_2
{
    position:absolute;
    top:56%;
    left:16%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}
.noppa_element_top_3
{
    position:absolute;
    top:16%;
    left:56%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}
.noppa_element_top_4
{
    position:absolute;
    top:56%;
    left:56%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}

.noppa_icon_right
{
    width:100%;
    height:100%;
    position:absolute;
    top:10%;
    left:10%;
}

.noppa_element_right_1
{
    position:absolute;
    top:16%;
    left:16%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}
.noppa_element_right_2
{
    position:absolute;
    top:56%;
    left:16%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}
.noppa_element_right_3
{
    position:absolute;
    top:35%;
    left:35%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}

.noppa_element_right_4
{
    position:absolute;
    top:16%;
    left:56%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}
.noppa_element_right_5
{
    position:absolute;
    top:56%;
    left:56%;
    width:10%;
    height:10%;
    background-color:black;
    border-radius:10px;
}

.cube__face--front  { background: yellow; }
.cube__face--right  { background: yellow;  }
.cube__face--back   { background: yellow;  }
.cube__face--left   { background: yellow;  }
.cube__face--top    { background: yellow;  }
.cube__face--bottom { background: yellow;  }

.cube__face--front  { transform: rotateY(  0deg) translateZ(100px); }
.cube__face--right  { transform: rotateY( 90deg) translateZ(100px); }
.cube__face--back   { transform: rotateY(180deg) translateZ(100px); }
.cube__face--left   { transform: rotateY(-90deg) translateZ(100px); }
.cube__face--top    { transform: rotateX( 90deg) translateZ(100px); }
.cube__face--bottom { transform: rotateX(-90deg) translateZ(100px); }

label { margin-right: 10px; }
</style>
<center><h1>Noppa / Dice</h1><span id=run>Valmiina heittämään noppaa.</span></center>
<div class="scene">
  <div class="cube" id=noppa>
    <div class="cube__face cube__face--front">
        <div class=noppa_icon_front>
            <div class=noppa_element_front_1>
            </div>
        </div>
    </div>
    
    <div class="cube__face cube__face--back">
        <div class=noppa_icon_back>
            <div class=noppa_element_back_1>
            </div>
            <div class=noppa_element_back_2>
            </div>
            <div class=noppa_element_back_3>
            </div>
            <div class=noppa_element_back_4>
            </div>
            <div class=noppa_element_back_5>
            </div>
            <div class=noppa_element_back_6>
            </div>
        </div>
    </div>
    <div class="cube__face cube__face--right">
        <div class=noppa_icon_right>
            <div class=noppa_element_right_1>
            </div>
            <div class=noppa_element_right_2>
            </div>
            <div class=noppa_element_right_3>
            </div>
            <div class=noppa_element_right_4>
            </div>
            <div class=noppa_element_right_5>
            </div>
        </div>
    </div>
    <div class="cube__face cube__face--left">
        <div class=noppa_icon_left>
            <div class=noppa_element_left_1>
            </div>
            <div class=noppa_element_left_2>
            </div>
        </div>
    </div>
    
    <div class="cube__face cube__face--top">
        <div class=noppa_icon_top>
            <div class=noppa_element_top_1>
            </div>
            <div class=noppa_element_top_2>
            </div>
            <div class=noppa_element_top_3>
            </div>
            <div class=noppa_element_top_4>
            </div>
        </div>
    </div>
        
    <div class="cube__face cube__face--bottom">
        <div class=noppa_icon_bottom>
            <div class=noppa_element_bottom_1>
            </div>
            <div class=noppa_element_bottom_2>
            </div>
            <div class=noppa_element_bottom_3>
            </div>
        </div>
    </div>
  </div>
</div><br><br>

<center>
Montako kertaa ravistetaan?<br>
1krt <input onchange=updvalue() id=mont value=10 type=range min=1 max=100 > 100krt
<br> <span id=kpl>3 kertaa.</span><br><br>

Heiton viive<br>
1ms <input onchange=updvalue2() id=kauan value=500 type=range min=1 max=1000 > 1000ms<br>
<br> <span id=viive>Heitto kestää 500ms.</span><br><br><br>
<button onclick="arvo()" style="padding:10px; border:solid black 2px; background-color:yellow; font-size:120%;">Heitä noppaa</button></center>
<script>
function updvalue2()
{
    document.getElementById("viive").innerHTML="Heitto kestää "+document.getElementById("kauan").value + "ms.";
    let val = parseInt(document.getElementById("kauan").value)/1000;
    console.log(val + "s");
    document.getElementById("noppa").style.transition="transform "+val+"s";
}
function updvalue()
{
    document.getElementById("kpl").innerHTML=document.getElementById("mont").value + " kertaa.";
}

let toistot = 0;
let arvottu=0;
function arvo()
{
    toistot = parseInt(document.getElementById("mont").value);
    arvonta_loop();
    document.getElementById("run").innerHTML="Heitetään 1/"+document.getElementById("mont").value;
}

function arvonta_loop()
{
    if(toistot>0)
    {
        let uusarvottu = parseInt(((Math.floor(Math.random() * 11))/10)*6);
        if(uusarvottu==arvottu)
        {
            arvonta_loop();
        }
            else
        {
            arvottu=uusarvottu;
            
            document.getElementById("run").innerHTML="Heitetään "+((parseInt(document.getElementById("mont").value)-toistot)+1)+"/"+document.getElementById("mont").value;
            
            changeSide(arvottu);
            toistot-=1;
            setTimeout(arvonta_loop,parseInt(document.getElementById("kauan").value));
        }
    }
        else
    {
        document.getElementById("run").innerHTML="Nopan heitto suoritettu.";
    }
}

var cube = document.querySelector('.cube');
var currentClass = '';

function changeSide(arvo) 
{
    let value="front";
    if(arvo===3)
    {
        value="bottom";
    }
    if(arvo===4)
    {
        value="top";
    }
     if(arvo===2)
    {
        value="left";
    }
     if(arvo===5)
    {
        value="right";
    }
     if(arvo===6)
    {
        value="back";
    }
    let showClass = 'show-' + value;
    if(currentClass) 
    {
        cube.classList.remove( currentClass );
    }
    cube.classList.add( showClass );
    currentClass = showClass;
}

changeSide(1);
</script>