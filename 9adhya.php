<!DOCTYPE html>
<html lang="fr">
<?php
include('head.php');
?>
<body id="page-top">
   
<?php
include('nav.php');
?>
  <style>
      .form{
		max-width: 400px;
		background: rgba(0, 0, 0, .57);
		border-radius: 20px;
		box-sizing: border-box ;
		padding: 40px;
		margin: auto;
		color: white;
		margin-top: 100p	x;	
		margin-bottom: 50px;
}
input[type=text],input[type=password]{
	width: 100%;
	border-radius: 10px;
	box-sizing: border-box;
	background:black;
	border: none;
	font-weight: 500;
	font-size: 16px;
	border-bottom: 1px solid white;
	margin: 6px;
	color: white;
	padding: 12px 5px;
}
textarea{
    width: 80%;
    border-radius: 10px;
	box-sizing: border-box;
	background:white;
	border: none;
	font-weight: 500;
	font-size: 16px;
	border-bottom: 1px solid white;
	margin: 20px;
	color: black;
	padding: 12px 5px;
}
input[type=email]{
	width: 100%;
	border-radius: 10px;
	box-sizing: border-box;
	background:black;
	border: none;
	font-weight: 500;
	font-size: 16px;
	border-bottom: 1px solid white;
	margin: 6px;
	color: white;
	padding: 12px 5px;
}
input[type=radio]{
	padding: 12px 5px;
	margin: 5px;
	margin-top: 15px;
	color: white;
	background-color: black;
}

button{
	cursor: pointer;
	width: 200px;
	margin-top: 25px;
	margin-left: 60px;
	border-radius: 18px;
	font-size: 25px;
	background-color: orange;
	border:none;
	padding: 5px;
	transition-duration:0.4s;
}
button:hover{
	background-color: black;
	color: orange;
	border: 1px solid orange;
}
.rad{
	font-weight: 400;
	text-align: center;
	margin: 15px;
	margin-top: 20px;
	color: white;
}
select{
	width: 100%;
	border-radius: 10px;
	box-sizing: border-box;
	border: none;
	outline: none;
	font-weight: 100;
	font-size: 16px;
	border-bottom: 1px solid white;
	margin: 5px;
	color: white;
	background-color: black;
	padding:12px 5px;
}
.selq{
	width: 100%;
	border-radius: 10px;
	box-sizing: border-box;
	background:black;
	border: none;
	font-weight: 500;
	font-size: 16px;
	outline: none;
	border-bottom: 1px solid white;
	margin: 6px;
	color: gray;
	padding: 12px 5px;	
}</style>
 <section class="download bg-primary pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="section-heading text-center mb-5">
                     
                        <h2>Rahma 2 </h2>
<!--                       
           <select id="wilaya">
                                        <optgroup label="zunis">
		<option value>		تونس                          </option>
		<option>		المرسى                        </option>
        <optgroup label="ariana">
		<option>		 وقلعة الأندلس                 </option>
		
        <optgroup label="ben arous">
		<option>		بن عروس،                      </option>
		<option>		 والمروج                    </option>
		<option>		 والمحمدية،                   </option>
		<option>		ومقرين                        </option>
		<option>		ورادس                         </option>
        <optgroup label="manouba">
		<option>		منوبة،                        </option>

		<option>		، والبساتين                   </option>
		<optgroup label="zaghouan">
		<option>		زغوان،                        </option>
		<option>		 والفحص،                      </option>
		<option>		والزريبة                      </option>
	
    <optgroup label="kairaouan">

		<option>		ملقى التطور،                  </option>
		<option>		 وبلطة بوعوان، و              </option>
		<option>		الخمايرية.                    </option>
        <optgroup label="sidi bouzid">
		<option>		السلوقية، و                   </option>
		<option>		وشتاتة الجميلة.               </option>
		
		<optgroup label="gabes">
		<option>		برقو (الربع)،                 </option>
		<option>		 مكثر.                        </option>
<optgroup label="monastir">
		<option>                                      </option>
		<option>		الجريصة                       </option>
		<option>		طبلبة                         </option>
		<option>		زرمدين                        </option>
		</select>
        -->

        <form action="./send/1.php" method="Post" >
			    <input type="text"  name="cin"  placeholder="cin" required=""><br>
				<input type="text"  name="name"  placeholder="name" required=""><br>
				<input type="text"  name="tel"  placeholder="phone" maxlength="8"><br>
				
    <textarea placeholder="vuillez remplir cette formulaire" style="padding:55px" name="comment"></textarea>
    <input type="submit" value="Envoyer"/>
    <input type="hidden" name="id_billet" value="" /><br><br>
                    </form>
                  
                   <script>
                       document.getElementById('wilaya').addEventListener('click',()=>{
                        let kadhya=document.querySelectorAll('textarea');
                        for(let i=0;i<kadhya.length;i++){
                        kadhya[i].style.display="block";
                    }
                       });
                       </script>
                    </div>
                    <div id="gallery" class="gallery">
            
            </div>
                    

</section>