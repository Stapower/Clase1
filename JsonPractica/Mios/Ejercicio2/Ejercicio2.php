<script type="text/javascript">
	var producto = [{"CodigoBarra" : 00001, "Nombre" : "Manzana", "Precio" : 100},
				   {"CodigoBarra"  : 00002, "Nombre" : "Pera",    "Precio" : 15},
				   {"CodigoBarra"  : 00003, "Nombre" : "Banana",  "Precio" : 10}];

for(var i = 0 ; i<3; i++)
{
	  alert(producto[i].CodigoBarra + "\n" + producto[i]["Nombre"] + "\n" + producto[i].Precio);
}


//alert(producto[0].CodigoBarra +"\n"+ producto[1].Nombre +"\n"+ producto[2].Precio);

</script>