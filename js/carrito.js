
 	class Carrito{
 		constructor() {
		    this.productos = [];
		    this.total = 0;
		}
 		agregar(producto){
 			this.productos.push(producto);
 			this.total += parseInt(producto.subTotal);
 			
 		}
 		eliminar(idProducto){
 			var nuevoarray = [];
	 		this.productos.forEach((producto, indice) => {
	 			//producto.idProducto
	 			//if(id == id)
	 			//array[indice] = algo
	 			//ir agregando nuevoarray.push(producto) a nuevoarray item que no tengan id == id
	 		});
	 		this.productos = nuevoarray;
	 		//array.slice(indexOf(1), 1)
 			//funcion eliminar item de array
 		}

 		actualizar(){
 			//refresca la vista con los productos que quedan en el carro
 		}

 		obtener(){
 			return {
 				productos: this.productos,
 				total: this.total
 			};
 		}
 	}

	var carro = new Carrito();

 	function agregarCarro(idProducto, nombrePr, precioPr){
  		carro.agregar({
  			idProducto: idProducto, 
  			nombrePr: nombrePr,
  			precioPr: precioPr,
  			cantidad: document.getElementById('cantidad-prod-' + idProducto).value,
  			subTotal: precioPr * document.getElementById('cantidad-prod-' + idProducto).value
  		});
  		mostrarCarro();
  	}

 	function eliminarProducto(idProducto){
 		carro.eliminar(idProducto);
 		mostrarCarro();
 	}

 	function mostrarCarro(){
 		var divCarrito = document.getElementById('carrito');
 		divCarrito.innerHTML = '';
 		var productos = carro.obtener().productos;

 		productos.forEach(producto => {
	 		var nuevoDiv = document.createElement("div");
	  		nuevoDiv.innerHTML = 'nombre: ' + producto.nombrePr + ' | precio: ' + producto.precioPr + ' | Cantidad: '+ producto.cantidad +' | subTotal: '+ producto.subTotal +'<a href="#" onclick="eliminarProducto('+ producto.idProducto +')">x</a>';

	  		divCarrito.append(nuevoDiv);
 		});

 		divCarrito.innerHTML += '<div>TOTAL:'+ carro.obtener().total +'</div>';
  		
 	}
