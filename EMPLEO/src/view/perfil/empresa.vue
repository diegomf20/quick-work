<template>
    <div class="row">
        <card-empresa></card-empresa>
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
import cardEmpresa from "../../component/card-empresa.vue";
export default {
    components:{
        cardEmpresa
    },
    methods: {
        
    },
}
</script>