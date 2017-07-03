<?php
/* @var $this yii\web\View */ 
$this->title = 'Командный зачет';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
function appendText(viewport,pos,team,score){
    var insertRow = document.createElement("tr");
    var insertPos = document.createElement("td");
    var insertTeam = document.createElement("td");
    var insertScore = document.createElement("td");

    $(insertPos).addClass("position");
    $(insertPos).addClass("text-right");
    insertPos.innerText=pos;

    $(insertTeam).addClass("team");
    $(insertTeam).addClass("text-center");
    insertTeam.innerText=team;

    $(insertScore).addClass("score");
    $(insertScore).addClass("text-center");
    insertScore.innerText=score;

    $(insertRow).append(insertPos);
    $(insertRow).append(insertTeam);
    $(insertRow).append(insertScore);

    $(viewport).append(insertRow);
}
function loadData(){
    	$.ajax({
		type:"POST",
		url:"http://ds.citrus24.com/view/index",//заменить при переносе на сервер
		dataType:"json",
        success:function(data){
            const viewport = "#t1Tbody";
            var counter = 0
            var tableCounter = 13;
            $(viewport).empty();
            var pos = 3;
            // $(".imgfirst").attr('src',src1);
            // $(".imgsecond").attr('src',src2);
            // $(".imgthird").attr('src',src3);
            for(var i = 3; i<data.length; i++){  
            var tableCounter = 8;
                if(counter<=tableCounter){
                appendText(viewport,pos,data[i].group,data[i].score);
                counter++;
                pos++;          
                }
            }
        }
    });
}

$(document).ready(function(){
    loadData();
$("body").click(function(){
    $("#w0").fadeIn(2000);
})
 $("#w0").mouseleave(function(){
     $("#w0").fadeOut(2000);
 });
 $("#w0").fadeOut(2000);
 $(".footer").fadeOut(2000);
})
</script>
<style>
body{
    background-image: url('http://ds.citrus24.com/app/images/command.png');
    /*background-image: url('http://yii.local/app/images/command.png');*/
    background-size: 100% 100%;
    background-repeat: no-repeat;
}
.table {
    border-bottom:0px !important;
}
.table th, .table td {
    border: 1px !important;
}
.fixed-table-container {
    border:0px !important;
}
tr{

}
th{
    font-size:25px;
}
td{
    font-size:20px;
}
.row{
    margin-top:22%;
    margin-left:51%;
    margin-right:6%;
}
.appendTexttbl{
    padding-left:5vh;
    padding-right:3%;
    width:34% !important;
    margin-left:3vh !important;
}
.place{
    width:100%;
    height:100%;
}
.imgfirst{
    position:absolute;
    left:19.5vw;
    bottom:38vh;
    width:300px;
    height:300px;
}
.imgsecond{
    position:absolute;
    left:8vw;
    bottom:26vh;
    width:300px;
    height:300px;
}
.imgthird{
    position:absolute;
    left:31vw;
    bottom:32vh;
    width:300px;
    height:300px;
}

</style>
<body>
<div class="container-fluid">
<div class="row">
   <div class="col-xs-12 offset3 tbl1">
         <table id="t1" class="table borderless">
            <tbody id="t1Tbody">
               <tr>
                  <td class="position text-center">Two</td>
                  <td class="name text-center">Two</td>
                  <td class="totalscore text-center">Two</td>
                  </tr>
            </tbody>
         </table>
    </div>
</div>
</div>>
</div>
<div class="imgfirst">
<img src="http://ds.citrus24.com/app/images/tiger.png" alt="Первое место" class="img-rounded place">
</div>
<div class="imgsecond">
<img src="http://ds.citrus24.com/app/images/zebra.png" alt="Второе место" class="img-rounded place">
</div>
<div class="imgthird">
<img src="http://ds.citrus24.com/app/images/elephant.png" alt="Третье место" class="img-rounded place">
</div>
</body>