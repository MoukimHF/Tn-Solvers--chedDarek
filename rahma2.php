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
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                       
           <select id="wilaya">
                                        <optgroup label="zunis">
		<option>		تونس                          </option>
		<option>		سيدي حسين                     </option>
		<option>		حلق الوادي                    </option>
		<option>		والكرم                        </option>
		<option>		وباردو                        </option>
		<option>		سيدي بوسعيد                   </option>
		<option>		قرطاج                         </option>
		<option>		المرسى                        </option>
        <optgroup label="ariana">
		<option>		أريانة                        </option>
		<option>		التضامن                       </option>
		<option>		لمنيهلة                       </option>
		<option>		، ورواد،                      </option>
		<option>		 وسكرة                        </option>
		<option>		وسيدي ثابت،                   </option>
		<option>		 وقلعة الأندلس                 </option>
		
        <optgroup label="ben arous">
		<option>		بن عروس،                      </option>
		<option>		 والمروج                    </option>
		<option>		 والمحمدية،                   </option>
		<option>		وفوشانة،                      </option>
		<option>		 الخليدية،                    </option>
		<option>		 ونعسان،                      </option>
		<option>		ومرناق،                       </option>
		<option>		 وبومهل البساتين،             </option>
		<option>		 وحمام الأنف،                  </option>
		<option>		 والزهراء،                    </option>
		<option>		 وحمام الشط،                  </option>
		<option>		ومقرين                        </option>
		<option>		ورادس                         </option>
        <optgroup label="manouba">
		<option>		منوبة،                        </option>
		<option>		 والدندان،                    </option>
		<option>		 والمرناقية،                  </option>
		<option>		والبطان،                      </option>
		<option>		وطبربة،                       </option>
		<option>		والجديدة،                     </option>
		<option>		 ودوار هيشر،                  </option>
		<option>		برج العامري                   </option>
		<option>		، والبساتين                   </option>
		<optgroup label="zaghouan">
		<option>		زغوان،                        </option>
		<option>		 والفحص،                      </option>
		<option>		وجبل الوسط،                   </option>
		<option>		 وبئر مشارقة،                 </option>
		<option>		 والعمايم،                    </option>
		<option>		والناظور،                     </option>
		<option>		وصواف                         </option>
		<option>		والزريبة                      </option>
	
    <optgroup label="kairaouan">

		<option>		ملقى التطور،                  </option>
		<option>		 وبلطة بوعوان، و              </option>
		<option>		عين الصبح ناظور، و            </option>
		<option>		القلعة المعدن قرفصان، و       </option>
		<option>		الجواودة و                    </option>
		<option>		الخمايرية.                    </option>
        <optgroup label="sidi bouzid">
		<option>		السلوقية، و                   </option>
		<option>		سيدي إسماعيل، و               </option>
		<option>		تيبار و                       </option>
		<option>		وشتاتة الجميلة.               </option>
		
		<optgroup label="gabes">
		<option>		برقو (الربع)،                 </option>
		<option>		 كسرى،                        </option>
		<option>		 بوعرادة،                     </option>
		<option>		قعفور،                        </option>
		<option>		 الكريب،                      </option>
		<option>		 العروسة،                     </option>
		<option>		الأخوات،                       </option>
		<option>		 سيدي بورويس،                 </option>
		<option>		 مكثر.                        </option>
<optgroup label="monastir">
		<option>                                      </option>
		<option>		الجريصة                       </option>
		<option>		الدهماني                      </option>
		<option>		ساقية سيدي يوسف               </option>
		<option>		السرس                         </option>
		<option>		القصور                        </option>
		<option>		القلعة الخصبة                 </option>
		<option>		قلعة سنان                     </option>
		<option>		الكاف الشرقية                 </option>
		<option>		الكاف الغربية                 </option>
		<option>		نبر                           </option>
		<option>		الطويرف                       </option>
		<option>		البقالطة                      </option>
		<option>		بنبلة                         </option>
		<option>		بني حسان                      </option>
		<option>		جمال                          </option>
		<option>		قصر هلال                       </option>
		<option>		قصيبة المديوني                </option>
		<option>		المكنين                       </option>
		<option>		المنستير                      </option>
		<option>		الوردانين                     </option>
		<option>		الساحلين                      </option>
		<option>		صيادة لمطة بوحجر              </option>
		<option>		طبلبة                         </option>
		<option>		زرمدين                        </option>
		</select>
	
                    </form>
                   <textarea id="textzebi" style="display:none"> dsqjdsghdksjqhdkjsq ghkjdhsqjkdh sqjkhdsqkjh djksqhq jshdlkqsdh</textarea>
                   <textarea id="textzebi" style="display:none"> dsqjdsghdksjqhdkjsq ghkjdhsqjkdh sqjkhdsqkjh djksqhq jshdlkqsdh</textarea>
                   <textarea id="textzebi" style="display:none"> dsqjdsghdksjqhdkjsq ghkjdhsqjkdh sqjkhdsqkjh djksqhq jshdlkqsdh</textarea>
                   <textarea id="textzebi" style="display:none"> dsqjdsghdksjqhdkjsq ghkjdhsqjkdh sqjkhdsqkjh djksqhq jshdlkqsdh</textarea>
                   <textarea id="textzebi" style="display:none"> dsqjdsghdksjqhdkjsq ghkjdhsqjkdh sqjkhdsqkjh djksqhq jshdlkqsdh</textarea>
                   <textarea id="textzebi" style="display:none"> dsqjdsghdksjqhdkjsq ghkjdhsqjkdh sqjkhdsqkjh djksqhq jshdlkqsdh</textarea>

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