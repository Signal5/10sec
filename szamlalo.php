<!DOCTYPE html>

<html>
<head>
    
    <title>Számláló</title>
    <link rel="stylesheet" type="text/css" href="style1.css"/>
</head>

<body>
       
     <div id="layout">
       <div id="layoutsz">
        <h1>10sec game</h1>
        Ahogy a számláló 4 másodpercnél megáll, nyomj a
        gomb-ra mikor azt gondolod, hogy eljutot 0-ig!
          <div id="formnak">
                <form name="szamlaloform">
                   <input type="button" name="szamlalo1" value="onclick=(myFunction()">
                   <p style="margin-left: -30px; padding-top: 7px;">A különbség: 
                </form>
          </div>
       </div>
     </div>

     <script language="javascript">
<!--
        
           
        var ertek=10
        var jelenlegiMP=document.szamlaloform.szamlalo1.value=ertek

           function visszaszamolas1(){
            
           if (jelenlegiMP!=4)
            {   
              jelenlegiMP-=0.01
              poz=(jelenlegiMP+"").indexOf(".")
              if (poz==4)
                 jelenlegiMP=jelenlegiMP + ".00"
              else
                 jelenlegiMP=(jelenlegiMP+"").substr(0,poz+3)
                 document.szamlaloform.szamlalo1.value=jelenlegiMP
            }

            setTimeout("visszaszamolas1()",10)
            }
            visszaszamolas1()
           document.szamlaloform.szamlalo1.onclick = function(){
              alert("Mûködik");
               }
            
          
       
-->
      </script>
     

</body>
</html>


