
<template>
    <div class="card" style="width: 100%; margin:auto; padding:10px;">
        <i style="margin:auto; top:10px; color:#7de67d;" class="fas fa-cart-plus fa-7x"></i>
        <div class="card-body">
            <h5 class="card-title">Mejor Proveedor: <h4 style="color:#7de67d;">{{provider}}</h4></h5>
            <p class="card-text">Se han realizado: <u>{{sells}}</u> compras con este proveedor</p>
        </div>
        <div class="card-body">
            <a href="/admin/provider" style="float: right;" class="card-link">Ir a Proveedores</a>
        </div>
    </div>
</template>
<script>
    export default {
        
        data(){
            return {
                sells: 10,
                provider: 'Bayern'
            }
        },
        methods: {
            
        }
    }
</script>
