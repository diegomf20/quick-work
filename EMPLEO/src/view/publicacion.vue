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
                    <h5>TOTTUS</h5>
                    <p>
                        Empresa dedicada a la venta de insumos alimenticios para el Hogar, deco - hogar y cuidado personal.
                    </p>
                    <p class="resumen"><b>URL:</b> https://tottus.com/</p>
                    <p class="resumen"><b>Dirección:</b> Luis Gonzales #640</p>
                </div>
            </div>    
        </div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5>Coordinador de Sistemas</h5>
                    <h6>Lambayeque</h6>
                    <hr>
                    <p><b>Descripción</b></p>
                    <p>
                        REQUISITOS <br>
                        - Conocimiento de Windows, ofimática y utilitarios.<br>
                        - Diagnóstico de problemas con software y hardware.<br>
                        - Dominio en ensamblaje y reparación de computadoras<br>
                        - Diagnóstico, mantenimiento preventivo y/o correctivo de PCs <br>
                        - Instalación y configuración de SO, programas y utilitarios <br>
                        - Conocimiento en administración de servicios de dominio.<br>
                        - Manejo y configuración de redes (cableadas e inalámbricas).<br>
                        - Manejo de BD - SQL y MYSQL<br>
                        - Conocimiento en Programación POO.<br>
                        - Manejo de herramientas de diseño (Photoshop)<br>
                        - Conocimiento de Diseño Web HTM5 y CSS3<br>
                    </p>
                    <p><b>Requerimientos</b></p>
                    <p>Educación mínima: Universitario</p>
                    <p>Años de experiencia: 3</p>
                    <p>Edad: entre 25 y 40 años</p>
                    <p>Conocimientos: Windows, SQL Server, C#, CSS, HTML, PHP, MySql</p>
                    <p>Disponibilidad de viajar: No</p>
                    <p>Disponibilidad de cambio de residencia: No</p>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary">POSTULAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    methods: {
        base(url){
            return public_base+url;
        }
    },
}
</script>