<template>
    <div class="row">
        <card-empresa></card-empresa>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5>Coordinador de Sistemas</h5>
                    <hr>
                    <p><b>Ubicación</b>
                        <select v-model="publicacion.lugar">
                            <option value="LAMBAYEQUE">LAMBAYEQUE</option>
                            <option value="TRUJILLO">TRUJILLO</option>
                            <option value="PIURA">PIURA</option>
                            <option value="LIMA">LIMA</option>
                            <option value="CAJAMARCA">CAJAMARCA</option>
                            <option value="TUMBES">TUMBES</option>
                        </select>
                    </p>
                    <p><b>Descripción</b></p>
                    <textarea v-model="publicacion.descripcion" class="form-control mb-2" rows="5">

                    </textarea>
                    <p><b>Requerimientos</b></p>
                    <p>Educación mínima: 
                        <select v-model="publicacion.educacion">
                            <option value="UNIVERSITARIA">UNIVERSITARIA</option>
                            <option value="TECNICA">TECNICA</option>
                            <option value="SECUNDARIA">SECUNDARIA</option>
                        </select>
                    </p>
                    <p>Años de experiencia: 
                        <input type="number" v-model="publicacion.anios">
                    </p>
                    <p>Edad: <input type="text" v-model="publicacion.edad"></p>
                    <p>Conocimientos: <input type="text" v-model="publicacion.conocimiento"></p>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary">PUBLICAR</button>
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
    data() {
        return {
            publicacion:{
                descripcion: "",
                educacion: "UNIVERSITARIA",
                anios: 0,
                edad: "",
                conocimiento: "",
                lugar: "LAMBAYEQUE"
            }
        }
    },
    methods: {
        
    },
}
</script>

