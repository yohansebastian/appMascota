<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<header>
<header>
		<nav class="navbar navbar-expand-lg navbar-dark fondoPrincipal">
			<div class="container-fluid">
				<a class="navbar-brand fuente" href="#">
					<i class="fas fa-paw"></i>
					Animalandia
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="">Registro Productos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Registro Animales</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
</header>


<body>
 
<h2> Registro de Productos</h2>

<div class="container">

       <form class="form-control" action="<?=site_url('/productos/registro/nuevo', 'Producto::registrar')?>", method="POST" class=mt-4>
       
       <p> <label for="Producto">  Producto </label>
           <br>
           <input type="text" name="producto" id="nombre" maxlength="200" placeholder="Digite el nombre del producto"required>
                 </p>
       <p>
           <label for="Foto">   Fotografia del producto </label>
              <br>
              <input class="form-control" type="text" name="foto" id="foto" maxlength="100"required>             
          </p>
          <p>
           <label for="precio"> Precio unidad </label>
           <br>
           <input type="number" name="precio" id="precio"  placeholder="digite el precio unitario"required>                         
       </p>      
<p>
                 <label for="Descripcion">Descripcion del producto</label>
                      <br>
                      <textarea name="descripcion" cols="60" rows="5" 
                       placeholde="Digite aqui la descripcion del producto" required></textarea>
                        </p>           
        
           
               <label for="Animal"> Tipo de Animal </label>
               <select name="tipo" required>
                   <option value="1" seleccione> Perro </option>
                   <option value="2"> gato</option>
                   <option value="3"> ave</option>
                   <option value="4">Caballo</option>
                   <option value="5"> Reptil</option>
               </select>

               <p>
                 <button type="submit"name="Registro">Registrar Producto</button>
               </p>          
       
   </form> 

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html>