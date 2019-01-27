var app = angular.module("myApp",["ngRoute"]);

app.config(function($routeProvider){
	$routeProvider
		.when("/Registrar", {
				templateUrl:"partials/CRUD/venta/venta.php",
				controller:"cambioCtrl"
		})
    .when("/Registro-exitoso", {
				templateUrl:"partials/exito-registro.php",
				controller:"cambioCtrl"
		})
        .when("/Consultar", {
				templateUrl:"partials/CRUD/clases/clases.php",
				controller:"cambioCtrl"
		})
    .when("/Clases-ver", {
				templateUrl:"partials/CRUD/clases/ver-clases.php",
				controller:"cambioCtrl"
		})
    .when("/Clases", {
				templateUrl:"partials/CRUD/clases/clases-editar.php",
				controller:"cambioCtrl"
		})
		.when("/Actualizar", {
				templateUrl:"partials/CRUD/actualizar.php",
				controller:"cambioCtrl"
		})
        .when("/Categoria-editar", {
				templateUrl:"partials/CRUD/categoria/categoria-editar.php",
				controller:"cambioCtrl"
		})
        .when("/Categoria", {
				templateUrl:"partials/CRUD/categoria/categoria.php",
				controller:"cambioCtrl"
		})
        .when("/Paquete", {
				templateUrl:"partials/CRUD/paquete/paquete.php",
				controller:"cambioCtrl"
		})
        .when("/Paquete-editar", {
				templateUrl:"partials/CRUD/paquete/paquete-editar.php",
				controller:"cambioCtrl"
		})
       .when("/Alumno", {
				templateUrl:"partials/CRUD/alumno/alumno.php",
				controller:"cambioCtrl"
		})
        .when("/Alumno-editar", {
				templateUrl:"partials/CRUD/alumno/alumno-editar.php",
				controller:"cambioCtrl"
		})
        .when("/Asesor", {
				templateUrl:"partials/CRUD/maestro/asesor.php",
				controller:"cambioCtrl"
		})
        .when("/Asesor-editar", {
				templateUrl:"partials/CRUD/maestro/asesor-editar.php",
				controller:"cambioCtrl"
		})
        .when("/Parentesco-editar", {
				templateUrl:"partials/CRUD/parentesco/parentesco-editar.php",
				controller:"cambioCtrl"
		})
        .when("/Parentesco", {
				templateUrl:"partials/CRUD/parentesco/parentesco.php",
				controller:"cambioCtrl"
		})
        .when("/Exito", {
        templateUrl:"partials/exito.php",
				controller:"cambioCtrl"
		})
        .when("/Falla", {
				templateUrl:"partials/falla.php",
				controller:"cambioCtrl"
		})
        .when("/Password", {
				templateUrl:"partials/password.php",
				controller:"cambioCtrl"
		})
        .when("/Responsable-editar", {
				templateUrl:"partials/CRUD/responsable/responsable-editar.php",
				controller:"cambioCtrl"
		})
        .when("/Responsable", {
				templateUrl:"partials/CRUD/responsable/responsable.php",
				controller:"cambioCtrl"
		})
        .when("/Zona-editar", {
				templateUrl:"partials/CRUD/zona/zona-editar.php",
				controller:"cambioCtrl"
		})
        .when("/Zona", {
				templateUrl:"partials/CRUD/zona/zona.php",
				controller:"cambioCtrl"
		})
        .when("/Materia-editar", {
				templateUrl:"partials/CRUD/materia/materia-editar.php",
				controller:"cambioCtrl"
		})
        .when("/Materia", {
				templateUrl:"partials/CRUD/materia/materia.php",
				controller:"cambioCtrl"
		})
		.otherwise({
				templateUrl:"partials/main.php",
				controller:"mainCtrl"
		});
});
