<?php
/* @var $this yii\web\View */ 
$this->title = 'Командный зачет';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
function appendText(table,pos,team,score){
    var insertRow = document.createElement("tr");
    var insertPos = document.createElement("td");
    var insertTeam = document.createElement("td");
    var insertScore = document.createElement("td");

    $(insertPos).addClass("position");
    $(insertPos).addClass("text-center");
    insertPos.innerText=pos;

    $(insertTeam).addClass("team");
    $(insertTeam).addClass("text-center");
    insertTeam.innerText=team;

    $(insertScore).addClass("score");
    $(insertScore).addClass("text-center");
    insertScore.innerText=score;

    $(insertRow).append(insertPos);
    $(insertRow).append(insertName);
    $(insertRow).append(insertTeam);
    $(insertRow).append(insertScore);

    $(table).append(insertRow);
}
function loadData(){
    	$.ajax({
		type:"POST",
		url:"",//заменить при переносе на сервер
		dataType:"json",
        success:function(data){
            const table1 = "#t1Tbody";
            const table2 = "#t2Tbody";
            $(table1).empty();
            $(table2).empty();
            var position = 1;
            var tableCounter = 0;
            var maxForTable = data.length/2;
            for(var i = 0; i<data.length; i++){
                if(tableCounter>=12){
                    break;
                }else{
                    if(tableCounter<=maxForTable){
                        appendText(table1,position,data[i].group,data[i].money);
                        position
                        tableCounter++;
                    }else{
                        appendText(table2,position,data[i].group,data[i].money)
                        position++;
                        tableCounter++;
                    }
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
    background-image: url('http://yii.local/app/images/command.png');
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
    font-size:23px;
}
.container{
    margin-right:5vh !important;
    width:100% !important;
}
.row{
    margin-top:17vw;
    width:100% !important;
}
#tbl{
    padding-left:4.5vh;
    width:43% !important;
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
<div class="row">
    <div class="col-lg-6">
    </div>
   <div id="tbl"class="col-lg-6">
      <div>
         <table id="t1" class="table borderless">
            <tbody id="t1Tbody">
               <tr>
                  <td class="position text-center">Two</td>
                  <td class="team text-center">Two</td>
                  <td class="totalscore text-center">Two</td>
               </tr>
                              <tr>
                  <td class="position text-center">Two</td>
                  <td class="team text-center">Two</td>
                  <td class="totalscore text-center">Two</td>
               </tr>
                              <tr>
                  <td class="position text-center">Two</td>
                  <td class="team text-center">Two</td>
                  <td class="totalscore text-center">Two</td>
               </tr>
            </tbody>
         </table>
        </div>
   </div>
</div>
<div class="imgfirst">
<img src="http://yii.local/app/images/tiger.png" alt="Первое место" class="img-rounded place">
</div>
<div class="imgsecond">
<img src="http://yii.local/app/images/zebra.png" alt="Второе место" class="img-rounded place">
</div>
<div class="imgthird">
<img src="http://yii.local/app/images/elephant.png" alt="Третье место" class="img-rounded place">
</div>
</body>