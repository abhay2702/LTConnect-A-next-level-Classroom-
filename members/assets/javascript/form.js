 
           function show()
            {
                var x = document.getElementsByClassName("check");
                var y =document.getElementById("tick");
                var z =document.getElementById("tick2");
                if(x[0].checked)
                 y.type = "text";
                else
                 y.type = "password";
                if(x[1].checked)
                 z.type = "text";
                else
                 z.type = "password";
     
            }
              function changepass()
            {
                document.getElementById("form1").style.display = "none";
                document.getElementById("form3").style.display = "block";
            }
                function register()
            {
                document.getElementById("form1").style.display = "none";
                document.getElementById("form2").style.display = "block";
            }