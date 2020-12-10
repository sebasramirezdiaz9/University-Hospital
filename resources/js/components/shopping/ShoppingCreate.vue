<template>
   <div>
        <div class="text-right">
            <button type="button" class="btn btn-primary btn-rounded m-1" @click="$modal.show('create-shopping')">
                Registrar compra
            </button>
        </div>
        <modal name="create-shopping" height="auto" width="50%" @before-open="beforeOpen" :scrollable="true">
                <alv-form :action="route('shopping.store')" method="post" id="createShopping" :spinner="true" @after-done="afterDone" autocomplete="off" :data-object="shopping" ref="alv-form" >
                    <div class="modal-header">
                        <h5 class="modal-title"><strong>Crear Receta</strong></h5>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close" @click="$modal.hide('create-shopping')">
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                  <div class="row">
                          <div class="col-md-12">
                              <div class="alert alert-info" role="alert">
                               Datos de la Compra
                                </div>
                          </div>
                      </div>
                       <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Proveedor</label>
                             <v-select v-model="provider"  :options="provider.map(i=>({ label:i.razon_social, code:i.id }))" name="provedor_id"></v-select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Folio</label>
                            <input type="text" class="form-control" id="folio" name="folio" v-model="shopping.folio" >
                        </div>
                    </div>
                </div><hr>
                       <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Fecha de Compra</label>
                            <input type="date" class="form-control" id="fecha_compra" name="fecha_compra" v-model="shopping.fecha_compra" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Fecha de Pago</label>
                            <input type="date" class="form-control" id="fecha_pago" name="fecha_pago" v-model="shopping.fecha_pago" >
                        </div>
                    </div>
                </div><hr>
                <div v-for="(medicine,i) in shopping.medicines" :key="i">
                     <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Medicamento</label>
                             <v-select
                                v-model="medicament[i]"
                                :name="'shopping.' + i + '.medicamento_id'" id="medicamento_id"
                                 @input="onChangeMedicine(medicament[i],i)"
                                 :options="medicines.map(i=>({ label:i.activo + ' ' +i.presentacion, code:i.id }))"></v-select>
                        </div>
                    </div><br>
                    <div class="col-md-3">
                        <div class="form-group">
                                <button @click="addMedicine()" title="Agregar tarea" id="button" type="button" class="btn btn-outline-success btn-icon mt-4">
                                    <i class="fas fa-plus"></i>
                                </button>
                        </div>
                    
                    </div><br>
                     <div class="col-md-3">
                       <div class="form-group">
                                <button v-if="shopping.medicines.length > 1" @click="removeMedicine(i)" title="Agregar tarea" id="button" type="button" class="btn btn-outline-danger btn-icon mt-4">
                                    <i class="fas fa-trash"></i>
                                </button>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Cantidad</label>
                            <input type="number" :name="'shopping.' + i + '.cantidad'" v-model="shopping.medicines[i].cantidad" class="form-control" id="">
                        </div>
                    </div>
                </div>
                </div>
                    <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Subtotal</label>
                            <input type="number" class="form-control" id="subtotal" name="subtotal" v-model="shopping.subtotal" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Total</label>
                            <input type="number" class="form-control" id="total" name="total" v-model="shopping.total" >
                        </div>
                    </div>
                </div><hr>
                    </div>        
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </alv-form>
            </modal>
    </div>
</template>
<script>
   export default {
        
        data(){
            return {
                medicines: [],
                medicament: [],
                shopping:
                {
                   fecha_compra: '',
                   fecha_pago:'',
                   proveedor_id:'',
                   folio:'',
                   subtotal:'',
                   total:'',
                   medicines: [{
                       medicine_id:'',
                       cantidad: ''

                   }]
                },
                provider: 0,
                provider: []
            }
        },
        created()
        {
            this.getProvider();
            this.getMedicines();
        },
        methods: {
             afterDone(response){
               if(response)
                 {
                    //this.showToastr({type: 'success', title: 'Exito', message: 'El usuario se creó correctamente'});
                    window.location = this.route('shopping.view');
                 }
            },
            addMedicine()
            {
                this.shopping.medicines.push({medicine_id: '', cantidad: ''});
            },
            removeMedicine(index)
            {
                this.shopping.medicines.splice(index,1);
            },
            onChangeMedicine(medicine, index){
                this.shopping.medicines[index].medicine_id = medicine.code;
            },
            beforeOpen()
            {
                
                 this.shopping.fecha_compra='',
                 this.shopping.fecha_pago='',
                 this.shopping.proveedor_id='',
                 this.shopping.folio='',
                 this.shopping.subtotal='',
                 this.shopping.total='',

                this.shopping.medicines = [{
                       medicine_id:'',
                       cantidad: ''
                   }];
            },
             getProvider()
            {
                axios.get(this.$route('provider.all')).then((response) =>
                {
                    this.provider = response.data;
                });
            },
            getMedicines()
            {
                axios.get(this.$route('medicines.all')).then((response) =>
                {
                    this.medicines = response.data;
                });
            },
        },
          watch:{
            provider()
            {
                if(this.provider != null)
                {
                    this.shopping.provider_id = this.provider.code;
                }
            },
        }
    }
</script>
