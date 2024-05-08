<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #tooltip{
    position: relative;
    cursor: pointer;
    border-bottom: 2px dotted;
    padding: 7px;
    font-size: 25px;
    font-weight: bold;
    font-family:sans-serif;

}
    #tooltipText {
    position: absolute;
    left: 9.9%;
    top: 0;
    transform: translateX(-50%);
    background-color: #000;
    color: #fff;
    white-space: nowrap;
    padding: 10px, 15px;
    border-radius: 7px;
    visibility: hidden;
    opacity: 0;
    transition: opacity 0.5s ease;
}
#tooltipText::before{
    content: "";
    position: absolute;
    left: 50%;
    top: 100%;
    transform: translateX(-50%);
    border: 15px solid;
    border-color: #000 #0000 #0000 #0000;
}
#tooltip:hover{
    top:-130%;
    opacity: 1;
}
</style>



<div id="tooltip">
    <span id="tooltipText">Tooltip Text</span>
    <span>Hover Me</span>
</div>