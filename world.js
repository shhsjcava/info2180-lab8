 $(document).ready(function(){

        $("#lookup").click(function(){
          
         if ($('#all').is(':checked')){
                $.ajax({
                type: "GET",
                url:"world.php",
                data:"all=true",
                success: function(data){
                    document.body.innerHTML=data;
                }})}
                
        else{
        $.ajax({
        type: "GET",
        url: 'world.php',                    
        data: "lookup="+ (document.getElementById("term")).value,           
        
        success: function(data)          
        {var reg =/<\/li>/;
        var num=data.search(reg);
        alert(data.slice(20,num));
        //alert(data.text);
        }})} 
 
   
            });
           
 })

  