{include file="header.tpl"}


    <div class="container">
        <div class="row justify-content-center ">
            <input type="number" id="id_posicion" placeholder="Posicion" class="shadow p-1  mx-1 my-1 bg-white rounded">
            <input type="text" id="id_nombre" placeholder="Equipo" class="shadow p-1 mx-1 my-1 bg-white rounded">
            <input type="number" id="id_puntos" placeholder="Puntos" class="shadow p-1 mx-1 my-1 bg-white rounded">



        </div>
        <div class="row justify-content-center">
            <button id="agregar" class="btn btn-outline-dark mx-1 my-1 ">
                Agregar
            </button>
            <button id="vaciar" class="btn btn-outline-dark mx-1 my-1">
                Vaciar
            </button>
            <select name="" id="filtrar">
                <option value="0">FUTBOL 5</option>
                <option value="1">CESPED</option>
            </select>
            <button id="botonFiltro" class="btn btn-outline-dark mx-1 my-1">
                Aplicar
            </button>
        </div>
    </div>



    </div>
    
    <table class="table w-50 mx-auto">
        <thead class="thead-dark">
            <tr id=> 
                <th scope="col">MODELO</th>
                <th scope="col" onclick="">TALLE </th>
                <th scope="col" onclick="">TIPO</th> 
                <th scope="col" onclick="">MARCA</th>
                <th></th>
                <th></th>
            </tr>
            
        </thead>
        <tbody class="table mx-auto" id="tablaPosiciones">
            
                 {foreach from=$botines item=botin}
                            <tr>
                            <td>{$botin->modelo}</td>
                            <td>{$botin->talle}</td>
                            <td>{$botin->tipo}</td> 
                           {foreach from=$marcas item=marca}
                            {if $botin->id eq $marca->id_marca}
                            <td>{$marca->nombre}</td>
                            {/if}
                        {/foreach}
                           <td> <button> <a href="detalles/{$botin->id}"> Detalle </a> </button> </td>          
                            </tr>
                {/foreach}



        </tbody>

    </table>

        <script src="js/js.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
            integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
            crossorigin="anonymous"></script>
</div>

</body>

<script src="js/jstabla.js"></script>
<script src="js/js.js"></script>

</html>