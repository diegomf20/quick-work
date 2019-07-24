<template>
    <div class="text-center">
        <div class="brand">
            <img :src="base('logo.png')" alt="">
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <router-link to="/registrar/empresa" class="nav-link">
                            Publica Empleo
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/registrar/postulante" class="nav-link">
                            Subir CV
                        </router-link>
                    </li>
                </ul>
                <ul class="navbar-nav" style="margin-left: auto;">
                    <li class="nav-item">
                        <router-link v-if="logeado" to="/Perfil" class="nav-link">
                            Perfil
                        </router-link>
                        <router-link v-else to="/login" class="nav-link">
                            Login
                        </router-link>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>
<script>
export default {
    data() {
        return {
            logeado: (local.getItem('tipo_cuenta')===null)? false : true
        }
    },
    mounted() {
        var t=this;
        bus.$on('emit-logear', function (value) {
            t.logeado=value;
        })
    },  
    methods: {
        base(url){
            return public_base+url;
        }
    },
    
}
</script>
