<?php

Route::get('ayuda', 'PaginasControler@ayuda');
Route::get('acerca', 'PaginasControler@acerca');

Route::get('index', 'ArticulosController@index');

Route::get('articulos/listar',function()
{
    //Devuelve todos los articulos en un archivo json
    $articulos = App\Articulos::all();
    return $articulos;
}
);

Route::get('articulos/crear',function()
{
    //Inserta datos en la tabla
    $articulo = new App\Articulos; //Crea en el modelo un nuevo articulo
    $articulo-> titulo = 'Noticia 4';
    $articulo-> descripcion= 'Descripcion del artículo';
    $articulo-> autor='Usuario Laravel';
    $articulo->save();

}
);

Route::get('articulos/editar',function()
{
    //Modifica datos en la tabla
    $articulo = App\Articulos::find(2);//Busca en el modelo el articulo 2
    $articulo-> titulo = 'Noticia 22';
    $articulo-> descripcion= 'Descripcion del artículo 22';
    $articulo-> autor='Usuario Laravel 22';
    $articulo->save();

}
);

Route::get('articulos/eliminar',function()
{
    //Modifica datos en la tabla
    $articulo = App\Articulos::find(4);//Busca en el modelo el articulo 2
    $articulo->delete();

}
);


