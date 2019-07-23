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
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="">Educación mínima:</label>
                        </div>
                        <div class="col-sm-8">
                            <select v-model="publicacion.educacion" class="form-control">
                                <option value="UNIVERSITARIA">UNIVERSITARIA</option>
                                <option value="TECNICA">TECNICA</option>
                                <option value="SECUNDARIA">SECUNDARIA</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="">
                                Años de experiencia: 
                            </label>
                        </div>
                        <div class="col-sm-8">
                            <input type="number" v-model="publicacion.anios">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="">Edad:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" v-model="publicacion.edad">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            Conocimientos: 
                        </div>
                        <div class="col-sm-8">
                            <input type="text" v-model="publicacion.conocimiento">
                        </div>
                    </div>
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

