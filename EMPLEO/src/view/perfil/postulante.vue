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