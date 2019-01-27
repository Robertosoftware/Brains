var app = angular.module("myApp",["ngRoute"]);

app.config(function($routeProvider){
	$routeProvider
		.when("/Registrar", {
				templateUrl:"partials/registrar.php",
				controller:"cambioCtrl"
		})
		.when("/Actualizar", {
				templateUrl:"partials-admin/CRUD/actualizar.php",
				controller:"cambioCtrl"
		})
        .when("/Exito", {
        templateUrl:"partials-admin/exito.php",
				controller:"cambioCtrl"
		})
        .when("/Falla", {
				templateUrl:"partials-admin/falla.php",
				controller:"cambioCtrl"
		})
        .when("/Categoria-editar", {
				templateUrl:"partials-admin/CRUD/categoria/categoria-editar.php",
				controller:"cambioCtrl"
		})
        .when("/Categoria", {
				templateUrl:"partials-admin/CRUD/categoria/categoria.php",
				controller:"cambioCtrl"
		})
        .when("/Paquete", {
				templateUrl:"partials-admin/CRUD/paquete/paquete.php",
				controller:"cambioCtrl"
		})
        .when("/Paquete-editar", {
				templateUrl:"partials-admin/CRUD/paquete/paquete-editar.php",
				controller:"cambioCtrl"
		})
       .when("/Alumno", {
				templateUrl:"partials-admin/CRUD/alumno/alumno.php",
				controller:"cambioCtrl"
		})
        .when("/Alumno-editar", {
				templateUrl:"partials-admin/CRUD/alumno/alumno-editar.php",
				controller:"cambioCtrl"
		})
        .when("/Asesor", {
				templateUrl:"partials-admin/CRUD/maestro/asesor.php",
				controller:"cambioCtrl"
		})
       .when("/Password-editar", {
				templateUrl:"partials-admin/CRUD/password/password-editar.php",
				controller:"cambioCtrl"
		})
        .when("/Password", {
				templateUrl:"partials-admin/CRUD/password/password.php",
				controller:"cambioCtrl"
		})
        .when("/Asesor-editar", {
				templateUrl:"partials-admin/CRUD/maestro/asesor-editar.php",
				controller:"cambioCtrl"
		})
        .when("/Parentesco-editar", {
				templateUrl:"partials-admin/CRUD/parentesco/parentesco-editar.php",
				controller:"cambioCtrl"
		})
        .when("/Parentesco", {
				templateUrl:"partials-admin/CRUD/parentesco/parentesco.php",
				controller:"cambioCtrl"
		})
        .when("/Responsable-editar", {
				templateUrl:"partials-admin/CRUD/responsable/responsable-editar.php",
				controller:"cambioCtrl"
		})
        .when("/Responsable", {
				templateUrl:"partials-admin/CRUD/responsable/responsable.php",
				controller:"cambioCtrl"
		})
        .when("/Zona-editar", {
				templateUrl:"partials-admin/CRUD/zona/zona-editar.php",
				controller:"cambioCtrl"
		})
        .when("/Zona", {
				templateUrl:"partials-admin/CRUD/zona/zona.php",
				controller:"cambioCtrl"
		})
        .when("/Materia-editar", {
				templateUrl:"partials-admin/CRUD/materia/materia-editar.php",
				controller:"cambioCtrl"
		})
        .when("/Materia", {
				templateUrl:"partials-admin/CRUD/materia/materia.php",
				controller:"cambioCtrl"
		})
		.otherwise({
				templateUrl:"partials-admin/main-admin.php",
				controller:"mainCtrl"
		});
});
