<template>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-portada">
                </div>
                <div class="card-icon">
                    <img :src="base('empresa.png')" alt="">
                </div>
                <div class="card-body">
                    <h5>{{ empresa.nombre }}</h5>
                    <p>
                        {{ empresa.descripcion }}
                    </p>
                    <p class="resumen"><b>Email:</b> {{ empresa.email }}</p>
                    <p class="resumen"><b>Dirección:</b> {{ empresa.direccion }}</p>
                </div>
            </div>    
        </div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5>Convocatorias de Personal</h5>
                    <hr>                    
                    <div class="col-12 text-center my-3">
                        <button class="btn btn-primary">Nueva Convocatoria</button>
                    </div>
                    <div class="col-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>FECHA</th>
                                    <th>TITULO DE PUBLICACIÓN</th>
                                    <th>ESTADO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3" class="text-center">Ninguna Publicación realizada.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            empresa:{
                email: "diegomf.mendoza@gmail.com",
                ruc: null,
                nombre: "Ninji Fire",
                direccion: "Ecuador 1107 - Lujan",
                descripcion: "Empresa Lambayecana dedicada al desarrollo de Software."
            }
        }
    },
    methods: {
        base(url){
            return public_base+url;
        }
    },
}
</script>