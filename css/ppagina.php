<?php 
    header('Content-type: text/css; Charset: UTF-8');
?>

.sidebar{
    display: flex;
    position: fixed;
    padding: 20px 10px;
    top: 0;
    left: 0;
    width: 50px;
    height: 100vh;

}
.menubotao{
    background-color: transparent;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 100%;
    height: 30px;
    width: 30px;
    transition: 200ms;
}
.menubotao:hover{
    background-color: #808080;
}
.menu{
    position: relative;
    background-color: #fff;
    display: block;
    width: 4px;
    height: 4px;
    border-radius: 100%;
}
.menu::before{
    position: absolute;
    top: -8px;
    background-color: #fff;
    content: '';
    display: block;
    width: 4px;
    height: 4px;
    border-radius: 100%;
}
.menu::after{
    position: absolute;
    top: 8px;
    background-color: #fff;
    content: '';
    display: block;
    width: 4px;
    height: 4px;
    border-radius: 100%;
}

/*topbar*/
.topbar{
    background-color: #1b1b1b;
    width: calc(100% - 100px);
    display: flex;

    position: fixed;
    top: 0;
    left: 100px;
    padding: 10px;

}
.formulario{
    width: calc(100% - 90px);
    display: flex;
    align-items: center;
    justify-content: space-between;
}
form{
    display: flex;
}
form #campo{
    background-color: #252525;
    padding: 5px 10px;
    font-size: 1.1em;
    border: solid 1px #808080;
    border-radius: 20px 0 0 20px;
}
form #botao{
    font-size: 0.9em;
    background-color: #808080;
    border: solid 1px #808080;
    border-radius: 0 20px 20px 0;
    cursor: pointer;

}
.admin{
    padding: 5px 10px;
    background-color: #800080;
    font-size: 1.1em;
    border-radius: 20px;
}
/*topbar*/

/*principal content*/
.principal{
    width: calc(100%-100px);
    height: calc(100%-70px);
    display: flex;
    flex-direction: column;
    align-items: center; 
    flex-wrap: wrap;
    gap: 20px;
    position: absolute;
    top: 80px;
    left: 100px;
    padding: 10px;
    z-index: -1;
}
.caixa{
    background-color: #252525;
    border-radius: 7px;
    font-size: 1.2em;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
    width: 180px;
    height: 230px;
}
.cartao{
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: red;
    width: 100%;
    height: 170px;
}
.disco{
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
    width: 160px;
    height: 160px;
    border-radius: 100%;
}
.discoint{
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: red;
    width: 120px;
    height: 120px;
    border-radius: 100%;
}
.pontoin{
    background-color: #1b1b1b;
    width: 40px;
    height: 40px;
    border-radius: 100%;
}
.play, .down{
    position: relative;
    position: absolute;
    bottom: -10px;
    background-color: #808080;
    border: 1px solid #808080;
    border-radius: 100%;
    width: 45px;
    height: 45px;
    transition: 200ms;
}
.play:hover,
.down:hover{
    background-color: transparent;
}
.play{
    right: 60px;

}
.play-btn{
    position: absolute;
    left: 17px;
    top: 5px;
    border-left: 17px solid #fff;
    border-top: 17px solid transparent;
    border-right: 17px solid transparent;
    border-bottom: 17px solid transparent;
}
.down{
    right: 3px;
}
.down-btn{
    position: absolute;
    left: 9px;
    bottom: 15px;
    border: solid 2px #fff;
    width: 1px;
    height: 1px;
    padding: 10px;
    border-width: 0 7px 7px 0;
    transform: rotate(45deg);
    
}
/*principal content*/

