
<template>
    <div class="card" style="width: 100%; margin:auto; padding:10px;">
        <i style="margin:auto; top:10px; color:#ff8d8d;" class="fas fa-tablets fa-7x"></i>
        <div class="card-body">
            <h5 class="card-title">Medicamento con menos stock en inventario:  <h4 style="color:#ff8d8d;">{{array_result[0].medicamento}}</h4></h5>
            <p class="card-text">El medicamento cuenta con una cantidad en inventario de: <u>{{array_result[0].cantidad}}</u></p>
        </div>
        <div class="card-body">
            <a href="#" style="float: right;" class="card-link">Ir a Inventario</a>
        </div>
    </div>
</template>
<script>
    export default {
        
        data(){
            return {
                array_result: [{}]
            }
        },
        created()
        {
            this.getMinStock();
        },                       
        methods: {
            getMinStock()
            {
                axios.get(this.$route('min.stock')).then((response) =>
                {
                    this.array_result = response.data;
                });
            }
        }
    }
</script>
