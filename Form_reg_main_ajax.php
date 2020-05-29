

<script type="text/javascript">
							function region_change()
							{
							var xmlhttp= new XMLHttpRequest();
							xmlhttp.open("GET","ajax.php?reg="+document.getElementById("region").value,false);
								xmlhttp.send(null);
								//alert(xmlhttp.responseText);
								document.getElementById("diocese").innerHTML=xmlhttp.responseText;
                                
							}
							function diocese_change(){
							//alert(document.getElementById("diocese").value);
							var xmlhttp= new XMLHttpRequest();
							xmlhttp.open("GET","ajax_a.php?regdd="+document.getElementById("diocese").value,false);
								xmlhttp.send(null);
								//alert(xmlhttp.responseText);
								document.getElementById("deanery").innerHTML=xmlhttp.responseText;
							}
							function deanery_change(){
							//alert(document.getElementById("diocese").value);
							var xmlhttp= new XMLHttpRequest();
							xmlhttp.open("GET","ajax_b.php?paris="+document.getElementById("deanery").value,false);
								xmlhttp.send(null);
								//alert(xmlhttp.responseText);
								document.getElementById("parish").innerHTML=xmlhttp.responseText;
							}
							function parish_change(){
							//alert(document.getElementById("diocese").value);
							var xmlhttp= new XMLHttpRequest();
							xmlhttp.open("GET","ajax_c.php?unty="+document.getElementById("parish").value,false);
								xmlhttp.send(null);
								//alert(xmlhttp.responseText);
								document.getElementById("unit").innerHTML=xmlhttp.responseText;
							}
						</script>



